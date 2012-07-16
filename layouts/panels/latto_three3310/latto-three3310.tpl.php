<div id="panel<?php if(!empty($css_id)) { print $css_id; } ?>">
  <div class="grid-3-left">
    <?php print render($content['left']); ?>
  </div>
  <div class="grid-3-center-left">
    <?php print render($content['innerleft']); ?>
  </div>
  <div class="grid-10-right">
    <?php print render($content['right']); ?>
  </div>
</div>