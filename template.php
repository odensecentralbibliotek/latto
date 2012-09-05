<?php

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 * 3. Read carefully, especially within adaptivetheme_subtheme_preprocess_html(), there
 *    are extra goodies you might want to leverage such as a very simple way of adding
 *    stylesheets for Internet Explorer and a browser detection script to add body classes.
 */

global $theme_key, $path_to_latto_core;
$theme_key = $GLOBALS['theme_key'];
$path_to_latto_core = drupal_get_path('theme', 'latto');

// We need some functions
include_once($path_to_latto_core . '/inc/functions.inc');

/**
 * Preprocess variables for html.tpl.php
 */
function latto_preprocess_html(&$vars) {
  global $theme_key, $language;
  $theme_name = $theme_key;

  // Set variable for the base path
  $vars['base_path'] = base_path();

  // Get the info file data
  //$info = latto_get_info($theme_name);

  // Clean up the lang attributes.
  $vars['html_attributes'] = 'lang="' . $language->language . '" dir="' . $language->dir . '"';

  
  // Build an array of polyfilling scripts
  $vars['polyfills_array'] = '';
  $vars['polyfills_array'] = load_polyfills($theme_name, $vars);
  
}

/**
 * Process variables for html.tpl.php
 */
function latto_process_html(&$vars) {
  global $theme_key; $path_to_latto_core;
  $theme_name = $theme_key;

  if (!empty($vars['polyfills_array'])) {
    $vars['polyfills'] = drupal_static('latto_process_html_polyfills');
    if (empty($vars['polyfills'])) {
      $ie_scripts = array();
      if (!empty($vars['polyfills_array'])) {
        foreach ($vars['polyfills_array'] as $ke => $va) {
          foreach ($va as $k => $v) {
            $ies[$k][] = implode("\n", $v);
          }
        }
      }
      foreach ($ies as $kv => $kvp) {
        $aus[$kv] = implode("\n", $kvp);
      }
      $vars['polyfills'] = latto_theme_conditional_scripts($aus);
    }
  }
  else {
    $vars['polyfills'] = '';
  }
}

/**
 * hook_css_alter()
 */
function latto_css_alter(&$css) {
  global $theme_key;

  // Never allow this to run in our admin theme and only if the extension is enabled.
  if (theme_get_setting('enable_exclude_css') === 1) {

    // Get $css_data from the cache
    if ($cache = cache_get('latto_get_css_files')) {
      $css_data = $cache->data;
    }
    else {
      $css_data = latto_get_css_files($theme_key);
    }

    // We need the right theme name to get the theme settings
    $_get_active_theme_data = array_pop($css_data);
    if ($_get_active_theme_data['type'] == 'theme') {
      $theme_name = $_get_active_theme_data['source'];
    }
    else {
      $theme_name = $theme_key;
    }

    // Get the theme setting and unset files
    foreach ($css_data as $key => $value) {
      $setting = 'unset_css_' . drupal_html_class($key);
      if (theme_get_setting($setting, $theme_name) === 1) {
        if (isset($css[$key])) {
          unset($css[$key]);
        }
      }
    }

    // Unset -rtl.css files if language dir is RTL, in some contexts dir is
    // unset, but I don't know if this is a core bug or not.
    if (isset($language->dir) && $language->dir === 'rtl') {
      foreach ($css_data as $key => $value) {
        $setting = 'unset_css_' . drupal_html_class($key);
        if (theme_get_setting($setting, $theme_name) === 1) {
          $key = str_replace('.css', '-rtl.css', $key);
          if (isset($css[$key])) {
            unset($css[$key]);
          }
        }
      }
    }
  }
}

/**
 * Implements hook_preprocess_panels_pane().
 *
 */
function latto_preprocess_panels_pane(&$vars) {
  // Suggestions base on sub-type.
  $vars['theme_hook_suggestions'][] = 'panels_pane__' . str_replace('-', '__', $vars['pane']->subtype);
 
  // Suggestions on panel pane
  $vars['theme_hook_suggestions'][] = 'panels_pane__' . $vars['pane']->panel;
  
  
  if(isset($vars['content']['#delta']) && $vars['content']['#delta'] == "ding-menu-sidebar") {
    $vars['classes_array'][] = 'sidebar-menu';
  }
}

