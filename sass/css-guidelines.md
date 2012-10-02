# CSS guide

Based on the Ding2 code guidelines (http://ting.dk/wiki/ding-code-guidelines)
and https://github.com/necolas/idiomatic-css.

## Example of CSS declaration order:

.selector {
  /* Positioning */
  position: absolute;
  z-index: 10;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  /* Display & Box Model */
  display: inline-block;
  overflow: hidden;
  box-sizing: border-box;
  width: 100px;
  height: 100px;
  padding: 10px;
  border: 10px solid #333;
  margin: 10px;

  /* Other */
  background: #000;
  color: #fff
  font-family: sans-serif;
  font-size: 16px;
  text-align: right;
}

## Preprocessors: @extend, include etc.

.selector {
  @extend .other-rule;
  @include clearfix();
  @include box-sizing(border-box);

  // other declarations
}