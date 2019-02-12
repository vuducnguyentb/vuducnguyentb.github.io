$(document).ready(function() {
    $('ul.menu li').on('click', function() {
        // var _type = $(this).attr('type');
        var _type = $(this).data('type');
        var _title = $(this).text(); //lấy text từ thẻ
        $('h1.title').text(_title); //thêm text vào thẻ
        $('.content img').each(function() {
            // element == this
            if ($(this).hasClass(_type)) {
                $(this).removeClass('hidden');
                $(this).addClass('bounceInUp animated');
            } else {
                $(this).addClass('hidden');
                $(this).removeClass('bounceInUp animated');
            }
        });
    });
});