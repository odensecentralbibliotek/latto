<!-- # Typography -->

<?php 
foreach (scandir('markup/typography') as $file) {
  if(strpos($file, '.') > 0) {
    include('typography/' . $file);
  } 
}

?>

