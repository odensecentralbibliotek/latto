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
<div<?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?>>
  <div class="grid-row">
    <aside class="grid-full">
      <div class="grid-inner"><?php print $content['grid_16_top_full']; ?></div>
    </aside>
  </div>
  <div class="grid-row grid-row-gutter last">
    <div class="grid-13-left">
      <div class="grid-inner"><?php print $content['grid_13_left']; ?></div>
    </div>
    <div class="grid-3-right">
      <div class="grid-inner"><?php print $content['grid_3_right']; ?></div>
    </div>    
  </div>
</div>
