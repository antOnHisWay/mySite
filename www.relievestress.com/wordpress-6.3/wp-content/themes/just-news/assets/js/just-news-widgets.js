

// Widget Media Uploader for counter
jQuery(document).ready( function(){
function media_upload( button_class) {
var _custom_media = true,
_orig_send_attachment = wp.media.editor.send.attachment;
jQuery('body').on('click',button_class, function(e) {

    var button_id ='#'+jQuery(this).attr('id');
     
    var self = jQuery(button_id);
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = jQuery(button_id);
    var id = button.attr('id').replace('_button', '');
    _custom_media = true;
    wp.media.editor.send.attachment = function(props, attachment){
        if ( _custom_media  ) {
            jQuery(button_id).parent().find('input[type="hidden"]').val(attachment.url); 
           jQuery(button_id).parent().find('img').attr('src',attachment.url);
           jQuery('.just-news-remove-counter').show();
        } else {
            return _orig_send_attachment.apply( button_id, [props, attachment] );
        }
        jQuery('input[name="savewidget"]').removeAttr('disabled');
    }
    wp.media.editor.open(button);
    return true;
});
}
media_upload( '.custom_media_upload');
jQuery('body').on('click','.just-news-remove-counter',function(e){
    jQuery(this).parent().find('img').attr('src','');
    jQuery(this).parent().find('input[type="hidden"]').val(''); 
    jQuery(this).hide();
    jQuery('input[name="savewidget"]').removeAttr('disabled');
});
});

jQuery(document).ready(function(jQuery) {
var count = 0;
jQuery("body").on('click','.just-news-add-team', function(e) {
    e.preventDefault();
    var additional = jQuery(this).parent().parent().find('.just-news-additional-team');
    var container = jQuery(this).parent().parent().parent().parent();

    var container_class = container.attr('id');

    var arr = container_class.split('-');

    var val=  arr[1].split('_');

    val.shift();

    var liver=  val.join('_')

    var container_class_array = container_class.split(liver+"-");
    var instance = container_class_array[1];
    var add = jQuery(this).parent().parent().find('.just-news-add-team');
    count = additional.find('.just-news-sec-team').length;

    //Json response
    jQuery.ajax({
        type      : "GET",
        url       : ajaxurl,
        data      : {
            action: 'just_news_wp_pages_plucker',
        },
        dataType: "json",
        success: function (data) {
            console.log(data);
            var options = '<option disabled>Select pages</option>';

            jQuery.each(data, function( index, value ) {
                var option = '<option value="'+index+'">'+value+'</option>';
                options += option;
            });

            additional.append(
                '<div class="just-news-sec-team"><div class="sub-option section widget-upload">'+
                '<label for="widget-'+liver+'-'+instance+'-repeaters-'+count+'-page_ids">Select Page</label>'+
                '<select class="widefat" id="widget-'+liver+'-'+instance+'-repeaters-'+count+'-page_ids"'+
                'name="widget-'+liver+'['+instance+'][repeaters]['+count+'][page_ids]">'+ options + '</select>' +
                '<label for="widget-'+liver+'-'+instance+'-repeaters-'+count+'-position">Position</label>'+
                '<input type="text" class="widefat" id="widget-'+liver+'-'+instance+'-repeaters-'+count+'-position"'+
                'name="widget-'+liver+'['+instance+'][repeaters]['+count+'][position]">'+
                '<a class="just-news-remove delete">Remove Section</a></div></div>' );
            }
        });
    });

    jQuery(".just-news-remove").on('click', function() {
        jQuery(this).parent().parent().remove();
        jQuery('input[name="savewidget"]').removeAttr('disabled');
    });
});