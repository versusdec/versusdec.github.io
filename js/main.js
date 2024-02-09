$(function () {
  const swiper = new Swiper('.swiper', {
    spaceBetween: 17,
    autoplay: true,
    slidesPerView: 1,
    loop: true,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1024: {
        slidesPerView: 4
      },
       768: {
         slidesPerView: 2
       }
    }
  });
  
  $('.modal-btn').on('click', ()=>{
    $('.modal').addClass('active')
  })
  
  $('.modal .close').on('click', () => {
    $('.modal').removeClass('active')
  })
  
  $("#phone").intlTelInput({
    initialCountry: 'ua'
  });
  
  $('form input').on('keyup', e => {
    const phone = $('form input[name=phone]')[0].value;
    const name = $('form input[name=name]')[0].value;
    if(phone.length > 10 && name !== '') $('form button[type=submit]').attr('disabled', false)
    else $('form button[type=submit]').attr('disabled', true)
  })
  
  $('.menu-btn').on('click', ()=>{
    $('body')[0].toggleAttribute('data-menu')
  })
  
})