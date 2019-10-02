$(function () {

  const catalogSwiper = new Swiper('.catalog-slider', {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });

  const carsSlider = new Swiper('.cars-slider', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  })

});