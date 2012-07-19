<?php
$plugin['stacked_10_3_3_reverse'] = array(
  'title' => t('Stacked, three columns 10-3-3'),
  'icon' => 'stacked_10_3_3_reverse.png',
  'theme' => 'stacked_10_3_3_reverse',
  'category'  => 'Latto - multiple rows, three columns',
  'regions' => array(
    'grid_10_top_left' => t('Top left content'),
    'grid_3_top_center_right' => t('Top right inner sidebar'),
    'grid_3_top_right' => t('Top right sidebar'),
    'grid_10_bottom_right' => t('Bottom right content'), 
    'grid_3_bottom_left' => t('Bottom left sidebar'),
    'grid_3_bottom_center_left' => t('Bottom left inner sidebar'),
  ),
);
