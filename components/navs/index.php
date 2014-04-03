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
  <h1 id="nav" class="page-header">Navs</h1>

  <p class="lead">Navs available in Bootstrap have shared markup, starting with the base <code>.nav</code> class, as well as shared states. Swap modifier classes to switch between each style.</p>

  <h2 id="nav-tabs">Tabs</h2>
  <p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class.</p>
  <div class="bs-example">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-tabs">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
{% endhighlight %}

  <h3 id="nav-tabs-google">Basic Google tabs</h3>
  <p>Take a regular <code>&lt;ul&gt;</code> of links and add <code>.nav-tabs .nav-tabs-google</code>:</p>
  <div class="bs-example">
    <ul class="nav nav-tabs nav-tabs-google">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-tabs nav-tabs-google">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
{% endhighlight %}
  <div class="bs-callout bs-callout-info">
    <h4>Requires JavaScript tabs plugin</h4>
    <p>For tabs with tabbable areas, you must use the <a href="../javascript/#tabs">tabs JavaScript plugin</a>.</p>
  </div>

  <h2 id="nav-pills">Pills</h2>
  <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
  <div class="bs-example">
    <ul class="nav nav-pills">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
{% endhighlight %}
  <p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>
  <div class="bs-example">
    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-pills nav-stacked">
  ...
</ul>
{% endhighlight %}


  <h2 id="nav-justified">Justified</h2>
  <p>Easily make tabs or pills equal widths of their parent at screens wider than 768px with <code>.nav-justified</code>. On smaller screens, the nav links are stacked.</p>
  <div class="bs-callout bs-callout-warning">
    <h4>Safari and responsive justified navs</h4>
    <p>As of v7.0.1, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing. This bug is also shown in the <a href="../examples/justified-nav/">justified nav example</a>.</p>
  </div>
  <div class="bs-example">
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-justified">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-tabs nav-justified">
  ...
</ul>
<ul class="nav nav-pills nav-justified">
  ...
</ul>
{% endhighlight %}


  <h2 id="nav-disabled-links">Disabled links</h2>
  <p>For any nav component (tabs or pills), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>.</p>

  <div class="bs-callout bs-callout-warning">
    <h4>Link functionality not impacted</h4>
    <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
  </div>

  <div class="bs-example">
    <ul class="nav nav-pills">
      <li><a href="#">Clickable link</a></li>
      <li><a href="#">Clickable link</a></li>
      <li class="disabled"><a href="#">Disabled link</a></li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-pills">
  ...
  <li class="disabled"><a href="#">Disabled link</a></li>
  ...
</ul>
{% endhighlight %}


  <h2 id="nav-dropdowns">Using dropdowns</h2>
  <p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript plugin</a>.</p>

  <h3>Tabs with dropdowns</h3>
  <div class="bs-example">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Help</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div>
{% highlight html %}
<ul class="nav nav-tabs">
  ...
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      ...
    </ul>
  </li>
  ...
</ul>
{% endhighlight %}

  <h3>Pills with dropdowns</h3>
  <div class="bs-example">
    <ul class="nav nav-pills">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Help</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /example -->
{% highlight html %}
<ul class="nav nav-pills">
  ...
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      ...
    </ul>
  </li>
  ...
</ul>
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

