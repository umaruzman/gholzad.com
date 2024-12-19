$(document).ready(function() {
    $('#menuButton').on('click', function(){
        if ($('.nav-menu-mobile').hasClass('active')) {
            $('.nav-menu-mobile').removeClass('active');
            $('#menuButton').html('<i class="fa-solid fa-bars"></i>');
        } else {
            $('.nav-menu-mobile').addClass('active');
            $('#menuButton').html('<i class="fa-solid fa-xmark"></i>');
        }
    })
})