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


    // slick-slider controls
    $('.slides-js').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 924,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 3
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});