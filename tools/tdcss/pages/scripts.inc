<!-- JavaScripts -->
<script type="text/javascript" src="../src/vendors/jquery.js"></script>
<script type="text/javascript" src="../src/tdcss.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.example.js"></script>
<script type="text/javascript" src="../../../scripts/equalize.min.js"></script>

<script>
  $(function () { 
    
    $('.has-example').example(function() {
      return $(this).attr('title');      
    });
    
    $('.equalize-height').equalize();
  });
</script>