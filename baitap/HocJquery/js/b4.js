$(document).ready(function() {
    //ẩn nội dung
    $('.noi-dung').slideUp();
    $('.khoi h3').on('click', function() {
        //ngăn chặn
        event.preventDefault();
        //đóng mở
        $(this).next().slideToggle();
        $('html,body').animate({
            //$(this).offset().top lấy vị trị của ptuwr this
            scrollTop: $(this).offset().top
        }, 400);
    });
    $('#btn-top').click(function() {
        $('html ,body').animate({
            scrollTop: 0
        });
    })
});