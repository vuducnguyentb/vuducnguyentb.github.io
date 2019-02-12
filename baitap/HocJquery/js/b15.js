$(document).ready(function() {
    $(window).scroll(function() {
        var bos_body = $('html,body').scrollTop();
        var pos_img1 = $('.content img:nth-child(1)').offset().top;
        var pos_img2 = $('.content img:nth-child(2)').offset().top;
        var pos_img3 = $('.content img:nth-child(3)').offset().top;
        if (bos_body > 20) {
            $('.menu').addClass('sticky');
        } else {
            $('.menu').removeClass('sticky');
        }
        if (bos_body > 800) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
        if (bos_body > pos_img2 - 200) {
            $('.content img:nth-child(2)').addClass('fadeInLeft animated');
        }
        if (bos_body > pos_img3 - 200) {
            $('.content img:nth-child(3)').addClass('fadeInRight animated');
        }
    });
    $('.back-to-top').on('click', function() {
        $('html,body').animate({ scrollTop: 0 },
            1400
        );
    });
});