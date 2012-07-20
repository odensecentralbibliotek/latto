<?php

function latto_form_system_theme_settings_alter(&$form, $form_state) {

  /*
   * CSS class and markup
   */
  $form['classes'] = array(
      '#type'          => 'fieldset',
      '#title'         => t('Classes & Markup'),
      '#description'   => t('Modify the default classes and markup from Drupal.'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
      '#weight'=> -11
  );
  
  $form['classes']['menu'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Menus'),
   '#description'   => t('Removes classes from the <li> tag in the menu.'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
   
  $form['classes']['menu']['latto_classes_menu_leaf'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove .leaf from the li '),
    '#default_value' => theme_get_setting('latto_classes_menu_leaf')
  );
  
  $form['classes']['menu']['latto_classes_menu_has_children'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove .has-children from the li '),
    '#default_value' => theme_get_setting('latto_classes_menu_has_children')
  );  
  
  $form['classes']['menu']['latto_classes_menu_items_mlid'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove the menu-mlid-[mid] class'),
    '#default_value' => theme_get_setting('latto_classes_menu_items_mlid')
  );  
  
}
