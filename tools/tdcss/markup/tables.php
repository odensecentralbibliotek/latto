<!-- # Tables -->

<?php 
foreach (scandir('markup/tables') as $file) {
  if(strpos($file, '.') > 0) {
    include('tables/' . $file);
  } 
}

?>

