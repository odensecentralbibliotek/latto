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
    <aside class="grid-4-left">
      <div class="grid-inner"><?php print $content['grid_4_top_left']; ?></div>
    </aside>
    <aside class="grid-4-center-left">
      <div class="grid-inner"><?php print $content['grid_4_top_center_left']; ?></div>
    </aside>
    <aside class="grid-4-center-right">
      <div class="grid-inner"><?php print $content['grid_4_top_center_right']; ?></div>
    </aside>
    <aside class="grid-4-right">
      <div class="grid-inner"><?php print $content['grid_4_top_right']; ?></div>
    </aside>
  </div>
  <div class="grid-row grid-row-gutter">
    <div class="grid-8-left">
      <div class="grid-inner"><?php print $content['grid_8_left']; ?></div>
    </div>
    <div class="grid-8-right">
      <div class="grid-inner"><?php print $content['grid_8_right']; ?></div>
    </div>    
  </div>
  <div class="grid-row last">
    <aside class="grid-4-left">
      <div class="grid-inner"><?php print $content['grid_4_bottom_left']; ?></div>
    </aside>
    <aside class="grid-4-center-left">
      <div class="grid-inner"><?php print $content['grid_4_bottom_center_left']; ?></div>
    </aside>
    <aside class="grid-4-center-right">
      <div class="grid-inner"><?php print $content['grid_4_bottom_center_right']; ?></div>
    </aside>
    <aside class="grid-4-right">
      <div class="grid-inner"><?php print $content['grid_4_bottom_right']; ?></div>
    </aside>
  </div>
</div>