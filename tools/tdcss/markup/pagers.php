<!-- # Pagers -->

<?php 
foreach (scandir('markup/pagers') as $file) {
  if(strpos($file, '.') > 0) {
    include('pagers/' . $file);
  } 
}

?>

