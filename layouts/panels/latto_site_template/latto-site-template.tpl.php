<div id="page<?php print $css_id ? " $css_id" : ''; ?>" class="<?php print $classes; ?>">

  <?php if (!empty($content['branding_top'])): ?>
    <div class="grid-full branding branding-top">
      <?php print render($content['branding_top']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['header'])): ?>
    <header class="grid-full">
      <?php print render($content['header']); ?>
    </header>
  <?php endif; ?>

  <article class="grid-full">
    <?php print render($content['content']); ?>
  </article>

  <?php if (!empty($content['footer'])): ?>
    <footer class="grid-full">
      <?php print render($content['footer']); ?>
    </footer>
  <?php endif; ?>
  
  <?php if (!empty($content['branding_bottom'])): ?>
    <div class="grid-full branding branding-bottom">
      <?php print render($content['branding_bottom']); ?>
    </div>
  <?php endif; ?>

</div>
