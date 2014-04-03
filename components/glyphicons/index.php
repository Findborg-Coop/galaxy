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
    <link href="../../dist/css/galaxy.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../../dist/js/jquery.js"></script>
    
   
    <script type="text/javascript" src="../../dist/js/jquery.layout.min.js"></script>
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
  , east__initHidden: false
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

  <p><button onclick="myLayout.close('west')">Close Me</button></p>
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
  <h1 id="glyphicons" class="page-header">Glyphicons</h1>

  <h2 id="glyphicons-glyphs">Available glyphs</h2>
  <p>Includes 200 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever possible.</p>
  <div class="bs-glyphicons">
    <div class="bs-glyphicons">
    <ul class="bs-glyphicons-list">
      
        <li>
          <span class="glyphicon glyphicon-asterisk"></span>
          <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-plus"></span>
          <span class="glyphicon-class">glyphicon glyphicon-plus</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-euro"></span>
          <span class="glyphicon-class">glyphicon glyphicon-euro</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-minus"></span>
          <span class="glyphicon-class">glyphicon glyphicon-minus</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-cloud"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-envelope"></span>
          <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-pencil"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-glass"></span>
          <span class="glyphicon-class">glyphicon glyphicon-glass</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-music"></span>
          <span class="glyphicon-class">glyphicon glyphicon-music</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-search"></span>
          <span class="glyphicon-class">glyphicon glyphicon-search</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-heart"></span>
          <span class="glyphicon-class">glyphicon glyphicon-heart</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon-class">glyphicon glyphicon-star</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-star-empty"></span>
          <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-user"></span>
          <span class="glyphicon-class">glyphicon glyphicon-user</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-film"></span>
          <span class="glyphicon-class">glyphicon glyphicon-film</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-th-large"></span>
          <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-th"></span>
          <span class="glyphicon-class">glyphicon glyphicon-th</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-th-list"></span>
          <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-ok"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ok</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-remove"></span>
          <span class="glyphicon-class">glyphicon glyphicon-remove</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-zoom-in"></span>
          <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-zoom-out"></span>
          <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-off"></span>
          <span class="glyphicon-class">glyphicon glyphicon-off</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-signal"></span>
          <span class="glyphicon-class">glyphicon glyphicon-signal</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-cog"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cog</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-trash"></span>
          <span class="glyphicon-class">glyphicon glyphicon-trash</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-home"></span>
          <span class="glyphicon-class">glyphicon glyphicon-home</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-file"></span>
          <span class="glyphicon-class">glyphicon glyphicon-file</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-time"></span>
          <span class="glyphicon-class">glyphicon glyphicon-time</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-road"></span>
          <span class="glyphicon-class">glyphicon glyphicon-road</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-download-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-download"></span>
          <span class="glyphicon-class">glyphicon glyphicon-download</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-upload"></span>
          <span class="glyphicon-class">glyphicon glyphicon-upload</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-inbox"></span>
          <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-play-circle"></span>
          <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-repeat"></span>
          <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-refresh"></span>
          <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-list-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-lock"></span>
          <span class="glyphicon-class">glyphicon glyphicon-lock</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-flag"></span>
          <span class="glyphicon-class">glyphicon glyphicon-flag</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-headphones"></span>
          <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-volume-off"></span>
          <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-volume-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-volume-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-qrcode"></span>
          <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-barcode"></span>
          <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tag"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tag</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tags"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tags</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-book"></span>
          <span class="glyphicon-class">glyphicon glyphicon-book</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-bookmark"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-print"></span>
          <span class="glyphicon-class">glyphicon glyphicon-print</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-camera"></span>
          <span class="glyphicon-class">glyphicon glyphicon-camera</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-font"></span>
          <span class="glyphicon-class">glyphicon glyphicon-font</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-bold"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bold</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-italic"></span>
          <span class="glyphicon-class">glyphicon glyphicon-italic</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-text-height"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-text-width"></span>
          <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-align-left"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-align-center"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-align-right"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-align-justify"></span>
          <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-list"></span>
          <span class="glyphicon-class">glyphicon glyphicon-list</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-indent-left"></span>
          <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-indent-right"></span>
          <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-facetime-video"></span>
          <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-picture"></span>
          <span class="glyphicon-class">glyphicon glyphicon-picture</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-map-marker"></span>
          <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-adjust"></span>
          <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tint"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tint</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-edit"></span>
          <span class="glyphicon-class">glyphicon glyphicon-edit</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-share"></span>
          <span class="glyphicon-class">glyphicon glyphicon-share</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-check"></span>
          <span class="glyphicon-class">glyphicon glyphicon-check</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-move"></span>
          <span class="glyphicon-class">glyphicon glyphicon-move</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-step-backward"></span>
          <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-fast-backward"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-backward"></span>
          <span class="glyphicon-class">glyphicon glyphicon-backward</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-play"></span>
          <span class="glyphicon-class">glyphicon glyphicon-play</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-pause"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pause</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-stop"></span>
          <span class="glyphicon-class">glyphicon glyphicon-stop</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-forward"></span>
          <span class="glyphicon-class">glyphicon glyphicon-forward</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-fast-forward"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-step-forward"></span>
          <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-eject"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eject</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-plus-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-minus-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-remove-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-ok-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-question-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-info-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-screenshot"></span>
          <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-remove-circle"></span>
          <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-ok-circle"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-ban-circle"></span>
          <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-arrow-left"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-arrow-right"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-arrow-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-arrow-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-share-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-resize-full"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-resize-small"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-exclamation-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-gift"></span>
          <span class="glyphicon-class">glyphicon glyphicon-gift</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-fire"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fire</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-eye-open"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-eye-close"></span>
          <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-warning-sign"></span>
          <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-plane"></span>
          <span class="glyphicon-class">glyphicon glyphicon-plane</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-calendar"></span>
          <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-random"></span>
          <span class="glyphicon-class">glyphicon glyphicon-random</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-comment"></span>
          <span class="glyphicon-class">glyphicon glyphicon-comment</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-magnet"></span>
          <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-chevron-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-chevron-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-retweet"></span>
          <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-shopping-cart"></span>
          <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-folder-close"></span>
          <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-folder-open"></span>
          <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-resize-vertical"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-resize-horizontal"></span>
          <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-hdd"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-bullhorn"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-bell"></span>
          <span class="glyphicon-class">glyphicon glyphicon-bell</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-certificate"></span>
          <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-hand-right"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-hand-left"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-hand-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-hand-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-circle-arrow-right"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-circle-arrow-left"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-circle-arrow-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-circle-arrow-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-globe"></span>
          <span class="glyphicon-class">glyphicon glyphicon-globe</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-wrench"></span>
          <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tasks"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-filter"></span>
          <span class="glyphicon-class">glyphicon glyphicon-filter</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-briefcase"></span>
          <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-fullscreen"></span>
          <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-dashboard"></span>
          <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-paperclip"></span>
          <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-heart-empty"></span>
          <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-link"></span>
          <span class="glyphicon-class">glyphicon glyphicon-link</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-phone"></span>
          <span class="glyphicon-class">glyphicon glyphicon-phone</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-pushpin"></span>
          <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-usd"></span>
          <span class="glyphicon-class">glyphicon glyphicon-usd</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-gbp"></span>
          <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort-by-alphabet"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort-by-order"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort-by-order-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort-by-attributes"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-unchecked"></span>
          <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-expand"></span>
          <span class="glyphicon-class">glyphicon glyphicon-expand</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-collapse-down"></span>
          <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-collapse-up"></span>
          <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-log-in"></span>
          <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-flash"></span>
          <span class="glyphicon-class">glyphicon glyphicon-flash</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-log-out"></span>
          <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-new-window"></span>
          <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-record"></span>
          <span class="glyphicon-class">glyphicon glyphicon-record</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-save"></span>
          <span class="glyphicon-class">glyphicon glyphicon-save</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-open"></span>
          <span class="glyphicon-class">glyphicon glyphicon-open</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-saved"></span>
          <span class="glyphicon-class">glyphicon glyphicon-saved</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-import"></span>
          <span class="glyphicon-class">glyphicon glyphicon-import</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-export"></span>
          <span class="glyphicon-class">glyphicon glyphicon-export</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-send"></span>
          <span class="glyphicon-class">glyphicon glyphicon-send</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-floppy-disk"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-floppy-saved"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-floppy-remove"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-floppy-save"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-floppy-open"></span>
          <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-credit-card"></span>
          <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-transfer"></span>
          <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-cutlery"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-header"></span>
          <span class="glyphicon-class">glyphicon glyphicon-header</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-compressed"></span>
          <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-earphone"></span>
          <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-phone-alt"></span>
          <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tower"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tower</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-stats"></span>
          <span class="glyphicon-class">glyphicon glyphicon-stats</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sd-video"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-hd-video"></span>
          <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-subtitles"></span>
          <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sound-stereo"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sound-dolby"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sound-5-1"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sound-6-1"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-sound-7-1"></span>
          <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-copyright-mark"></span>
          <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-registration-mark"></span>
          <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-cloud-download"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-cloud-upload"></span>
          <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tree-conifer"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
        </li>
      
        <li>
          <span class="glyphicon glyphicon-tree-deciduous"></span>
          <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
        </li>
      
    </ul>
  </div>
  </div>


  <h2 id="glyphicons-how-to-use">How to use</h2>
  <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Don't mix with other components</h4>
    <p>Icon classes cannot be directly combined with other components. They should not be used along with other classes on the same element. Instead, add a nested <code>&lt;span&gt;</code> and apply the icon classes to the <code>&lt;span&gt;</code>.</p>
  </div>
{% highlight html %}
<span class="glyphicon glyphicon-search"></span>
{% endhighlight %}


  <h2 id="glyphicons-examples">Examples</h2>
  <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
  <div class="bs-example">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-left"></span></button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center"></span></button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right"></span></button>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-justify"></span></button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-star"></span> Star</button>
      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-star"></span> Star</button>
      <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star"></span> Star</button>
      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star"></span> Star</button>
    </div>
  </div>
{% highlight html %}
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star"></span> Star
</button>
{% endhighlight %}
</div>




    </div><!-- /.container -->

</div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

 
   <script type="text/javascript" src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

