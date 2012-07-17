<div id="page<?php print $css_id ? " $css_id" : ''; ?>" class="<?php print $classes; ?>">

  <?php if (!empty($content['branding'])): ?>
    <div class="grid-full branding">
      <?php print render($content['branding']); ?>
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
  
  <?php if (!empty($content['bottom'])): ?>
    <div class="grid-full bottom">
      <?php print render($content['bottom']); ?>
    </div>
  <?php endif; ?>

</div>
