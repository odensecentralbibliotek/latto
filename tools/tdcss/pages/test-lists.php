<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Test list page</title>

  <?php include 'includes/mockup_head.inc'; ?>
  <?php include 'includes/scripts.inc'; ?>
</head>
<body> 
  
  <div class="grid-wrapper">
    <div class="grid-inner">
      <div class="grid-10-center">
      
  <?php
  
    foreach (scandir('../markup/lists') as $file) {
      if(strpos($file, '.') > 0) {
        include('../markup/lists/' . $file);
      } 
    }

  ?>  

      </div>
    </div>
  </div>
  
</body>
</html>