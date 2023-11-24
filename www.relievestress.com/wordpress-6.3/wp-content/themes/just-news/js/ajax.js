jQuery(document).ready(function ($) {

    $('#catlayout61').on('click',function (e) {

        e.preventDefault();
        var value = $(this).data('catid');
        var noofpost = $(this).data('noofpost');

        var author1 = $(this).data('author');
        var orderby1 = $(this).data('orderby');
        var adminenbale = $(this).data('adminenbale');
        var dateenbale = $(this).data('dateenbale');
        var commentenable = $(this).data('commentenable');
        var postreadenable = $(this).data('postreadenable');
        var posttimeenable = $(this).data('posttimeenable');
        var excerpt1 = $(this).data('excerpt1');
        var excerpt2 = $(this).data('excerpt2');
        $.ajax({
            url: ajaxStuff.ajaxurl,
            type: "GET",
            async: true,
            cache: false,
            data: {
                action: 'template_call',
                value:value,
                noofpost: noofpost,
                author1: author1,
                orderby1: orderby1,
                adminenbale: adminenbale,
                dateenbale: dateenbale,
                commentenable: commentenable,
                postreadenable: postreadenable,
                posttimeenable: posttimeenable,
                excerpt1:excerpt1,
                excerpt2:excerpt2
            },
            success: function (data) {
                $('.catlayout6-tabcontent').html(data);
            }
        });
    });

    $('#catlayout61').trigger('click');

    $('.catlayout6-tabs li a').on('click',function (e) {

        e.preventDefault();
        $(".catlayout6-tabs li a").removeClass('active');
        $(this).addClass('active')

        var value = $(this).data('catid');
        var noofpost = $(this).data('noofpost');
        var author1 = $(this).data('author');
        var orderby1 = $(this).data('orderby');
        var adminenbale = $(this).data('adminenbale');
        var dateenbale = $(this).data('dateenbale');
        var commentenable = $(this).data('commentenable');
        var postreadenable = $(this).data('postreadenable');
        var posttimeenable = $(this).data('posttimeenable');
        var excerpt1 = $(this).data('excerpt1');
        var excerpt2 = $(this).data('excerpt1');
        $.ajax({
            url: ajaxStuff.ajaxurl,
            type: "GET",
            async: true,
            cache: false,
            data: {
                action: 'template_call',
                value:value,
                noofpost: noofpost,
                author1: author1,
                orderby1: orderby1,
                adminenbale: adminenbale,
                dateenbale: dateenbale,
                commentenable: commentenable,
                postreadenable: postreadenable,
                posttimeenable: posttimeenable,
                excerpt1:excerpt1,
                excerpt2:excerpt2
            },
            success: function (data) {
                $('.catlayout6-tabcontent').html(data);
            }
        });

    });

});