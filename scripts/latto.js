/* 
 * @file
 * A JavaScript file to hold the common functions of the Latto theme.
 * 
 */
(function($) {
  $(document).ready(function () {
    
    // Add example to search form input.
    // 
    // TODO: Should we optimize the selector so we don't rely on an id?
    $('#edit-search-block-form--2').example(function() {
      return $(this).attr('title');
    });
    
    // Add equalize to the main menu.
    // https://github.com/tsvensen/equalize.js
    $('.main-menu').equalize('width');    
    
  });
})(jQuery);