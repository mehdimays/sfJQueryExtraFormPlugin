(function ($) {
  $(function() {
    
    $("input[data-sfautocomplete]").each(function() {
      var self = $(this);
      var data = self.data('sfautocomplete');
      self.autocomplete(data);
    })
    
  });
}(jQuery));