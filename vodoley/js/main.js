$(function () {
  
  var aboutSlider = new Swiper('.about-slider', {
    navigation: {
      nextEl: '.swiper-button-next'
    },
    loop: true,
  });
  var certSlider = new Swiper('.cert-slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    loop: true,
    centeredSlides: true,
    spaceBetween: 130
  });
  $('.menu').on('click', function () {
    $('header nav').toggleClass('active');
  });
  
  if ($('.video').length) {
    const videos = $('.video');
    videos.each(function (i, e) {
      $(e).find('.play-btn').on('click', function () {
        play($(e))
      })
    });
    
    function play(video) {
      const iframe = video.find('iframe');
      const src = iframe.data('src');
      video.find('.controls').css('z-index', '-10');
      iframe.attr('src', src);
    }
  }
  
  if ($('.callback-btn').length) {
    $('.callback-btn').on('click', function () {
      modalHandler($('.callback'), $(this));
    })
  }
  
  $('.modal__close-btn').click(function () {
    closeModal($(this).parent().parent());
  });
  
  $('form').on('submit', function (e) {
    e.preventDefault();
    var f = $(this);
    var v = '';
    if (f.hasClass('callback-form')) {
      f[0].reset();
      modalOnSubmit($('.callback'));
      
    } else if (f.hasClass('tech-form')) {
      const formMessage = f.find('.modal-message');
      formMessage.addClass('active');
      setTimeout(function () {
        $(formMessage).removeClass('active');
      }, 3000)
    }
  });
  
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
    $(modal).removeClass('active');
  }
  
  function modalOnSubmit(modal) {
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
  
  
});

