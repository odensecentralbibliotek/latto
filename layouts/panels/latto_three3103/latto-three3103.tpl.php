<div id="panel<?php if(!empty($css_id)) { print $css_id; } ?>">
  <div class="grid-3-left">
    <?php print render($content['left']); ?>
  </div>
  <div class="grid-10-center">
    <?php print render($content['center']); ?>
  </div>
  <div class="grid-3-right">
    <?php print render($content['right']); ?>
  </div>
</div>