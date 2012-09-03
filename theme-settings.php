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
  
  /*
   * Polyfill settings
   */
  $form['latto-settings']['polyfills'] = array(
    '#type' => 'fieldset',
    '#title' => t('Polyfills'),
    '#description' => t('<h3>Polyfills</h3><p>Here you can enable commonly used Polyfills supplied with the core theme.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#weight'=> -10
  );

  $form['latto-settings']['polyfills']['fills'] = array(
    '#type' => 'fieldset',
    '#title' => t('Polyfills'),
  );

  // HTML5 shiv
  $form['latto-settings']['polyfills']['fills']['load_html5js'] = array(
    '#type' => 'checkbox',
    '#title' => t('HTML5 support in IE'),
    '#description' => t('By checking this setting the site will load the <a href="!link" target="_blank">html5shiv</a>. Turning this off will be bad news for IE6-8.', array('!link' => '//github.com/aFarkas/html5shiv')),
    '#default_value' => theme_get_setting('load_html5js'),
  );

  // Selectivizr
  $form['latto-settings']['polyfills']['fills']['load_selectivizr'] = array(
    '#type' => 'checkbox',
    '#title' => t('Selectivizr'),
    '#description' => t('<a href="!link" target="_blank">Selectivizr</a> is a JavaScript utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8.', array('!link' => 'http://selectivizr.com')),
    '#default_value' => theme_get_setting('load_selectivizr'),
  );

  // Scalefix
  $form['latto-settings']['polyfills']['fills']['load_scalefixjs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Scalefix for iOS'),
    '#description' => t('Fixes the iOS Orientationchange zoom bug.'),
    '#default_value' => theme_get_setting('load_scalefixjs'),
    '#states' => array(
      'invisible' => array('input[name="disable_responsive_styles"]' => array('checked' => TRUE)),
    ),
  );
  
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
