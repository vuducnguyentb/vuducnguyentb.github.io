$(document).ready(function() {
    //slide
    $('.slide-main-top').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.slide-main-top1').slick({
        dots: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 2
    });
    //checkbox change
    // $(" .form-check label input[type=checkbox]+span").on("click", function() {
    //     if ($this).hasClass("checked") {
    //         $(this).removeClass("checked");
    //     }
    //     else {
    //         $(this).addClass("checked");
    //     }
    // });
});
$(function() {
    $(".form-check label input[type=checkbox]+span").click(function() {
        if ($(this).hasClass("checked")) {
            $(this).removeClass("checked");
        } else {
            $(this).addClass("checked");
        }
    });
    $(".note-hotel .card-header button").click(function() {
        $(this).parents('.card').prevAll().find("button").removeClass("bgred");
        $(this).parents('.card').nextAll().find("button").removeClass("bgred");
        $(this).parents('.card').nextAll().find("button i").removeClass("open");
        $(this).parents('.card').prevAll().find("button i").removeClass("open");
        if ($(this).hasClass("bgred")) {
            $(this).children('i').removeClass("open");
            $(this).removeClass("bgred");
        } else {


            $(this).addClass("bgred");
            $(this).children('i').addClass("open");
        }

    });
});
//event hover apple 
$(document).ready(function() {
    $(".review-hotel .btn-review").on("click", function() {
        $(".review-hotel .evaluate").css("display", "block");
        $(".review-hotel .btn-review").css("display", "none");
    });
    $(" .btn-write-evaluate .btn-evaluate").on("click", function() {
        $(".review-hotel .evaluate").css("display", "none");
        $(".review-hotel .btn-review").css("display", "block");
        $(".review-hotel .btn-review").css("margin", "auto");
    });
});
$(document).ready(function() {
    $('.evaluate .evaluate-form .rating3 .apples span').mouseenter(function() {
        $(this).addClass('selected');
        $(this).prevAll().addClass('selected');
        $(this).nextAll().removeClass('selected');

    });
    $(selector).mouseleave(function() {

    });
});