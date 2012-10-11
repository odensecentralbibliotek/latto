<!-- # Forms -->

<!-- : Basic form elements -->
<form enctype="multipart/form-data" action="" method="post" id="styleguide-form" accept-charset="UTF-8" class="overlay-processed">
  <div>
    <div class="form-item form-type-select form-item-select">
      <label for="edit-select">Select </label>
      <select id="edit-select" name="select" class="form-select">
        <option value="convallis">convallis</option>
        <option value="ipsum">ipsum</option>
        <option value="lacus">lacus</option>
      </select>
      <div class="description">Pellentesque ac dictum ante.</div>
    </div>

    <div class="form-item form-type-checkbox form-item-checkbox">
      <input type="checkbox" id="edit-checkbox" name="checkbox" value="1" checked="checked" class="form-checkbox">
      <label class="option" for="edit-checkbox">Checkbox </label>
      <div class="description">Phasellus quis venenatis tortor.</div>
    </div>

    <div class="form-item form-type-checkboxes form-item-checkboxes">
      <label for="edit-checkboxes">Checkboxes </label>
      <div id="edit-checkboxes" class="form-checkboxes">
        <div class="form-item form-type-checkbox form-item-checkboxes-convallis">
          <input type="checkbox" id="edit-checkboxes-convallis" name="checkboxes[convallis]" value="convallis" class="form-checkbox">
          <label class="option" for="edit-checkboxes-convallis">convallis </label>
        </div>
        <div class="form-item form-type-checkbox form-item-checkboxes-ipsum">
          <input type="checkbox" id="edit-checkboxes-ipsum" name="checkboxes[ipsum]" value="ipsum" class="form-checkbox">
          <label class="option" for="edit-checkboxes-ipsum">ipsum </label>
        </div>
        <div class="form-item form-type-checkbox form-item-checkboxes-lacus">
          <input type="checkbox" id="edit-checkboxes-lacus" name="checkboxes[lacus]" value="lacus" class="form-checkbox">
          <label class="option" for="edit-checkboxes-lacus">lacus </label>
        </div>
      </div>
      <div class="description">Vestibulum ut ligula dolor, in placerat tortor.</div>
    </div>

    <div class="form-item form-type-radios form-item-radios">
      <label for="edit-radios">Radios </label>
      <div id="edit-radios" class="form-radios">
        <div class="form-item form-type-radio form-item-radios">
          <input type="radio" id="edit-radios-convallis" name="radios" value="convallis" class="form-radio">
          <label class="option" for="edit-radios-convallis">convallis </label>
        </div>
        <div class="form-item form-type-radio form-item-radios">
          <input type="radio" id="edit-radios-ipsum" name="radios" value="ipsum" class="form-radio">
          <label class="option" for="edit-radios-ipsum">ipsum </label>
        </div>
        <div class="form-item form-type-radio form-item-radios">
          <input type="radio" id="edit-radios-lacus" name="radios" value="lacus" class="form-radio">
          <label class="option" for="edit-radios-lacus">lacus </label>
        </div>
      </div>
      <div class="description">Aenean quis leo sit amet tellus tempus cursus.</div>
    </div>

    <div class="form-item form-type-textfield form-item-textfield">
      <label for="edit-textfield">Textfield </label>
      <input type="text" id="edit-textfield" name="textfield" value="est" size="60" maxlength="128" class="form-text">
      <div class="description">Nulla non nulla nec metus rhoncus congue.</div>
    </div>

    <div class="form-item form-type-textfield form-item-autocomplete" role="application">
      <label for="edit-autocomplete">Autocomplete textfield </label>
      <input type="text" id="edit-autocomplete" name="autocomplete" value="consectetur" size="60" maxlength="128" class="form-text form-autocomplete" autocomplete="OFF" aria-autocomplete="list">
      <input type="hidden" id="edit-autocomplete-autocomplete" value="http://drupal.test/user/autocomplete" disabled="disabled" class="autocomplete autocomplete-processed">
      <div class="description">Curabitur quis nunc nibh.</div>
      <span class="element-invisible" aria-live="assertive" id="edit-autocomplete-autocomplete-aria-live"></span>
    </div>

    <div class="form-item form-type-textfield form-item-textfield-machine">
      <label for="edit-textfield-machine">Textfield, with machine name </label>
      <input type="text" id="edit-textfield-machine" name="textfield-machine" value="erat eu enim" size="60" maxlength="128" class="form-text machine-name-source">
      <span class="field-suffix">
        <small id="edit-textfield-machine-machine-name-suffix" style="">
          <span class="machine-name-label">Machine name:</span> <span class="machine-name-value">erat_eu_enim</span> <span class="admin-link"><a href="#">Edit</a></span>
        </small>
      </span>
    <div class="description">Praesent ut justo vitae metus luctus vehicula a et purus.</div>
  </div>

  <div class="form-item form-type-machine-name form-item-machine-name" style="display: none; ">
    <label for="edit-machine-name">Machine name <span class="form-required" title="This field is required.">*</span></label>
    <span class="field-prefix"></span> 
    <input dir="ltr" type="text" id="edit-machine-name" name="machine_name" value="" size="60" maxlength="64" class="form-text required machine-name-target"> 
    <span class="field-suffix"></span>
    <div class="description">Duis orci nunc, lacinia in malesuada et, euismod id turpis.</div>
  </div>

  <div class="form-item form-type-textarea form-item-textarea">
    <label for="edit-textarea">Textarea </label>
    <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
      <textarea id="edit-textarea" name="textarea" cols="60" rows="5" class="form-textarea">&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante. Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac. Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.&lt;/p&gt;</textarea>
      <div class="grippie"></div>
    </div>
    <div class="description">Vivamus pretium placerat lorem, in tempor massa convallis sit amet.</div>
  </div>

  <div class="form-item form-type-date form-item-date">
    <label for="edit-date">Date </label>
    <div id="edit-date" class="container-inline">
      <div class="form-item form-type-select form-item-date-month">
        <label class="element-invisible" for="edit-date-month">Month </label>
        <select id="edit-date-month" name="date[month]" class="form-select">
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
          <option value="6">Jun</option>
          <option value="7">Jul</option>
          <option value="8">Aug</option>
          <option value="9">Sep</option>
          <option value="10" selected="selected">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
      </div>
      <div class="form-item form-type-select form-item-date-day">
        <label class="element-invisible" for="edit-date-day">Day </label>
        <select id="edit-date-day" name="date[day]" class="form-select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10" selected="selected">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      </div>
      <div class="form-item form-type-select form-item-date-year">
        <label class="element-invisible" for="edit-date-year">Year </label>
        <select id="edit-date-year" name="date[year]" class="form-select">
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012" selected="selected">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
        </select>
      </div>
    </div>
    <div class="description">Morbi congue nulla vel tortor aliquet imperdiet.</div>
  </div>
  
  <div class="form-item form-type-file form-item-files-file">
    <label for="edit-file">File </label>
    <input type="file" id="edit-file" name="files[file]" size="60" class="form-file">
    <div class="description">Morbi eget odio elit, et cursus odio.</div>
  </div>

  <div id="edit-managed-file-ajax-wrapper">
    <div class="form-item form-type-managed-file form-item-managed-file">
      <label for="edit-managed-file">Managed file </label>
      <div id="edit-managed-file" class="form-managed-file">
        <input type="file" id="edit-managed-file-upload" name="files[managed_file]" size="22" class="form-file">
        <input type="submit" id="edit-managed-file-upload-button" name="managed_file_upload_button" value="Upload" class="form-submit ajax-processed">
        <input type="hidden" name="managed_file[fid]" value="0">
      </div>
      <div class="description">Nullam fringilla purus ac velit gravida ullamcorper.</div>
    </div>
  </div>
  
  <div class="form-item form-type-password form-item-password">
    <label for="edit-password">Password </label>
    <input type="password" id="edit-password" name="password" size="60" maxlength="128" class="form-text">
    <div class="description">Cras metus lorem, euismod ornare mattis sagittis, ultrices eget turpis.</div>
  </div>

  <div class="form-item form-type-password-confirm form-item-password-confirm">
    <label for="edit-password-confirm">Password confirm </label>
    <div class="form-item form-type-password form-item-password-confirm-pass1 password-parent">
      <div class="password-strength">
        <div class="password-strength-text" aria-live="assertive"></div>
        <div class="password-strength-title">Password strength:</div>
        <div class="password-indicator">
          <div class="indicator"></div>
        </div>
      </div>
      <label for="edit-password-confirm-pass1">Password </label>
      <input class="password-field form-text password-processed" type="password" id="edit-password-confirm-pass1" name="password_confirm[pass1]" size="60" maxlength="128">
    </div>
    <div class="form-item form-type-password form-item-password-confirm-pass2 confirm-parent">
      <div class="password-confirm">
        Passwords match: <span></span>
      </div>
      <label for="edit-password-confirm-pass2">Confirm password </label>
      <input class="password-confirm form-text" type="password" id="edit-password-confirm-pass2" name="password_confirm[pass2]" size="60" maxlength="128">
      </div>
      <div class="password-suggestions description" style="display: none; "></div>
    </div>

  <div class="form-item form-type-select form-item-weight">
    <label for="edit-weight">Weight </label>
    <select id="edit-weight" name="weight" class="form-select">
      <option value="-2">-2</option>
      <option value="-1">-1</option>
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
    <div class="description">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
  </div>
  <input type="hidden" name="form_build_id" value="form-BhPB97dM--ANLFLrXace2foQs_m--NFXc7ulg3Z_BRc">
  <input type="hidden" name="form_token" value="7Dpzun2VUikPDG_seIjTdkVhIKqe_brVXR2OwWHys8U">
  <input type="hidden" name="form_id" value="styleguide_form">
  </div>
