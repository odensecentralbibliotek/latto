<!-- # Navigation -->

<?php 
foreach (scandir('markup/navigation') as $file) {
  if(strpos($file, '.') > 0) {
    include('navigation/' . $file);
  } 
}
?>