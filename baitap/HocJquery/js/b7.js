$(document).ready(function() {
    //có sẵn
    $('.hop-thoai').addClass('show');
    $('.background').addClass('show');
    //xử lý những gì và sau bao lâu
    var banner = setInterval(function() {
        $('.hop-thoai').removeClass('show');
        $('.background').removeClass('show');
        clearInterval(banner);
    }, 2000);
    //click ẩn hiện modal
    $('#btn-open').on('click', function() {
        event.preventDefault();
        $('.hop-thoai').addClass('show');
        $('.background').addClass('show');
    });
    $('.close').on('click', function() {
        event.preventDefault();
        $('.hop-thoai').removeClass('show');
        $('.background').removeClass('show');
    });
    $('.background').on('click', function() {
        event.preventDefault();
        $('.hop-thoai').removeClass('show');
        $('.background').removeClass('show');
    });
});