<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Findborg Galaxy - Typography</title>

    
    <!-- Galxy core CSS -->
    <link href="../dist/css/galaxy.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../dist/js/jquery.js"></script>
    
    <script type="text/javascript" src="../dist/js/jquery.ui.all.js"></script>
    <script type="text/javascript" src="../dist/js/jquery.layout.min.js"></script>
     <script type="text/javascript">

  var myLayout; // a var is required because this page utilizes: myLayout.allowOverflow() method

  $(document).ready(function () {
    myLayout = $('body').layout({
      // enable showOverflow on west-pane so popups will overlap north pane
      west__showOverflowOnHover: true

    //, west__fxSettings_open: { easing: "easeOutBounce", duration: 750 }
    });
  });

  </script>
<script type="text/javascript">

  function toggleLiveResizing () {
    $.each( $.layout.config.borderPanes, function (i, pane) {
      var o = myLayout.options[ pane ];
      o.livePaneResizing = !o.livePaneResizing;
    });
  };
  
  function toggleStateManagement ( skipAlert, mode ) {
    if (!$.layout.plugins.stateManagement) return;

    var options = myLayout.options.stateManagement
    , enabled = options.enabled // current setting
    ;
    if ($.type( mode ) === "boolean") {
      if (enabled === mode) return; // already correct
      enabled = options.enabled = mode
    }
    else
      enabled = options.enabled = !enabled; // toggle option

    if (!enabled) { // if disabling state management...
      myLayout.deleteCookie(); // ...clear cookie so will NOT be found on next refresh
      if (!skipAlert)
        alert( 'This layout will reload as the options specify \nwhen the page is refreshed.' );
    }
    else if (!skipAlert)
      alert( 'This layout will save & restore its last state \nwhen the page is refreshed.' );

    // update text on button
    var $Btn = $('#btnToggleState'), text = $Btn.html();
    if (enabled)
      $Btn.html( text.replace(/Enable/i, "Disable") );
    else
      $Btn.html( text.replace(/Disable/i, "Enable") );
  };

  // set EVERY 'state' here so will undo ALL layout changes
  // used by the 'Reset State' button: myLayout.loadState( stateResetSettings )
  var stateResetSettings = {
    north__size:    "auto"
  , north__initClosed:  false
  , north__initHidden:  false
  , south__size:    "auto"
  , south__initClosed:  false
  , south__initHidden:  true
  , west__size:     200
  , west__initClosed: false
  , west__initHidden: false
  , east__size:     300
  , east__initClosed: false
  , east__initHidden: true
  };

  var myLayout;

  $(document).ready(function () {

    // this layout could be created with NO OPTIONS - but showing some here just as a sample...
    // myLayout = $('body').layout(); -- syntax with No Options

    myLayout = $('body').layout({

    //  reference only - these options are NOT required because 'true' is the default
      closable:         true  // pane can open & close
    , resizable:          true  // when open, pane can be resized 
    , slidable:         true  // when closed, pane can 'slide' open over other panes - closes on mouse-out
    , livePaneResizing:     true

    //  some resizing/toggling settings
    , north__slidable:      false // OVERRIDE the pane-default of 'slidable=true'
    , north__togglerLength_closed: '100%' // toggle-button is full-width of resizer-bar
    , north__spacing_closed:    20    // big resizer-bar when open (zero height)
    , south__resizable:     false // OVERRIDE the pane-default of 'resizable=true'
    , south__spacing_open:    0   // no resizer-bar when open (zero height)
    , south__spacing_closed:    20    // big resizer-bar when open (zero height)

    //  some pane-size settings
    , west__minSize:        100
    , east__size:         300
    , east__minSize:        200
    , east__maxSize:        .5 // 50% of layout width
    , center__minWidth:     100

    //  some pane animation settings
    , west__animatePaneSizing:  false
    , west__fxSpeed_size:     "fast"  // 'fast' animation when resizing west-pane
    , west__fxSpeed_open:     1000  // 1-second animation when opening west-pane
    , west__fxSettings_open:    { easing: "easeOutBounce" } // 'bounce' effect when opening
    , west__fxName_close:     "none"  // NO animation when closing west-pane

    //  enable showOverflow on west-pane so CSS popups will overlap north pane
    , west__showOverflowOnHover:  true

    //  enable state management
    , stateManagement__enabled: true // automatic cookie load & save enabled by default

    , showDebugMessages:      true // log and/or display messages from debugging & testing code
    });

    // if there is no state-cookie, then DISABLE state management initially
    var cookieExists = !$.isEmptyObject( myLayout.readCookie() );
    if (!cookieExists) toggleStateManagement( true, false );

    myLayout
      // add event to the 'Close' button in the East pane dynamically...
      .bindButton('#btnCloseEast', 'close', 'east')
  
      // add event to the 'Toggle South' buttons in Center AND South panes dynamically...
      .bindButton('.south-toggler', 'toggle', 'south')
      
      // add MULTIPLE events to the 'Open All Panes' button in the Center pane dynamically...
      .bindButton('#openAllPanes', 'open', 'north')
      .bindButton('#openAllPanes', 'open', 'south')
      .bindButton('#openAllPanes', 'open', 'west')
      .bindButton('#openAllPanes', 'open', 'east')

      // add MULTIPLE events to the 'Close All Panes' button in the Center pane dynamically...
      .bindButton('#closeAllPanes', 'close', 'north')
      .bindButton('#closeAllPanes', 'close', 'south')
      .bindButton('#closeAllPanes', 'close', 'west')
      .bindButton('#closeAllPanes', 'close', 'east')

      // add MULTIPLE events to the 'Toggle All Panes' button in the Center pane dynamically...
      .bindButton('#toggleAllPanes', 'toggle', 'north')
      .bindButton('#toggleAllPanes', 'toggle', 'south')
      .bindButton('#toggleAllPanes', 'toggle', 'west')
      .bindButton('#toggleAllPanes', 'toggle', 'east')
    ;

    // 'Reset State' button requires updated functionality in rc29.15+
    if ($.layout.revision && $.layout.revision >= 0.032915)
      $('#btnReset').show();

  });

  </script>
  </head>

  <body>
