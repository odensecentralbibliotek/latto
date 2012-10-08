<!-- # Miscellaneous -->

<?php 
foreach (scandir('markup/miscellaneous') as $file) {
  if(strpos($file, '.') > 0) {
    include('miscellaneous/' . $file);
  } 
}

?>