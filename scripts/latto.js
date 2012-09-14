/* 
 * @file
 * A JavaScript file to hold the common functions of the Latto theme.
 * 
 */
(function($) {
  $(document).ready(function () {
    
    // Add example to search form input.
    // 
    // TODO: Optimize the selector so we don't rely on an id.
    $('#edit-search-block-form--2').example(function() {
      return $(this).attr('title');
    });
    
    
    
    
  });
})(jQuery);