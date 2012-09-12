<!-- # Forms -->

<!-- : Basic form elements -->
<form>
  <label>Label name</label>
  <input type="text" placeholder="Type something...">
  <span class="help-block">Example block-level help text here.</span>
  <select id="select01">
    <option>something</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
  <label class="checkbox">
    <input type="checkbox"> Check me out
  </label>
  <button type="submit" class="btn">Submit</button>
</form>

<!-- : Inline form -->
<form class="form-inline">
  <input type="text" class="input-small" placeholder="Email">
  <input type="password" class="input-small" placeholder="Password">
  <label class="checkbox">
    <input type="checkbox"> Remember me
  </label>
  <button type="submit" class="btn">Sign in</button>
</form>

<!-- : Horizontal forms -->
<form class="form-horizontal">
  <fieldset>
    <legend>Legend text</legend>
    <div class="control-group">
      <label class="control-label" for="input01">Text input</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="input01">
        <p class="help-block">Supporting help text</p>
      </div>
    </div>
  </fieldset>
</form>

<!-- : Form validation, warning -->
<div class="control-group warning">
  <label class="control-label" for="inputWarning">Input with warning</label>
  <div class="controls">
    <input type="text" id="inputWarning">
    <span class="help-inline">Something may have gone wrong</span>
  </div>
</div>
<!-- : Form validation, error -->
<div class="control-group error">
  <label class="control-label" for="inputError">Input with error</label>
  <div class="controls">
    <input type="text" id="inputError">
    <span class="help-inline">Please correct the error</span>
  </div>
</div>
<!-- : Form validation, success -->
<div class="control-group success">
  <label class="control-label" for="inputSuccess">Input with success</label>
  <div class="controls">
    <input type="text" id="inputSuccess">
    <span class="help-inline">Woohoo!</span>
  </div>
</div>
<!-- : Form validation, success, select box -->
<div class="control-group success">
  <label class="control-label" for="selectError">Select with success</label>
  <div class="controls">
    <select id="selectError">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <span class="help-inline">Woohoo!</span>
  </div>
</div>
<!-- : Form validation, form actions -->
<div class="form-actions">
  <button type="submit" class="btn btn-primary">Save changes</button>
  <button class="btn">Cancel</button>
</div>
<!-- : Prepended text -->
<div class="input-prepend">
  <span class="add-on">@</span><input class="span2" id="prependedInput" size="16" type="text">
</div>

<!-- : Textarea -->
<form class="form-inline">
  <textarea rows="3">Textarea...</textarea>
</form>