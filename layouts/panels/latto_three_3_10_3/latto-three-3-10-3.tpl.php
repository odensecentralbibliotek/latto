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
<div <?php if(!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="grid-3-left"><?php print $content['left']; ?></div>
  <div class="grid-10-center"><?php print $content['center']; ?></div>
  <div class="grid-3-right"><?php print $content['right']; ?></div>
</div>