<!-- manually attach allowOverflow method to pane -->
<div class="ui-layout-north" onmouseover="myLayout.allowOverflow('north')" onmouseout="myLayout.resetOverflow(this)">
  <div class="navbar navbar-masthead navbar-default" role="navigation">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

</div>


<!-- allowOverflow auto-attached by option: west__showOverflowOnHover = true -->
<div class="ui-layout-west">
  <jdoc:include type="modules" name="sidebar-a" style="xhtml"/>

  <p><button class="btn btn-primary" onclick="myLayout.close('west')">Close Me</button></p>
<div class="footer">Automatically positioned footer</div>
</div>

<div class="ui-layout-south">
  This is the south pane, closable, slidable and resizable &nbsp;
  <button onclick="myLayout.toggle('north')">Toggle North Pane</button>
</div>

<div class="ui-layout-east">
  This is the east pane, closable, slidable and resizable

  <!-- attach allowOverflow method to this specific element -->
  <ul onmouseover="myLayout.allowOverflow(this)" onmouseout="myLayout.resetOverflow('east')">
    <li>
      <ul>
        <li>one</li>
        <li>two</li>
        <li>three</li>
        <li>four</li>
        <li>five</li>
      </ul>
      Pop-Up <!-- put this below so IE and FF render the same! -->
    </li>
  </ul>

  <p><button onclick="myLayout.close('east')">Close Me</button></p>

  <p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p>
  <p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p>
  <p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p>
  <p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p><p>...</p>
</div>

<div class="ui-layout-center">
   <div class="container-fluid">

