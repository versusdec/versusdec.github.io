import {onclickActivate} from "./scripts/onclickActivate.js";
import * as header from "../components/header/header.component.js";
import {equalizeHeight} from "./scripts/equalizeHeights.js";
import {tabsManager} from "../components/tabs/tabs.component.js";
import {changeView} from "../components/catalog/catalogHandler.component.js";

const itemsToEqualize = [$('.company-name'), $('.company-description'),
    $('.catalog-item__name')/*, $('.catalog-item__short-desc')*/];

$(document).ready(() => {
    if ($('header').length) {
        onclickActivate($('.menu-button'), 'active', $('.device-wrapper'),
            'show-menu');

        header.fixOnTop();
    }

    if ($('.companies-list-wrapper').length) {
        onclickActivate($('.expand-companies'), 'activated',
            $('.companies-list-wrapper'), 'expanded')
    }

    /*----- Yandex Map -----*/

    /* if($('#map').length){
         ymaps.ready(init);
         function init(){
             // Создание карты.
             var myMap = new ymaps.Map("map", {
                 // Координаты центра карты.
                 // Порядок по умолчанию: «широта, долгота».
                 // Чтобы не определять координаты центра карты вручную,
                 // воспользуйтесь инструментом Определение координат.
                 center: [55.76, 37.64],
                 // Уровень масштабирования. Допустимые значения:
                 // от 0 (весь мир) до 19.
                 zoom: 7
             });
         }
     }*/

    /*----- END Yandex Map -----*/

    /*----- Swiper -----*/

    if ($('.swiper-container').length) {
        let companySwiper = new Swiper('.company-slider', {
            // Optional parameters
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        let galleryThumbs = new Swiper('.gallery-thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            breakpoints: {
                960: {
                    direction: 'horizontal'
                }
            }
        });
        $(window).on("resize orientationchange", function () {
            const swiperWrapper = $(galleryThumbs.$el);
            if ($(window).width() >= 960) {
                swiperWrapper.removeClass("swiper-container-horizontal").addClass("swiper-container-vertical");
            } else {
                swiperWrapper.removeClass("swiper-container-vertical").addClass("swiper-container-horizontal");
            }
            galleryThumbs.update();
        });
        let catalogItemSlider = new Swiper('.catalog-item-slider', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });

    }

    /*----- END Swiper -----*/

    /*----- Custom Select -----*/

    if ($('.custom-select').length) {
        let customSelect = $('.custom-select').customSelect();
    }

    /*----- END Custom Select -----*/

    /*----- Tabs -----*/

    if ($('.tabs-wrapper').length) {
        $('.tabs-wrapper').each(function () {
            tabsManager($(this))
        })
    }

    /*----- END Tabs -----*/

    if ($('.catalog-handler__change-view-wrapper').length) {
        changeView();
    }


    if ($('.side-menu').length) {
        if ($('.side-menu > li > .sub-menu').length) {
            $('.side-menu > li > .sub-menu').parent().on('click', function () {
                $(this).find('.sub-menu').toggleClass('active');
            })
        }
    }

    /*----- Smooth scroll to anchors -----*/

    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            let hash = this.hash;
            let targetOffset = $(hash).offset().top;
            $('html, body').animate({
                scrollTop: targetOffset
            }, 400, function () {
                window.location.hash = hash
            });
        }
    });

    /*----- END Smooth scroll to anchors -----*/

    onclickActivate($('.side-menu-button'), 'active', $('.side-menu-block'), 'active')

    $(window).resize(() => {
        /*
                normalizeHeight(itemsToNormilize);
        */
        if ($('header').length) {
            header.fixOnTop();
        }
    })

});

function test() {
    console.log('test')
}