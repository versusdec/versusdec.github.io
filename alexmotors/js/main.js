$(function () {

  const catalogSwiper = new Swiper('.catalog-slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 40,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      769: {
        slidesPerView: 2
      },
      1001: {
        slidesPerView: 3
      }
    }
  });

  const carsSlider = new Swiper('.cars-slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 40,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      769: {
        slidesPerView: 2
      }
    }
  });

  $('.menu-btn').on('click', function () {
    const $menu = $('header nav');
    const $btn = $(this);
    $menu.toggleClass('active');
    $(document).on('click', function (event) {
      if (!$(event.target).closest($menu).length && !$(event.target).closest($btn).length) {
        $menu.removeClass('active')
      }
    })
  });
});