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

</head>
<body>

<div id="page" class="latto-site-template">

  <header class="grid-full">
    <div class="grid-inner">
      <div class="panel-pane pane-pane-header" >
        <div class="pane-content">
          <div class="header-inner">
            <div class="site-name">
              <a href="/" title="Home" rel="home">Biblioteksnavn</a>
            </div>
            <div class="site-slogan">Her kan der evt. stå et slogan</div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <article class="grid-full">
    <div class="grid-inner">
      <div class="nav-wrapper panel-pane pane-block pane-menu-block-1">
        <ul class="main-menu nav nav-inline"><li class="first active" style="width: 236px;"><span><a class="active" title="" href="/">Forsiden</a></span></li>
          <li style="width: 236px;"><span><a href="/events">Events</a></span></li>
          <li style="width: 236px;"><span><a href="/libraries">Libraries</a></span></li>
          <li style="width: 236px;"><span><a href="/news">News</a></span></li>
          <li class="last" style="width: 236px;"><span><a href="/page/kan">Det kan du</a></span></li>
        </ul>
      </div>
      <div class="search-wrapper panel-pane pane-block pane-search-form">
        <div class="search-inner-wrapper">
          <form accept-charset="UTF-8" id="search-block-form" method="post" action="/">
            <div>
              <h2 class="element-invisible">Search form</h2>
              <div class="form-item form-type-textfield form-item-search-block-form">
                <label for="edit-search-block-form--2" class="element-invisible">Search</label>
                <input type="text" maxlength="128" size="15" value="" name="search_block_form" id="edit-search-block-form--2" class="has-example form-text ui-autocomplete-input example" title="Søg efter materialer fra biblioteket.." autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
              </div>
              <div id="edit-actions" class="form-actions form-wrapper">
                <input type="submit" value="Search" name="op" id="edit-submit" class="btn btn-large btn-info form-submit">
              </div>
              <input type="hidden" value="form-iEXKcmcap-BsYSQjt_cPnRNti2wZeNEsOASFNM1EoBM" name="form_build_id">
              <input type="hidden" value="search_block_form" name="form_id">
              <input type="hidden" value="" name="sort" id="controls_search_sort">
              <input type="hidden" value="" name="size" id="controls_search_size">
            </div>
          </form>
        </div>
      </div>

      <div class="panel-pane pane-page-content">

        <div class="pane-content">
          <div>

            <div class="grid-row grid-content">
              <div class="grid-8-left">
                <div class="grid-inner">
                  <div class="panel-pane pane-views pane-ding-news">

                    <div class="pane-content">
                      <?php include '../markup/lists/list-1-default.inc'; ?>
                    </div>

                  </div>
                </div>
              </div>

              <aside class="grid-4-center-right">
                <div class="grid-inner">
                  <div class="panel-pane pane-views pane-ding-news">

                    <div class="pane-content">
                      <?php include '../markup/lists/list-4-date-list.inc'; ?>
                    </div>

                  </div>
                </div>
              </aside>


              <aside class="grid-4-right">
                <div class="grid-inner">
                  <div class="panel-pane pane-views pane-ding-news">

                    <div class="pane-content">
                      <?php include '../markup/lists/list-7-compact.inc'; ?>
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


  <div class="grid-full bottom">
    <div class="grid-inner">

    </div>
  </div>

</body>
</html>