</form>

<!-- : Forms, submit -->
<form action="" method="post" id="styleguide-form--2" accept-charset="UTF-8" class="overlay-processed">
  <div>
    <input type="submit" id="edit-submit" name="op" value="Submit" class="form-submit">
    <input type="hidden" name="form_build_id" value="form-3L1XSJYMcBCdxU2jaIBp2L_srvmkIJ70CJSGt8iiLEQ">
    <input type="hidden" name="form_token" value="7Dpzun2VUikPDG_seIjTdkVhIKqe_brVXR2OwWHys8U">
    <input type="hidden" name="form_id" value="styleguide_form">
  </div>
</form>

<!-- : Forms, button -->
<form action="" method="post" id="styleguide-form--3" accept-charset="UTF-8">
  <div>
    <input type="submit" id="edit-button" name="op" value="Button" class="form-submit">
    <input type="hidden" name="form_build_id" value="form-y5TWQGu-xPKa6Qc9R0JIbR35aFmPqNIYj78OoEQ8TnY">
    <input type="hidden" name="form_token" value="7Dpzun2VUikPDG_seIjTdkVhIKqe_brVXR2OwWHys8U">
    <input type="hidden" name="form_id" value="styleguide_form">
  </div>
</form>

<!-- : Forms, image button -->
<form action="" method="post" id="styleguide-form--4" accept-charset="UTF-8">
  <div>
    <input height="20" type="image" id="edit-image-button" name="Image button" src="http://ding2tal.ting.dk/misc/druplicon.png" class="form-submit">
    <input type="hidden" name="form_build_id" value="">
    <input type="hidden" name="form_token" value="">
    <input type="hidden" name="form_id" value="">
  </div>
