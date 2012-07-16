<?php

/*
 * Implementation of hook_panels_layouts().
 */
function latto_latto_three3103_panels_layouts() {
  $items['latto_three3103'] = array(
    'title' => t('Three Columns, 3-10-3'),
    'icon' => 'latto_three3103.png',
    'css' => 'latto_three3103.css',
    'theme' => 'latto_three3103',
    'panels' => array(
      'left' => t('left column'),
      'center' => t('center column'),
      'right' => t('right column'),  
    ),
  );
  
  return $items;
}

