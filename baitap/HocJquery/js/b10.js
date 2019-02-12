$(document).ready(function() {
    //event tự động chạy
    var autoLoad = setInterval(function() {
        $('#btn-next').trigger('click');
    }, 3000);
    //event next
    $('#btn-next').on('click', function() {
        clearInterval(autoLoad);
        var slide_next = $('.active').next();
        var vi_tri_hien_tai = $('.active-nut').index() + 1;
        if (slide_next.length != 0) {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            slide_next.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
            //xử lý nút
            $('.nut-slide ul li').removeClass('active-nut');
            $('.nut-slide ul li:nth-child(' + (vi_tri_hien_tai + 1) + ')').addClass('active-nut');
        } else {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            $('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
            //xử lý nút
            $('.nut-slide ul li').removeClass('active-nut');
            $('.nut-slide ul li:nth-child(1)').addClass('active-nut');

        }

    });
    //event pre
    $('#btn-prev').on('click', function() {
        clearInterval(autoLoad);
        var slide_prev = $('.active').prev();
        var vi_tri_hien_tai = $('.active-nut').index() + 1;
        console.log(vi_tri_hien_tai);
        if (slide_prev.length != 0) {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            slide_prev.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
            //xử lý nút
            $('.nut-slide ul li').removeClass('active-nut');
            $('.nut-slide ul li:nth-child(' + (vi_tri_hien_tai - 1) + ')').addClass('active-nut');
        } else {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            $('.slide:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
            //xử lý nút
            $('.nut-slide ul li').removeClass('active-nut');
            $('.nut-slide ul li:last-child').addClass('active-nut');
        }
    });
    //event cho các nút
    $('.nut-slide ul li').on('click', function() {
        clearInterval(autoLoad);
        var vi_tri_hien_tai = $('.active-nut').index() + 1;
        var vi_tri_click = $(this).index() + 1;
        $('.nut-slide ul li').removeClass('active-nut');
        $(this).addClass('active-nut');
        if (vi_tri_hien_tai > vi_tri_click) {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            $('.slide:nth-child(' + (vi_tri_click) + ')').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
        }
        if (vi_tri_hien_tai < vi_tri_click) {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            $('.slide:nth-child(' + (vi_tri_click) + ')').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
        }

    });
});