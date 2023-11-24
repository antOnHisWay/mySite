jQuery(document).ready(function($) {

 
    // Executes wpColorPicker function after AJAX is fired on saving the widget
      $('.color-picker').on('focus', function(){
      var parent = jQuery(this).parent();
          var params = { 
          change: function(e, ui) {
            jQuery( e.target ).val( ui.color.toString() );
            jQuery( e.target ).trigger('change'); // enable widget "Save" button
          },
        }
      jQuery(this).wpColorPicker(params)
      parent.find('.wp-color-result').click();
  }); 

  $(document).ajaxComplete(function() {
      $('.color-picker').on('focus', function(){
          var parent = jQuery(this).parent();
              var params = { 
              change: function(e, ui) {
                jQuery( e.target ).val( ui.color.toString() );
                jQuery( e.target ).trigger('change'); // enable widget "Save" button
              },
            }
          jQuery(this).wpColorPicker(params)
          parent.find('.wp-color-result').click();
      }); 
  });    
});