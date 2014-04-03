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
  <h1 id="buttons" class="page-header">Buttons</h1>

  <h2 id="buttons-options">Options</h2>
  <p>Use any of the available button classes to quickly create a styled button.</p>
  <div class="bs-example">
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
  </div>
{% highlight html %}
<!-- Standard button -->
<button type="button" class="btn btn-default">Default</button>

<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
{% endhighlight %}

  <h2 id="buttons-sizes">Sizes</h2>
  <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
  <div class="bs-example">
    <p>
      <button type="button" class="btn btn-primary btn-lg">Large button</button>
      <button type="button" class="btn btn-default btn-lg">Large button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary">Default button</button>
      <button type="button" class="btn btn-default">Default button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary btn-sm">Small button</button>
      <button type="button" class="btn btn-default btn-sm">Small button</button>
    </p>
    <p>
      <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
      <button type="button" class="btn btn-default btn-xs">Extra small button</button>
    </p>
  </div>
{% highlight html %}
<p>
  <button type="button" class="btn btn-primary btn-lg">Large button</button>
  <button type="button" class="btn btn-default btn-lg">Large button</button>
</p>
<p>
  <button type="button" class="btn btn-primary">Default button</button>
  <button type="button" class="btn btn-default">Default button</button>
</p>
<p>
  <button type="button" class="btn btn-primary btn-sm">Small button</button>
  <button type="button" class="btn btn-default btn-sm">Small button</button>
</p>
<p>
  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
  <button type="button" class="btn btn-default btn-xs">Extra small button</button>
</p>
{% endhighlight %}

  <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
  <div class="bs-example">
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
      <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
      <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
    </div>
  </div>
{% highlight html %}
<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
{% endhighlight %}


  <h2 id="buttons-active">Active state</h2>
  <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s should you need to replicate the active state progammatically.</p>

  <h3>Button element</h3>
  <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
  <p class="bs-example">
    <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
    <button type="button" class="btn btn-default btn-lg active">Button</button>
  </p>
{% highlight html %}
<button type="button" class="btn btn-primary btn-lg active">Primary button</button>
<button type="button" class="btn btn-default btn-lg active">Button</button>
{% endhighlight %}

  <h3>Anchor element</h3>
  <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
  </p>
{% highlight html %}
<a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
<a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
{% endhighlight %}


  <h2 id="buttons-disabled">Disabled state</h2>
  <p>Make buttons look unclickable by fading them back 50%.</p>

  <h3>Button element</h3>
  <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
  <p class="bs-example">
    <button type="button" class="btn btn-primary btn-lg" disabled="disabled">Primary button</button>
    <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
  </p>
{% highlight html %}
<button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button>
<button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
{% endhighlight %}

  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and below will render text gray with a nasty text-shadow that we cannot fix.</p>
  </div>

  <h3>Anchor element</h3>
  <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
  </p>
{% highlight html %}
<a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
<a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
{% endhighlight %}
  <p>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required.
  </p>
  <div class="bs-callout bs-callout-warning">
    <h4>Link functionality caveat</h4>
    <p>This class uses <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11. So to be safe, use custom JavaScript to disable such links.</p>
  </div>
  <div class="bs-callout bs-callout-warning">
    <h4>Context-specific usage</h4>
    <p>While button classes can be used on <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements, only <code>&lt;button&gt;</code> elements are supported within our nav and navbar components.</p>
  </div>


  <h2 id="buttons-tags">Button tags</h2>
  <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
  <form class="bs-example">
    <a class="btn btn-default" href="#" role="button">Link</a>
    <button class="btn btn-default" type="submit">Button</button>
    <input class="btn btn-default" type="button" value="Input">
    <input class="btn btn-default" type="submit" value="Submit">
  </form>
{% highlight html %}
<a class="btn btn-default" href="#" role="button">Link</a>
<button class="btn btn-default" type="submit">Button</button>
<input class="btn btn-default" type="button" value="Input">
<input class="btn btn-default" type="submit" value="Submit">
{% endhighlight %}

  <div class="bs-callout bs-callout-warning">
    <h4>Cross-browser rendering</h4>
    <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
    <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a Firefox bug</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
  </div>
</div>



    </div><!-- /.container -->

</div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

 
  
  </body>
</html>

