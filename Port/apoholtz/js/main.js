function includejs(uri, callback) {
    var script = document.createElement("script");
    script.src = uri;
    script.onload = callback;
    document.head.appendChild(script);
}

function includecss(uri, callback) {
    var css = document.createElement("link");
    css.rel = "stylesheet";
    css.type = "text/css";
    css.href = uri;
    css.onload = callback;
    document.head.appendChild(css);
}

function modalHandler(modal) {
    $(modal).click(function (event) {
        if (!$(event.target).closest(".modal > *").length) {
            closeModal(modal)
        }
    });
    openModal(modal);
    /*
    $('.modal__close-btn').click(function () {
        closeModal(modal)
    });
    */
    /*
    $(modal).submit(function (e) {
        e.preventDefault();
        modalOnSubmit(modal)
    })
    */
}

function openModal(modal) {
    $(modal).addClass('active')
}

function closeModal(modal) {
    $(modal).removeClass('active');
}

function modalOnSubmit(modal) {
    if ($(modal).find($('.modal__message')).length) {
        $(modal).find($('.modal-inner')).addClass('inactive');
        $(modal).find($('.modal__message')).addClass('active');
        setTimeout(function () {
            closeModal(modal);
            $(modal).find($('.modal__message')).removeClass('active');
            setTimeout(function () {
                $(modal).find($('.modal-inner')).removeClass('inactive')
            }, 1000);
        }, 3000);
    }
    else {
        closeModal(modal);
    }
}

function normalizeHeights(itemToNormilize){
    var maxHeight = 0;
    $(itemToNormilize).each(function () {
        var height = $(this).innerHeight();
        if (height > maxHeight) {
            maxHeight = height;
        }
    });
    $(itemToNormilize).css('min-height', maxHeight);
}

