$(document).ready(function(){
    $(".btn-toggle").on('click', function(){
        $(this).parent().parent().find('.main-nav').slideToggle();
    });

    $(".is-expanded").on('mouseenter', function(){
        $(this).find('.menu').slideToggle();
    });
});