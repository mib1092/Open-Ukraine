$(document).ready(function(){
    $(".btn-toggle").on('click', function(){
        $(this).parent().parent().find('.tbl-toggle').slideToggle();
    });
});