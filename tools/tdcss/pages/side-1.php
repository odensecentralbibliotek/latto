<?php
  /*
   * Assembled mockup page for Event, full page
   */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Ding2tal mockup page: Frontpage</title>

  <?php include 'mockup_head.inc'; ?>
  <?php include 'scripts.inc'; ?>
</head>
<body>

<div id="page" class="latto-site-template">

  <header class="grid-wrapper">
    <div class="grid-inner">
      <div class="panel-pane pane-pane-header" >
        <div class="header-inner">        
          <div class="grid-row">
            <div class="grid-6-left">
              <?php include_once('../markup/miscellaneous/misc-06-site-name.inc'); ?>
            </div>  
            <div class="grid-10-right">
              <div class="login-block" style="float: right;">
                <?php include_once('../markup/miscellaneous/misc-03-login.inc'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <article class="grid-wrapper">
    <div class="grid-inner">
      
      <div class="nav-wrapper panel-pane pane-block pane-menu-block-1">
        <?php include_once('../markup/navigation/nav-01-mainmenu.inc'); ?>
      </div>
      
      <div class="search-wrapper panel-pane pane-block pane-search-form">
        <div class="search-inner-wrapper">
          <?php include_once('../markup/forms/form-03-4-indent-large.inc'); ?>
        </div>
      </div>

      <div class="panel-pane pane-page-content">
        <div class="pane-content">
          <div class="grid-wrapper">
            <div class="grid-inner">
              <div class="grid-row-full">
                <div class="panel-pane pane-carousel">
                  <div class="pane-content">
                    <?php include '../markup/miscellaneous/misc-08-carousel.inc' ?>
                  </div>
                </div>                
              </div>
            <div class="grid-row equalize-height">
              <div class="grid-8-left">
                <div class="grid-content">
                  <div class="panel-pane pane-views pane-ding-news">

                    <div class="pane-content">
                      <?php include '../markup/lists/list-1-default.inc'; ?>
                    </div>

                  </div>
                </div>
              </div>

              <aside class="grid-4-center-right">
                <div class="grid-content">
                  <div class="panel-pane pane-views pane-ding-news">

                    <div class="pane-content">
                      <?php include '../markup/lists/list-4-date-list.inc'; ?>
                    </div>

                  </div>
                </div>
              </aside>


              <aside class="grid-4-right">
                <div class="grid-content">
                  <div class="panel-pane pane-views pane-ding-news">

                    <div class="pane-content">
                      <?php include '../markup/lists/list-8-date-list-compact.inc'; ?>
                    </div>

                  </div>
                </div>
              </aside>

            </div>
          </div>
        </div>
      </div>

    </div>

  </article>


  <footer class="grid-wrapper">
    <div class="grid-inner">
      <div class="grid-row-full">
        <div class="grid-content">
          <div class="grid-4-left">
            <h3 class="block-title">Footer 1</h3>
            <ul>
              <li><a href="#" title="Adgang for alle">Adgang for alle</a></li>
              <li><a href="#" title="Bibliotekets Nyhedsliste">Bibliotekets Nyhedsliste</a></li>
              <li><a href="#" title="FAQ - sådan gør du">FAQ - sådan gør du</a></li>
              <li><a href="#" title="Nyhedslister">Nyhedslister</a></li>
              <li><a href="#" title="Publikationer">Publikationer</a></li>
              <li><a href="#" title="Temalister">Temalister</a></li>
            </ul>
          </div>
          <div class="grid-4-center-left">
            <h3 class="block-title">Footer 2</h3>
            <ul>
              <li><a href="#" title="Adgang for alle">Adgang for alle</a></li>
              <li><a href="#" title="Bibliotekets Nyhedsliste">Bibliotekets Nyhedsliste</a></li>
              <li><a href="#" title="FAQ - sådan gør du">FAQ - sådan gør du</a></li>
              <li><a href="#" title="Nyhedslister">Nyhedslister</a></li>
              <li><a href="#" title="Publikationer">Publikationer</a></li>
              <li><a href="#" title="Temalister">Temalister</a></li>
            </ul>
          </div>
          <div class="grid-4-center-right">
            <h3 class="block-title">Footer 3</h3>
            <ul>
              <li><a href="#" title="Adgang for alle">Adgang for alle</a></li>
              <li><a href="#" title="Bibliotekets Nyhedsliste">Bibliotekets Nyhedsliste</a></li>
              <li><a href="#" title="FAQ - sådan gør du">FAQ - sådan gør du</a></li>
              <li><a href="#" title="Nyhedslister">Nyhedslister</a></li>
              <li><a href="#" title="Publikationer">Publikationer</a></li>
              <li><a href="#" title="Temalister">Temalister</a></li>
            </ul>
          </div>
          <div class="grid-4-right">
            <h3 class="block-title">Footer 4</h3>
            <ul>
              <li><a href="#" title="Adgang for alle">Adgang for alle</a></li>
              <li><a href="#" title="Bibliotekets Nyhedsliste">Bibliotekets Nyhedsliste</a></li>
              <li><a href="#" title="FAQ - sådan gør du">FAQ - sådan gør du</a></li>
              <li><a href="#" title="Nyhedslister">Nyhedslister</a></li>
              <li><a href="#" title="Publikationer">Publikationer</a></li>
              <li><a href="#" title="Temalister">Temalister</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>