<div class="bs-docs-section">
  <h1 id="responsive-utilities" class="page-header">Responsive utilities</h1>

  <p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.</p>
  <p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.</p>


  <h2 id="responsive-utilities-classes">Available classes</h2>
  <p>Use a single or combination of the available classes for toggling content across viewport breakpoints.</p>
  <div class="table-responsive">
    <table class="table table-bordered table-striped responsive-utilities">
      <thead>
        <tr>
          <th></th>
          <th>
            Extra small devices
            <small>Phones (&lt;768px)</small>
          </th>
          <th>
            Small devices
            <small>Tablets (&ge;768px)</small>
          </th>
          <th>
            Medium devices
            <small>Desktops (&ge;992px)</small>
          </th>
          <th>
            Large devices
            <small>Desktops (&ge;1200px)</small>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><code>.visible-xs-*</code></th>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-hidden">Hidden</td>
        </tr>
        <tr>
          <th><code>.visible-sm-*</code></th>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-hidden">Hidden</td>
        </tr>
        <tr>
          <th><code>.visible-md-*</code></th>
          <td class="is-hidden">Hidden</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
        </tr>
        <tr>
          <th><code>.visible-lg-*</code></th>
          <td class="is-hidden">Hidden</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th><code>.hidden-xs</code></th>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
          <td class="is-visible">Visible</td>
          <td class="is-visible">Visible</td>
        </tr>
        <tr>
          <th><code>.hidden-sm</code></th>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
          <td class="is-visible">Visible</td>
        </tr>
        <tr>
          <th><code>.hidden-md</code></th>
          <td class="is-visible">Visible</td>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
        </tr>
        <tr>
          <th><code>.hidden-lg</code></th>
          <td class="is-visible">Visible</td>
          <td class="is-visible">Visible</td>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
        </tr>
      </tbody>
    </table>
  </div>

  <p>As of v3.2, the <code>.visible-*-*</code> classes for each breakpoint come in three variations, one for each CSS <code>display</code> property value listed below.</p>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Group of classes</th>
          <th>CSS <code>display</code></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><code>.visible-*-block</code></td>
          <td><code>display: block;</code></td>
        </tr>
        <tr>
          <td><code>.visible-*-inline</code></td>
          <td><code>display: inline;</code></td>
        </tr>
        <tr>
          <td><code>.visible-*-inline-block</code></td>
          <td><code>display: inline-block;</code></td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>So, for extra small (<code>xs</code>) screens for example, the available <code>.visible-*-*</code> classes are: <code>.visible-xs-block</code>, <code>.visible-xs-inline</code>, and <code>.visible-xs-inline-block</code>.</p>
  <p>The classes <code>.visible-xs</code>, <code>.visible-sm</code>, <code>.visible-md</code>, and <code>.visible-lg</code> also exist, but are <strong>deprecated as of v3.2</strong>. They are approximately equivalent to <code>.visible-*-block</code>, except with additional special cases for toggling <code>&lt;table&gt;</code>-related elements.</p>

  <h2 id="responsive-utilities-print">Print classes</h2>
  <p>Similar to the regular responsive classes, use these for toggling content for print.</p>
  <div class="table-responsive">
    <table class="table table-bordered table-striped responsive-utilities">
      <thead>
        <tr>
          <th>Classes</th>
          <th>Browser</th>
          <th>Print</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>
            <code>.visible-print-block</code><br>
            <code>.visible-print-inline</code><br>
            <code>.visible-print-inline-block</code>
          </th>
          <td class="is-hidden">Hidden</td>
          <td class="is-visible">Visible</td>
        </tr>
        <tr>
          <th><code>.hidden-print</code></th>
          <td class="is-visible">Visible</td>
          <td class="is-hidden">Hidden</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p>The class <code>.visible-print</code> also exists but is <strong>deprecated</strong> as of v3.1.0. It is approximately equivalent to <code>.visible-print-block</code>, except with additional special cases for <code>&lt;table&gt;</code>-related elements.</p>


  <h2 id="responsive-utilities-tests">Test cases</h2>
  <p>Resize your browser or load on different devices to test the responsive utility classes.</p>

  <h3>Visible on...</h3>
  <p>Green checkmarks indicate the element <strong>is visible</strong> in your current viewport.</p>
  <div class="row responsive-utilities-test visible-on">
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-xs">Extra small</span>
      <span class="visible-xs-block">&#10004; Visible on x-small</span>
    </div>
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-sm">Small</span>
      <span class="visible-sm-block">&#10004; Visible on small</span>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-md">Medium</span>
      <span class="visible-md-block">&#10004; Visible on medium</span>
    </div>
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-lg">Large</span>
      <span class="visible-lg-block">&#10004; Visible on large</span>
    </div>
  </div>
  <div class="row responsive-utilities-test visible-on">
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-xs hidden-sm">Extra small and small</span>
      <span class="visible-xs-block visible-sm-block">&#10004; Visible on x-small and small</span>
    </div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-md hidden-lg">Medium and large</span>
      <span class="visible-md-block visible-lg-block">&#10004; Visible on medium and large</span>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-xs hidden-md">Extra small and medium</span>
      <span class="visible-xs-block visible-md-block">&#10004; Visible on x-small and medium</span>
    </div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-sm hidden-lg">Small and large</span>
      <span class="visible-sm-block visible-lg-block">&#10004; Visible on small and large</span>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-xs hidden-lg">Extra small and large</span>
      <span class="visible-xs-block visible-lg-block">&#10004; Visible on x-small and large</span>
    </div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-sm hidden-md">Small and medium</span>
      <span class="visible-sm-block visible-md-block">&#10004; Visible on small and medium</span>
    </div>
  </div>

  <h3>Hidden on...</h3>
  <p>Here, green checkmarks also indicate the element <strong>is hidden</strong> in your current viewport.</p>
  <div class="row responsive-utilities-test hidden-on">
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-xs">Extra small</span>
      <span class="visible-xs-block">&#10004; Hidden on x-small</span>
    </div>
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-sm">Small</span>
      <span class="visible-sm-block">&#10004; Hidden on small</span>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-md">Medium</span>
      <span class="visible-md-block">&#10004; Hidden on medium</span>
    </div>
    <div class="col-xs-6 col-sm-3">
      <span class="hidden-lg">Large</span>
      <span class="visible-lg-block">&#10004; Hidden on large</span>
    </div>
  </div>
  <div class="row responsive-utilities-test hidden-on">
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-xs hidden-sm">Extra small and small</span>
      <span class="visible-xs-block visible-sm-block">&#10004; Hidden on x-small and small</span>
    </div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-md hidden-lg">Medium and large</span>
      <span class="visible-md-block visible-lg-block">&#10004; Hidden on medium and large</span>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-xs hidden-md">Extra small and medium</span>
      <span class="visible-xs-block visible-md-block">&#10004; Hidden on x-small and medium</span>
    </div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-sm hidden-lg">Small and large</span>
      <span class="visible-sm-block visible-lg-block">&#10004; Hidden on small and large</span>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-xs hidden-lg">Extra small and large</span>
      <span class="visible-xs-block visible-lg-block">&#10004; Hidden on x-small and large</span>
    </div>
    <div class="col-xs-6 col-sm-6">
      <span class="hidden-sm hidden-md">Small and medium</span>
      <span class="visible-sm-block visible-md-block">&#10004; Hidden on small and medium</span>
    </div>
  </div>
</div>



    </div><!-- /.container -->

</div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

 
  
  </body>
</html>