/**
 * Render callback.
 *
 * Remove panels div separator.
 */
function latto_panels_default_style_render_region($vars) {
  $output = '';
  $output .= implode('', $vars['panes']);
  return $output;
}

/**
 * Implements theme_menu_tree() for the default main menu.
 */
function latto_menu_tree__menu_block__1($vars) { 
  return '<ul class="main-menu nav nav-inline">' . $vars['tree'] . '</ul>';
}

/**
 * Implements theme_menu_link().
 */
function latto_menu_link($vars) {

  // Remove classes.
  $remove = array();

  // Remove .leaf.
  if(theme_get_setting('latto_classes_menu_leaf')){
    $remove[] .= "leaf";
  }

  // Remove .has-children.
  if(theme_get_setting('latto_classes_menu_has_children')){
    $remove[] .= "has-children";
  }  

  // Remove .collapsed, .expanded and expandable.  
  if(theme_get_setting('latto_classes_menu_collapsed')){
    $remove[] .= "collapsed";
    $remove[] .= "expanded";
    $remove[] .= "expandable";
  }

  // Remove the classes.
  if($remove){
    $vars['element']['#attributes']['class'] = array_diff($vars['element']['#attributes']['class'],$remove);
  }

  // Remove menu-mlid-[NUMBER].
  if(theme_get_setting('latto_classes_menu_items_mlid')){  
    $vars['element']['#attributes']['class'] = preg_grep('/^menu-mlid-/', $vars['element']['#attributes']['class'], PREG_GREP_INVERT);
  }
  
  // Check if the class array is empty.
  if(empty($vars['element']['#attributes']['class'])){
    unset($vars['element']['#attributes']['class']);
  }
  
  $element = $vars['element'];

  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '><span>' . $output . $sub_menu . "</span></li>\n";
}

/**
 * Return an array of file names.
 *
 * @param $theme_name
 */
function load_polyfills($theme_name) {
  global $path_to_latto_core;

  // Get the info file data
  $info = latto_get_info($theme_name);

  // Build an array of polyfilling scripts
  $polyfills_array = drupal_static('latto_preprocess_html_polyfills_array');
  if (empty($polyfills_array)) {
    // Info file loaded conditional scripts
    $theme_path = drupal_get_path('theme', $theme_name);
    if (array_key_exists('ie_scripts', $info)) {
      foreach ($info['ie_scripts'] as $condition => $ie_scripts_path) {
        foreach ($ie_scripts_path as $key => $value) {
          $filepath = $theme_path . '/' . $value;
          $polyfills_array['info'][$condition][] = latto_theme_script($filepath);
        }
      }
    }
    // Latto Core Polyfills
    $polly = '';
    $polly_settings_array = array(
      'load_html5js',
      'load_selectivizr',
      'load_scalefixjs', // loaded directly by polly_wants_a_cracker(), its never returned
    );
    foreach ($polly_settings_array as $polly_setting) {
      $polly[$polly_setting] = theme_get_setting($polly_setting, $theme_name);
    }
    $backed_crackers = polly_wants_a_cracker($polly, $theme_name);
    foreach ($backed_crackers as $cupboard => $flavors) {
      foreach ($flavors as $key => $value) {
        $filepath = $path_to_latto_core . '/' . $value;
        $polyfills_array['latto'][$cupboard][] = latto_theme_script($filepath);
      }
    }
  }
  
  return $polyfills_array;
}

/**
 * Return a themed script.
 * Since Drupal 7 does not (yet) support the 'browser' option in drupal_add_js()
 * Latto provides a way to load scripts inside conditional comments.
 * This function wraps a file in script elements and returns a string.
 *
 * @param $filepath, path to the file.
 */
function latto_theme_script($filepath) {
  $script = '';

  // We need the default query string for cache control finger printing
  $query_string = variable_get('css_js_query_string', '0');

  if (file_exists($filepath)) {
    $file = file_create_url($filepath);
    $script = '<script src="' . $file . '?' . $query_string . '"></script>';
  }

  return $script;
}

