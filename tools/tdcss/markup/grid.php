<!-- # GridSystem -->

<?php 
foreach (scandir('markup/grid') as $file) {
  if(strpos($file, '.') > 0) {
    include('grid/' . $file);
  } 
}

?>

