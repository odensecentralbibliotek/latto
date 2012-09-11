<?php
  /*
   * Markup documentation for Latto framework theme.
   */
?>
<html>
<head>
    <title>Ding2tal markup demo</title>

    <link rel="stylesheet" href="src/tdcss.css" type="text/css" media="screen">

    <!-- Project CSS -->
    <link rel="stylesheet" href="../../css/latto.bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../css/latto.styles.css" type="text/css" media="screen">
    <link rel="stylesheet" href="demo/style.css" type="text/css" media="screen">

    <script type="text/javascript" src="src/vendors/jquery.js"></script>
    <script type="text/javascript" src="src/tdcss.js"></script>
    <script type="text/javascript">
         $(function(){
             $("#tdcss").tdcss();
         })
    </script>

</head>
<body data-spy="scroll" data-target=".docs-sidebar">

  <div class="grid-row">
    <div class="grid-3-left">
      <div class="grid-inner docs-sidebar">
        <ul class="nav nav-list docs-sidenav affix">
          <?php
            /*
             * The section id used for navigation is generated by tdcss.js
             * and use the tdcss section name lowercased and spaces replaced with -.
             *
             * ex. Base elements is base-elements.
             */
          ?>
          <li class="active"><a href="#base-elements"><i class="icon-chevron-right"></i> Base elements</a></li>
          <li><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
          <li><a href="#forms"><i class="icon-chevron-right"></i> Forms</a></li>
          <li><a href="#buttons"><i class="icon-chevron-right"></i> Buttons</a></li>
          <li><a href="#tables"><i class="icon-chevron-right"></i> Tables</a></li>
          <li><a href="#pagers"><i class="icon-chevron-right"></i> Pagers</a></li>
          <li><a href="#pagination"><i class="icon-chevron-right"></i> Pagination</a></li>
          <li><a href="#labels"><i class="icon-chevron-right"></i> Labels</a></li>
          <li><a href="#lists"><i class="icon-chevron-right"></i> Lists</a></li>
          <li><a href="#tabs"><i class="icon-chevron-right"></i> Tabs</a></li>
          <li><a href="#grid"><i class="icon-chevron-right"></i> Grid</a></li>
        </ul>
      </div>
    </div>
    <div class="grid-13-right">
      <div class="grid-inner">
        <div id="tdcss">
          <?php include_once('markup/base_elements.php'); ?>
          <?php include_once('markup/typography.php'); ?>
          <?php include_once('markup/forms.php'); ?>
          <?php include_once('markup/buttons.php'); ?>
          <?php include_once('markup/tables.php'); ?>
          <?php include_once('markup/pagers.php'); ?>
          <?php include_once('markup/pagination.php'); ?>
          <?php include_once('markup/labels.php'); ?>
          <?php include_once('markup/lists.php'); ?>
          <?php include_once('markup/tabs.php'); ?>
          <?php include_once('markup/grid.php'); ?>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
  <script src="src/vendors/bootstrap-scrollspy.js"></script>

</body>
</html>