<!-- # Pagination -->

<?php 
foreach (scandir('markup/pagination') as $file) {
  if(strpos($file, '.') > 0) {
    include('pagination/' . $file);
  } 
}

?>

