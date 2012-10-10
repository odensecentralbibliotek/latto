<!-- # BaseElements -->

<?php 
foreach (scandir('markup/base_elements') as $file) {
  if(strpos($file, '.') > 0) {
    include('base_elements/' . $file);
  } 
}

?>