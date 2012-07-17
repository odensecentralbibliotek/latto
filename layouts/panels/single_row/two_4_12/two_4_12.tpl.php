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
  <div class="grid-12-right">
    <div class="grid-inner"><?php print $content['grid_12_right']; ?></div>
  </div>
  <aside class="grid-4-left">
    <div class="grid-inner"><?php print $content['grid_4_left']; ?></div>
  </aside>
</div>