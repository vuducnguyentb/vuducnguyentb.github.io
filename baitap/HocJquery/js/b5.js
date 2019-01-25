//tài liệu đã sẵn sàng
$(document).ready(function() {
    // $('#part-1').on('click', function(event) {
    //     event.preventDefault();
    //     $('html, body').animate({
    //         scrollTop: 1500
    //     }, 400);
    // });

    $('.menu a').on('click', function(event) {
        event.preventDefault();
        //lấy ra value Href của a-chính là id của thẻ h2 tương ứng
        part = $(this).attr('href');
        //tìm vị trí thẻ h2
        position = $(part).offset().top;
        //hiệu ứng cuộn
        $('html, body').animate({
            scrollTop: position - 60
        }, 600, 'easeOutCubic');
    });
});