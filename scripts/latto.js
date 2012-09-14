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


    // Check if load equalize is set.
    if (Drupal.settings.latto_settings.load_equalize == 1) {

      // Add equalize to the main menu.
      // https://github.com/tsvensen/equalize.js
      $('.main-menu').equalize('width');
      
    }    
    
    
    // Check if load equalize is set.
    if (Drupal.settings.latto_settings.main_menu_sticky == 1) {

      // Calculate the height of <header>.
      // Use outerHeight() instead of height() if it have padding.
      var aboveHeight = $('header').outerHeight();

      // Activate when scrolling.
      $(window).scroll(function(){

      // If scrolled down more than the header’s height make the menu sticky.
        if ($(window).scrollTop() > aboveHeight) {

          // Add “fixed” class to the elements.
          $('.main-menu').addClass('fixed');

        } else {

          // When scrolling up removed the fixed class
          $('.main-menu').removeClass('fixed');

        }     

      });  
      
    }    
    
    
  });
})(jQuery);