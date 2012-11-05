/* 
 * @file
 * A JavaScript file to hold the common functions of the Latto theme.
 * 
 */
(function($) {
  $(document).ready(function () {
        
    // Add Example (jquery.example.js) to input fields with .has-example class.
    // Example is a third party JavaScript which removes standard text in a 
    // input field on click.
    $('.has-example').example(function() {
      // Returns the value in the title attribute from the input field. This way
      // it is possible to add the title from backend, using Drupal's t() 
      // function or other function.
      return $(this).attr('title');      
    });


    // Check if load equalize is set.
    if (Drupal.settings.latto.load_equalize !== undefined) {

      // Add equalize to the main menu.
      // https://github.com/tsvensen/equalize.js
      $('.main-menu').equalize('width');
      
    }    
    
    
    // Check if load equalize is set.
    if (Drupal.settings.latto.main_menu_sticky !== undefined) {

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