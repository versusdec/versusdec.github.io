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
        closeModal(modal)
      }
    });
    openModal(modal);
  }
  
  function openModal(modal) {
    $(modal).addClass('active')
  }
  
  function closeModal(modal) {
    $(modal).find('form input[name=lawyer_id]').val('');
    $(modal).removeClass('active');
  }
  
  function normalizeHeights(itemToNormalize) {
    var maxHeight = 0;
    $(itemToNormalize).each(function () {
      var height = $(this).innerHeight();
      if (height > maxHeight) {
        maxHeight = height;
      }
    });
    $(itemToNormalize).css('min-height', maxHeight);
  }
  
  let top = $('header').innerHeight() + 10;
  $('main').css('margin-top', top);
  $(window).resize(function () {
    $('main').css('margin-top', top)
  });
  $(window).scroll(function () {
    top = $('header').innerHeight();
    let scroll = $(window).scrollTop();
    if (scroll > 0) {
      $("header").addClass("fixed");
    } else {
      $("header").removeClass("fixed");
    }
  });
  
  if ($('.swiper-container').length) {
    $('.swiper-container').each(function (i, slider) {
      if ($(slider).hasClass('top-slider')) {
        var topSlider = new Swiper(slider, {
          loop: true,
          autoplay: {
            delay: 8000,
          },
          autoHeight: false,
          slidesPerView: 1,
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: $(slider).parent().find('.swiper-button-next'),
            prevEl: $(slider).parent().find('.swiper-button-prev'),
          }
        });
      } else if ($(slider).hasClass('img-slider')) {
        var imgSlider = new Swiper(slider, {
          loop: true,
          autoplay: $(slider).hasClass('no-autoplay') ? false : {
            delay: 8000
          },
          spaceBetween: 10,
          slidesPerView: $(slider).hasClass('img-slider__opv') ? 1 : 3,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
            768: {
              slidesPerView: 1,
            }
          }
        });
      } else if ($(slider).hasClass('text-slider')) {
        textSlider = new Swiper(slider, {
          loop: true,
          autoplay: {
            delay: 8000,
          },
          spaceBetween: 10,
          slidesPerView: $(slider).hasClass('img-slider__opv') ? 1 : 3,
          navigation: {
            nextEl: $(slider).parent().find('.swiper-button-next'),
            prevEl: $(slider).parent().find('.swiper-button-prev'),
          },
          breakpoints: {
            768: {
              slidesPerView: 1,
            }
          }
        });
        let headings = $(slider).find('h3');
        let text = $(slider).find('.text-content');
        
        normalizeHeights(headings);
        normalizeHeights(text);
      } else if ($(slider).hasClass('awards-slider')) {
        var awardsSlider = new Swiper(slider, {
          loop: true,
          autoplay: {
            delay: 8000,
          },
          spaceBetween: 120,
          slidesPerView: 4,
          navigation: {
            nextEl: $(slider).parent().find('.swiper-button-next'),
            prevEl: $(slider).parent().find('.swiper-button-prev'),
          },
          breakpoints: {
            1000: {
              slidesPerView: 3,
              spaceBetween: 30
            },
            425: {
              slidesPerView: 1
            }
          }
        });
      }
    })
  }
  
  if ($('.callback-btn').length) {
    $('.callback-btn').on('click', function () {
      let lawyer = $(this).attr('data-lawyer');
      if (lawyer !== undefined) {
        $('.callback form input[name=lawyer_id]').val(lawyer);
      }
      modalHandler($('.callback'), $(this));
    })
  }
  
  if ($('.custom-file-input').length) {
    $('.custom-file-input').find('input').change(function () {
      if ($(this).val() !== '') $(this).next().text($(this)[0].files[0].name);
      
      else $(this).prev().text('Выберите файлы');
    });
  }
  
  $('.modal__close-btn').click(function () {
    closeModal($(this).parent().parent());
  });
  
  $('.toggle-menu').on('click', function () {
    const $menu = $('header nav ul');
    const $btn = $(this);
    $menu.toggleClass('active');
    $(document).on('click', function (event) {
      if (!$(event.target).closest($menu).length && !$(event.target).closest($btn).length) {
        $menu.removeClass('active')
      }
    })
  });
  
  $('input[type=tel]').mask("+1 (999) 999-9999");
  
  $('form[method=post]').each(function () {
    $(this).submit(function (e) {
      e.preventDefault()
    }).validate({
      submitHandler: function (form) {
        modalOnSubmit($('.thankyou'));
      }
    });
  });
  
  if ($('.news-nav').length) {
    $('.news-nav__item').on('click', function () {
      if ($(this).attr('data-id')) {
        const id = $(this).attr('data-id');
        $('html, body').animate({
          scrollTop: $('#' + id).offset().top - top
        }, 1000);
      }
    });
  }
  
  if ($('.subservice').length) {
    $('.subservice > h3').on('click', function () {
      const content = $(this).next('.subservice-content');
      let scrollHeight = content[0].scrollHeight;
      if (content.innerHeight() === 0) {
        $(this).parent().addClass('active');
        content.animate({
          maxHeight: scrollHeight
        }, 300);
        $('html, body').animate({
          scrollTop: $(this).offset().top - top
        }, 300);
      } else {
        $(this).parent().removeClass('active');
        content.animate({
          maxHeight: 0
        }, 300)
      }
      
    })
  }
  
  if ($('.heights').length) {
    normalizeHeights($('.heights'))
  }
  
})
;