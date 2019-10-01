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

    onclickActivate($('.side-menu-button'), 'active', $('.side-menu-block'), 'active');

    $(window).resize(() => {
        /*
                normalizeHeight(itemsToNormilize);
        */
        if ($('header').length) {
            header.fixOnTop();
        }
    });

    $('.catalog-load-more').click(function (e) {
        e.preventDefault();
        var type = $(this).attr('data-type'),
            current = $(this).attr('data-current'),
            limit = $(this).attr('data-limit'),
            target = $(this).attr('data-target'),
            category = $(this).attr('data-category'),
            news_for = $(this).attr('data-news-for'),
            company = $(this).attr('data-company'),
            container = $(this).attr('data-container'),
            _this = $(this);
        if (type && current && limit && target){
            var next = parseInt(current)+1,
                fd = new FormData();
            fd.append('page', next);
            fd.append('limit',limit);
            if (category){
                fd.append('category', category);
            }
            if (news_for){
                fd.append('news_for', news_for);
            }
            if (company){
                fd.append('company', company);
            }
            if (container){
                container = container+' ';
            } else {
                container = '';
            }
            $(container+'.filter_parameter').each(function (ind, el) {
                if ($(this).attr('name')) {
                    fd.append( $(this).attr('name'), $(this).val() );
                }
            });
            $.ajax({
                url: '/ajax/'+type+'/',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(res){
                    if (res){
                        $(target).append(res);
                        _this.attr('data-current', next);
                    } else {
                        _this.addClass('hidden');
                    }
                }
            });
        }
    });

    $('.filter_parameter').change(function (e) {
        e.preventDefault();
        var type = $(this).attr('data-type'),
            limit = $(this).attr('data-limit'),
            target = $(this).attr('data-target'),
            category = $(this).attr('data-category'),
            news_for = $(this).attr('data-news-for'),
            company = $(this).attr('data-company'),
            container = $(this).attr('data-container');
        if (type && limit && target){
            var fd = new FormData();
            fd.append('page',1);
            fd.append('limit', limit);
            if (category){
                fd.append('category', category);
            }
            if (news_for){
                fd.append('news_for', news_for);
            }
            if (company){
                fd.append('company', company);
            }
            if (container){
                container = container+' ';
            } else {
                container = '';
            }
            $(container+'.filter_parameter').each(function (ind, el) {
                if ($(this).attr('name')) {
                    fd.append( $(this).attr('name'), $(this).val() );
                }
            });
            $.ajax({
                url: '/ajax/'+type+'/',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(res){
                    if (res){
                        $(target).html(res);
                        $(container+'.catalog-load-more').attr('data-current', '1').removeClass('hidden');
                    }
                }
            });
        }
    });

});
