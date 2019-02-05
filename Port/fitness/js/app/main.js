function include(uri, callback) {

    var script = document.createElement("script");
    script.src = uri;
    script.onload = callback;
    document.head.appendChild(script);

}

include('./js/vendors/jquery-3.3.1.min.js', function () {
    if ($('.header_menu_btn').length) {
        $('.header_menu_btn').click(function () {
            $('.header_menu').toggleClass('activate_header_menu');
        })
    }

    if ($('.team_member').length && $(document).width() >= 619) {
        (function () {
            var maxHeight = 0;

            $('.team_member').each(function () {
                var height = $(this).innerHeight();
                if (height > maxHeight) {
                    maxHeight = height;
                }
            });

            $('.team_member').css('min-height', maxHeight /*+ 265*/);
        })()
    }

    $(".feedback_form").on('submit', function (e) {
        e.preventDefault();
        $.post('/feedback', $(this).serialize(), function (resp) {
            console.log(resp);

            $('.sign_up_box').css({
                'visibility': 'hidden',
                'opacity': '0'
            });
            $('.submit-message').css({
                'visibility': 'visible',
                'opacity': '1'
            });
            setTimeout(function () {
                closeMore();
            }, 3000)
        })
    });

    if ($('.slider_wrapper').length) {
        var slides = document.querySelectorAll('.slide');
        var timer = null;
        var slideIndex = 0;

        for (var i = 0; i < slides.length; i++) {

            const target = document.querySelector('.slider_dots');
            var dot = document.createElement('span');
            dot.classList.add('dot');
            target.appendChild(dot);
        }

        var dots = $('.dot');
        $(dots).each(function (i) {
            $(this).click(function () {
                currentSlide(i);
            })
        });
        showSlides();

        function currentSlide(n) {
            clearTimeout(timer);
            timer = null;
            slideIndex = n;
            showSlides();
        }

        function showSlides() {
            var i;
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].classList.remove('dot_active');
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].classList.add('dot_active');
            if (slides.length > 1) {
                timer = setTimeout(showSlides, 4000)
            }
        }
    }
    if ($('#map').length) {
        include('https://api-maps.yandex.ru/2.1/?apikey=0a95a14f-e5c8-40d3-b5a5-cab0ab71a8bd&lang=ru_RU', function () {
            var myMap;
            var myPlacemark;

            ymaps.ready(init);

            function init() {
                myMap = new ymaps.Map('map', {
                    center: [59.950109, 30.388033],
                    zoom: 17
                }, {
                    searchControlProvider: 'yandex#search'
                });
                myPlacemark = new ymaps.Placemark([59.950109, 30.387853]);
                myMap.geoObjects.add(myPlacemark);
                myMap.behaviors.disable('drag');
            }
        });

    }

    if ($('.gallery_grid').length && $(window).width() < 768) {
        include('./js/vendors/swiper.min.js', function () {
            const slider = new Swiper('.swiper-container', {
                direction: 'horizontal',
                loop: true,
                speed: 400,
                autoplay: {
                    delay: 2000
                }
            })
        })
    }
    if ($('.feedback_slider').length) {
        include('./js/vendors/swiper.min.js', function fSlider() {
            const fbSlider = new Swiper('.feedback_slider', {
                direction: 'horizontal',
                loop: true,
                speed: 400,
                autoplay: {
                    delay: 4000
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination'
                }
            })
        })
    }
    /*
        if ($('.tabs_wrapper').length) {
            var btns = document.querySelectorAll('.tab');
            var x = document.querySelectorAll('.tab_content');
            const emptyUl ='\n' +
                '                                                    ';
            for (var i = 0; i < x.length; i++) {
                huyanction(x[i], i)
            }

            function huyanction(el, index) {
                var tab = el.querySelector('ul');
                if (tab.textContent === emptyUl) {
                    var buttonForDel = btns[$(el).index()];
                    $(buttonForDel).remove();
                    $(el).remove();
                }
            };


            btns = document.querySelectorAll('.tab');
            x = document.querySelectorAll('.tab_content');
            btns[0].classList.add('active');
            x[0].classList.add('active');

            function someName(btn, index, arr) {
                btn.addEventListener('click', function openTab() {
                    for (var i = 0; i < arr.length; i++) {
                        arr[i].classList.remove('active');
                    }
                    btn.classList.add('active');
                    open(index)
                })
            }

            for (var i = 0; i < btns.length; i++) {
                someName(btns[i], i, btns)
            }


            function open(tab) {

                for (var i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[tab].style.display = "block";
            }
        }
    */
    if ($('.tab_content').length) {
        const emptyUl = '\n' +
            '                                                    ';
        const heading = $('.tab_content').find('div');
        $(heading).each(function (i) {
            if ($(heading[i]).next().text() === emptyUl) {
                $(heading[i]).remove();
            }
        })

    }

    function openMore() {
        $('.sign_up_box, .p_shadow').css({
            'visibility': 'visible',
            'opacity': '1'
        });
    }

    function closeMore() {
        $('.p_shadow, .sign_up_box, .submit-message').css({
            'visibility': 'hidden',
            'opacity': '0'
        });
    }

    if ($('.we_offer_wrapper').length) {
        const buttons = $('.grid_more');
        $(buttons).each(function (i) {
            $(this).click(function () {
                $('.we_offer_item').removeClass('flipped');
                var card = $(this).parents().eq(2);
                var back = $(this).parents().eq(1).next();
                var textContent = $(back).find('.we_offer_item__text_content');
                //console.log(textContent);
                getPopContent(i, textContent);
                $(card).addClass('flipped');
                $(back).on('click', function () {
                    $(card).removeClass('flipped')
                })
            });
        });

        $(document).click(function (event) {
            /*if (!$(event.target).closest(".p_wrapper,.grid_more, .sign_up_box").length) {
                //closeMore();
            }*/
        });

        function getPopContent(index, target) {
            ajaxGet('../../offer.json', function (resp) {
                //$('.p_block_title').text(resp[index].title);
                $(target).text(resp[index].content);
            });
        }
    }
    /**/
    if ($('.sign_up').length) {
        $('.sign_up').on('click', function () {
            console.log('im here');
            openMore()
        })
    }

    $('.p_shadow').click(function () {
        closeMore()
    });

    /*---------Lazy Load-------*/
    if ($('[data-src]').attr('data-src')) {
        include('./js/vendors/jquery.lazy.min.js', function () {
            $('[data-src]').Lazy({
                effect: 'fadeIn',
                effectTime: 1000,
                visibleOnly: true
            });
        })
    }
    ;
    /*---------END Lazy Load----------*/


    if ($('.team_profile').length) {
        let index = window.location.hash.substr(1);
        let img;
        ajaxGet('members.json', function (resp) {
            $('[data-get="name"]').text(resp[0].name);
            $('[data-get="img"]').attr('src', resp[0].img)
        });
    }


});

function closeOutside(button, window, callback) {
    $(document).click(function (event) {
        if (!$(event.target).closest(".window, .button").length) {

        }
    });
}

function ajaxGet(url, responseCallback) {
    const xhr = new XMLHttpRequest;
    xhr.open('GET', url);
    xhr.send();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                responseCallback(JSON.parse(xhr.response));
            } else {
                throw Error(xhr.responseText);
            }
        }
    }
}

