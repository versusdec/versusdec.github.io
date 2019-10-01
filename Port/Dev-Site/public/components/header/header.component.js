/*export function toggleMenu() {
    $('.device-wrapper').toggleClass('show-menu');
}*/

export function fixOnTop() {
        if ($(window).width() <= 960) {
            $(window).scroll(() => {
                if (window.pageYOffset > 0) {
                    fix()
                } else {
                    unfix()
                }
            })
        } else {
            unfix();
            $(window).off('scroll');
        }
}

function fix() {
    $('header').addClass('fixed');
    $('body').css('padding-top', '79px')
}

function unfix() {
    $('header').removeClass('fixed');
    $('body').css('padding-top', '0')
}