<?php if ($site_logo || $site_name || $site_slogan): ?>
  <?php if ($site_logo): ?>
    <div class="logo">
      <?php print $site_logo; ?>
    </div>
  <?php endif; ?>
  <?php if ($site_name || $site_slogan): ?>
    <?php if ($site_name): ?>
      <div class="site-name">
        <?php print $site_name; ?>
      </div>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div class="site-slogan">
        <?php print $site_slogan; ?>
      </div>
    <?php endif; ?>
  <?php endif; ?>
<?php endif; ?>