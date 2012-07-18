<?php
$plugin['stacked_3_3_10_reverse'] = array(
  'title' => t('Stacked, three columns 3-3-10'),
  'icon' => 'stacked_3_3_10_reverse.png',
  'theme' => 'stacked_3_3_10_reverse',
  'category'  => 'Latto - multiple rows, three columns',
  'regions' => array(
    'grid_10_top_right' => t('Top right content'),
    'grid_3_top_left' => t('Top left sidebar'),
    'grid_3_top_center_left' => t('Top left inner sidebar'),
    'grid_10_bottom_left' => t('Bottom left content'), 
    'grid_3_bottom_center_right' => t('Bottom right inner sidebar'),
    'grid_3_bottom_right' => t('Bottom right sidebar'),
  ),
);
