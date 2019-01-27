$(document).ready(function() {
    $('#btn-next').on('click', function() {
        event.preventDefault();
        var slide_next = $('.active').next();
        if (slide_next.length != 0) {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            slide_next.addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });
        } else {
            $('.active').addClass('bien-mat-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-trai').removeClass('bien-mat-ben-trai').removeClass('active');
            });
            $('.slide:first-child').addClass('active').addClass('di-vao-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-phai').removeClass('di-vao-ben-phai');
            });

        }

    });
    $('#btn-prev').on('click', function() {
        event.preventDefault();
        var slide_prev = $('.active').prev();
        if (slide_prev.length != 1) {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            $('.slide:last-child').addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
        } else {
            $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
                $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
            });
            slide_prev.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(e) {
                $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
            });
        }

        console.log(slide_prev.length);
        // if (slide_prev.length != 0) {
        //     $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
        //         $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
        //     });
        //     slide_next.addClass('active').addClass('di-vao-ben-trai').one('webkitAnimationEnd', function(e) {
        //         $('.di-vao-ben-trai').removeClass('di-vao-ben-trai');
        //     });
        // } else {
        //     $('.active').addClass('bien-mat-ben-phai').one('webkitAnimationEnd', function(e) {
        //         $('.bien-mat-ben-phai').removeClass('bien-mat-ben-phai').removeClass('active');
        //     });


        // }


    });
});