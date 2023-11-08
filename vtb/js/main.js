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

  $('.modal__close-btn').click(function () {
    closeModal($(this).parent().parent());
  });

  $('form').on('submit', (e)=>{
    e.preventDefault()
  })
  
  $('input[type=tel]').mask("+1 (999) 999-9999");

  let topSlider = new Swiper($('#top-slider'), {
    loop: true,
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    height: 600
  });
  let phoneSlider = new Swiper($('#top-slider-phone'), {
    loop: true,
  });

  topSlider.controller.control = phoneSlider;
  phoneSlider.controller.control = topSlider;

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


});