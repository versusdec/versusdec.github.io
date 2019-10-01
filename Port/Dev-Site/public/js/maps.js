$(function () {
    var me = $('#map');
    if (me.length) {
        var c = [55.85428738, 37.65130519],
            dc = me.attr('data-center'),
            pm = me.attr('data-placemark'),
            z = me.attr('data-zoom'),
            is_company = me.hasClass('company-map');
        if (dc) {
            c = [parseFloat(dc.split(',')[0]), parseFloat(dc.split(',')[1])];
        }
        if (pm) {
            pm = [parseFloat(pm.split(',')[0]), parseFloat(pm.split(',')[1])];
        }
        if (z) {
            z = parseInt(z);
        }
        if (typeof (ymaps) != "undefined") {
            ymaps.ready(init);
        }
        function init() {
            var myMap = new ymaps.Map('map', {
                center: c,
                zoom: z ? z : 14
            });
            if (is_company) {
                //company page
                if (pm) {
                    myMap.geoObjects.add(new ymaps.Placemark(pm, {
                        balloonContent: ''
                    }, {
                        preset: 'islands#redIcon'
                    }));
                    myMap.setCenter(pm);
                }
            } else {
                //main page
                var clusterer = new ymaps.Clusterer({
                    preset: 'islands#redClusterIcons',
                    groupByCoordinates: false,
                    clusterDisableClickZoom: true,
                    clusterHideIconOnBalloonOpen: false,
                    geoObjectHideIconOnBalloonOpen: false
                }), companies = [], data = {};

                loadCompanies();

                myMap.geoObjects.add(clusterer);

                function addPlace(element_id, address, caption, coordinates) {
                    var Placemark = new ymaps.Placemark([
                        parseFloat(coordinates.split(',')[0]),
                        parseFloat(coordinates.split(',')[1])
                    ], {
                        iconContent: caption,
                        balloonContent: ''
                    }, {
                        preset: 'islands#redStretchyIcon'
                    });
                    myMap.geoObjects.add(Placemark);
                    companies[element_id] = Placemark;
                    clusterer.add(Placemark);
                }
                
                function loadCompanies() {
                    $.post('/request/', {act:'get',subject:'companies'}, function (res) {
                        if (res) {
                            try {
                                var d = JSON.parse(res);
                                if (!d.error) {
                                    $.each(d.items, function (i, el) {
                                        if (el.coordinates) {
                                            data[el.id] = el;
                                            addPlace(el.id, el.address, el.h1, el.coordinates);
                                        }
                                    });
                                } else {
                                    console.log(d.error);
                                }
                            }catch (ex) {
                                console.log(ex.message);
                            }
                        }
                    });
                }
                function reloadCompanies() {
                    clusterer.removeAll();
                    for (var i = 0; i < companies.length; i++) {
                        myMap.geoObjects.remove(companies[i]);
                    }
                    $.each(data, function (i, el) {
                        $('ul.companies-list input[type=checkbox]:checked').each(function () {
                            if ($(this).data('id') === el.category_id) {
                                addPlace(el.id, el.address, el.h1, el.coordinates);
                            }
                        });
                    });
                }
                $(document).on('change', 'ul.companies-list input[type=checkbox]', function (e) {
                    e.preventDefault();
                    reloadCompanies();
                });
            }
        }
    }
});