</form>

<!-- : Forms, Markup -->
<form action="" method="post" id="styleguide-form--5" accept-charset="UTF-8">
  <div>
    <p><em>Markup</em>: Note that markup does not allow titles or descriptions. Use "item" for those options.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante. Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac. Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
    <div id="edit-item" class="form-item form-type-item">
      <label for="edit-item">Item </label>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante. Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac. Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
      <div class="description">Maecenas quis odio leo, a auctor lorem.</div>
    </div>
    <input type="hidden" name="form_build_id" value="">
    <input type="hidden" name="form_token" value="">
    <input type="hidden" name="form_id" value="">
  </div>
</form>


<!-- : Forms, fieldsets -->
<form action="" method="post" id="styleguide-form--6" accept-charset="UTF-8">
  <div>
    <fieldset class="collapsible collapsed form-wrapper collapse-processed" id="edit-fieldset-collapsed">
      <legend>
        <span class="fieldset-legend">
          <a class="fieldset-title" href="#">
            <span class="fieldset-legend-prefix element-invisible">Show</span> Fieldset collapsed
          </a>
          <span class="summary"></span>
          </span>
        </legend>
        <div class="fieldset-wrapper">
        <div class="fieldset-description">Integer vel felis laoreet purus sollicitudin varius sed id ipsum.</div>
        <div class="form-item form-type-select form-item-select-fieldset-collapsed">
          <label for="edit-select-fieldset-collapsed">Select </label>
          <select id="edit-select-fieldset-collapsed" name="select-fieldset-collapsed" class="form-select">
            <option value="erat">erat</option>
            <option value="mattis">mattis</option>
            <option value="et">et</option>
            <option value="porta">porta</option>
          </select>
          <div class="description">Vivamus pretium placerat lorem, in tempor massa convallis sit amet.</div>
        </div>
        <div class="form-item form-type-checkboxes form-item-checkboxes-fieldset-collapsed">
          <label for="edit-checkboxes-fieldset-collapsed">Checkboxes </label>
          <div id="edit-checkboxes-fieldset-collapsed" class="form-checkboxes">
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsed-erat">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsed-erat" name="checkboxes-fieldset-collapsed[erat]" value="erat" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsed-erat">erat </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsed-mattis">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsed-mattis" name="checkboxes-fieldset-collapsed[mattis]" value="mattis" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsed-mattis">mattis </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsed-et">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsed-et" name="checkboxes-fieldset-collapsed[et]" value="et" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsed-et">et </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsed-porta">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsed-porta" name="checkboxes-fieldset-collapsed[porta]" value="porta" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsed-porta">porta </label>
            </div>
          </div>
          <div class="description">Sed fermentum nulla quis risus suscipit dapibus.</div>
        </div>
      </div>
    </fieldset>
    
    <fieldset class="collapsible form-wrapper collapse-processed" id="edit-fieldset-collapsible">
      <legend>
        <span class="fieldset-legend">
          <a class="fieldset-title" href="#">
            <span class="fieldset-legend-prefix element-invisible">Hide</span> Fieldset collapsible
          </a>
          <span class="summary"></span>
        </span>
      </legend>
      <div class="fieldset-wrapper">
        <div class="fieldset-description">Vestibulum sit amet massa est.</div>
        <div class="form-item form-type-select form-item-select-fieldset-collapsible">
          <label for="edit-select-fieldset-collapsible">Select </label>
          <select id="edit-select-fieldset-collapsible" name="select-fieldset-collapsible" class="form-select">
            <option value="erat">erat</option>
            <option value="mattis">mattis</option>
            <option value="et">et</option>
            <option value="porta">porta</option>
          </select>
          <div class="description">Vivamus pretium placerat lorem, in tempor massa convallis sit amet.</div>
        </div>
        <div class="form-item form-type-checkboxes form-item-checkboxes-fieldset-collapsible">
          <label for="edit-checkboxes-fieldset-collapsible">Checkboxes </label>
          <div id="edit-checkboxes-fieldset-collapsible" class="form-checkboxes">
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsible-erat">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsible-erat" name="checkboxes-fieldset-collapsible[erat]" value="erat" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsible-erat">erat </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsible-mattis">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsible-mattis" name="checkboxes-fieldset-collapsible[mattis]" value="mattis" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsible-mattis">mattis </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsible-et">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsible-et" name="checkboxes-fieldset-collapsible[et]" value="et" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsible-et">et </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsible-porta">
              <input type="checkbox" id="edit-checkboxes-fieldset-collapsible-porta" name="checkboxes-fieldset-collapsible[porta]" value="porta" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-collapsible-porta">porta </label>
            </div>
          </div>
          <div class="description">Sed fermentum nulla quis risus suscipit dapibus.</div>
        </div>
      </div>
    </fieldset>
  
    <fieldset class="form-wrapper" id="edit-fieldset">
      <legend>
        <span class="fieldset-legend">Fieldset</span>
      </legend>
      <div class="fieldset-wrapper">
        <div class="fieldset-description">Maecenas mollis eros non elit sollicitudin quis fermentum diam lacinia.</div>
        <div class="form-item form-type-select form-item-select-fieldset">
          <label for="edit-select-fieldset">Select </label>
          <select id="edit-select-fieldset" name="select-fieldset" class="form-select">
            <option value="erat">erat</option>
            <option value="mattis">mattis</option>
            <option value="et">et</option>
            <option value="porta">porta</option>
          </select>
          <div class="description">Vivamus pretium placerat lorem, in tempor massa convallis sit amet.</div>
        </div>
        <div class="form-item form-type-checkboxes form-item-checkboxes-fieldset">
          <label for="edit-checkboxes-fieldset">Checkboxes </label>
          <div id="edit-checkboxes-fieldset" class="form-checkboxes">
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-erat">
              <input type="checkbox" id="edit-checkboxes-fieldset-erat" name="checkboxes-fieldset[erat]" value="erat" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-erat">erat </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-mattis">
              <input type="checkbox" id="edit-checkboxes-fieldset-mattis" name="checkboxes-fieldset[mattis]" value="mattis" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-mattis">mattis </label>
            </div>
            <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-et">
              <input type="checkbox" id="edit-checkboxes-fieldset-et" name="checkboxes-fieldset[et]" value="et" class="form-checkbox">
              <label class="option" for="edit-checkboxes-fieldset-et">et </label>
            </div>
          </div>
          <div class="description">Sed fermentum nulla quis risus suscipit dapibus.</div>
        </div>
      </div>
    </fieldset>
    <input type="hidden" name="form_build_id" value="">
    <input type="hidden" name="form_token" value="">
    <input type="hidden" name="form_id" value="">
  </div>
