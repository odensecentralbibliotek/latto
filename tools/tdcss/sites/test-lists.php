<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Test list page</title>

  <?php include 'pages/includes/mockup_head.inc'; ?>
  <?php include 'pages/includes/scripts.inc'; ?>
</head>
<body>

  <div id="page">
    <div class="grid-inner layout-template-three">
      <div class="primary-content">

        <?php

          foreach (scandir('markup/lists') as $file) {
            if(strpos($file, '.') > 0) {
              include('markup/lists/' . $file);
            }
          }

        ?>

      </div>
      <div class="secondary-content">
          <?php

            foreach (scandir('markup/lists') as $file) {
              if(strpos($file, '.') > 0) {
                include('markup/lists/' . $file);
              }
            }

          ?>      
      </div>
      <div class="tertiary-content">
          <?php

            foreach (scandir('markup/lists') as $file) {
              if(strpos($file, '.') > 0) {
                include('markup/lists/' . $file);
              }
            }

          ?>      
      </div>      
    </div>
  </div>

</body>
</html>