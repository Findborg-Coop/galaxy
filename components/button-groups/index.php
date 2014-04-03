<!DOCTYPE html>

<html>
<head>
<title>Findborg Galaxy - Typography</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Galxy core CSS -->
    
<link rel="stylesheet" type="text/css" href="../../../comet/templates/comet/css/galaxy.css">
    <!--<link href="../../common.css" rel="stylesheet" type="text/css">-->
<style>
html, body {
  height: 100%;
  box-sizing: border-box;

}
body {
  background: #f9f9f9;
  height: 100%;
  margin: 0 0em;
  box-sizing: border-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -webkit-flex-direction: column;
  -webkit-justify-content: center;
  -moz-flex-direction: column;
  -moz-justify-content: center;
  -ms-flex-direction: column;
  -ms-justify-content: center;
  -o-flex-direction: column;
  -o-justify-content: center;
  flex-direction: column;
  justify-content: center;
 
}
#main {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -webkit-flex: 1;
  -moz-flex: 1;
  -ms-flex: 1;
  -o-flex: 1;
  flex: 1;
  max-height: 500px;
  margin-left: 1em;
  margin-right: 1em;
}
#main > * {
  border: 1px solid #ccc;
  padding: 0.25em;
  border-radius: 10px;
}
#main > article {
  -webkit-flex: 1 0 0px;
  -moz-flex: 1 0 0px;
  -ms-flex: 1 0 0px;
  -o-flex: 1 0 0px;
  flex: 1 0 0px;
  -webkit-order: 2;
  -ms-order: 2;
  -moz-order: 2;
  -o-order: 2;
  order: 2;
  margin: 0 10px;
  display: -webkit-flex;
  -webkit-justify-content: center;
  -webkit-align-items: center;
  display: -moz-flex;
  -moz-justify-content: center;
  -moz-align-items: center;
  display: -ms-flex;
  -ms-justify-content: center;
  -ms-align-items: center;
  display: -o-flex;
  -o-justify-content: center;
  -o-align-items: center;
  display: flex;
  justify-content: center;
  align-items: center;
  
  overflow: auto;
}


#main > section {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  -o-flex-direction: column;
  flex-direction: column;
  background: #eee;
  width: 200px;
  -webkit-order: 1;
  -ms-order: 1;
  -moz-order: 1;
  -o-order: 1;
  order: 1;
  -webkit-flex: none;
  -moz-flex: none;
  -ms-flex: none;
  -o-flex: none;
  flex: none;
}



#main > aside {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -webkit-order: 3;
  -moz-order: 3;
  -ms-order: 3;
  -o-order: 3;
  order: 3;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  -o-flex-direction: column;
  flex-direction: column;
  background: black;
  width: 300px;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -o-align-items: center;
  align-items: center;
  -webkit-flex: none;
  -moz-flex: none;
  -ms-flex: none;
  -o-flex: none;
  flex: none;
}
#main > aside > div {
  padding: 0.25em;
  margin: 0.25em;
  background: white;
  text-align: center;
}
#main > aside > div:nth-of-type(even) {
  -webkit-flex: 2;
  -moz-flex: 2;
  -o-flex: 2;
  -ms-flex: 2;
  flex: 2;
}
header{
  height: 88px;
  background: green;
  margin-bottom: 1em;


}


