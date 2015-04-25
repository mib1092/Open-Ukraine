$(document).ready(function(){
    $(".btn-toggle").on('click', function(){
        $(this).parent().parent().find('.main-nav').slideToggle();
    });

    $(".is-expanded").on('mouseenter', function(){
        var $this = $(this);

        if($(window).width() < 768){
            $this.find('.menu').slideToggle();
        }
    });
});