$(function () {
    
    if ($('[scroll-to]').length) {
        $('[scroll-to]').on('click', function (e) {
            e.preventDefault();
            const id = $(this).attr('scroll-to');
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - 50
            }, 1000);

        });
    }

    $('input[type=tel]').each((i, input) => {
        let cleave = new Cleave(input, {
            numericOnly: true,
            noImmediatePrefix: true,
            prefix: '+1',
            blocks: [2, 3, 3, 2, 2],
            delimiters: [' (', ') ', '-', '-'],
        });
        $(input).on('blur', () => {
            if ($('input[type=tel]')[0].value === '+1 (') {
                $('input[type=tel]')[0].value = ''
            }
        });
    });

    $('.play-btn').on('click', function () {
        $('.video-wrapper').toggleClass('active');
        $('video').trigger('play');
    });
    $('.video-wrapper .close-btn').on('click', function () {
        $('.video-wrapper').toggleClass('active');
        $('video').trigger('pause');
    });

    $('.accord-head').on('click', function () {
        const content = $(this).next('.accord-cont');
        let scrollHeight = content[0].scrollHeight;
        if (content.innerHeight() === 0) {
            $(this).parent().addClass('active');
            content.animate({
                maxHeight: scrollHeight
            }, 300);
        } else {
            $(this).parent().removeClass('active');
            content.animate({
                maxHeight: 0
            }, 300)
        }
    });

    function modalOnSubmit(modal) {
        $(modal).addClass('active');
        if ($(modal).find($('.modal-message')).length) {
            $(modal).find($('.modal-inner')).addClass('inactive');
            $(modal).find($('.modal-message')).addClass('active');
            setTimeout(function () {
                closeModal(modal);
                $(modal).find($('.modal-message')).removeClass('active');
                setTimeout(function () {
                    $(modal).find($('.modal-inner')).removeClass('inactive')
                }, 1000);
            }, 3000);
        } else {
            closeModal(modal);
        }
    }

    $('.modal').click(function (event) {
        if (!$(event.target).closest(".modal > *").length && !$(event.target).closest('.modal-btn').length) {
            closeModal('.modal');
        }
    });

    $('.modal__close-btn').click(function () {
        closeModal($(this).parent().parent());
    });

    function openModal(modal) {
        $(modal).addClass('active')
    }

    function closeModal(modal) {
        $(modal).removeClass('active');
        if ($(modal).hasClass('callback')) {
            $(modal).find('form').trigger('reset');
        }
    }
    
    $('.modal-btn').on('click', () => {
        openModal($('.modal.callback'))
    });

    $('form').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.target);
        form[0].reset();
        modalOnSubmit($('.modal.active'));
    });

    if ($('*[data-tab]').length) {
        $('[data-tab]').on('click', function () {
            if ($(`[tab=${$(this).attr('data-tab')}]`).length && !$(this).hasClass('disabled')) {
                $(this).closest('.tabs').find('.active').removeClass('active');
                $(this).addClass('active');
                $(`.tabs-wrapper.${$(this).closest('.tabs').attr('data-wrapper')} > .tab-active`)
                  .removeClass('tab-active');
                $(`[tab=${$(this).attr('data-tab')}]`).addClass('tab-active')
            }
        })
    }

    if ($('.case-slider').length) {
        $('.case-slider').each((i, container) => {
            const tabsSlider = new Swiper(container, {
                updateOnWindowResize: true,
                gap: 30,
                navigation: {
                    nextEl: $(container).find('.swiper-button-next')[0],
                    prevEl: $(container).find('.swiper-button-prev')[0],
                },
                pagination: {
                    el: $(container).find('.swiper-pagination')[0],
                    clickable: true
                },
            });
        })
    }

    if ($('.news-slider').length) {
        const newsSlider = new Swiper($('.news-slider')[0], {
            spaceBetween: 30,
            navigation: {
                nextEl: $('.news-slider').find('.swiper-button-next')[0],
                prevEl: $('.news-slider').find('.swiper-button-prev')[0],
            },
        });
    }

    const partners = new Swiper($('.partners-slider')[0], {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: true,
        loop: true,
        breakpoints: {
            640: {
                slidesPerView: 3
            },
            1000: {
                slidesPerView: 4
            },
            1400: {
                slidesPerView: 6
            }
        }
    });

    $.fn.isInViewport = function () {
        let elementTop = $(this).offset().top;
        let elementBottom = elementTop + $(this).outerHeight();
        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    $(window).scroll(function () {
        if ($('.animation-3').isInViewport()) {
            $('.animation-3').addClass('animate')
        } else if ($('.animation-4').isInViewport()) {
            $('.animation-4').addClass('animate')
        } else if ($('.animation-5').isInViewport()) {
            $('.animation-5').addClass('animate')
        }
    });

    $('.menu-btn').on('click', () => {
        $('header nav').show();
        $(document).on('click', (e) => {
            if (!$(e.target).closest('header nav').length && !$(e.target).closest('.menu-btn').length) {
                $('header nav').hide();
            }
        })
    });

    $('.close-menu').click(function () {
        $('header nav').hide();
    });
    if (window.innerWidth <= 1000) {
        $('header a').on('click', function () {
            $('header nav').hide();
        });
        $('.block.bg.a2 .list .item').on('click', (e) => {
            $(e.target).closest('.item').toggleClass('hov');
            $('html, body').animate({
                scrollTop: $(e.target).closest('.item').offset().top - 105
            }, 1000);
        });
    }

});