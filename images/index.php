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
  <h1 id="images" class="page-header">Images</h1>

  <h2 id="images-responsive">Responsive images</h2>
  <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>
{% highlight html %}
<img src="..." class="img-responsive" alt="Responsive image">
{% endhighlight %}

  <h2 id="images-shapes">Image shapes</h2>
  <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
  </div>
  <div class="bs-example bs-example-images">
    <img data-src="holder.js/140x140" class="img-rounded" alt="A generic square placeholder image with rounded corners">
    <img data-src="holder.js/140x140" class="img-circle" alt="A generic square placeholder image where only the portion within the circle circumscribed about said square is visible">
    <img data-src="holder.js/140x140" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
  </div>
{% highlight html %}
<img src="..." alt="..." class="img-rounded">
<img src="..." alt="..." class="img-circle">
<img src="..." alt="..." class="img-thumbnail">
{% endhighlight %}
</div>



    </div><!-- /.container -->

</div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

 
  
  </body>
</html>

