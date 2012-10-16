/**
 * equalize.js
 * Author & copyright (c) 2012: Tim Svensen
 * Dual MIT & GPL license
 *
 * Page: http://tsvensen.github.com/equalize.js
 * Repo: https://github.com/tsvensen/equalize.js/
 *
 * The jQuery plugin for equalizing the height or width of elements.
 *
 * Equalize will accept any of the jQuery Dimension methods:
 *   height, outerHeight, innerHeight,
 *   width, outerWidth, innerWidth.
 *
 * EXAMPLE
 * $('.parent').equalize(); // defaults to 'height'
 * $('.parent').equalize('width'); // equalize the widths
 *
 * ADVANCED EXAMPLE
 * Get the minimum max dimension by removing the existing height/width
 * $('.parent').equalize({reset: true}); // equalize height by default, remove existing height, then determin max
 * $('.parent').equalize({equalize: 'width', reset: true}); // equalize width, remove existing width, then determin max
 */(function(e){e.fn.equalize=function(t){var n=this,r=!1,i,s;if(e.isPlainObject(t)){i=t.equalize||"height";r=t.reset||!1}else i=t||"height";if(!e.isFunction(e.fn[i]))return!1;s=i.indexOf("eight")>0?"height":"width";return n.each(function(){var t=e(this).children(),n=0;t.each(function(){var t=e(this),o;r&&t.css(s,"");o=t[i]();o>n&&(n=o)});t.css(s,n+"px")})}})(jQuery);