/**
 * Return themed scripts in Conditional Comments.
 * Since Drupal 7 does not (yet) support the 'browser' option in drupal_add_js()
 * Adaptivetheme provides a way to load scripts inside conditional comments.
 * This function will return a string for printing into a template, its
 * akin to a real theme_function but its not.
 *
 * @param $ie_scripts, an array of themed scripts.
 */
function latto_theme_conditional_scripts($ie_scripts) {
  $themed_scripts = drupal_static(__FUNCTION__, array());
  if (empty($themed_scripts)) {
    $cc_scripts = array();

    foreach ($ie_scripts as $conditional_comment => $conditional_scripts) {
      $cc_scripts[] = '<!--[if ' . $conditional_comment . ']>' . "\n" . $conditional_scripts . "\n" . '<![endif]-->' . "\n";
    }
    $themed_scripts = implode("\n", $cc_scripts);
  }

  return $themed_scripts;
}

/**
 * Polyfills.
 * This function does two seperate operations. First it attaches a condition
 * to each Polyfill which can be either an IE conditional comment or 'all'.
 * Polyfills with 'all' are loaded immediatly via drupal_add_js(), those with
 * an IE CC are returned for further processing. This function is hard coded
 * to support only those scripts supplied by the core theme, if you need to load
 * a script for IE use the info file feature.
 *
 * @param $polly
 * @param $theme_name
 */
function polly_wants_a_cracker($polly, $theme_name) {
  global $path_to_latto_core;

  $baked_crackers = drupal_static(__FUNCTION__, array());
  if (empty($baked_crackers)) {
    if (in_array(1, $polly)) {

      $crackers = array();

      // HTML5 Shiv
      if ($polly['load_html5js'] === 1) {
        $crackers['all'][] = 'scripts/html5shiv.js';
      }
      // Selectivizr
      if ($polly['load_selectivizr'] === 1) {
        $crackers['all'][] = 'scripts/selectivizr-min.js';
      }
      // Scalefix.js
      if ($polly['load_scalefixjs'] === 1) {
        $crackers['all'][] = 'scripts/scalefix.js';
      }

      // Load Polyfills
      if (!empty($crackers)) {

        // We need the default query string for cache control finger printing
        $query_string = variable_get('css_js_query_string', '0');

        // "all" - no conditional comment needed, use drupal_add_js()
        if (isset($crackers['all'])) {
          foreach ($crackers['all'] as $script) {
            drupal_add_js($path_to_latto_core . '/' . $script, array(
              'type' => 'file',
              'scope' => 'header',
              'group' => JS_THEME,
              'preprocess' => TRUE,
              'cache' => TRUE,
              )
            );
          }
        }
      }
    }
  }

  return $baked_crackers;
}

/**
 * Return the info file array for a particular theme, usually the active theme.
 * Simple wrapper function for list_themes().
 *
 * @param $theme_name
 */
function latto_get_info($theme_name) {
  $info = drupal_static(__FUNCTION__, array());
  if (empty($info)) {
    $lt = list_themes();
    foreach ($lt as $key => $value) {
      if ($theme_name == $key) {
        $info = $lt[$theme_name]->info;
      }
    }
  }

  return $info;
}


/**
 * Overwrite views row classes
 *
 */
function latto_preprocess_views_view_unformatted(&$vars) {
  
  // Class names for overwriting
  $row_first = "first";
  $row_last  = "last";

  $view = $vars['view'];
  $rows = $vars['rows'];
  
  // Set arrays
  $vars['classes_array'] = array();
  $vars['classes'] = array();

  // Variables
  $count = 0;
  $max = count($rows);
  
  // Loop through the rows and overwrite the classes
  foreach ($rows as $id => $row) {
    $count++;     
    
    $vars['classes'][$id][] = $count % 2 ? 'odd' : 'even';
        
    if ($count == 1) {
      $vars['classes'][$id][] = $row_first;
    }
    if ($count == $max) {
      $vars['classes'][$id][] = $row_last;
    }

    if ($row_class = $view->style_plugin->get_row_class($id)) {
      $vars['classes'][$id][] = $row_class;
    }

    if ( $vars['classes']  && $vars['classes'][$id] ){
      $vars['classes_array'][$id] = implode(' ', $vars['classes'][$id]);
    } else {
      $vars['classes_array'][$id] = '';
    }
  }
}

