<!-- # Buttons -->

<?php 
foreach (scandir('markup/buttons') as $file) {
  if(strpos($file, '.') > 0) {
    include('buttons/' . $file);
  } 
}

?>