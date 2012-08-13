<?php

/*
 * Implements form_system_theme_settings_alter().
 */

function latto_form_system_theme_settings_alter(&$form, $form_state) {
  $path_to_at_core = drupal_get_path('theme', 'latto');
  
  /*
   * CSS class and markup
   */
  $form['latto-settings']['classes'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Classes & Markup'),
    '#description'   => t('Modify the default classes and markup from Drupal.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#weight'=> -11
  );
  
  $form['latto-settings']['classes']['menu'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Menus'),
    '#description'   => t('Removes classes from the &lt;li&gt; tag in the menu.'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
   
  $form['latto-settings']['classes']['menu']['latto_classes_menu_leaf'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove .leaf from the li '),
    '#default_value' => theme_get_setting('latto_classes_menu_leaf')
  );
  
  $form['latto-settings']['classes']['menu']['latto_classes_menu_has_children'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove .has-children from the li '),
    '#default_value' => theme_get_setting('latto_classes_menu_has_children')
  );  
  
  $form['latto-settings']['classes']['menu']['latto_classes_menu_items_mlid'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove the menu-mlid-[mid] class'),
    '#default_value' => theme_get_setting('latto_classes_menu_items_mlid')
  );
  
  // Include all the default settings forms.
  require_once($path_to_at_core . '/inc/settings.polyfills.inc');
  
  // Collapse annoying forms
  $form['theme_settings']['#collapsible'] = TRUE;
  $form['theme_settings']['#collapsed'] = TRUE;
  $form['theme_settings']['#weight'] = 50;
  $form['logo']['#collapsible'] = TRUE;
  $form['logo']['#collapsed'] = TRUE;
  $form['logo']['#weight'] = 50;
  $form['favicon']['#collapsible'] = TRUE;
  $form['favicon']['#collapsed'] = TRUE;
  $form['favicon']['#weight'] = 50; 
}