/**
 * Override or insert variables into template user_picture.tpl.php
 * 
 * @param $variables
 *   An array of variables to pass to the theme template.
 */
function latto_preprocess_user_picture(&$variables) {
  // inject the class we need into the A tag of user_picture
  $variables['user_picture'] = str_replace('<a ', '<a class="span2 thumbnail" ', $variables['user_picture']);
  // inject the class we need into the IMG tag of user_picture
  $variables['user_picture'] = str_replace('<img ', '<img class="pull-left" ', $variables['user_picture']);
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function latto_preprocess_node(&$variables, $hook) {
  // Add latto_byline to variables
  $variables['latto_byline'] = t('By: ');  
  
  // Add latto_event_location and latto_place2book_tickets to variables (only for ding_event node template)
  if ($variables['content']['#bundle'] == 'ding_event') { 
    $event_location = 'location';
    if (!empty($variables['content']['field_address'][0]['#address']['name_line'])) {
      $event_location = $variables['content']['field_address'][0]['#address']['name_line'] . '<br/>' . $variables['content']['field_address'][0]['#address']['thoroughfare'] . ', ' . $variables['content']['field_address'][0]['#address']['locality']; 
    }
    else {
      // TODO: the full address wil have to be retrieved from the database
      $event_location = render($variables['content']['group_audience'][0]); 
    }
    $variables['latto_event_location'] = $event_location;
    
    // Set a flag for existence of field_place2book_tickets
    $variables['latto_place2book_tickets'] = (isset($variables['content']['field_place2book_tickets'])) ? 1: 0;
  }
  
  // Add latto_ding_content_tags  to variables.
  $variables['latto_ding_content_tags'] = '';
  if (isset($variables['content']['ding_content_tags'])) {
    $latto_ding_content_tags = '';
    $items = $variables['content']['ding_content_tags']['#items'];
    if (count($items) > 0) {
      foreach ($items as $delta => $item) {
        $latto_ding_content_tags .= render($variables['content']['ding_content_tags'][$delta]);
        if ($delta != count($items)-1) {
          $latto_ding_content_tags .=  ',&nbsp;'; 
        }
      }
      $variables['latto_ding_content_tags'] = t('Tags: ') . $latto_ding_content_tags;
    }
  }
  
  // Add updated to variables.
  $variables['latto_updated'] = t('Updated: !datetime', array('!datetime' => format_date($variables['node']->changed, 'custom', 'l j. F Y')));
  
  // Modified submitted variable
  if ($variables['display_submitted']) {
    $variables['submitted'] = t('Submitted: !datetime', array('!datetime' => format_date($variables['created'], 'custom', 'l j. F Y')));
  }
}

/*
 * Implementing the ticketsinfo theme function (support for ding_place2book module)
 */
function latto_place2book_ticketsinfo($variables) {
  $output = '';
  $place2book_id = $variables['place2book_id'];
  $url = $variables['url'];
  $type = $variables['type'];
  
  switch ($type) {
    case 'event-over':
      $output = '<button class="btn btn-warning btn-large">' . t('The event has already taken place') . '</button>';
      break;
    case 'closed-admission':
      $output = '<button class="btn btn-warning btn-large">' . t('Not open for ticket sale') . '</button>';
      break;
    case 'no-tickets-left':
      $output = '<button class="btn btn-warning btn-large">' . t('Sold out') . '</button>';
      break;
    case 'order-link':
      $output = l(t('Book a ticket'), $url, array('attributes' => array('class' => array('btn', 'btn-primary', 'btn-large'))));
      break;
    default:
      $output = '';
      break;
  }
  
  return $output;
}