</form>


<!-- : Forms, vertical tabs -->
<form action="" method="post" id="styleguide-form--7" accept-charset="UTF-8">
  <div>
    <h2 class="element-invisible">Vertical Tabs</h2>
    <div class="vertical-tabs clearfix">
      <ul class="vertical-tabs-list">
        <li class="vertical-tab-button first selected" tabindex="-1">
          <a href="#">
            <strong>Fieldset</strong>
            <span class="summary"></span>
            <span id="active-vertical-tab" class="element-invisible">(active tab)</span>
          </a>
        </li>
        <li class="vertical-tab-button" tabindex="-1">
          <a href="#">
            <strong>Fieldset collapsed</strong>
            <span class="summary"></span>
          </a>
        </li>
        <li class="vertical-tab-button last" tabindex="-1">
          <a href="#">
            <strong>Fieldset collapsible</strong>
            <span class="summary"></span>
          </a>
        </li>
      </ul>
      <div class="vertical-tabs-panes vertical-tabs-processed">
        <fieldset class="form-wrapper vertical-tabs-pane" id="edit-fieldset--2" style="">
          <legend>
            <span class="fieldset-legend">Fieldset</span>
          </legend>
          <div class="fieldset-wrapper">
            <div class="fieldset-description">Sed feugiat velit sed magna aliquam accumsan.</div>
            <div class="form-item form-type-select form-item-select-fieldset">
              <label for="edit-select-fieldset--2">Select </label>
              <select id="edit-select-fieldset--2" name="select-fieldset" class="form-select">
                <option value="viverra">viverra</option>
                <option value="elit">elit</option>
                <option value="ut">ut</option>
                <option value="ac">ac</option>
                <option value="adipiscing">adipiscing</option>
              </select>
              <div class="description">Nam auctor dui a neque iaculis in aliquam erat viverra.</div>
            </div>
            <div class="form-item form-type-checkboxes form-item-checkboxes-fieldset">
              <label for="edit-checkboxes-fieldset--2">Checkboxes </label>
              <div id="edit-checkboxes-fieldset--2" class="form-checkboxes">
                <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-viverra">
                  <input type="checkbox" id="edit-checkboxes-fieldset-viverra" name="checkboxes-fieldset[viverra]" value="viverra" class="form-checkbox">
                  <label class="option" for="edit-checkboxes-fieldset-viverra">viverra </label>
                </div>
                <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-elit">
                  <input type="checkbox" id="edit-checkboxes-fieldset-elit" name="checkboxes-fieldset[elit]" value="elit" class="form-checkbox">
                  <label class="option" for="edit-checkboxes-fieldset-elit">elit </label>
                </div>
              </div>
              <div class="description">Vestibulum sit amet massa est.</div>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-wrapper vertical-tabs-pane" id="edit-fieldset-collapsed--2" style="display: none; ">
          <legend>
            <span class="fieldset-legend">Fieldset collapsed</span>
          </legend>
          <div class="fieldset-wrapper">
            <div class="fieldset-description">Nam vitae porta tortor.</div>
            <div class="form-item form-type-select form-item-select-fieldset-collapsed">
              <label for="edit-select-fieldset-collapsed--2">Select </label>
              <select id="edit-select-fieldset-collapsed--2" name="select-fieldset-collapsed" class="form-select"
                <option value="viverra">viverra</option>
                <option value="elit">elit</option>
                <option value="ut">ut</option>
                <option value="ac">ac</option>
                <option value="adipiscing">adipiscing</option>
              </select>
              <div class="description">Nam auctor dui a neque iaculis in aliquam erat viverra.</div>
            </div>
            <div class="form-item form-type-checkboxes form-item-checkboxes-fieldset-collapsed">
              <label for="edit-checkboxes-fieldset-collapsed--2">Checkboxes </label>
              <div id="edit-checkboxes-fieldset-collapsed--2" class="form-checkboxes">
                <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsed-viverra">
                  <input type="checkbox" id="edit-checkboxes-fieldset-collapsed-viverra" name="checkboxes-fieldset-collapsed[viverra]" value="viverra" class="form-checkbox">
                  <label class="option" for="edit-checkboxes-fieldset-collapsed-viverra">viverra </label>
                </div>
                <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsed-elit">
                  <input type="checkbox" id="edit-checkboxes-fieldset-collapsed-elit" name="checkboxes-fieldset-collapsed[elit]" value="elit" class="form-checkbox">
                  <label class="option" for="edit-checkboxes-fieldset-collapsed-elit">elit </label>
                </div>
              </div>
              <div class="description">Vestibulum sit amet massa est.</div>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-wrapper vertical-tabs-pane" id="edit-fieldset-collapsible--2" style="display: none; ">
          <legend>
            <span class="fieldset-legend">Fieldset collapsible</span>
          </legend>
          <div class="fieldset-wrapper">
            <div class="fieldset-description">In ac ipsum erat.</div>
            <div class="form-item form-type-select form-item-select-fieldset-collapsible">
              <label for="edit-select-fieldset-collapsible--2">Select </label>
              <select id="edit-select-fieldset-collapsible--2" name="select-fieldset-collapsible" class="form-select">
                <option value="viverra">viverra</option>
                <option value="elit">elit</option>
                <option value="ut">ut</option>
                <option value="ac">ac</option>
                <option value="adipiscing">adipiscing</option>
              </select>
              <div class="description">Nam auctor dui a neque iaculis in aliquam erat viverra.</div>
            </div>
            <div class="form-item form-type-checkboxes form-item-checkboxes-fieldset-collapsible">
              <label for="edit-checkboxes-fieldset-collapsible--2">Checkboxes </label>
              <div id="edit-checkboxes-fieldset-collapsible--2" class="form-checkboxes">
                <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsible-viverra">
                  <input type="checkbox" id="edit-checkboxes-fieldset-collapsible-viverra" name="checkboxes-fieldset-collapsible[viverra]" value="viverra" class="form-checkbox">
                  <label class="option" for="edit-checkboxes-fieldset-collapsible-viverra">viverra </label>
                </div>
                <div class="form-item form-type-checkbox form-item-checkboxes-fieldset-collapsible-elit">
                  <input type="checkbox" id="edit-checkboxes-fieldset-collapsible-elit" name="checkboxes-fieldset-collapsible[elit]" value="elit" class="form-checkbox">
                  <label class="option" for="edit-checkboxes-fieldset-collapsible-elit">elit </label>
                </div>
              </div>
              <div class="description">Vestibulum sit amet massa est.</div>
            </div>
          </div>
        </fieldset>
        <input class="vertical-tabs-active-tab" type="hidden" name="vertical_tabs__active_tab" value="">
      </div>
    </div>
    <input type="hidden" name="form_build_id" value="form-aKwVRek5DDMh9scnetEC25DxGt_uPSc1lp3MRLaCtdU">
    <input type="hidden" name="form_token" value="7Dpzun2VUikPDG_seIjTdkVhIKqe_brVXR2OwWHys8U">
    <input type="hidden" name="form_id" value="styleguide_form">
  </div>
</form>