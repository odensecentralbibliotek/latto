<!-- # Lists -->

<?php 
foreach (scandir('markup/lists') as $file) {
  if(strpos($file, '.') > 0) {
    include('lists/' . $file);
  } 
}

?>