$(document).ready(function() {
    $('.btn-open').on('click', function() {
        event.preventDefault();
        $('.sidenav').addClass('show');
        $('.main-container').addClass('push');
    });
    $('.btn-close').on('click', function() {
        event.preventDefault();
        $('.sidenav').removeClass('show');
        $('.main-container').removeClass('push');
    });
});