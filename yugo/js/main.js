$(() => {
    if ($('[scroll-to]').length) {
        $('[scroll-to]').on('click', function () {

            const id = $(this).attr('scroll-to');
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top
            }, 1000);

        });
    }
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: $('.swiper').find('.swiper-button-next'),
            prevEl: $('.swiper').find('.swiper-button-prev'),
        },
        slidesPerView: 7,
        spaceBetween: 24,
        breakpoints: {
            1000: {
                slidesPerView: 3,
                spaceBetween: 17,
            }
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

    function modalHandler(modal, btn) {
        $(modal).click(function (event) {
            if (!$(event.target).closest(".modal *").length && !$(event.target).closest(btn).length) {
                closeModal(modal)
            }
        });
        openModal(modal);
    }

    $('.modal__close-btn').click(function () {
        closeModal($(this).parent().parent());
    });

    function openModal(modal) {
        $(modal).addClass('active')
    }

    function closeModal(modal) {
        $(modal).removeClass('active');
    }

    $('form').on('submit', (e) => {
        e.preventDefault();
        let form = $(e.target).closest('form');
        form[0].reset();
        modalOnSubmit($(e.target).closest('.modal'));
    });


    $('.register').on('click', function () {
        modalHandler($('.m-register'), $(this));
    });

    $('.ask').on('click', function () {
        modalHandler($('.m-ask'), $(this));
    });
    $('.case').on('click', function () {
        modalHandler($('.m-case'), $(this));
    });
    $('.download').on('click', function () {
        modalHandler($('.m-download'), $(this));
    });

    $('.agreement').click(function () {
        $('.modal-agreement').show();
    });

    $('.personal').click(function () {
        $('.modal-personal').show();
    });

    $('.ma .close-btn').click((e) => {
        $(e.target).closest('.ma').hide()
    });

    $('.advantages .item').on('click', (e) => {
        $(e.target).closest('.item').toggleClass('active')
    });

    $('.play-btn').on('click', function () {
        $('.video-wrapper').toggleClass('active');
        $('video').trigger('play');
    });

    $('.video-wrapper .close-btn').on('click', function () {
        $('.video-wrapper').toggleClass('active');
        $('video').trigger('pause');
    });

    $('.tab').on('click', function (e) {

        $('.tab.active').removeClass('active');
        $(e.target).closest('.tab').addClass('active');
        let tab = $('.tab.active').attr('data-tab');

        let parent = $('#cases');
        parent.hasClass('ver1') ? parent.removeClass('ver1').addClass('ver2')
          : parent.removeClass('ver2').addClass('ver1');

        $('.data').removeClass('active');
        $(`[data-content=${tab}]`).addClass('active');

        if ($('.tab.active').attr('data-tab') === '2') {
            $('p.v1').hide();
            $('p.v2').show();
        } else {
            $('p.v2').hide();
            $('p.v1').show();
        }
    });

    $('input[name=phone]').mask("+1 (999) 999-99-99");

});