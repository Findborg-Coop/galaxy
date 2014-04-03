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
  <h1 id="navbar" class="page-header">Navbar</h1>

  <h2 id="navbar-default">Default navbar</h2>
  <p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>

  <div class="bs-callout bs-callout-warning" id="callout-navbar-overflow">
    <h4>Overflowing content</h4>
    <p>Since Bootstrap doesn't know how much space the content in your navbar needs, you might run into issues with content wrapping into a second row. To resolve this, you can:</p>
    <ol type="a">
      <li>Reduce the amount or width of navbar items.</li>
      <li>Hide certain navbar items at certain screen sizes using <a href="../css/#responsive-utilities">responsive utility classes</a>.</li>
      <li>Change the point at which your navbar switches between collapsed and horizontal mode. Customize the <code>@grid-float-breakpoint</code> variable or add your own media query.</li>
    </ol>
  </div>
  <div class="bs-callout bs-callout-danger">
    <h4>Requires JavaScript</h4>
    <p>If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the <code>.navbar-collapse</code>.</p>
  </div>

  <div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
{% highlight html %}
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{% endhighlight %}

  <div class="bs-callout bs-callout-danger">
    <h4>Plugin dependency</h4>
    <p>The responsive navbar requires the <a href="../javascript/#collapse">collapse plugin</a> to be included in your version of Bootstrap.</p>
  </div>

  <div class="bs-callout bs-callout-warning">
    <h4>Make navbars accessible</h4>
    <p>Be sure to add a <code>role="navigation"</code> to every navbar to help with accessibility.</p>
  </div>


  <h2 id="navbar-forms">Forms</h2>
  <p>Place form content within <code>.navbar-form</code> for proper vertical alignment and collapsed behavior in narrow viewports. Use the alignment options to decide where it resides within the navbar content.</p>
  <p>As a heads up, <code>.navbar-form</code> shares much of its code with <code>.form-inline</code> via mixin. <strong class="text-danger">Some form controls, like input groups, may require fixed widths to be show up properly within a navbar.</strong></p>
  <div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
{% highlight html %}
<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
{% endhighlight %}

  <div class="bs-callout bs-callout-warning">
    <h4>Mobile device caveats</h4>
    <p>There are some caveats regarding using form controls within fixed elements on mobile devices. <a href="../getting-started/#support-fixed-position-keyboards">See our browser support docs</a> for details.</p>
  </div>

  <div class="bs-callout bs-callout-warning">
    <h4>Always add labels</h4>
    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline navbar forms, you can hide the labels using the <code>.sr-only</code> class.</p>
  </div>


  <h2 id="navbar-buttons">Buttons</h2>
  <p>Add the <code>.navbar-btn</code> class to <code>&lt;button&gt;</code> elements not residing in a <code>&lt;form&gt;</code> to vertically center them in the navbar.</p>
  <div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
          <button type="button" class="btn btn-default navbar-btn">Sign in</button>
        </div>
      </div>
    </nav>
  </div>
{% highlight html %}
<button type="button" class="btn btn-default navbar-btn">Sign in</button>
{% endhighlight %}

  <div class="bs-callout bs-callout-warning">
    <h4>Context-specific usage</h4>
    <p>Like the standard <a href="../css/#buttons">button classes</a>, <code>.navbar-btn</code> can be used on <code>&lt;a&gt;</code> and <code>&lt;input&gt;</code> elements. However, neither <code>.navbar-btn</code> nor the standard button classes should be used on <code>&lt;a&gt;</code> elements within <code>.navbar-nav</code>.</p>
  </div>

  <h2 id="navbar-text">Text</h2>
  <p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>
  <div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
          <p class="navbar-text">Signed in as Mark Otto</p>
        </div>
      </div>
    </nav>
  </div>
{% highlight html %}
<p class="navbar-text">Signed in as Mark Otto</p>
{% endhighlight %}


  <h2 id="navbar-links">Non-nav links</h2>
  <p>For folks using standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</p>
  <div class="bs-example">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
          <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
        </div>
      </div>
    </nav>
  </div>
{% highlight html %}
<p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
{% endhighlight %}


  <h2 id="navbar-component-alignment">Component alignment</h2>
  <p>Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate <code>&lt;ul&gt;</code> with the respective utility class applied.</p>
  <p>These classes are mixin-ed versions of <code>.pull-left</code> and <code>.pull-right</code>, but they're scoped to media queries for easier handling of navbar components across device sizes.</p>
  <div class="bs-callout bs-callout-warning">
    <h4>Right aligning multiple components</h4>
    <p>Navbars currently have a limitation with multiple <code>.navbar-right</code> classes. To properly space content, we use negative margin on the last <code>.navbar-right</code> element. When there are multiple elements using that class, these margins don't work as intended.</p>
    <p>We'll revisit this when we can rewrite that component in v4.</p>
  </div>


  <h2 id="navbar-fixed-top">Fixed to top</h2>
  <p>Add <code>.navbar-fixed-top</code> and include a <code>.container</code> or <code>.container-fluid</code> to center and pad navbar content.</p>
  <div class="bs-example bs-navbar-top-example">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
{% highlight html %}
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    ...
  </div>
</nav>
{% endhighlight %}

  <div class="bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 30px high.</p>
{% highlight scss %}
body { padding-top: 40px; }
{% endhighlight %}
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
  </div>


  <h2 id="navbar-fixed-bottom">Fixed to bottom</h2>
  <p>Add <code>.navbar-fixed-bottom</code> and include a <code>.container</code> or <code>.container-fluid</code> to center and pad navbar content.</p>
  <div class="bs-example bs-navbar-bottom-example">
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
{% highlight html %}
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
    ...
  </div>
</nav>
{% endhighlight %}

  <div class="bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the bottom of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 30px high.</p>
{% highlight scss %}
body { padding-bottom: 40px; }
{% endhighlight %}
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
  </div>


  <h2 id="navbar-static-top">Static top</h2>
  <p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code> and include a <code>.container</code> or <code>.container-fluid</code> to center and pad navbar content.</p>
  <p>Unlike the <code>.navbar-fixed-*</code> classes, you do not need to change any padding on the <code>body</code>.</p>
  <div class="bs-example bs-navbar-top-example">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
{% highlight html %}
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    ...
  </div>
</nav>
{% endhighlight %}


  <h2 id="navbar-inverted">Inverted navbar</h2>
  <p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>
  <div class="bs-example">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div><!-- /example -->
{% highlight html %}
<nav class="navbar navbar-inverse" role="navigation">
  ...
</nav>
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

