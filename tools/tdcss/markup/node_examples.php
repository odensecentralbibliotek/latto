<!-- # NodeExamples -->

<?php 
foreach (scandir('markup/node_examples') as $file) {
  if(strpos($file, '.') > 0) {
    include('node_examples/' . $file);
  } 
}

?>

