<!-- # Form -->

<?php 
foreach (scandir('markup/form') as $file) {
  if(strpos($file, '.') > 0) {
    include('form/' . $file);
  } 
}

?>

