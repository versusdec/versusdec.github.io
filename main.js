$(function () {
  $('.menu-btn').on('click', function () {
    $([this, '.header nav']).toggleClass('active')
  })
  
  $('.header nav a').on('click', function () {
    $('.menu-btn, .header nav').removeClass('active')
  })
  
  const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    // autoplay: true,
    spaceBetween: 30
  });
  
  const phoneEl = document.querySelector("#phone");
  const iti = window.intlTelInput(phoneEl, {
    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/js/utils.js"),
    initialCountry: 'it',
  });
  
  $('form').on('submit', function (e) {
    e.preventDefault();
    
    let isValid = true;
    
    const name = $("input[name=name]");
    if (name.val().trim() === "") {
      name.addClass("error");
      isValid = false;
    } else {
      name.removeClass("error");
    }
    
    const cog = $("input[name=cog]");
    if (cog.val().trim() === "") {
      cog.addClass("error");
      isValid = false;
    } else {
      cog.removeClass("error");
    }
    
    const email = $("input[name=email]");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.val().trim())) {
      email.addClass("error");
      isValid = false;
    } else {
      email.removeClass("error");
    }
    
    if (!iti.isValidNumber()) {
      isValid = false;
      $(phoneEl).addClass('error')
    }
    
    if (isValid) {
      
      let formData = {
        name: name.val().trim(),
        cog: cog.val().trim(),
        email: email.val().trim(),
        phone: iti.getNumber()
      };
      
      /*$.ajax({
        type: "POST",
        url: "bla-bla",
        data: formData,
        success: function (res) {
          $("form")[0].reset()
        },
        error: function () {
        
        }
      });*/
    }
  });
  
  $("form input").on("input", function () {
    $(this).removeClass("error");
  });
  
  $("#period").ionRangeSlider({
    skin: "round",
    min: 1,
    max: 12,
    from: 1,
    grid: true,
    postfix: ' month'
  });
  
  $("#sum").ionRangeSlider({
    skin: "round",
    min: 300,
    max: 15000,
    from: 800,
    step: 100,
    prettify_enabled: true,
    grid: true,
    postfix: ' €'
  });
  
})
