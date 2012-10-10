<!-- # Labels -->

<?php 
foreach (scandir('markup/labels') as $file) {
  if(strpos($file, '.') > 0) {
    include('labels/' . $file);
  } 
}

?>

