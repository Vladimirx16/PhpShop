jQuery(document).ready(function ($) {
    if ($('.content-region').height() < 750) {
        $('footer').css('margin-top', 'auto')
    } else {
        $('footer').css('margin-top', '100px');
    }
});

jQuery(document).ready(function ($) {
    $('#search_button').hover(
        function () {
            $(this).css('width', '232px').css('background-position', '5%').css('border-radius', '5px');
            setTimeout(function () {
                $('#search_button').text('Искать');
            }, 50)
            $('#search_input').css('width', '0').css('opacity', '0');
        },
        function () {
            $(this).css('width', '32px').css('background-position', 'center').css('border-radius', '0 5px 5px 0');
            setTimeout(function () {
                $('#search_button').text('');
            }, 50)
            $('#search_input').css('width', '200px').css('opacity', '1');
        }
    );
    $('#search_button').on('mouseover', function () {
        if ($(this).width() === 32) {
            $(this).text('');
        }
    });
});