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
  <h1 id="forms" class="page-header">Forms</h1>

  <h2 id="forms-example">Basic example</h2>
  <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
  <div class="bs-example">
    <form role="form">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Check me out
        </label>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div><!-- /example -->
{% highlight html %}
<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
{% endhighlight %}
    <div class="bs-callout bs-callout-warning">
      <h4>Don't mix form groups with input groups</h4>
      <p>Do not mix form groups directly with <a href="/components/#input-groups">input groups</a>. Instead, nest the input group inside of the form group.</p>
    </div>


  <h2 id="forms-inline">Inline form</h2>
  <p>Add <code>.form-inline</code> to your <code>&lt;form&gt;</code> for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p>
  <div class="bs-callout bs-callout-danger">
    <h4>Requires custom widths</h4>
    <p>Inputs, selects, and textareas are 100% wide by default in Bootstrap. To use the inline form, you'll have to set a width on the form controls used within.</p>
  </div>
  <div class="bs-callout bs-callout-warning">
    <h4>Always add labels</h4>
    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class.</p>
  </div>
  <div class="bs-example">
    <form class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail2">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">@</div>
          <input class="form-control" type="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="sr-only" for="exampleInputPassword2">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-default">Sign in</button>
    </form>
  </div><!-- /example -->
{% highlight html %}
<form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>
{% endhighlight %}


  <h2 id="forms-horizontal">Horizontal form</h2>
  <p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form. Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p>
  <div class="bs-example">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
{% endhighlight %}


  <h2 id="forms-controls">Supported controls</h2>
  <p>Examples of standard form controls supported in an example form layout.</p>

  <h3>Inputs</h3>
  <p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Type declaration required</h4>
    <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
  </div>
  <div class="bs-example">
    <form role="form">
      <input type="text" class="form-control" placeholder="Text input">
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<input type="text" class="form-control" placeholder="Text input">
{% endhighlight %}
  <div class="bs-callout bs-callout-info">
    <h4>Input groups</h4>
    <p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href="../components/#input-groups">check out the input group component</a>.</p>
  </div>

  <h3>Textarea</h3>
  <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
  <div class="bs-example">
    <form role="form">
      <textarea class="form-control" rows="3"></textarea>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<textarea class="form-control" rows="3"></textarea>
{% endhighlight %}

  <h3>Checkboxes and radios</h3>
  <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
  <h4>Default (stacked)</h4>
  <div class="bs-example">
    <form role="form">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="">
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <br>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    Option two can be something else and selecting it will deselect option one
  </label>
</div>
{% endhighlight %}

  <h4>Inline checkboxes</h4>
  <p>Use the <code>.checkbox-inline</code> or <code>.radio-inline</code> classes on a series of checkboxes or radios for controls that appear on the same line.</p>
  <div class="bs-example">
    <form role="form">
      <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
      </label>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
</label>
{% endhighlight %}

  <h3>Selects</h3>
  <p>Use the default option, or add <code>multiple</code> to show multiple options at once.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Plugin dependency</h4>
    <p>
      The Google themed rendering of the select menus is accomplished using
      <a href="http://todc.github.com/todc-select2" target="_blank">todc-select2</a>.
    </p>
    <h5>Heads up!</h5>
    <ul>
      <li>
        <a href="http://todc.github.com/todc-select2" target="_blank">This plugin</a>
        is not included in todc-bootstrap. It must be downloaded and included
        separately.
      </li>
      <li>
        <a href="http://todc.github.com/todc-select2" target="_blank">This plugin</a>
        does not currently support the height sizing classes
        <code>input-lg</code> or <code>input-sm</code>.
      </li>
    </ul>
  </div>
  <div class="bs-example">
    <form role="form">
      <select class="form-control">
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Orange">Orange</option>
        <option value="Pear">Pear</option>
        <option value="Peach">Peach</option>
      </select>
      <br>
      <select multiple class="form-control">
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Orange">Orange</option>
        <option value="Pear">Pear</option>
        <option value="Peach">Peach</option>
      </select>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<select class="form-control">
  <option value="Apple">Apple</option>
  <option value="Banana">Banana</option>
  <option value="Orange">Orange</option>
  <option value="Pear">Pear</option>
  <option value="Peach">Peach</option>
</select>

<select multiple class="form-control">
  <option value="Apple">Apple</option>
  <option value="Banana">Banana</option>
  <option value="Orange">Orange</option>
  <option value="Pear">Pear</option>
  <option value="Peach">Peach</option>
