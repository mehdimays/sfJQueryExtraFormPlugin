(function ($){
  
  // Update three select controls to match a date picker selection
  function sfDatePickerOnSelect(datepicker_prefix)
  {
    var date = jQuery('#' + datepicker_prefix + '_jquery_control' ).val();
    jQuery('#' + datepicker_prefix + '_month').val(parseInt(date.substring(0, 2)));
    jQuery('#' + datepicker_prefix + '_day').val(parseInt(date.substring(3, 5)));
    jQuery('#' + datepicker_prefix + '_year').val(date.substring(6, 10));
  };

  // Prepare to show a date picker linked to three select controls
  function sfDatePickerBeforeShow(datepicker_prefix)
  {
    jQuery('#' + datepicker_prefix + '_jquery_control').val(
      jQuery('#' + datepicker_prefix + '_month').val()  + '/' +
      jQuery('#' + datepicker_prefix + '_day').val()    + '/' +
      jQuery('#' + datepicker_prefix + '_year').val()
    );

    return {};
  };
  
  $(document).ready(function() {
    
    $("input[data-sfdatepicker]").each(function() {
      var self = $(this);
      var options = self.data('sfdatepicker');
      self.datepicker( $.extend(
        $.datepicker.regional[options['culture']],
        options['datepicker_options'],
        {
          'onSelect': function() { sfDatePickerOnSelect(options['prefix']); },
          'beforeShow': function() { sfDatePickerBeforeShow(options['prefix']); }
        }
       ));
    })
    
  });
}(jQuery));