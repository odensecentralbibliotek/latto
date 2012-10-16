<!-- JavaScripts -->
<script type="text/javascript" src="../src/vendors/jquery.js"></script>
<script type="text/javascript" src="../src/tdcss.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.example.js"></script>
<script type="text/javascript" src="../../../scripts/equalize.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="/profiles/ding2/modules/ting_search_carousel/js/jquery.rs.carousel.js"></script>

<!-- <script type="text/javascript" src="/profiles/ding2/modules/ting_search_carousel/js/ting_search_carousel.js"></script> -->
<script>
  $(function () { 
    
    $('.has-example').example(function() {
      return $(this).attr('title');      
    });
    
    $('.rs-carousel-mask').carousel();
    $('.rs-carousel-mask').css('top', '-60px');
    $('.equalize-height').equalize();
  });
</script>