</select>
{% endhighlight %}


  <h2 id="forms-controls-static">Static control</h2>
  <p>When you need to place plain text next to a form label within a horizontal form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>
  <div class="bs-example">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <p class="form-control-static">email@example.com</p>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static">email@example.com</p>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
</form>
{% endhighlight %}

  <h2 id="forms-control-focus">Input focus</h2>
  <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
  <div class="bs-example">
    <form role="form">
      <input class="form-control" id="focusedInput" type="text" value="Demonstrative focus state">
    </form>
  </div>
  <div class="bs-callout bs-callout-info">
    <h4>Demo <code>:focus</code> state</h4>
    <p>The above example input uses custom styles in our documentation to demonstrate the <code>:focus</code> state on a <code>.form-control</code>.</p>
  </div>


  <h2 id="forms-control-disabled">Disabled inputs</h2>
  <p>Add the <code>disabled</code> boolean attribute on an input to prevent user input and trigger a slightly different look.</p>
  <div class="bs-example">
    <form role="form">
      <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
{% endhighlight %}

  <h3 id="forms-disabled-fieldsets">Disabled fieldsets</h3>
  <p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the <code>&lt;fieldset&gt;</code> at once.</p>

  <div class="bs-callout bs-callout-warning">
    <h4>Caveat about link functionality of <code>&lt;a&gt;</code></h4>
    <p>Our styles use <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a class="btn btn-*"&gt;</code> buttons in this case, but that CSS property is not yet standardized and isn't fully supported in Opera 18 and below, or in Internet Explorer 11. So to be safe, use custom JavaScript to disable such links.</p>
  </div>

  <div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>
    <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 9 and below don't actually support the <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the fieldset in these browsers.</p>
  </div>

  <div class="bs-example">
    <form role="form">
      <fieldset disabled>
        <div class="form-group">
          <label for="disabledTextInput">Disabled input</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
        <div class="form-group">
          <label for="disabledSelect">Disabled select menu</label>
          <select id="disabledSelect" class="form-control">
            <option>Disabled select</option>
          </select>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Can't check this
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<form role="form">
  <fieldset disabled>
    <div class="form-group">
      <label for="disabledTextInput">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Disabled select menu</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Can't check this
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
{% endhighlight %}


  <h2 id="forms-control-readonly">Readonly inputs</h2>
  <p>Add the <code>readonly</code> boolean attribute on an input to prevent user input and style the input as disabled.</p>
  <div class="bs-example">
    <form role="form">
      <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
{% endhighlight %}


  <h2 id="forms-control-validation">Validation states</h2>
  <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>

  <div class="bs-example">
    <form role="form">
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Input with success</label>
        <input type="text" class="form-control" id="inputSuccess1">
      </div>
      <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Input with warning</label>
        <input type="text" class="form-control" id="inputWarning1">
      </div>
      <div class="form-group has-error">
        <label class="control-label" for="inputError1">Input with error</label>
        <input type="text" class="form-control" id="inputError1">
      </div>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<div class="form-group has-success">
  <label class="control-label" for="inputSuccess1">Input with success</label>
  <input type="text" class="form-control" id="inputSuccess1">
</div>
<div class="form-group has-warning">
  <label class="control-label" for="inputWarning1">Input with warning</label>
  <input type="text" class="form-control" id="inputWarning1">
</div>
<div class="form-group has-error">
  <label class="control-label" for="inputError1">Input with error</label>
  <input type="text" class="form-control" id="inputError1">
</div>
{% endhighlight %}

  <h3>With optional icons</h3>
  <p>You can also add optional feedback icons with the addition of <code>.has-feedback</code> and the right icon.</p>
  <div class="bs-callout bs-callout-warning">
    <h4>Icons, labels, and input groups</h4>
    <p>Manual positioning of feedback icons is required for inputs without a label and for <a href="../components#input-groups">input groups</a> with an add-on on the right. For inputs without labels, adjust the <code>top</code>value. For input groups, adjust the <code>right</code> value to an appropriate pixel value depending on the width of your addon.</p>
  </div>
  <div class="bs-example">
    <form role="form">
      <div class="form-group has-success has-feedback">
        <label class="control-label" for="inputSuccess2">Input with success</label>
        <input type="text" class="form-control" id="inputSuccess2">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      </div>
      <div class="form-group has-warning has-feedback">
        <label class="control-label" for="inputWarning2">Input with warning</label>
        <input type="text" class="form-control" id="inputWarning2">
        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
      </div>
      <div class="form-group has-error has-feedback">
        <label class="control-label" for="inputError2">Input with error</label>
        <input type="text" class="form-control" id="inputError2">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
      </div>
    </form>
  </div>
{% highlight html %}
<div class="form-group has-success has-feedback">
  <label class="control-label" for="inputSuccess2">Input with success</label>
  <input type="text" class="form-control" id="inputSuccess2">
  <span class="glyphicon glyphicon-ok form-control-feedback"></span>