includejs('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', function () {
    $(function () {
        $('form.registration').on('submit', function (e) {
            e.preventDefault();
            var f = $(this);
            var v = '';
            if (f.hasClass('callback_form')) {
                v = 'call_back_order';
                let data = f.serialize();
                data += '&source='+v;
                $.ajax({
                    url: '/callback',
                    data: data,
                    method: 'POST',
                    success: function (res) {
                        if (res && res === 'true') {
                            f[0].reset();
                            modalOnSubmit($('.callback'));
                            yaCounterXXXXXXXX.reachGoal(v);
                            dataLayer.push({'event': v});
                        }
                    }
                });
            } else if (f.hasClass('form_main') || f.hasClass('products_form') || f.hasClass('contacts_form')) {
                if (f.hasClass('contacts_form')){
                    v = 'form_contact';
                } else {
                    v = 'form_bottom';
                }
                let data = f.serialize();
                data += '&source='+v;
                $.ajax({
                    url: '/callback',
                    data: data,
                    method: 'POST',
                    success: function (res) {
                        if (res && res === 'true') {
                            f[0].reset();
                            yaCounterXXXXXXXX.reachGoal(v);
                            dataLayer.push({'event': v});
                        }
                    }
                });
            } else if (f.hasClass('order_form')) {
                v = 'product_order';
                let m = f.parent().parent();
                var data = f.serialize();
                data += '&product=' + m.find('.item_desc_wrapp .item_name').text();
                data += '&quantity=1';
                data += '&source='+v;
                $.ajax({
                    url: '/quickorder',
                    data: data,
                    method: 'POST',
                    success: function (res) {
                        if (res && res === 'true') {
                            f[0].reset();
                            modalOnSubmit($('.order'));
                            yaCounterXXXXXXXX.reachGoal(v);
                            dataLayer.push({'event': v});
                        }
                    }
                });
            }
        });
        $('.modal__close-btn').click(function () {
            closeModal($(this).parent().parent());
        });
    });
    $(window).on('load', function () {
        $('.menu_icon').click(function () {
            $('.menu_icon').toggleClass('open');
            showMenu()

        });

        function showMenu() {
            if ($('nav').css('left') !== '0px') {
                $('nav').css('left', '0');
            }
            else {
                $('nav').css('left', '150%');
            }
        }

        if ($('.header_search').length) {
            $('.search_lens').click(function () {
                $('.search_input').toggleClass('active');
            })
        }
        if ($('.swiper-container').length) {
            includejs('/js/vendor/swiper.min.js', function () {
                var mySwiper = new Swiper('.slider_container', {
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                        delay: 4000
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: 'true'
                    }
                });

                function initSliders(){
                    var spv = 'auto';
                    if ($(window).width() < 730) {
                        spv = 1;
                    }
                    sertSwiper = new Swiper('.sert_slider', {
                        direction: 'horizontal',
                        /*loop: true,*/
                        slidesPerView: spv,
                        navigation: {
                            nextEl: document.querySelector('.sert_slider').nextElementSibling.nextElementSibling,
                            prevEl: document.querySelector('.sert_slider').nextElementSibling
                        }
                    });
                    partSwiper = new Swiper('.part_slider', {
                        direction: 'horizontal',
                        /*loop: true,*/
                        setWrapperSize: true,
                        slidesPerView: spv,
                        navigation: {
                            nextEl: document.querySelector('.part_slider').nextElementSibling.nextElementSibling,
                            prevEl: document.querySelector('.part_slider').nextElementSibling
                        }
                    });
                }
                initSliders();
                $(window).on('resize', function(){
                    sertSwiper.destroy();
                    partSwiper.destroy();
                    initSliders();
                })
            })
        }

        if ($('#map').length) {

            mapboxgl.accessToken = 'pk.eyJ1IjoidmVyc3VzZGVjIiwiYSI6ImNqbWFmOXNyNjE4Z3ozcG50ZHBxOGtpcXcifQ.mOS1ZyEAFJkxvs2FpcGc2g';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v10',
                center: [13.398700, 52.503776],
                zoom: 16
            });
            var geojson = {
                type: 'FeatureCollection',
                features: [{
                    type: 'Feature',
                    geometry: {
                        type: 'Point',
                        coordinates: [13.398200, 52.503776]
                    },
                    properties: {
                        title: 'Mapbox',
                        description: 'Washington, D.C.'
                    }
                }]
            };
            geojson.features.forEach(function (marker) {

                // create a HTML element for each feature
                var el = document.createElement('div');
                el.className = 'marker';

                // make a marker for each feature and add to the map
                new mapboxgl.Marker(el)
                    .setLngLat(marker.geometry.coordinates)
                    .addTo(map);
            });
        }
        if ($('.reg_form').length) {
            var form = $('.registration');
            $(form).each(function () {
                var inputs = $(this).find($('.required_field')).next();
                $(inputs).each(function () {
                    $(this).keyup(function () {
                        $(this).prev().addClass('filled');
                        if ($(this).val() === '') {
                            $(this).prev().removeClass('filled');
                        }
                    })
                });
                if ($(this).find($('.reg_form_message')).length) {
                    $(this).submit(function (e) {
                        e.preventDefault();
                        var formMessage = $(this).find($('.reg_form_message'));
                        $(formMessage).addClass('active');
                        setTimeout(function () {
                            $(formMessage).removeClass('active');
                        }, 3000)
                    })
                }
            });
        }

        $('.callback_btn').click(function () {
            modalHandler($('.callback'))
        });

        $('.order_btn').click(function () {
            let id = $(this).attr('data-product-id');
            let name = $(this).attr('data-product-name');
            let img = $(this).attr('data-product-img');
            let m = $('.modal.order');
            m.find('.modal-inner .item_desc_wrapp .item_name').html(name);
            m.find('.modal-inner .item_desc_wrapp .item_desc').html('');
            m.find('.modal-inner .item_desc_image > img').attr('src', img);
            modalHandler(m);
        })

    });
    if($('.item_menu').length){
        var itemsToNormalize = [$('.item_name'), $('.item_full-name')];
        $(itemsToNormalize).each(function(){
            normalizeHeights($(this));
        })
    }





});






