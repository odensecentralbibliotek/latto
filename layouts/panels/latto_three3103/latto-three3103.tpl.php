<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div <?php if(!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="grid-3-left"><?php print $content['left']; ?></div>
  <div class="grid-10-center"><?php print $content['center']; ?></div>
  <div class="grid-3-right"><?php print $content['right']; ?></div>
</div>