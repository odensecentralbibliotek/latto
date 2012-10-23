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

  <header class="grid-full">
    <div class="grid-inner">
      <div class="panel-pane pane-pane-header" >
        <div class="header-inner">        
          <div class="grid-row grid-content">
            <div class="grid-6-left">
              <div class="site-name">
                <a href="/" title="Home" rel="home">Biblioteksnavn</a>
                <div class="site-slogan">Her kan der evt. stå et slogan</div>
              </div>
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
                <i class="icon-search"></i>
                <input type="text" maxlength="128" size="15" value="" name="search_block_form" id="edit-search-block-form--2" class="has-example form-text ui-autocomplete-input example indent" title="Søg efter materialer fra biblioteket.." autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" />
                <div id="edit-actions" class="form-actions form-wrapper">
                  <input type="submit" value="Search" name="op" id="edit-submit" class="btn btn-primary form-submit">
                </div>
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
          <div class="grid-row">
            <div class="grid-full">
              <div class="grid-inner">
                <div class="panel-pane pane-carousel">
                  <div class="pane-content">
                    <!-- The wrapper div is important because rs-carousel replaces it -->
                    <div class="rs-carousel-wrapper rs-carousel-wide">
                      <div class="rs-carousel rs-carousel-horizontal rs-carousel-items-auto" aria-disabled="false">
                        <div class="rs-carousel-inner">
                          <div class="ajax-loader element-hidden"></div>
                          <div class="rs-carousel-title">Harry Potter</div>
                          <div class="rs-carousel-mask">
                            <ul class="rs-carousel-runner" style="width: 1680px; left: 0px; ">
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:27267912" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/d2f313989e4afe6c371c960d81d46854.jpg" alt=""></a>
                                <a href="ting/collection/775100:27267912" class="rs-carousel-item-title">Harry Potter og dødsregalierne</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:29316910" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/e584b62f717b4fcd9ef5754796294403.jpg" alt=""></a>
                                <a href="ting/collection/775100:29316910" class="rs-carousel-item-title">Harry Potter og dødsregalierne</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:26917921" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/8ca26db5f8aa5322041330d5fbe4633c.jpg" alt=""></a>
                                <a href="ting/collection/775100:26917921" class="rs-carousel-item-title">Harry Potter og dødsregalierne</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:28744129" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/b9938c9af24d99ba5095aa790187e566.jpg" alt=""></a>
                                <a href="ting/collection/775100:28744129" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 1</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:28529724" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/41e4590e38efe411d6b2b318d3cc9a1d.jpg" alt=""></a>
                                <a href="ting/collection/775100:28529724" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 1</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:28870671" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/75d374dfda51e720e30ca16ec0d6f8d0.jpg" alt=""></a>
                                <a href="ting/collection/775100:28870671" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 2</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:29114668" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/09797524469a3a251e382166a299dcef.jpg" alt=""></a>
                                <a href="ting/collection/775100:29114668" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 2</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:29317038" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/cda2d94d5ae0e31ed61f9d8615624ded.jpg" alt=""></a>
                                <a href="ting/collection/775100:29317038" class="rs-carousel-item-title">Harry Potter og De Vises Sten</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:25194853" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/0ff76bbd78cffb7361cf3f69617c35d1.jpg" alt=""></a>
                                <a href="ting/collection/775100:25194853" class="rs-carousel-item-title">Harry Potter og De Vises Sten</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:22252852" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/00ec87c28d71e8db45d141f2938102aa.jpg" alt=""></a>
                                <a href="ting/collection/775100:22252852" class="rs-carousel-item-title">Harry Potter og De Vises Sten</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:22629344" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/13d8cb4abc48d3d1cf1c191c9c926535.jpg" alt=""></a>
                                <a href="ting/collection/775100:22629344" class="rs-carousel-item-title">Harry Potter og De Vises Sten</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:28527454" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/b0d8805ce46f21e845ac0058c3a6ab21.jpg" alt=""></a>
                                <a href="ting/collection/775100:28527454" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 1</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:28527276" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/798fc53a3f537c6b37408a5c2138d8ab.jpg" alt=""></a>
                                <a href="ting/collection/775100:28527276" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 1</a>
                              </li>
                              <li class="rs-carousel-item">
                                <a href="ting/collection/775100:28527373" class="rs-carousel-item-image"><img src="http://ding2tal.ting.dk/sites/default/files/styles/ting_search_carousel/public/ting_search_carousel/ab181d7927320150df2845e794553c33.jpg" alt=""></a>
                                <a href="ting/collection/775100:28527373" class="rs-carousel-item-title">Harry Potter and the deathly hallows - part 1</a>
                              </li>
                            </ul>
                          </div>
                          <ol class="rs-carousel-pagination">
                            <li class="rs-carousel-pagination-link rs-carousel-pagination-link-active">
                              <a href="#page-1">1</a>
                            </li>
                            <li class="rs-carousel-pagination-link">
                              <a href="#page-2">2</a>
                            </li>
                            <li class="rs-carousel-pagination-link">
                              <a href="#page-3">3</a>
                            </li>
                          </ol>
                        </div>

                        <!-- Only print tabs if there is more than 1 -->
                        <div class="rs-carousel-tabs">
                          <ul>
                            <li class="active" style="width: 295px; ">
                              <a href="#">Harry Potter</a>
                            </li>
                            <li class="" style="width: 295px; ">
                              <a href="#">Isabel Allende</a>
                            </li>
                            <li class="" style="width: 295px; ">
                              <a href="#">Skole start</a>
                            </li>
                            <li class="" style="width: 295px; ">
                              <a href="#">Olympiske Lege</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-row grid-content equalize-height">
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
                    <?php include '../markup/lists/list-8-date-list-compact.inc'; ?>
                  </div>

                </div>
              </div>
            </aside>

          </div>
        </div>
      </div>

    </div>

  </article>


  <footer class="grid-full">
    <div class="grid-inner">
      <div class="panel-pane pane-footer">
        <div class="pane-content">
          <div class="ding-footer-wrapper grid-full">
            <div class="grid-row grid-content">
              <div class="grid-inner">
                <div class="grid-4-left grid-content">
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
        </div>
      </div>
    </div>
  </footer>

</body>
</html>

