<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>

<div id="page">
  
  <header id="header">

    <?php print render($page['header']); ?>    
    
  </header>
  
  <div id="content">
    
    <?php print render($page['content']); ?>
    
    <h1>HTML examples</h1>
    
    <h2>Headers</h2>
    <p>Example of headers available.</p>
    <h1>Header 1</h1>
    <h2>Header 2</h2>
    <h3>Header 3</h3>
    <h4>Header 4</h4>
    <h5>Header 5</h5>
    <h6>Header 6</h6>
    <br />
    <h2>Tables</h2>
    <p>This is the different tables styles available.
    <h3>Table default</h3>
    <table class="table">
      <thead>
        <tr>
          <th>Header</th>
          <th>Header</th>
          <th>Header</th>
        </tr>
      </thead>
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>                
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>
    </table>
    <h3>Table stribed</h3>
    <table class="table table-stribed">
      <tr>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
      </tr>
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>                
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>
    </table>
    <h3>Table bordered</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Header</th>
          <th>Header</th>
          <th>Header</th>
        </tr>
      </thead>
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>                
      <tr>
        <td>Column</td>
        <td>Column</td>
        <td>Column</td>
      </tr>
    </table>
    <br />
    <h2>Buttons</h2>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Button</th>
          <th>class=""</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><button href="#" class="btn">Default</button></td>
          <td><code>btn</code></td>
          <td>Standard gray button with gradient</td>
        </tr>
        <tr>
          <td><button href="#" class="btn btn-primary">Primary</button></td>
          <td><code>btn btn-primary</code></td>
          <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
        </tr>
        <tr>
          <td><button href="#" class="btn btn-info">Info</button></td>
          <td><code>btn btn-info</code></td>
          <td>Used as an alternative to the default styles</td>
        </tr>
        <tr>
          <td><button href="#" class="btn btn-success">Success</button></td>
          <td><code>btn btn-success</code></td>
          <td>Indicates a successful or positive action</td>
        </tr>
        <tr>
          <td><button href="#" class="btn btn-warning">Warning</button></td>
          <td><code>btn btn-warning</code></td>
          <td>Indicates caution should be taken with this action</td>
        </tr>
        <tr>
          <td><button href="#" class="btn btn-danger">Danger</button></td>
          <td><code>btn btn-danger</code></td>
          <td>Indicates a dangerous or potentially negative action</td>
        </tr>
        <tr>
          <td><button href="#" class="btn btn-inverse">Inverse</button></td>
          <td><code>btn btn-inverse</code></td>
          <td>Alternate dark gray button, not tied to a semantic action or use</td>
        </tr>
      </tbody>
    </table>    
  </div>
  
  <footer id="footer">

    <?php print render($page['footer']); ?>    
    
  </footer>
  
</div>
