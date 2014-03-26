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
      <style type="text/css">
      body{background: #f9f9f9;}
      </style>
  
  </head>

  <body>
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
   <div class="px-responsive py-responsive js-baseline js-outline">
<h1 class="h1">Typography</h1>
<div class="row">
  <div class="fb-8-phone">
    <section>
  <!-- Headings -->
  <h2 class="h2">Headings</h2>
  <p class="h3">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
  <div class="bs-example bs-example-type">
    <table class="table">
      <tbody>
        <tr>
          <td><h1>h1. Findborg heading</h1></td>
          <td class="type-info">Need to do</td>
        </tr>
        <tr>
          <td><h2>h2. Findborg heading</h2></td>
          <td class="type-info">Semibold 30px</td>
        </tr>
        <tr>
          <td><h3>h3. Findborg heading</h3></td>
          <td class="type-info">Semibold 24px</td>
        </tr>
        <tr>
          <td><h4>h4. Findborg heading</h4></td>
          <td class="type-info">Semibold 18px</td>
        </tr>
        <tr>
          <td><h5>h5. Findborg heading</h5></td>
          <td class="type-info">Semibold 14px</td>
        </tr>
        <tr>
          <td><h6>h6. Findborg heading</h6></td>
          <td class="type-info">Semibold 12px</td>
        </tr>
      </tbody>
    </table>
  </div>
 <pre class="prettyprint linenums">
<code><h1>h1. Findborg heading</h1></code>
<code><h2>h2. Findborg heading</h2></code>
<code><h3>h3. Findborg heading</h3></code>
<code><h4>h4. Findborg heading</h4></code>
<code><h5>h5. Findborg heading</h5></code>
<code><h6>h6. Findborg heading</h6></code>
</pre>

  <p>Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
  <div class="bs-example bs-example-type">
    <table class="table">
      <tbody>
        <tr>
          <td><h1>h1. Findborg heading <small>Secondary text</small></h1></td>
        </tr>
        <tr>
          <td><h2>h2. Findborg heading <small>Secondary text</small></h2></td>
        </tr>
        <tr>
          <td><h3>h3. Findborg heading <small>Secondary text</small></h3></td>
        </tr>
        <tr>
          <td><h4>h4. Findborg heading <small>Secondary text</small></h4></td>
        </tr>
        <tr>
          <td><h5>h5. Findborg heading <small>Secondary text</small></h5></td>
        </tr>
        <tr>
          <td><h6>h6. Findborg heading <small>Secondary text</small></h6></td>
        </tr>
      </tbody>
    </table>
  </div>
{% highlight html %}
<h1>h1. Findborg heading <small>Secondary text</small></h1>
<h2>h2. Findborg heading <small>Secondary text</small></h2>
<h3>h3. Findborg heading <small>Secondary text</small></h3>
<h4>h4. Findborg heading <small>Secondary text</small></h4>
<h5>h5. Findborg heading <small>Secondary text</small></h5>
<h6>h6. Findborg heading <small>Secondary text</small></h6>
{% endhighlight %}


</section>

  </div>
  <div class="fb-4-phone fb accent">right side</div>
</div>



      <div class="">
  

  

  <!-- Body copy -->
  <h2 id="type-body-copy">Body copy</h2>
  <p>Findborg's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
  <div class="bs-example">
    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
  </div>
{% highlight html %}
<p>...</p>
{% endhighlight %}

  <!-- Body copy .lead -->
  <h3>Lead body copy</h3>
  <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
  <div class="bs-example">
    <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
  </div>
{% highlight html %}
<p class="lead">...</p>
{% endhighlight %}

  <!-- Using Less -->
  <h3>Built with Less</h3>
  <p>The typographic scale is based on two Less variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Findborg adapts.</p>

  <!-- Inline text elements -->
  <h2 id="type-inline-text">Inline text elements</h2>
  <h3>Marked text</h3>
  <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
  <div class="bs-example">
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
  </div>
{% highlight html %}
You can use the mark tag to <mark>highlight</mark> text.
{% endhighlight %}


  <h3>Deleted text</h3>
  <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.</p>
  <div class="bs-example">
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
  </div>
{% highlight html %}
<del>This line of text is meant to be treated as deleted text.</del>
{% endhighlight %}

  <h3>Strikethrough text</h3>
  <p>For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.</p>
  <div class="bs-example">
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
  </div>
{% highlight html %}
<s>This line of text is meant to be treated as no longer accurate.</s>
{% endhighlight %}

  <h3>Inserted text</h3>
  <p>For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.</p>
  <div class="bs-example">
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
  </div>
{% highlight html %}
<ins>This line of text is meant to be treated as an addition to the document.</ins>
{% endhighlight %}

  <h3>Underlined text</h3>
  <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
  <div class="bs-example">
    <p><u>This line of text is will render as underlined</u></p>
  </div>
{% highlight html %}
<u>This line of text is will render as underlined</u>
{% endhighlight %}

  <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

  <h3>Small text</h3>
  <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
  <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.</p>
  <div class="bs-example">
    <p><small>This line of text is meant to be treated as fine print.</small></p>
  </div>
{% highlight html %}
<small>This line of text is meant to be treated as fine print.</small>
{% endhighlight %}


  <h3>Bold</h3>
  <p>For emphasizing a snippet of text with a heavier font-weight.</p>
  <div class="bs-example">
    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
  </div>
{% highlight html %}
<strong>rendered as bold text</strong>
{% endhighlight %}

  <h3>Italics</h3>
  <p>For emphasizing a snippet of text with italics.</p>
  <div class="bs-example">
    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
  </div>
{% highlight html %}
<em>rendered as italicized text</em>
{% endhighlight %}

  <div class="bs-callout bs-callout-info">
    <h4>Alternate elements</h4>
    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
  </div>

  <h2 id="type-alignment">Alignment classes</h2>
  <p>Easily realign text to components with text alignment classes.</p>
  <div class="bs-example">
    <p class="text-left">Left aligned text.</p>
    <p class="text-center">Center aligned text.</p>
    <p class="text-right">Right aligned text.</p>
    <p class="text-justify">Justified text.</p>
  </div>
{% highlight html %}
<p class="text-left">Left aligned text.</p>
<p class="text-center">Center aligned text.</p>
<p class="text-right">Right aligned text.</p>
<p class="text-justify">Justified text.</p>
{% endhighlight %}


  <!-- Abbreviations -->
  <h2 id="type-abbreviations">Abbreviations</h2>
  <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

  <h3>Basic abbreviation</h3>
  <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute with the <code>&lt;abbr&gt;</code> element.</p>
  <div class="bs-example">
    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
  </div>
{% highlight html %}
<abbr title="attribute">attr</abbr>
{% endhighlight %}

  <h3>Initialism</h3>
  <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
  <div class="bs-example">
    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
  </div>
{% highlight html %}
<abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
{% endhighlight %}


  <!-- Addresses -->
  <h2 id="type-addresses">Addresses</h2>
  <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
  <div class="bs-example">
    <address>
      <strong>Twitter, Inc.</strong><br>
      795 Folsom Ave, Suite 600<br>
      San Francisco, CA 94107<br>
      <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
    <address>
      <strong>Full Name</strong><br>
      <a href="mailto:#">first.last@example.com</a>
    </address>
  </div>
{% highlight html %}
<address>
  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
{% endhighlight %}


  <!-- Blockquotes -->
  <h2 id="type-blockquotes">Blockquotes</h2>
  <p>For quoting blocks of content from another source within your document.</p>

  <h3>Default blockquote</h3>
  <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
  <div class="bs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
{% highlight html %}
<blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
{% endhighlight %}

  <h3>Blockquote options</h3>
  <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

  <h4>Naming a source</h4>
  <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
  <div class="bs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
{% highlight html %}
<blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
{% endhighlight %}

  <h4>Alternate displays</h4>
  <p>Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
  <div class="bs-example" style="overflow: hidden;">
    <blockquote class="blockquote-reverse">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
{% highlight html %}
<blockquote class="blockquote-reverse">
  ...
</blockquote>
{% endhighlight %}


  <!-- Lists -->
  <h2 id="type-lists">Lists</h2>

  <h3>Unordered</h3>
  <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
  <div class="bs-example">
    <ul>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
{% highlight html %}
<ul>
  <li>...</li>
</ul>
{% endhighlight %}

  <h3>Ordered</h3>
  <p>A list of items in which the order <em>does</em> explicitly matter.</p>
  <div class="bs-example">
    <ol>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit</li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ol>
  </div>
{% highlight html %}
<ol>
  <li>...</li>
</ol>
{% endhighlight %}

  <h3>Unstyled</h3>
  <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
  <div class="bs-example">
    <ul class="list-unstyled">
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
{% highlight html %}
<ul class="list-unstyled">
  <li>...</li>
</ul>
{% endhighlight %}

  <h3>Inline</h3>
  <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
  <div class="bs-example">
    <ul class="list-inline">
      <li>Lorem ipsum</li>
      <li>Phasellus iaculis</li>
      <li>Nulla volutpat</li>
    </ul>
  </div>
{% highlight html %}
<ul class="list-inline">
  <li>...</li>
</ul>
{% endhighlight %}

  <h3>Description</h3>
  <p>A list of terms with their associated descriptions.</p>
  <div class="bs-example">
    <dl>
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    </dl>
  </div>
{% highlight html %}
<dl>
  <dt>...</dt>
  <dd>...</dd>
</dl>
{% endhighlight %}

  <h4>Horizontal description</h4>
  <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
  <div class="bs-example">
    <dl class="dl-horizontal">
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      <dt>Felis euismod semper eget lacinia</dt>
      <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
    </dl>
  </div>
{% highlight html %}
<dl class="dl-horizontal">
  <dt>...</dt>
  <dd>...</dd>
</dl>
{% endhighlight %}

  <div class="bs-callout bs-callout-info">
    <h4>Auto-truncating</h4>
    <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
  </div>
</div>


    </div><!-- /.container -->


    

    
    <!-- Placed at the end of the document so the pages load faster -->
    

  
  </body>
</html>

