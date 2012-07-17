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
  <aside class="grid-4-left">
    <div class="grid-inner"><?php print $content['grid-4-left']; ?></div>
  </aside>
  <aside class="grid-4-center-left">
    <div class="grid-inner"><?php print $content['grid_4_center_left']; ?></div>
  </aside>
  <aside class="grid-4-center-right">
    <div class="grid-inner"><?php print $content['grid_4_center_right']; ?></div>
  </aside>
  <aside class="grid-4-right">
    <div class="grid-inner"><?php print $content['grid_4_right']; ?></div>
  </aside>
</div>