<?php

/**
 * @file
 * Latto's theme implementation to display event nodes.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $date (NOTE: modified for latto
 *   during latto_preprocess_node in templates.php)
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * Latto specific variables:
 * - $latto_updated: Information about latest update on the node created from $date during
 *   latto_preprocess_node().  
 * - $latto_ding_content_tags: Tags, as a comma-separated list of links with leading text "Tags: "    
 * - $latto_event_location: String containing adress info for either field_address or group_audience,
 *   as relevant for the event node 
 * - $latto_ding_event_target: event target as link
 * - $latto_byline: outputs byline to be used before $name  
 * - $latto_place2book_tickets: flag for field_place2book_tickets   
 * 
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<section class="span7" role="main">
  <article>
    <?php print render($content['field_main_image'][0]); ?>

    <header class="page-header">
        <p>
            <i class="icon-tag"></i> <?php print render($content['field_ding_event_category'][0]); ?>
            <i class="icon-map-marker"></i> <?php print render($content['group_audience'][0]); ?>
        </p>

        <hr/>

        <h1><?php print $title; ?></h1>

        <div class="row-fluid">
            <div class="lead span8">
                <p><?php print render($content['field_ding_event_manchet'][0]); ?></p>
                <?php if ($latto_place2book_tickets): ?>
                  <p><?php print render($content['field_place2book_tickets'][0]); ?><p>
                <?php endif; ?>
            </div>
            <div class="span4">
                <p>
                    <i class="icon-calendar"></i>
                    <?php print render($variables['content']['field_event_date'][0]); ?>
                </p>
                <p>
                    <i class="icon-home"></i>
                    <?php print $latto_event_location; ?>
                </p>
                <p>
                    <i class="icon-user"></i>
                    <?php print render($content['field_ding_event_target'][0]); ?>
                </p>
                <p>
                    <i class="icon-shopping-cart"></i>
                    <?php print render($content['field_event_ticket_price'][0]); ?>
                </p>
            </div>
        </div>
    </header>
    
    <?php
      // hide fields we have already rendered
      hide($content['field_main_image']);
      hide($content['field_ding_event_category']);
      hide($content['group_audience']);
      hide($content['field_ding_event_manchet']);
      hide($content['field_place2book_tickets']); //<-- field provided by optional module ding_place2book
      hide($content['field_event_date']);
      hide($content['field_address']);
      hide($content['field_ding_event_target']);
      hide($content['field_event_ticket_price']);
      
      // Hide fields now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['ding_content_tags']);
      print render($content);
    ?>
  </article>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <footer class="row-fluid">
        <?php print $user_picture; ?>
        <div class="span10">
            <h4>
                <?php print $latto_byline; ?>
                <?php print $name; ?>
            </h4>
            <p>
                <i class="icon-time"></i>
                <?php print $submitted; ?> • <?php print $latto_updated; ?>
                <br>
                <i class="icon-tag"></i>
                <?php print $latto_ding_content_tags; ?>
            </p>
        </div>
    </footer>
      
  <?php endif; ?>
  
</section>

<?php print render($content['comments']); ?>