$(document).ready(function(){
    $(".btn-toggle").on('click', function(){
        $(this).parent().parent().find('.main-nav').slideToggle();
    });
});