$(function () {

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
            if (!$(event.target).closest(".modal > *").length && !$(event.target).closest(btn).length) {
                closeModal(modal);
            }
        });
        openModal(modal);
        if (modal.hasClass('quiz')) {
            quizHandler(modal)
        }
    }

    function quizHandler(modal) {
        const container = modal.find('.quiz-wrapper');
        const width = container.parent().width();
        container.width(width * $('.quiz-slide').length);
        const next = modal.find('#next-quiz');
        const prev = modal.find('#prev-quiz');
        const submit = modal.find('#submit');
        const end = 0 - container.width() + width;
        const slides = container.find('.quiz-slide');
        let currentSlide = 0;
        let position = 0;
        let speed = 100;
        submit.addClass('hid');
        next.removeClass('hid');
        !prev.attr('disabled') ? prev.attr('disabled', true) : void (0);
        const nextSlide = () => {
            prev.attr('disabled') ? prev.attr('disabled', false) : void (0);
            if (position !== end) {
                container.closest('.modal-inner').animate({
                    scrollTop: container.offset().top
                }, 100);
                container.animate({
                    'left': position - width
                }, speed, function () {
                    position -= width;
                    currentSlide += 1;
                    container.height($(slides[currentSlide]).height());
                });
                setTimeout(function () {
                    if (Math.floor(position) === Math.floor(end)) {
                        next.addClass('hid');
                        submit.removeClass('hid');
                    }
                }, speed + 100)
            }
        };

        const prevSlide = () => {
            if (position !== 0) {
                container.closest('.modal-inner').animate({
                    scrollTop: container.offset().top
                }, 100);
                container.animate({
                    'left': position + width
                }, speed, function () {
                    position += width;
                    currentSlide -= 1;
                    container.height($(slides[currentSlide]).height());
                });
                setTimeout(function () {
                    if (position !== end) {
                        submit.addClass('hid');
                        next.removeClass('hid');
                    }
                    position === 0 ? prev.attr('disabled', true) : void (0);
                }, speed + 100)
            }
        };

        container.css('left', 0);
        $('.quiz-slide').width(width);

        next.unbind().on('click', function () {
            nextSlide()
        });

        prev.unbind().on('click', function () {
            prevSlide()
        })
    }

    function openModal(modal) {
        $(modal).addClass('active')
    }

    function closeModal(modal) {
        $(modal).removeClass('active');

    }

    if ($('.callback-btn').length) {
        $('.callback-btn').on('click', function () {
            modalHandler($('.callback'), $(this));
        })
    }
    if ($('.collapse').length) {
        $('.collapse').on('click', function () {

            $(this).hasClass('toggled') ? $(this).text('Hide map').removeClass('toggled')
                .parent().next().removeClass('collapsed')
              : $(this).text('Show map').addClass('toggled').parent().next().addClass('collapsed');

        })
    }

    if ($('.pick').length) {
        $('.pick').on('click', function () {
            modalHandler($('.quiz'), $(this));
        })
    }

    $('.modal__close-btn').click(function () {
        closeModal($(this).parent().parent());
    });

    $('input[type=tel]').mask("+1 (999) 999-9999");

    $('form[method=post]:not(.callback-form)').each(function () {
        $(this).on('submit', function (e) {
            e.preventDefault()
        }).validate({
            submitHandler: function (form) {
                let f = $(form);
                f.addClass('progress');
                let data = f.serialize();
                f[0].reset();
                modalOnSubmit(f.closest('.modal'));
                // ajax
            }
        });
    });

    $('form.filters').on('submit', function (e) {
        e.preventDefault()
    });

    $('.swiper').each(function () {
        const pagination = $(this).hasClass('pagination') && {
            el: $(this).find('.swiper-pagination')[0],
            clickable: true
        };
        const autoplay = $(this).hasClass('autoplay') && {
            delay: 5000
        };

        let mySwiper = !$(this).hasClass('list-slider-container') ? new Swiper(this, {
            loop: true,
            autoplay: autoplay,
            navigation: {
                nextEl: $(this).find('.swiper-button-next')[0],
                prevEl: $(this).find('.swiper-button-prev')[0],
            },
            pagination: pagination,
        }) : new Swiper(this, {
            loop: true,
            autoplay: false,
            spaceBetween: 30,
            slidesPerView: 1,
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                960: {
                    slidesPerView: 3
                },

            },
            navigation: {
                nextEl: '.swiper-button-next-list',
                prevEl: '.swiper-button-prev-list',
            },
            pagination: pagination,
        })
    });


    if ($('[scroll-to]').length) {
        $('[scroll-to]').on('click', function () {

            const id = $(this).attr('scroll-to');
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top
            }, 1000);

        });
    }

    if ($('.header-menu-btn').length) {
        $('.header-menu-btn, header .modal__close-btn').on('click', function () {
            $('header').toggleClass('active');
        });
    }

    if ($('.fixed-btn').length) {
        let int = setInterval(function () {
            $('.fixed-btn').toggleClass('normal').toggleClass('call');
        }, 5000);
    }

    if ($('#show-time').length) {
        $('#show-time').on('click', function () {
            $('.datetime-block').addClass('active').prev('p').hide();
            $(this).hide();
            $('form.callback-form').find('time').hide();
        });
    }

    $('form.callback-form').on('submit', function (e) {
        e.preventDefault()
    }).validate({
        submitHandler: function (form) {
            let f = $(form);
            f[0].reset();
            if (!$('.datetime-block').hasClass('active')) {
                const timer = $('form.callback-form').find('time');
                $('.modal.callback').addClass('timer-on');
                let s = 23;
                let m = 99;
                let x = setInterval(function () {
                    s < 10 ? m < 10 ? timer.html('00:0' + s + ':0' + m) :
                      timer.html('00:0' + s + ':' + m) :
                      m < 10 ? timer.html('00:' + s + ':0' + m) :
                        timer.html('00:' + s + ':' + m);
                    m--;
                    if (m === 0) {
                        m = 99;
                        s--;
                    }
                    if (s === 0) {
                        clearInterval(x);
                        timer.html("00:00:00");
                        s = 23;
                        m = 99;
                        $('.modal.callback h3.timon').html('Expect a call')
                    }
                }, 10);
            } else {
                modalOnSubmit($('.callback'))
            }
        }
    });

});