$(document).ready(function () {
  if ($('.gallery').length) {
    let slider = $('.gallery .slider');
    let slides = $('.gallery').find('.slide');
    const nextBtn = $('.gallery .slider-wrapper').find('.swiper-button-next');
    const prevBtn = $('.gallery .slider-wrapper').find('.swiper-button-prev');
    let active;
    if (slides.length < 2) $('.gallery').css('display', 'none');
    if (slides.length === 2) {
      $('.gallery').addClass('small');
      $(slides[0]).addClass('active');
      active = $(slides[0]);
      $(nextBtn).on('click', function () {
        next();
      });
      $(slides).on('swipeleft', function () {
        next();
      });
      $(prevBtn).on('click', function () {
        prev();
      });
      $(slides).on('swiperight', function () {
        prev();
      });
      
      function next() {
        if ($(active).next().length) {
          $(slides[0]).removeClass('active').next().addClass('active');
          active = $(slides[1]);
        } else {
          $(slides[1]).removeClass('active').prev().addClass('active');
          active = $(slides[0]);
        }
      }
      
      function prev() {
        if ($(active).prev().length) {
          $(slides[1]).removeClass('active').prev().addClass('active');
          active = $(slides[0]);
        } else {
          $(slides[0]).removeClass('active').next().addClass('active');
          active = $(slides[1]);
        }
      }
      
    }
    if (3 <= slides.length && slides.length < 7) {
      $(nextBtn).on('click', function () {
        handler($(slides[2]));
      });
      $(prevBtn).on('click', function () {
        handler($(slides[0]));
      });
      
      function handler(slide) {
        if (slide.hasClass('active')) return 0;
        
        if (slide.hasClass('next')) {
          $(active).removeClass('active').addClass('prev');
          slide[0].className = 'slide active';
          active = slide;
          if ($(slides).length > 3) {
            $(slides[0]).removeClass('prev').addClass('hid').appendTo($(slider));
            $(slides[3]).removeClass('hid').addClass('next last')
          }
          slides = $('.gallery').find('.slide');
          $(active).on('swipeleft', function () {
            handler($(slides[2]));
            
          });
          $(active).on('swiperight', function () {
            handler($(slides[0]));
          });
        }
        if (slide.hasClass('prev')) {
          $(active).removeClass('active').addClass('next last');
          slide[0].className = 'slide active';
          active = slide;
          if ($(slides).length > 3) {
            $(slides[$(slides).length - 1]).removeClass('hid').addClass('prev').prependTo($(slider));
            $(slides[2]).removeClass('next last').addClass('hid')
          }
          slides = $('.gallery').find('.slide');
          $(active).on('swipeleft', function () {
            handler($(slides[2]));
            
          });
          $(active).on('swiperight', function () {
            handler($(slides[0]));
          });
        }
        
      }
      
      $(slides).each(function (i, slide) {
        if (i === 0) {
          $(slide).addClass('prev')
        } else if (i === 1) {
          $(slide).addClass('active')
        } else if (i === 2) {
          $(slide).addClass('next last')
        } else if (i > 2) {
          $(slide).addClass('hid')
        }
        active = $(slider).find('.active');
        $(active).on('swipeleft', function () {
          handler($(slides[2]));
          
        });
        $(active).on('swiperight', function () {
          handler($(slides[0]));
        });
        $(slide).on('click', function () {
          handler($(this))
        })
      });
    } else if (slides.length >= 7) {
      $(slides).each(function (i, slide) {
        if (i < 3) {
          $(slide).addClass('prev')
        } else if (i === 3) {
          $(slide).addClass('active')
        } else if (i > 3 && i < 7) {
          $(slide).addClass('next')
        } else if (i >= 7) {
          $(slide).addClass('hid')
        }
        active = $(slider).find('.active');
        
        $(slide).on('click', function () {
          if ($(this).hasClass('active')) return 0;
          let index = $(slides).index(this);
          if ($(this).hasClass('next')) {
            for (let i = 0; i < index - 3; i++) {
              if (slides.length === 7) {
                $(slides[i]).removeClass('prev').addClass('next').appendTo($(slider));
              } else {
                $(slides[i]).removeClass('prev').addClass('hid').appendTo($(slider));
                $(slides[7]).removeClass('hid').addClass('next');
                slides = $('.gallery').find('.slide');
              }
              if (i) {
                if (slides.length === 7) {
                  $(slides[index - i]).removeClass('next').addClass('prev');
                } else {
                  $(slides[2]).removeClass('next').addClass('prev');
                }
              }
            }
            slides = $('.gallery').find('.slide');
            $(active).removeClass('active').addClass('prev');
          } else if ($(this).hasClass('prev')) {
            $(active).removeClass('active').addClass('next');
            for (let i = 6; i > index + 3; i--) {
              if (slides.length === 7) {
                $(slides[i - index]).removeClass('next').addClass('prev').prependTo($(slider));
              } else {
                $(slides[slides.length - 1]).removeClass('hid').addClass('prev').prependTo($(slider));
                $(slides[6]).removeClass('next').addClass('hid');
                slides = $('.gallery').find('.slide');
              }
              if (i < 6) {
                if (slides.length === 7) {
                  $(slides[i - 3]).removeClass('prev').addClass('next')
                } else {
                  $(slides[4]).removeClass('prev').addClass('next')
                }
              }
            }
            slides = $('.gallery').find('.slide');
          }
          active = $(this);
          this.className = 'slide active';
        });
      });
      $(nextBtn).on('click', function () {
        nextSlide();
      });
      $(prevBtn).on('click', function () {
        prevSlide();
      });
      $(active).on('swipeleft', function () {
        nextSlide();
      });
      $(active).on('swiperight', function () {
        prevSlide();
      })
      
    }
    
    function nextSlide() {
      let next = $(slider).find('.active').next();
      let first = $(slides[0]);
      let lastVisible = $(slides[7]);
      $(active).removeClass('active').addClass('prev');
      next[0].className = 'slide active';
      active = next;
      $(active).on('swipeleft', nextSlide);
      $(active).on('swiperight', prevSlide);
      if (slides.length > 7) {
        first[0].className = 'slide hid';
        lastVisible[0].className = 'slide next'
      } else first[0].className = 'slide next';
      $(first).appendTo($(slider));
      slides = $('.gallery').find('.slide');
    }
    
    function prevSlide() {
      let prev = $(slider).find('.active').prev();
      let last = $(slides[slides.length - 1]);
      let firstInvisible;
      
      $(active).removeClass('active').addClass('next');
      prev[0].className = 'slide active';
      active = prev;
      $(active).on('swipeleft', nextSlide);
      $(active).on('swiperight', prevSlide);
      if (slides.length > 7) {
        firstInvisible = $(slides[6]);
        last[0].className = 'slide prev';
        firstInvisible[0].className = 'slide hid'
      } else last[0].className = 'slide prev';
      $(last).prependTo($(slider));
      slides = $('.gallery').find('.slide');
    }
  }
});
