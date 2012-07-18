<?php
/**
 * @file
 * Latto implementation to present a Panels layout.
 *
 * Available variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 * - $css_id: unique id if present.
 */
?>
<div <?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?> class="grid-row">
  <div class="grid-8-left">
    <div class="grid-inner"><?php print $content['grid_8_left']; ?></div>
  </div>
  <div class="grid-8-right">
    <div class="grid-inner"><?php print $content['grid_8_right']; ?></div>
  </div>    
</div>