<!-- # Forms -->

<?php 
foreach (scandir('markup/forms') as $file) {
  if(strpos($file, '.') > 0) {
    include('forms/' . $file);
  } 
}

?>

