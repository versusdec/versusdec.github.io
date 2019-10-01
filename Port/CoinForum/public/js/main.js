
$(document).ready(function(){
    $('.menu-btn').on('click', function(){
        $(this).toggleClass('active');
        $('nav').toggleClass('active');
    })
});

