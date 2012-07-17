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
<div class="grid-row<?php print $css_id ? " $css_id" : ''; ?>">
  <div class="grid-10-left">
    <div class="grid-inner"><?php print $content['grid_10_left']; ?></div>
  </div>
  <aside class="grid-3-center-right">
    <div class="grid-inner"><?php print $content['grid_3_center_right']; ?></div>
  </aside>
  <aside class="grid-3-right">
    <div class="grid-inner"><?php print $content['grid_3_right']; ?></div>
  </aside>
</div>