footer {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -webkit-justify-content: flex-start;
  -moz-justify-content: flex-start;
  -ms-justify-content: flex-start;
  -o-justify-content: flex-start;
  justify-content: flex-start;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -o-align-items: center;
  align-items: center;
  -webkit-flex: 0 0 20px;
  -o-flex: 0 0 20px;
  -moz-flex: 0 0 20px;
  -ms-flex: 0 0 20px;
  flex: 0 0 20px;
  background: #eee;
  padding: 1em;
  margin: 10px 0;
  color: rgba(0,0,0,0.6);
  text-shadow: 0 1px rgba(255, 255, 255, 0.75);
}
footer {
  -webkit-justify-content: flex-end;
  -moz-justify-content: flex-end;
  -ms-justify-content: flex-end;
  -o-justify-content: flex-end;
  justify-content: flex-end;
}
@media all and (max-width: 600px) {
  body {
    margin: 0 10px;
    -webkit-justify-content: flex-start;
    -moz-justify-content: flex-start;
    -ms-justify-content: flex-start;
    -o-justify-content: flex-start;
    justify-content: flex-start;
  }
  /* Too narrow to support three columns */
  #main {
    -webkit-flex-flow: column;
    -moz-flex-flow: column;
    -ms-flex-flow: column;
    -o-flex-flow: column;
    flex-flow: column;
  }
  #main > article,
  #main > aside,
  #main > section,
  nav {
    /* Return them to document order */
    -webkit-order: 0;
    -moz-order: 0;
    -ms-order: 0;
    -o-order: 0;
    order: 0;
    width: auto;
  }
  nav {
    font-size: 60%;
  }
  #main > aside {
    -webkit-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    -o-flex: 1;
    -webkit-align-items: stretch;
    -moz-align-items: stretch;
    -ms-align-items: stretch;
    -o-align-items: stretch;
    align-items: stretch;
  }
  #main > aside > div {
    -webkit-writing-mode: horizontal-tb;
    -moz-writing-mode: horizontal-tb;
    -ms-writing-mode: horizontal-tb;
    -o-writing-mode: horizontal-tb;
    writing-mode: horizontal-tb;
    border-radius: 0 !important;
  }
  #main > article {
    margin: 0;

  }
  #main > section {
    margin: 10px auto;
  }
  #main > section > div {
    -webkit-flex: 1 0 auto;
    -moz-flex: 1 0 auto;
    -ms-flex: 1 0 auto;
    -o-flex: 1 0 auto;
    flex: 1 0 auto;
  }
}
</style>
</head>
<body >

<header>
   <div class="clearfix leading-3 mb1 fb accent white">
        <div class="left px1 p bold leading-3">Findborg</div>
        <div class="right px1">
          <a href="#!">Right</a>
          <a href="#!" class="tiny fb button ml1">Button</a>
        </div>
      </div>
      <nav>
  sub nav bar
  

</nav>
</header>

<div id="main">
  <article>
   <div class="row" style="margin:auto;">
<div class="fb-12-mobile">
  <h1 id="btn-groups" class="page-header">Button groups</h1>

  <p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

  <div class="bs-callout bs-callout-warning">
    <h4>Tooltips &amp; popovers in button groups require special setting</h4>
    <p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
  </div>

  <h3 id="btn-groups-single">Basic example</h3>
  <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
  <div class="bs-example">
    <div class="fb buttons" style="margin: 9px 0 5px;">
      <button type="button" class="fb button btn-default">Left</button>
      <button type="button" class="fb button btn-default">Middle</button>
      <button type="button" class="fb button btn-default">Right</button>
    </div>
  </div>
{% highlight html %}
<div class="btn-group">
  <button type="button" class="btn btn-default">Left</button>
  <button type="button" class="btn btn-default">Middle</button>
  <button type="button" class="btn btn-default">Right</button>
</div>
{% endhighlight %}

  <h3 id="btn-groups-toolbar">Button toolbar</h3>
  <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
  <div class="fb icon buttons">
  <div class="fb button">1</div>
  <div class="fb button">2</div>
  <div class="fb button">3</div>
  <div class="fb button">4</div>
</div>
<div class="fb icon buttons">
  <div class="fb button">A</div>
  <div class="fb button">B</div>
  <div class="fb button">C</div>
</div>



  <div class="bs-example">
    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
      <div class="btn-group">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-default">2</button>
        <button type="button" class="btn btn-default">3</button>
        <button type="button" class="btn btn-default">4</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default">5</button>
        <button type="button" class="btn btn-default">6</button>
        <button type="button" class="btn btn-default">7</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default">8</button>
      </div>
    </div>
  </div>
{% highlight html %}
<div class="btn-toolbar" role="toolbar">
  <div class="btn-group">...</div>
  <div class="btn-group">...</div>
  <div class="btn-group">...</div>
</div>
{% endhighlight %}

  <h3 id="btn-groups-sizing">Sizing</h3>
  <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the <code>.btn-group</code>.</p>
  <div class="bs-example">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group btn-group-lg">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group btn-group-sm">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group btn-group-xs">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
  </div>
{% highlight html %}
<div class="btn-group btn-group-lg">...</div>
<div class="btn-group">...</div>
<div class="btn-group btn-group-sm">...</div>
<div class="btn-group btn-group-xs">...</div>
{% endhighlight %}

  <h3 id="btn-groups-nested">Nesting</h3>
  <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
  <div class="bs-example">
    <div class="btn-group">
      <button type="button" class="btn btn-default">1</button>
      <button type="button" class="btn btn-default">2</button>

      <div class="btn-group">
        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
  </div>
{% highlight html %}
<div class="btn-group">
  <button type="button" class="btn btn-default">1</button>
  <button type="button" class="btn btn-default">2</button>

  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Dropdown
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Dropdown link</a></li>
      <li><a href="#">Dropdown link</a></li>
    </ul>
  </div>
