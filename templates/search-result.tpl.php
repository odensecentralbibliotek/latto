
<?php

/**
 * @file
 * Modified version of the default theme implementation for displaying a single
 * search result. The h3 title have been removed.
 *
 *
 * @see template_preprocess()
 * @see template_preprocess_search_result()
 * @see template_process()
 */
?>
<li class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="search-snippet-info">
    <?php if ($snippet): ?>
      <p class="search-snippet"<?php print $content_attributes; ?>><?php print $snippet; ?></p>
    <?php endif; ?>
    <?php if ($info): ?>
      <p class="search-info"><?php print $info; ?></p>
    <?php endif; ?>
  </div>
</li>
