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

function aplay() {
    var audio = new Audio('https://cdn.nhacchuonghay.mobi/uploads/f6000/em-se-la-co-dau-minh-vuong-m4u-huy-cung.mp3');
    audio.play();
}