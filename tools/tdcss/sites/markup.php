<head>
  <title>Markup Guidelines</title>
  <script type="text/javascript">
    $(function(){
        $("#tdcss").tdcss();
    })
  </script>
</head>
<body>
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

            $elements = array();

            // Scan all the files in the markup folder and add them to the array.
            foreach(scandir('markup') as $file) {
              if (strpos($file, '.inc') > 0) {
                $elements[] = $file;
              }
            }
            // Sort the array so elements appear in alphabetically order, both in menu and in the actually list.
            sort($elements);
            // Initialize empty variable to hold the HTML for the left hand menu.
            $html_menu = '';
            
            // Iterate through the elements and add each element to the menu.
            foreach($elements as $link) { 
              $names = explode('.', $link);
              $name = ucwords(str_replace(array('-', '_'), ' ', $names[0]));
              
              $html_menu .= "<li><a href=\"#$names[0]\"><i class\"icon-chevron-right\"></i> $name</a></li>";
            }
            
            echo $html_menu;
          ?>
        </ul>
      </div>
    </div>
    <div class="grid-13-right">
      <div class="grid-inner">
        <div id="tdcss">
          <?php
            foreach($elements as $link) {
              include_once('markup/' . $link);
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
  <script src="src/vendors/bootstrap-scrollspy.js"></script>
  <script src="src/vendors/google-code-prettify/prettify.js"></script>
</body>