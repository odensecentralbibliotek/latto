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
<div <?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?> class="layout-template-default">
  <div class="grid-wrapper">
    <div class="grid-inner">

      <div class="primary-content">
        <div class="content-inner"><?php print $content['primary_content']; ?></div>
      </div>

      <div class="secondary-content">
        <div class="content-inner"><?php print $content['secondary_content']; ?></div>
      </div>

      <div class="tertiary-content">
        <div class="content-inner"><?php print $content['tertiary_content']; ?></div>
      </div>

      <div class="attachments-wrapper">

        <?php if ($content['attachment_first']): ?>
          <div class="attachment-first">
            <div class="content-inner"><?php print $content['attachment_first']; ?></div>
          </div>
        <?php endif; ?>

        <?php if ($content['attachment_second']): ?>
          <div class="attachment-second">
            <div class="content-inner"><?php print $content['attachment_second']; ?></div>
          </div>
        <?php endif; ?>

        <?php if ($content['attachment_third']): ?>
          <div class="attachment-third">
            <div class="content-inner"><?php print $content['attachment_third']; ?></div>
          </div>
        <?php endif; ?>

        <?php if ($content['attachment_fourth']): ?>
          <div class="attachment-fourth">
            <div class="content-inner"><?php print $content['attachment_fourth']; ?></div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>