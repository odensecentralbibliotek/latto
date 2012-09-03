# Latto Ding 2 basetheme
Latto is the basetheme for the Ding 2 Drupal distribution. It's a highly flexible
theme providing a variation of layouts and styles.

## SASS and Compass
The Latto them is built using SASS and Compass.
SASS files are located in the folder sass and the compiled CSS files in the folder css.
Latto is depending on zen-grids for Compass, install this by executing this command: gem install zen-grids

## Grid system
the grid system is based on zen-grids, http://zengrids.com/ for full grid documentation look in the file sass/grid-readme.md

## Panels everywhere
The Latto theme use panels everywhere (http://drupal.org/project/panels_everywhere)
instead of Drupals built in blocks and regions system.
Latto does provide a page.tpl fallback in case you don't want to run your site
using Panels everywhere.

## Documentation
Besides the various readme files you will find inside theme folders,
latto provide a full overview of available markup and classes.
This documentation can be found here: profiles/ding2/themes/latto/tools/tdcss/

##Dependencies

Latto is worth nothing without the module ding_latto_frontend, https://github.com/ding2tal/ding_latto_frontend
So make sure to install this.

Latto theme is depending on Panels Everywhere and Menu Blocks.
Both these modules will eventually be a part of make files in Ding 2 core.
But for now you have to install and enable these modules yourself.

##Use as base theme
When using latto as a base theme use the example starter theme located in the folder latto_startertheme.  