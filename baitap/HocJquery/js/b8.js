$(document).ready(function() {
    $('#open-1').on('click', function() {
        event.preventDefault();
        $('.background').addClass('show');
        $('#hop-thoai-1').addClass('show');
    });
    $('.close').on('click', function() {
        event.preventDefault();
        $('.background').removeClass('show');
        $('#hop-thoai-1').removeClass('show');
    });
    $('.background').on('click', function() {
        event.preventDefault();
        $('.background').removeClass('show');
        $('#hop-thoai-1').removeClass('show');
    });
});