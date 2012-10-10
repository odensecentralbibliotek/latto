<!-- # Tabs  -->

<?php 
foreach (scandir('markup/tabs') as $file) {
  if(strpos($file, '.') > 0) {
    include('tabs/' . $file);
  } 
}

?>