</div>
<div class="form-group has-warning has-feedback">
  <label class="control-label" for="inputWarning2">Input with warning</label>
  <input type="text" class="form-control" id="inputWarning2">
  <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
</div>
<div class="form-group has-error has-feedback">
  <label class="control-label" for="inputError2">Input with error</label>
  <input type="text" class="form-control" id="inputError2">
  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
</div>
{% endhighlight %}

  <p>Optional icons also work on horizontal and inline forms.</p>
  <div class="bs-example">
    <form class="form-horizontal" role="form">
      <div class="form-group has-success has-feedback">
        <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="inputSuccess3">
          <span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>
      </div>
    </form>
  </div>
{% highlight html %}
<form class="form-horizontal" role="form">
  <div class="form-group has-success has-feedback">
    <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputSuccess3">
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
  </div>
</form>
{% endhighlight %}

  <div class="bs-example">
    <form class="form-inline" role="form">
      <div class="form-group has-success has-feedback">
        <label class="control-label" for="inputSuccess4">Input with success</label>
        <input type="text" class="form-control" id="inputSuccess4">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      </div>
    </form>
  </div>
{% highlight html %}
<form class="form-inline" role="form">
  <div class="form-group has-success has-feedback">
    <label class="control-label" for="inputSuccess4">Input with success</label>
    <input type="text" class="form-control" id="inputSuccess4">
    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
  </div>
</form>
{% endhighlight %}


  <h2 id="forms-control-sizes">Control sizing</h2>
  <p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>

  <h3>Height sizing</h3>
  <p>Create taller or shorter form controls that match button sizes.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Heads up!</h4>
    <p>
      Please be aware that if you use the
      <a href="http://todc.github.com/todc-select2" target="_blank">todc-select2</a>
      plugin to Google theme your selects that it does not currently
      support the height sizing classes <code>input-lg</code> or <code>input-sm</code>.
    </p>
  </div>
  <div class="bs-example bs-example-control-sizing">
    <form role="form">
      <div class="controls">
        <input class="form-control input-lg" type="text" placeholder=".input-lg">
        <input type="text" class="form-control" placeholder="Default input">
        <input class="form-control input-sm" type="text" placeholder=".input-sm">

        <select class="form-control input-lg">
          <option value="">.input-lg</option>
        </select>
        <select class="form-control">
          <option value="">Default select</option>
        </select>
        <select class="form-control input-sm">
          <option value="">.input-sm</option>
        </select>
      </div>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<input class="form-control input-lg" type="text" placeholder=".input-lg">
<input class="form-control" type="text" placeholder="Default input">
<input class="form-control input-sm" type="text" placeholder=".input-sm">

<select class="form-control input-lg">...</select>
<select class="form-control">...</select>
<select class="form-control input-sm">...</select>
{% endhighlight %}

  <h3>Column sizing</h3>
  <p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
  <div class="bs-example">
    <form role="form">
      <div class="row">
        <div class="col-xs-2">
          <input type="text" class="form-control" placeholder=".col-xs-2">
        </div>
        <div class="col-xs-3">
          <input type="text" class="form-control" placeholder=".col-xs-3">
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" placeholder=".col-xs-4">
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<div class="row">
  <div class="col-xs-2">
    <input type="text" class="form-control" placeholder=".col-xs-2">
  </div>
  <div class="col-xs-3">
    <input type="text" class="form-control" placeholder=".col-xs-3">
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder=".col-xs-4">
  </div>
</div>
{% endhighlight %}

  <h2 id="forms-help-text">Help text</h2>
  <p>Block level help text for form controls.</p>
  <div class="bs-example">
    <form role="form">
      <input type="text" class="form-control">
      <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
    </form>
  </div><!-- /.bs-example -->
{% highlight html %}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
{% endhighlight %}
</div>


    </div><!-- /.container -->

</div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

 
  
  </body>
</html>

