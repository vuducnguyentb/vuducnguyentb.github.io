$(document).ready(function() {
    $('.btn-open').on('click', function() {
        event.preventDefault();
        $('.hop-thoai').addClass('hien-ra');
        $('.nen-mo').addClass('hien-ra');
    });
    $('.btn-close').on('click', function() {
        event.preventDefault();
        $('.hop-thoai').removeClass('hien-ra');
        $('.nen-mo').removeClass('hien-ra');
    });
    $('.nen-mo').on('click', function() {
        event.preventDefault();
        $('.hop-thoai').removeClass('hien-ra');
        $('.nen-mo').removeClass('hien-ra');
    });
});