</div>
{% endhighlight %}

  <h3 id="btn-groups-vertical">Vertical variation</h3>
  <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong></p>
  <div class="bs-example">
    <div class="btn-group-vertical">
      <button type="button" class="btn btn-default">Button</button>
      <button type="button" class="btn btn-default">Button</button>
      <div class="btn-group">
        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <button type="button" class="btn btn-default">Button</button>
      <button type="button" class="btn btn-default">Button</button>
      <div class="btn-group">
        <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
  </div>
{% highlight html %}
<div class="btn-group-vertical">
  ...
</div>
{% endhighlight %}

  <h3 id="btn-groups-justified">Justified button groups</h3>
  <p>Make a group of buttons stretch at equal sizes to span the entire width of its parent. Also works with button dropdowns within the button group.</p>

  <div class="bs-callout bs-callout-warning">
    <h4>Handling borders</h4>
    <p>Due to the specific HTML and CSS used to justify buttons (namely <code>display: table-cell</code>), the borders between them are doubled. In regular button groups, <code>margin-left: -1px</code> is used to stack the borders instead of removing them. However, <code>margin</code> doesn't work with <code>display: table-cell</code>. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.</p>
  </div>
  <div class="bs-callout bs-callout-warning">
    <h4>IE8 and borders</h4>
    <p>Internet Explorer 8 doesn't render borders in on buttons in a justified button group, whether it's on <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements. To get around that, wrap each button in another <code>.btn-group</code>.</p>
    <p>See <a href="https://github.com/twbs/bootstrap/issues/12476">#12476</a> for more information.</p>
  </div>

  <h4>With <code>&lt;a&gt;</code> elements</h4>
  <p>Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>
  <div class="bs-example">
    <div class="btn-group btn-group-justified">
      <a class="btn btn-default" role="button">Left</a>
      <a class="btn btn-default" role="button">Middle</a>
      <a class="btn btn-default" role="button">Right</a>
    </div>
    <br>
    <div class="btn-group btn-group-justified">
      <a class="btn btn-default" role="button">Left</a>
      <a class="btn btn-default" role="button">Middle</a>
      <div class="btn-group">
        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
    </div>
  </div>
{% highlight html %}
<div class="btn-group btn-group-justified">
  ...
</div>
{% endhighlight %}

  <h4>With <code>&lt;button&gt;</code> elements</h4>
  <p>To use justified button groups with <code>&lt;button&gt;</code> elements, <strong class="text-danger">you must wrap each button in a button group</strong>. Most browsers don't properly apply our CSS for justification to <code>&lt;button&gt;</code> elements, but since we support button dropdowns, we can workaround that.</p>
  <div class="bs-example">
    <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button type="button" class="btn btn-default">Left</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default">Middle</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
  </div>
{% highlight html %}
<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-default">Left</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default">Middle</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default">Right</button>
  </div>
</div>
{% endhighlight %}
</div>




    </div><!-- /.container -->




  </article>
  <section>
    <div><img class="circular fb image"src="http://lorempixel.com/200/200/people" /></div>
    
  </section>
  <aside>
    <div>Awesome</div>
    <div>Sidebar</div>
    <div>Bro!</div>
  </aside>
</div>
<footer>
<div class="clearfix leading-3 mb1 fb accent white">
        <div class="left px1 p leading-3">left</div>
        <div class="right px1">
          <a href="#!">Right</a>
          <a href="#!" class="button button-small ml1">Button</a>
        </div>
        
      </div>
</footer>

 <!-- Placed at the end of the document so the pages load faster -->
    

  <script src="../../dist/js/jquery.js"></script>
  <script type="text/javascript" src="../../dist/js/bootstrap.min.js"></script>
<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
<script>CFInstall.check({mode: 'overlay'});</script>
<![endif]-->
</body>
</html>