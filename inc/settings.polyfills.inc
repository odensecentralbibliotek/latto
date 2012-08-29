<?php

/**
 * @file
 * Generate form elments for the Polyfills settings.
 *
 * TODO: review documentation and provide links to help pages.
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

