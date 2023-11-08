$(function () {
  var landSlider = new Swiper('.land-slider', {
    loop: true,
    autoplay: {
      delay: 3000
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  let appSlider = new Swiper('.app-slider', {
    loop: true,
    autoplay: false,
  });
  let stepsSlider = new Swiper('.steps-slider', {
    loop: true,
    autoplay: false,
    pagination: {
      el: $('.steps-slider').next(),
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      }
    }
  });
  appSlider.controller.control = stepsSlider;
  stepsSlider.controller.control = appSlider;
  if ($('.accord').length) {
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

    })
  }
  $('.menu-btn').on('click', function () {
    const content = $(this).next('ul');
    let scrollHeight = content[0].scrollHeight;
    if (content.innerHeight() === 0) {
      $(this).find('span').addClass('close');
      content.animate({
        maxHeight: scrollHeight * 2
      }, 300);
    } else {
      $(this).find('span').removeClass('close');
      content.animate({
        maxHeight: 0
      }, 300)
    }
  });

  $('header nav a').on('click', function (e) {
    const id = $(this).attr('href');
    const target = $(document).find(id);
    if (target.length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 300);
    }

  })
});