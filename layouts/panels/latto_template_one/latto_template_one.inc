<?php
  $plugin['latto_template_one'] = array(
    'title'     => t('Latto template 1'),
    'icon'      => 'latto_template_one.png',
    'theme'     => 'latto_template_one',
    'admin css' => '../../../css/latto.styles.css',
    'category'  => 'Latto framework',
    'regions'   => array(
      'primary_content'   => t('Primary content'),
      'secondary_content' => t('Secondary content'),
      'tertiary_content'  => t('Tertiary content'),
      'attachment_first'  => t('Attachment 1'),
      'attachment_second' => t('Attachment 2'),
      'attachment_third'  => t('Attachment 3'),
      'attachment_fourth' => t('Attachment 4'),
    ),
  );
