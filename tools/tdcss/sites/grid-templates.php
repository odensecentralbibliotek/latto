<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Grid templates</title>
  <style type="text/css">
    @media only screen and (max-width: 480px) {
      .grid-wrapper {
        border: 3px dashed red;
      }
    }

    @media only screen and (min-width: 481px) and (max-width: 768px) {
      .grid-wrapper {
        border: 3px dashed green;
      }
    }

    @media only screen and (min-width: 769px) {
      .grid-wrapper {
        border: 3px dashed blue;
      }  
    }

    .content-inner {
      background: GreenYellow;
      border: 3px solid Green;
      margin: 10px;
      padding: 10px;
    }
  </style>
</head>
<body>
   
  <br /><br />
  
  <div class="grid-inner">
      
    <h2>Template 1</h2>
    <div class="grid-wrapper layout-template-one">    
      <div class="grid-inner">

        <div class="primary-content">
          <div class="content-inner">primary-content</div>
        </div>

        <div class="secondary-content">
          <div class="content-inner">secondary-content</div>
        </div>

        <div class="tertiary-content">
          <div class="content-inner">tertiary-content</div>
        </div>      

        <div class="attachments-wrapper">

          <div class="attachment-first">
            <div class="content-inner">attachment-first</div>
          </div>

          <div class="attachment-second">
            <div class="content-inner">attachment-second</div>
          </div>

          <div class="attachment-third">
            <div class="content-inner">attachment-third</div>
          </div>

          <div class="attachment-fourth">
            <div class="content-inner">attachment-fourth</div>
          </div>

        </div>

      </div>
    </div>
    
    <br /><hr /><br />

    <h2>Template 2</h2>
    <div class="grid-wrapper layout-template-two">    
      <div class="grid-inner">

        <div class="primary-content">
          <div class="content-inner">primary-content</div>
        </div>

        <div class="secondary-content">
          <div class="content-inner">secondary-content</div>
        </div>

        <div class="tertiary-content">
          <div class="content-inner">tertiary-content</div>
        </div>      

        <div class="attachments-wrapper">

          <div class="attachment-first">
            <div class="content-inner">attachment-first</div>
          </div>

          <div class="attachment-second">
            <div class="content-inner">attachment-second</div>
          </div>

          <div class="attachment-third">
            <div class="content-inner">attachment-third</div>
          </div>

          <div class="attachment-fourth">
            <div class="content-inner">attachment-fourth</div>
          </div>

        </div>

      </div>
    </div>
    
    <br /><hr /><br />    
    
    <h2>Template 3 (three attachments)</h2>
    <div class="grid-wrapper layout-template-three">    
      <div class="grid-inner">

        <div class="primary-content">
          <div class="content-inner">primary-content</div>
        </div>

        <div class="secondary-content">
          <div class="content-inner">secondary-content</div>
        </div>

        <div class="tertiary-content">
          <div class="content-inner">tertiary-content</div>
        </div>    

        <div class="attachments-wrapper">

          <div class="attachment-first">
            <div class="content-inner">attachment-first</div>
          </div>

          <div class="attachment-second">
            <div class="content-inner">attachment-second</div>
          </div>

          <div class="attachment-third">
            <div class="content-inner">attachment-third</div>
          </div>

        </div>

      </div>
    </div>
    
    <br /><hr /><br />    
    
    <h2>Template 3 (four attachments)</h2>
    <div class="grid-wrapper layout-template-three">    
      <div class="grid-inner">

        <div class="primary-content">
          <div class="content-inner">primary-content</div>
        </div>

        <div class="secondary-content">
          <div class="content-inner">secondary-content</div>
        </div>

        <div class="tertiary-content">
          <div class="content-inner">tertiary-content</div>
        </div>    

        <div class="attachments-wrapper">

          <div class="attachment-first">
            <div class="content-inner">attachment-first</div>
          </div>

          <div class="attachment-second">
            <div class="content-inner">attachment-second</div>
          </div>

          <div class="attachment-third">
            <div class="content-inner">attachment-third</div>
          </div>

          <div class="attachment-fourth">
            <div class="content-inner">attachment-fourth</div>
          </div>
          
        </div>

      </div>
    </div>
    
  </div> 
</body>
</html>