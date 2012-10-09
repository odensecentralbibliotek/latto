<?php
  /*
   * Assembled mockup page for Event, full page
   */
?>
<html>
<head>
    <title>Ding2tal mockup page: Frontpage</title>

    <link rel="stylesheet" href="src/tdcss.css" type="text/css" media="screen">

    <!-- Project CSS -->
    <link rel="stylesheet" href="../../../css/latto.bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../../css/latto.styles.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../demo/style.css" type="text/css" media="screen">

    <script type="text/javascript" src="../src/vendors/jquery.js"></script>
    <script type="text/javascript" src="../src/tdcss.js"></script>

</head>
<body>

<div id="page" class="latto-site-template">

  <header class="grid-full">
    <div class="grid-inner">
      <div class="panel-pane pane-pane-header" >
        <div class="pane-content">
          <div class="header-inner">
            <div class="logo">
                <a href="/da" title="Hjem" rel="home">
                  <img src="http://ding2.dev/sites/all/themes/ddbasic/logo.png" alt="Hjem" />
               </a>
            </div>
            <div class="site-name">
              <a href="/da" title="Hjem" rel="home">
                ding2.dev
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    
  <article class="grid-full">
    <div class="grid-inner">
      
      <div class="search-wrapper contextual-links-region panel-pane pane-block pane-search-form" >
        <div class="search-inner-wrapper">
          <form action="/da/events/daisy-day" method="post" id="search-block-form" accept-charset="UTF-8"><div>  <h2 class="element-invisible">Søgefelt</h2>
            <div class="form-item form-type-textfield form-item-search-block-form">
              <label class="element-invisible" for="edit-search-block-form--2">Søg </label>
             <input title="Søg efter materialer fra biblioteket.." class="has-example form-text" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" />
            </div>
            <div class="form-actions form-wrapper" id="edit-actions"><input class="btn btn-large btn-info form-submit" type="submit" id="edit-submit" name="op" value="Søg" /></div><input type="hidden" name="form_build_id" value="form-9O-FKcL3OernxUXdNeUKILa1BPrPTyDoUBX_QkehtU8" />
            <input type="hidden" name="form_token" value="g0KHxzSfQZNav_NkHRoonpQWriMvPjSRu_bIHWxsUrY" />
            <input type="hidden" name="form_id" value="search_block_form" />
            <input id="controls_search_sort" type="hidden" name="sort" value="" />
            <input id="controls_search_size" type="hidden" name="size" value="" />
            </div>
          </form>  
        </div>
      </div>

      <div class="panel-pane pane-page-content" >
        <div class="pane-content">
          <div class="contextual-links-region">
            <div  class="grid-row grid-content">
              <div class="grid-10-center">
                <?php include('../markup/node_examples/nodeex-3-nodetype-event.php');?>
                <?php include('../markup/base_elements/hr-ruler-1.php');?>
                <?php include('../markup/typography/typography-02-h2.php');?>
                <?php include('../markup/lists/list-7-simple.php');?>
                <?php include('../markup/base_elements/hr-ruler-1.php');?>
                <?php include('../markup/miscellaneous/misc-01-signature.php');?>
              </div>
            </div>
            
            <aside class="grid-3-left">
              <div class="grid-inner">
                <div class="panel-pane pane-event-category-menu" >
                  <div class="pane-content">
                    <?php include('../markup/miscellaneous/misc-02-subject-list.php');?>
                  </div>
               </div>
             </div>
           </aside>
           <aside class="grid-3-right">
             <div class="grid-inner">
               <?php include('../markup/lists/list-2-floated.php');?>
             </div>
           </aside>
          </div>
        </div>  
      </div>
    
    </div>
  </article>
    

  <div class="grid-full bottom">
    <div class="grid-inner">

    </div>
  </div>
    
</body>
</html>

