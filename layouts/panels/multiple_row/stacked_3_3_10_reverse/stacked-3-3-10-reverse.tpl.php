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
    <div class="grid-10-right">
      <div class="grid-inner"><?php print $content['grid_10_top_right']; ?></div>
    </div>
    <aside class="grid-3-left">
      <div class="grid-inner"><?php print $content['grid_3_top_left']; ?></div>
    </aside>
    <aside class="grid-3-center-left">
      <div class="grid-inner"><?php print $content['grid_3_top_center_left']; ?></div>
    </aside>
  </div>
  <div class="grid-row last">
    <div class="grid-10-left">
      <div class="grid-inner"><?php print $content['grid_10_bottom_left']; ?></div>
    </div>
    <aside class="grid-3-center-right">
      <div class="grid-inner"><?php print $content['grid_3_bottom_center_right']; ?></div>
    </aside>
    <aside class="grid-3-right">
      <div class="grid-inner"><?php print $content['grid_3_bottom_right']; ?></div>
    </aside>
  </div>
</div>