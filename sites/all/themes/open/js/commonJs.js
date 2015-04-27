$(document).ready(function(){
    $(".btn-toggle").on('click', function(){
        $(this).parent().parent().find('.main-nav').slideToggle();
    });


    var flag = true;

    $('.is-expanded').mouseenter(function(){
        if(flag) {
            flag = false;
            var $this = $(this);

            if($(window).width() < 925){
                $this.children('.menu').slideToggle('slow', function() {
                    flag = true;
                });
            }
        }
    }).mouseleave(function(){
        if(flag) {
            flag = false;
            var $this = $(this);

            if($(window).width() < 925){
                $this.children('.menu').slideToggle('slow', function() {
                    flag = true;
                });
            }
        }
    });
});