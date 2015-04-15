jQuery(function($) {
    $(document).ready(function() {
        $('#popupWrapper').click(function(event) {
            if (event.target.id == 'popupWrapper') {
                $('#popupWrapper').fadeOut(300);
                return false;
            }
        });

        $('.closeForm').click(function() {
            $('#popupWrapper').fadeOut(300);
            return false;
        });
    });
});