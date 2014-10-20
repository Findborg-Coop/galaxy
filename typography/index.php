<?php include "../config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Findborg Galaxy - Typography</title>

    
    <!-- Galxy core CSS -->
    <link href="<?php echo "$baseURL"; ?>/galaxy/dist/css/galaxy.css" rel="stylesheet">
    <link href="<?php echo "$baseURL"; ?>/galaxy/dist/js/libs/highlight/styles/tomorrow-night-bright.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
      <style type="text/css">
      body{background: #f9f9f9;overflow: scroll;}
      #super-container {
    background: #e3e3e3;
    text-align: center;
}
#super-container a {
    padding: 25px;
    display: block;
}


.scotch-panel h2 {
    margin: 0;
    color: #fff;
    padding: 20px;
}
#super-container a {
    color: #222;
    background: transparent;
}
#super-container a:hover {
    background: #737373;
}
      </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
  </head>

  <body>
  <div id="scotch-panel"class="scotch-panel fb red trans5" data-direction="left" data-clickSelector=".toggle-left" >
                            <h2>WEST SIDE</h2>
                        </div>
                        <div class="scotch-panel fb green trans5" data-direction="top" data-clickSelector=".toggle-top">
                            <h2>NORTH SIDE</h2>
                        </div>
                        <div class="scotch-panel" data-direction="bottom" data-clickSelector=".toggle-bottom">
                            <h2>SOUTH SIDE</h2>
                        </div>
                        <div class="scotch-panel fb purple trans5" data-direction="right" data-clickSelector=".toggle-right">
                            <h2>EAST SIDE</h2>
                        </div>
 <?php include "../header.php"; ?>
 <?php include "subnav.php"; ?>
<div id="gogo">
<div class="relative min-y100 fb accent grey darker" style="min-height:35em;">
  <h2 class="h1 p4 center">Typography</h2>
  <p class="absolute b0 l0 p1 mb0">Bottom left
<div id="super-container">
                        


                        <a href="#" class="toggle-top">Toggle Top</a>
                        <a href="#" class="toggle-left">Toggle Left</a>
                        <a href="#" class="toggle-right">Toggle Right</a>
                        <a href="#" class="toggle-bottom">Toggle Bottom</a>

                    </div>
  </p>
  <p class="absolute r0 b0 p1 mb0">Bottom right</p>
</div>

   <div class="px-responsive py-responsive js-baseline js-outline">
<section>
<p class="p">
    <!-- Headings -->
  <h2 class="h2">Galaxy Headings</h2>
  <p class="h3">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
 
</p>
<div class="row">

  <div class="fb-12-phone fb-6-desktop">
  <div class="fb-12-phone fb accent green lighter"><h2>Normal Headings</h2></div>
<p class="p">
  <div class="bs-example bs-example-type">
    <h1>This is what a heading looks like when you use Findborg Galaxy aka <code>H1</code></h1>
    <p>This is just some normal text to compare it with.</p>
 
          
        
        <h2>The <code>H2</code> Tag Takes Over The World</h2>
          <p>This is just some normal text to compare it with.</p>
          
        
        

          <h3>The Middle Child <code>H3</code> Always Feels The Pressure.</h3>
          <p>This is just some normal text to compare it with.</p>
           
        
          <h4><code class="h4">H4</code> Opens The Door To Everywhere.</h4>
          <p>This is just some normal text to compare it with.</p>

        
          <h5>Just In Case You Need The <code>H5</code> Tag.</h5>
          <p>This is just some normal text to compare it with.</p>
        
        
          <h6>Have You Ever Seen The This Tag Used In A Document? <code>H6</code></h6>
          <p>This is just some normal text to compare it with.</p>
        
  </div>


  </div>
  <div class="fb-12-phone fb-6-desktop">
  <div class="fb-12-phone  fb accent blue lighter"><h2>Matched Headings</h2></div>
    <div class="bs-example bs-example-type">
    <span class="h1">This is what a heading looks like when you use Findborg Galaxy</span>
    <p class="regular">This is just some normal text to compare it with.</p>
 
          
        
        <h2>The <code>H2</code> Tag Takes Over The World</h2>
          <p>This is just some normal text to compare it with.</p>
          
        
        

          <h3>The Middle Child <code>H3</code> Always Feels The Pressure.</h3>
          <p>This is just some normal text to compare it with.</p>
           
        
          <h4><code class="h4">H4</code> Opens The Door To Everywhere.</h4>
          <p>This is just some normal text to compare it with.</p>

        
          <h5>Just In Case You Need The <code>H5</code> Tag.</h5>
          <p>This is just some normal text to compare it with.</p>
        
        
          <h6>Have You Ever Seen The This Tag Used In A Document? <code>H6</code></h6>
          <p>This is just some normal text to compare it with.</p>
        
  </div>
  </div>
</div>
</section>
<!-- Edit everything below -->
 <!-- Body copy -->
 <hr>
  <h2 id="type-body-copy">Body copy</h2>
  <p>Findborg's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>
  <div class="bs-example">
    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
  </div>

<!--Responsive Text -->
<div class="row">
  <div class="fb-desktop-12">
    <span class="h1">Responsive Text</span>
    <p class="h2">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p class="h3">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p class="h4">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    
  </div>
</div>
  
  <!-- Using Less -->
  <div class="h2 p2 fb accent orange lighter">
  <h3>Built with Less</h3>
  <p>The typographic scale is based on the EM scale and controled by Less variables in <strong>variables.less</strong>: Ex: <code>@font-size-base</code>. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Findborg adapts.</p>
  </div>
  <!-- Inline text elements -->
  <hr>
  <h2 id="type-inline-text">Inline text elements</h2>
  <div class="row">
    <div class="fb-4-desktop">
      <h3>Marked text</h3>
  <p>For highlighting a run of text due to its relevance in another context, use the <code>&lt;mark&gt;</code> tag.</p>
  <div class="bs-example">
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
  </div>
    </div>
    <div class="fb-4-desktop">
       <h3>Deleted text</h3>
  <p>For indicating blocks of text that have been deleted use the <code>&lt;del&gt;</code> tag.</p>
  <div class="bs-example">
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
  </div>
    </div>
    <div class="fb-4-desktop">
      <h3>Strikethrough text</h3>
  <p>For indicating blocks of text that are no longer relevant use the <code>&lt;s&gt;</code> tag.</p>
  <div class="bs-example">
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
  </div>
    </div>
  </div>
  

<div class="row">
  <div class="fb-8-desktop">
    <h3>Inserted text</h3>
  <p>For indicating additions to the document use the <code>&lt;ins&gt;</code> tag.</p>
  <div class="bs-example">
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
  </div>

  </div>
  <div class="fb-4-desktop">
     <h3>Underlined text</h3>
  <p>To underline text use the <code>&lt;u&gt;</code> tag.</p>
  <div class="bs-example">
    <p><u>This line of text is will render as underlined</u></p>
  </div>

  </div>
 
</div>
 

  

  

 

  <p class="p fb accent purple lighter">Make use of HTML's default emphasis tags with lightweight styles.</p>


<div class="row">
  <div class="fb-4-desktop">
    <h3>Small text</h3>
  <p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code> elements.</p>
  <p>You may alternatively use an inline element with <code>.small</code> in place of any <code>&lt;small&gt;</code>.</p>
  <div class="bs-example">
    <p><small>This line of text is meant to be treated as fine print.</small></p>
  </div>

  </div>
  <div class="fb-4-desktop">
    <h3>Bold</h3>
  <p>For emphasizing a snippet of text with a heavier font-weight.</p>
  <div class="bs-example">
    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
  </div>

  </div>
  <div class="fb-4-desktop">
    <h3>Italics</h3>
  <p>For emphasizing a snippet of text with italics.</p>
  <div class="bs-example">
    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
  </div>

  </div>
</div>
  


  

  
<div class="fb accent darker p1">
  <div class="bs-callout bs-callout-info">
    <h4>Alternate elements</h4>
    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
  </div>

  <h2 id="type-alignment">Alignment classes</h2>
  <p>Easily realign text to components with text alignment classes.</p>
  <div class="bs-example">
    <p class="left-align "><span class="fb accent white p1">Left align</span></p>
    <p class="center"><span class="fb accent white p1">Center</span></p>
    <p class="right-align"><span class="fb accent white p1">Right align</span></p>
    
    <p class="text-justify">Justified text.</p>
  </div>
</div>


  <!-- Abbreviations -->
  <div class="row">
    <div class="fb-6-desktop">
      <h2 id="type-abbreviations">Abbreviations</h2>
  <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

    </div>
    <div class="fb-3-desktop">
      <h3>Basic abbreviation</h3>
  <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute with the <code>&lt;abbr&gt;</code> element.</p>
  <div class="bs-example">
    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
  </div>

    </div>
    <div class="fb-3-desktop"> 
<h3>Initialism</h3>
  <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
  <div class="bs-example">
    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
  </div>

    </div>
  </div>
  
  

  

  <!-- Addresses -->
  <h2 id="type-addresses">Addresses</h2>
  <p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
  <div class="bs-example">
    <address>
      <strong>FINDBORG, Inc.</strong><br>
      888 Galactic Ave, Suite 42<br>
      Carroll, IA 51401<br>
      <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
    <address>
      <strong>Full Name</strong><br>
      <a href="mailto:#">first.last@example.com</a>
    </address>
  </div>



  <!-- Blockquotes -->
  <h2 id="type-blockquotes">Blockquotes</h2>
  <p>For quoting blocks of content from another source within your document.</p>

<div class="row">
  <div class="fb-6-desktop">
    <h3>Default blockquote</h3>
  <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
  <div class="bs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>

  </div>
  <div class="fb-6-desktop">
    <h3>Blockquote options</h3>
  <p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

 
  </div>
  </div>
  <div class="fb-6-desktop">
    <h4>Alternate displays</h4>
  <p>Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p>
  <div class="bs-example" style="overflow: hidden;">
    <blockquote class="blockquote-reverse">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
  </div>
  <div class="fb-6-desktop">
     <h4>Naming a source</h4>
  <p>Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
  <div class="bs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
  

  


  



  <!-- Lists -->
  <h2 id="type-lists">Standard Lists</h2>
<div class="row">
  <div class="fb-4-desktop">
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

  </div>
  <div class="fb-4-desktop">
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

  </div>
  <div class="fb-4-desktop">
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

  </div>
</div>
  

  

  

  <h3>Inline List Basic</h3>
  <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.  Use helper classes to style the way you want.</p>
  <div class="bs-example">
    <ul class="list-inline caps">
      <li>item 1</li>
      <li>item 2</li>
      <li>item 3</li>
    </ul>
  </div>

<div class="fb-6-desktop">
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


</div>
<div class="fb-6-desktop">
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

</div>
 
  

  <div class="bs-callout bs-callout-info">
    <h4>Auto-truncating</h4>
    <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.</p>
  </div>
</div>

<section>
  <div class="bs-docs-section">
  <h1 id="buttons" class="h2 center">Buttons</h1>

  <h2 id="buttons-options">Options</h2>
  <p>Use any of the available button classes to quickly create a styled button.</p>
  <div class="bs-example">
    <button type="button" class="fb button">Default</button>
    <button type="button" class="fb button blue">Primary</button>
    <button type="button" class="fb button green">Success</button>
    <button type="button" class="fb button blue-lighter">Info</button>
    <button type="button" class="fb button red">Warning</button>
    <button type="button" class="fb circular black button">Danger</button>
    <button type="button" class="fb link button">Link</button>
  </div>


  <h2 id="buttons-sizes">Sizes</h2>
  <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
  <div class="bs-example">
    <p>
      <button type="button" class="fb massive orange button">Massive button</button>
      <button type="button" class="fb huge purple button">Huge button</button>
      
    </p>
    <p>
      <button type="button" class="fb big green button">Big button</button>
      <button type="button" class="fb large black button">Large button</button>
    </p>
    
    <p>
      <button type="button" class="fb button">Default Size button</button>
      <button type="button" class="fb small button">Small button</button>
    </p>
    <p>
      <button type="button" class="fb tiny primary button">Tiny button</button>
      <button type="button" class="fb mini secondary button">Mini button</button>
    </p>
    <p>
      <button type="button" class="fb fade animated button visible content">Default Size button</button>
      <button type="button" class="fb small button">Small button</button>
    </p> 
  </div>


  <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
  <div class="bs-example">
    <div class="row centered fb accent red">
      <div class="fb-6-laptop">
        <button type="button" class="fb fluid button primary">Block level button</button>
      </div>
      <div class="fb-6-laptop">
      <button type="button" class="fb fluid button secondary">Block level button</button>
    </div>
  </div>



  <h2 id="buttons-active">Active state</h2>
  <p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s should you need to replicate the active state progammatically.</p>

  <h3>Button element</h3>
  <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
  <p class="bs-example">
    <button type="button" class="fb button primary large active">Primary button</button>
    <button type="button" class="fb large button active">Button</button>
  </p>


  <h3>Anchor element</h3>
  <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-example">
    <a href="#" class="fb large button active" role="button">Primary link</a>
    <a href="#" class="fb large green button active" role="button">Link</a>
  </p>



  <h2 id="buttons-disabled">Disabled state</h2>
  <p>Make buttons look unclickable by fading them back 50%.</p>

  <h3>Button element</h3>
  <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
  <p class="bs-example">
    <button type="button" class="fb primary button" disabled="disabled">Primary button</button>
    <button type="button" class="fb button" disabled="disabled">Button</button>
  </p>


  <h3>Anchor element</h3>
  <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
  </p>

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
    <a class="fb button" href="#" role="button">Link</a>
    <button class="fb button" type="submit">Button</button>
    <input class="fb button" type="button" value="Input">
    <input class="fb button" type="submit" value="Submit">
  </form>

  <div class="bs-callout bs-callout-warning">
    <h4>Cross-browser rendering</h4>
    <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever possible</strong> to ensure matching cross-browser rendering.</p>
    <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a Firefox bug</a> that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons, causing them to not exactly match the height of other buttons on Firefox.</p>
  </div>
</div>
</section>




<section>
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
      <button type="button" class="fb primary button ">Left</button>
      <button type="button" class="fb secondary button ">Middle</button>
      <button type="button" class="fb black button ">Right</button>
    </div>
  </div>


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
    <div class="">
      <div class="fb buttons">
        <button type="button" class="fb green button">1</button>
        <button type="button" class="fb red button">2</button>
        <button type="button" class="fb blue button">3</button>
        <button type="button" class="fb orange button">4</button>
      </div>
      <div class="fb buttons">
        <button type="button" class="fb yellow button">5</button>
        <button type="button" class="fb purple button">6</button>
        <button type="button" class="fb black button">7</button>
      </div>
      <div class="buttons">
        <button type="button" class="fb button">8</button>
      </div>
    </div>
  </div>


  <h3 id="btn-groups-sizing">Sizing</h3>
  <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the <code>.btn-group</code>.</p>
  <div class="bs-example">
    <div class="btn-toolbar" role="toolbar">
      <div class="fb tiny buttons">
        <button type="button" class="fb button">Left</button>
        <button type="button" class="fb button">Middle</button>
        <button type="button" class="fb button">Right</button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <div class="fb large buttons">
        <button type="button" class="fb large red button">Left</button>
        <button type="button" class="fb large red button">Middle</button>
        <button type="button" class="fb large red button">Right</button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <div class="fb huge green buttons">
        <button type="button" class="fb button">Left</button>
        <button type="button" class="fb button">Middle</button>
        <button type="button" class="fb red button">Right</button>
      </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
      <div class="fb massive buttons">
        <button type="button" class="fb red button">Left</button>
        <button type="button" class="fb black button">Middle</button>
        <button type="button" class="fb red button">Right</button>
      </div>
    </div>
  </div>


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


  <h3 id="btn-groups-vertical">Vertical variation</h3>
  <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong></p>
  <div class="bs-example">
    <div class="fb vertical buttons">
      <button type="button" class="fb button">Button</button>
      <button type="button" class="fb button">Button</button>
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
    <div class=" fb fluid buttons row">
      <a class=" fb button fb-4-desktop" role="button">Left</a>
      <a class="fb-4-desktop fb button" role="button">Middle</a>
      <a class="fb-4-desktop fb button" role="button">Right</a>
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
</section>

<section>
  
<div class="bs-docs-section">
  <h1 id="code" class="page-header">Code</h1>

  <h2 id="code-inline">Inline</h2>
  <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<div class="bs-example">
  For example, <code>&lt;section&gt;</code> should be wrapped as inline.
</div>
{% highlight html %}
For example, <code>&lt;section&gt;</code> should be wrapped as inline.
{% endhighlight %}

  <h2 id="code-user-input">User input</h2>
  <p>Use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.</p>
<div class="bs-example">
  To switch directories, type <kbd>cd</kbd> followed by the name of the directory.
</div>
{% highlight html %}
  To switch directories, type <kbd>cd</kbd> followed by the name of the directory.
{% endhighlight %}

  <h2 id="code-block">Basic block</h2>
  <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
<div class="bs-example">
  <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
</div>
{% highlight html %}
<pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
{% endhighlight %}

  <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a y-axis scrollbar.</p>
  <h2 id="code-variables">Variables</h2>
  <p>For indicating variables use the <code>&lt;var&gt;</code> tag.</p>
  <div class="bs-example">
    <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>

  </div>
{% highlight html %}
<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
{% endhighlight %}

  <h2 id="code-sample-output">Sample output</h2>
  <p>For indicating blocks sample output from a program use the <code>&lt;samp&gt;</code> tag.</p>
  <div class="bs-example">
    <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
  </div>
{% highlight html %}
<samp>This text is meant to be treated as sample output from a computer program.</samp>
{% endhighlight %}
</div>
</section>

<section>
  <div class="bs-docs-section">
  <h1 id="grid" class="page-header">Grid system</h1>

  <p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a> for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.</p>

  <h3 id="grid-intro">Introduction</h3>
  <p>Grid systems are used for creating page layouts through a series of rows and columns that house your content. Here's how the Bootstrap grid system works:</p>
  <ul>
    <li>Rows must be placed within a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper alignment and padding.</li>
    <li>Use rows to create horizontal groups of columns.</li>
    <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
    <li>Predefined grid classes like <code>.row</code> and <code>.col-xs-4</code> are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.</li>
    <li>Columns create gutters (gaps between column content) via <code>padding</code>. That padding is offset in rows for the first and last column via negative margin on <code>.row</code>s.</li>
    <li>The negative margin is why the examples below are outdented. It's so that content within grid columns is lined up with non-grid content.</li>
    <li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-xs-4</code>.</li>
    <li>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</li>
  </ul>
  <p>Look to the examples for applying these principles to your code.</p>

  <h3 id="grid-media-queries">Media queries</h3>
  <p>We use the following media queries in our Less files to create the key breakpoints in our grid system.</p>
{% highlight scss %}
/* Extra small devices (phones, less than 768px) */
/* No media query since this is the default in Bootstrap */

/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm-min) { ... }

/* Medium devices (desktops, 992px and up) */
@media (min-width: @screen-md-min) { ... }

/* Large devices (large desktops, 1200px and up) */
@media (min-width: @screen-lg-min) { ... }
{% endhighlight %}
  <p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of devices.</p>
{% highlight scss %}
@media (max-width: @screen-xs-max) { ... }
@media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) { ... }
@media (min-width: @screen-md-min) and (max-width: @screen-md-max) { ... }
@media (min-width: @screen-lg-min) { ... }
{% endhighlight %}

  <h3 id="grid-options">Grid options</h3>
  <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
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
          <th>Grid behavior</th>
          <td>Horizontal at all times</td>
          <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
        </tr>
        <tr>
          <th>Container width</th>
          <td>None (auto)</td>
          <td>750px</td>
          <td>970px</td>
          <td>1170px</td>
        </tr>
        <tr>
          <th>Class prefix</th>
          <td><code>.col-xs-</code></td>
          <td><code>.col-sm-</code></td>
          <td><code>.col-md-</code></td>
          <td><code>.col-lg-</code></td>
        </tr>
        <tr>
          <th># of columns</th>
          <td colspan="4">12</td>
        </tr>
        <tr>
          <th>Column width</th>
          <td class="text-muted">Auto</td>
          <td>~62px</td>
          <td>~81px</td>
          <td>~97px</td>
        </tr>
        <tr>
          <th>Gutter width</th>
          <td colspan="4">30px (15px on each side of a column)</td>
        </tr>
        <tr>
          <th>Nestable</th>
          <td colspan="4">Yes</td>
        </tr>
        <tr>
          <th>Offsets</th>
          <td colspan="4">Yes</td>
        </tr>
        <tr>
          <th>Column ordering</th>
          <td colspan="4">Yes</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h3 id="grid-example-basic">Example: Stacked-to-horizontal</h3>
  <p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
  <div class="bs-docs-grid">
    <div class="row p1 fb accent purple">
      <div class="fb-1-tablet fb accent purple lighter">.fb-1-tablet</div>
      <div class="fb-1-tablet fb accent purple darker">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple light">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple dark">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple light">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple lighter">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple dark">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple darker">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple dark">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple light">.col-md-1</div>
      <div class="fb-1-tablet fb accent purple lighter">.col-md-1</div>
      <div class="fb-1-tablet fb accent yellow darker">.col-md-1</div>
    </div>
    <div class="row p1 fb accent teal">
      <div class="fb-8-tablet fb accent teal dark">.col-md-8</div>
      <div class="fb-4-tablet fb accent teal light">.col-md-4</div>
    </div>
    <div class="row p1 fb accent orange light">
      <div class="fb-4-tablet fb accent orange dark">.col-md-4</div>
      <div class="fb-4-tablet fb accent orange">.col-md-4</div>
      <div class="fb-4-tablet fb accent orange lighter">.col-md-4</div>
    </div>
    <div class="row p1 fb accent gray">
      <div class="fb-6-tablet fb accent gray light">.col-md-6</div>
      <div class="fb-6-tablet fb accent gray lighter">.col-md-6</div>
    </div>
  </div>


  

  <h3 id="grid-example-mixed">Example: Mobile and desktop</h3>
  <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
  <div class="p1 fb accent darker">
    <div class="row">
      <div class="fb-12-phone fb-8-tablet fb accent light">.col-xs-12 .col-md-8</div>
      <div class="fb-6-phone fb-4-tablet fb accent dark">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row">
      <div class="fb-6-phone fb-4-tablet fb accent red">.col-xs-6 .col-md-4</div>
      <div class="fb-6-phone fb-4-tablet fb accent yellow">.col-xs-6 .col-md-4</div>
      <div class="fb-12-phone fb-4-tablet fb accent green">.col-xs-12 .col-md-4</div>
    </div>
    <div class="row">
      <div class="fb-6-phone fb accent orange">.col-xs-6</div>
      <div class="fb-6-phone fb accent orange light">.col-xs-6</div>
    </div>
  </div>


  <h3 id="grid-example-mixed-complete">Example: Mobile, tablet, desktops</h3>
  <p class="p">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
  <div class="p1 fb accent gray lighter">
    <div class="row">
      <div class="fb-12-phone fb-6-tablet fb-8-desktop fb accent yellow dark">.col-xs-12 .col-sm-6 .col-md-8</div>
      <div class="fb-6-phone fb-4-tablet fb accent yellow darker">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row">
      <div class="fb-6-phone fb-4-tablet fb accent yellow lighter">.col-xs-6 .col-sm-4</div>
      <div class="fb-6-phone fb-4-tablet fb accent yellow light">.col-xs-6 .col-sm-4</div>
      <!-- Optional: clear the XS cols if their content doesn't match in height -->
      <div class="clearfix visible-xs-block"></div>
      <div class="fb-6-phone fb-4-tablet fb accent yellow">.col-xs-6 .col-sm-4</div>
    </div>
  </div>


  <h3 id="grid-responsive-resets">Responsive column resets</h3>
  <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
  <div class="bs-docs-grid">
    <div class="row">
      <div class="fb-6-phone  fb-3-tablet fb accent blue light">
        .col-xs-6 .col-sm-3
        <br>
        Resize your viewport or check it out on your phone for an example.
      </div>
      <div class="fb-6-phone fb-3-tablet fb accent blue lighter">.col-xs-6 .col-sm-3</div>

      <!-- Add the extra clearfix for only the required viewport -->
      <div class="clearfix visible-xs-block"></div>

      <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
      <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
    </div>
  </div>

  <p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. See this in action in <a href="../examples/grid/">the grid example</a>.</p>


  <h3 id="grid-offsetting">Offsetting columns</h3>
  <p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
  <div class="p1 fb accent blue">
    <div class="row">
      <div class="fb-4-tablet fb accent white">.col-md-4</div>
      <div class="fb-4-tablet fb-4-tablet-offset fb accent blue lighter">.col-md-4 .col-md-offset-4</div>
    </div>
    <div class="row">
      <div class="fb-3-tablet fb-3-tablet-offset fb accent red">.col-md-3 .col-md-offset-3</div>
      <div class="fb-3-tablet fb-3-tablet-offset fb accent yellow">.col-md-3 .col-md-offset-3</div>
    </div>
    <div class="row">
      <div class="fb-6-tablet fb-3-tablet-offset left fb accent orange">.col-md-6 .col-md-offset-3</div>
    </div>
  </div>



  <h3 id="grid-nesting">Nesting columns</h3>
  <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-md-*</code> columns within an existing <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12 or less.</p>
  <div class="row fb accent teal darker">
    <div class="fb-9-tablet fb accent teal">
      Level 1: .col-md-9
      <div class="row">
        <div class="fb-6-tablet fb accent teal light">
          Level 2: .col-md-6
        </div>
        <div class="fb-6-tablet fb accent teal lighter">
          Level 2: .col-md-6
        </div>
      </div>
    </div>
  </div>


  <h3 id="grid-column-ordering">Column ordering</h3>
  <p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
  <div class="row p1">
    <div class="fb-9-tablet fb-3-tablet-push fb accent green">.col-md-9 .col-md-push-3</div>
    <div class="fb-3-tablet fb-9-tablet-pull fb accent red">.col-md-3 .col-md-pull-9</div>
  </div>



  <h3 id="grid-less">Less mixins and variables</h3>
  <p>In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootstrap includes Less variables and mixins for quickly generating your own simple, semantic layouts.</p>

  <h4>Variables</h4>
  <p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
{% highlight scss %}
@grid-columns:              12;
@grid-gutter-width:         30px;
@grid-float-breakpoint:     768px;
{% endhighlight %}

  <h4>Mixins</h4
  <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>


  <h4>Example usage</h4>
  <p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.</p>

<div class="wrapper">
  <div class="content-main">...</div>
  <div class="content-secondary">...</div>
</div>

</div>

</section>

<section>
   <h1 id="images" class="page-header">Images</h1>

  <h2 id="images-responsive">Responsive images</h2>
  <p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.</p>


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

</div>
</section>

<section>
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


  <h2 id="forms-control-readonly">Readonly inputs</h2>
  <p>Add the <code>readonly</code> boolean attribute on an input to prevent user input and style the input as disabled.</p>
  <div class="bs-example">
    <form role="form">
      <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
    </form>
  </div><!-- /.bs-example -->



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


  <div class="bs-example">
    <form class="form-inline" role="form">
      <div class="form-group has-success has-feedback">
        <label class="control-label" for="inputSuccess4">Input with success</label>
        <input type="text" class="form-control" id="inputSuccess4">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      </div>
    </form>
  </div>



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


  <h2 id="forms-help-text">Help text</h2>
  <p>Block level help text for form controls.</p>
  <div class="bs-example">
    <form role="form">
      <input type="text" class="form-control">
      <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
    </form>
  </div><!-- /.bs-example -->

</div>


</section>

<section>
    <h1 id="helper-classes" class="page-header">Helper classes</h1>

  <h3 id="helper-classes-colors">Contextual colors</h3>
  <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
  <div class="bs-example">
    <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
    <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
    <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
  </div>

  <div class="bs-callout bs-callout-info">
    <h4>Dealing with specificity</h4>
    <p>Sometimes emphasis classes cannot be applied due to the specificity of another selector. In most cases, a sufficient workaround is to wrap your text in a <code>&lt;span&gt;</code> with the class.</p>
  </div>

  <h3 id="helper-classes-backgrounds">Contextual backgrounds</h3>
  <p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>
  <div class="bs-example bs-example-bg-classes">
    <p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    <p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    <p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
    <p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
  </div>



  <h3 id="helper-classes-close">Close icon</h3>
  <p>Use the generic close icon for dismissing content like modals and alerts.</p>
  <div class="bs-example">
    <p><button type="button" class="close" aria-hidden="true">&times;</button></p>
  </div>



  <h3 id="helper-classes-carets">Carets</h3>
  <p>Use carets to indicate dropdown functionality and direction. Note that the default caret will reverse automatically in <a href="../components/#btn-dropdowns-dropup">dropup menus</a>.</p>
  <div class="bs-example">
    <span class="caret"></span>
  </div>



  <h3 id="helper-classes-floats">Quick floats</h3>
  <p>Float an element to the left or right with a class. <code>!important</code> is included to avoid specificity issues. Classes can also be used as mixins.</p>


  <div class="bs-callout bs-callout-warning">
    <h4>Not for use in navbars</h4>
    <p>To align components in navbars with utility classes, use <code>.navbar-left</code> or <code>.navbar-right</code> instead. <a href="../components/#navbar-component-alignment">See the navbar docs</a> for details.</p>
  </div>


  <h3 id="helper-classes-center">Center content blocks</h3>
  <p>Set an element to <code>display: block</code> and center via <code>margin</code>. Available as a mixin and class.</p>



  <h3 id="helper-classes-clearfix">Clearfix</h3>
  <p>Clear the <code>float</code> on any element with the <code>.clearfix</code> class. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the micro clearfix</a> as popularized by Nicolas Gallagher. Can also be used as a mixin.</p>



  <h3 id="helper-classes-show-hide">Showing and hiding content</h3>
  <p>Force an element to be shown or hidden (<strong>including for screen readers</strong>) with the use of <code>.show</code> and <code>.hidden</code> classes. These classes use <code>!important</code> to avoid specificity conflicts, just like the <a href="#helper-classes-floats">quick floats</a>. They are only available for block level toggling. They can also be used as mixins.</p>
  <p><code>.hide</code> is available, but it does not always affect screen readers and is <strong>deprecated</strong> as of v3.0.1. Use <code>.hidden</code> or <code>.sr-only</code> instead.</p>
  <p>Furthermore, <code>.invisible</code> can be used to toggle only the visibility of an element, meaning its <code>display</code> is not modified and the element can still affect the flow of the document.</p>



  <h3 id="helper-classes-screen-readers">Screen reader and keyboard navigation content</h3>
  <p>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it's focused (e.g. by a keyboard-only user). Necessary for following <a href="../getting-started/#accessibility">accessibility best practices</a>. Can also be used as mixins.</p>



  <h3 id="helper-classes-image-replacement">Image replacement</h3>
  <p>Utilize the <code>.text-hide</code> class or mixin to help replace an element's text content with a background image.</p>

</div>



</section>

<section>
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


  <h3 id="nav-tabs-google">Basic Google tabs</h3>
  <p>Take a regular <code>&lt;ul&gt;</code> of links and add <code>.nav-tabs .nav-tabs-google</code>:</p>
  <div class="bs-example">
    <ul class="nav nav-tabs nav-tabs-google">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>

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

  <p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>
  <div class="bs-example">
    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages</a></li>
    </ul>
  </div>



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

</div>
</section>

<!-- Colors Section -->
<section>
<div class="content">
<h2>Galaxy Framework Colors</h2>
  <div class="row">
  <div class="fb-4-desktop">
    <div class="p1 fb accent red"style="height:120px;">Red</div>
    <div class="p1 fb bg red level1">Level 1<div class="right px1" style="background:#fde0dc;">Match</div></div>
    <div class="p1 fb bg red level2">Level 2<div class="right px1" style="background:#f9bdbb;">Match</div></div>
    <div class="p1 fb bg red level3">Level 3<div class="right px1" style="background:#f69988;">Match</div></div>
    <div class="p1 fb bg red level4">level 4<div class="right px1" style="background:#f36c60;">Match</div></div>
    <div class="p1 fb bg red level5">level 5<div class="right px1" style="background:#e84e40;">Match</div></div>
    <div class="p1 fb bg red">Base</div>
    <div class="p1 fb bg red level6">Level 6<div class="right px1" style="background:#dd191d;">Match</div></div>
    <div class="p1 fb bg red level7">Level 7<div class="right px1" style="background:#d01716;">Match</div></div>    
    <div class="p1 fb bg red level8">Level 8<div class="right px1" style="background:#c41411;">Match</div></div>
    <div class="p1 fb bg red level9">Level 9<div class="right px1" style="background:#b0120a;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent red lighter">lighter<div class="right px1" style="background:#ff7997;">Match</div></div>
    <div class="p1 fb accent red light">light<div class="right px1" style="background:#ff5177;">Match</div></div>
    <div class="p1 fb accent red dark">dark<div class="right px1" style="background:#ff2d6f;">Match</div></div>
    <div class="p1 fb accent red darker">darker<div class="right px1" style="background:#e00032;">Match</div></div>  
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb red trans1" ><span style="color:white;">Trans1</span></div>
    <div class="p1 fb red trans2">Trans2</div>
    <div class="p1 fb red trans3">Trans3</div>
    <div class="p1 fb red trans4">Trans4</div>
    <div class="p1 fb red trans5"><span style="color:white;">Trans5</span></div>
    </div>
    </div>

    <div class="fb-4-desktop">
    <div class="p1 fb accent blue"style="height:120px;">Blue</div>
    <div class="p1 fb bg blue level1">Level 1<div class="right px1" style="background:#e7e9fd;">Match</div></div>
    <div class="p1 fb bg blue level2">Level 2<div class="right px1" style="background:#d0d9ff;">Match</div></div>
    <div class="p1 fb bg blue level3">Level 3<div class="right px1" style="background:#afbfff;">Match</div></div>
    <div class="p1 fb bg blue level4">level 4<div class="right px1" style="background:#91a7ff;">Match</div></div>
    <div class="p1 fb bg blue level5">level 5<div class="right px1" style="background:#738ffe;">Match</div></div>
    <div class="p1 fb bg blue">Base</div>
    <div class="p1 fb bg blue level6">Level 6<div class="right px1" style="background:#4e6cef;">Match</div></div>
    <div class="p1 fb bg blue level7">Level 7<div class="right px1" style="background:#455ede;">Match</div></div>    
    <div class="p1 fb bg blue level8">Level 8<div class="right px1" style="background:#3b50ce;">Match</div></div>
    <div class="p1 fb bg blue level9">Level 9<div class="right px1" style="background:#2a36b1;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent blue lighter">lighter<div class="right px1" style="background:#a6baff;">Match</div></div>
    <div class="p1 fb accent blue light">light<div class="right px1" style="background:#6889ff;">Match</div></div>
    <div class="p1 fb accent blue dark">dark<div class="right px1" style="background:#4d73f;">Match</div></div>
    <div class="p1 fb accent blue darker">darker<div class="right px1" style="background:#4d69ff;">Match</div></div> 
    
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb blue trans1">Trans1</div>
    <div class="p1 fb blue trans2">Trans2</div>
    <div class="p1 fb blue trans3">Trans3</div>
    <div class="p1 fb blue trans4">Trans4</div>
    <div class="p1 fb blue trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg green"style="height:120px;">Green</div>
    <div class="p1 fb bg green level1">Level 1<div class="right px1" style="background:#d0f8ce;">Match</div></div>
    <div class="p1 fb bg green level2">Level 2<div class="right px1" style="background:#a3e9a4;">Match</div></div>
    <div class="p1 fb bg green level3">Level 3<div class="right px1" style="background:#72d572;">Match</div></div>
    <div class="p1 fb bg green level4">level 4<div class="right px1" style="background:#42bd41;">Match</div></div>
    <div class="p1 fb bg green level5">level 5<div class="right px1" style="background:#2baf2b;">Match</div></div>
    <div class="p1 fb bg green">Base</div>
    <div class="p1 fb bg green level6">Level 6<div class="right px1" style="background:#0a8f08;">Match</div></div>
    <div class="p1 fb bg green level7">Level 7<div class="right px1" style="background:#0a7e07;">Match</div></div>    
    <div class="p1 fb bg green level8">Level 8<div class="right px1" style="background:#056f00;">Match</div></div>
    <div class="p1 fb bg green level9">Level 9<div class="right px1" style="background:#0d5302;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent green lighter">lighter<div class="right px1" style="background:#a2f78d;">Match</div></div>
    <div class="p1 fb accent green light">light<div class="right px1" style="background:#5af158;">Match</div></div>
    <div class="p1 fb accent green dark">dark<div class="right px1" style="background:#14e715;">Match</div></div>
    <div class="p1 fb accent green darker">darker<div class="right px1" style="background:#12c700;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb green trans1">Trans1</div>
    <div class="p1 fb green trans2">Trans2</div>
    <div class="p1 fb green trans3">Trans3</div>
    <div class="p1 fb green trans4">Trans4</div>
    <div class="p1 fb green trans5">Trans5</div>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="fb-4-desktop">
    <div class="p1 fb bg pink"style="height:120px;">Pink</div>
    <div class="p1 fb bg pink level1">Level 1<div class="right px1" style="background:#fce4ec;">Match</div></div>
    <div class="p1 fb bg pink level2">Level 2<div class="right px1" style="background:#f8bbd0;">Match</div></div>
    <div class="p1 fb bg pink level3">Level 3<div class="right px1" style="background:#f48fb1;">Match</div></div>
    <div class="p1 fb bg pink level4">level 4<div class="right px1" style="background:#f06292;">Match</div></div>
    <div class="p1 fb bg pink level5">level 5<div class="right px1" style="background:#ec407a;">Match</div></div>
    <div class="p1 fb bg pink">Base</div>
    <div class="p1 fb bg pink level6">Level 6<div class="right px1" style="background:#d81b60;">Match</div></div>
    <div class="p1 fb bg pink level7">Level 7<div class="right px1" style="background:#c2185b;">Match</div></div>    
    <div class="p1 fb bg pink level8">Level 8<div class="right px1" style="background:#ad1457;">Match</div></div>
    <div class="p1 fb bg pink level9">Level 9<div class="right px1" style="background:#880e4f;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent pink lighter">lighter<div class="right px1" style="background:#ff80ab;">Match</div></div>
    <div class="p1 fb accent pink light">light<div class="right px1" style="background:#ff4081;">Match</div></div>
    <div class="p1 fb accent pink dark">dark<div class="right px1" style="background:#f50057;">Match</div></div>
    <div class="p1 fb accent pink darker">darker<div class="right px1" style="background:#c51162;">Match</div></div>  
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb bg pink fb trans1">Trans1</div>
    <div class="p1 fb bg pink fb trans2">Trans2</div>
    <div class="p1 fb bg pink fb trans3">Trans3</div>
    <div class="p1 fb bg pink fb trans4">Trans4</div>
    <div class="p1 fb bg pink fb trans5">Trans5</div>
    </div>
    </div>

    <div class="fb-4-desktop">
    <div class="p1 fb bg purple"style="height:120px;">Purple</div>
    <div class="p1 fb bg purple level1">Level 1<div class="right px1" style="background:#f3e5f5;">Match</div></div>
    <div class="p1 fb bg purple level2">Level 2<div class="right px1" style="background:#e1bee7;">Match</div></div>
    <div class="p1 fb bg purple level3">Level 3<div class="right px1" style="background:#ce93d8;">Match</div></div>
    <div class="p1 fb bg purple level4">level 4<div class="right px1" style="background:#ba68c8;">Match</div></div>
    <div class="p1 fb bg purple level5">level 5<div class="right px1" style="background:#ab47bc;">Match</div></div>
    <div class="p1 fb bg purple">Base</div>
    <div class="p1 fb bg purple level6">Level 6<div class="right px1" style="background:#8e24aa;">Match</div></div>
    <div class="p1 fb bg purple level7">Level 7<div class="right px1" style="background:#7b1fa2;">Match</div></div>    
    <div class="p1 fb bg purple level8">Level 8<div class="right px1" style="background:#6a1b9a;">Match</div></div>
    <div class="p1 fb bg purple level9">Level 9<div class="right px1" style="background:#4a148c;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent purple lighter">lighter<div class="right px1" style="background:#ea80fc;">Match</div></div>
    <div class="p1 fb accent purple light">light<div class="right px1" style="background:#e040fb;">Match</div></div>
    <div class="p1 fb accent purple dark">dark<div class="right px1" style="background:#d500f9;">Match</div></div>
    <div class="p1 fb accent purple darker">darker<div class="right px1" style="background:#aa00f;">Match</div></div> 
    
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb purple trans1">Trans1</div>
    <div class="p1 fb purple trans2">Trans2</div>
    <div class="p1 fb purple trans3">Trans3</div>
    <div class="p1 fb purple trans4">Trans4</div>
    <div class="p1 fb purple trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg deep-purple"style="height:120px;">Deep-Purple</div>
    <div class="p1 fb bg deep-purple level1">Level 1<div class="right px1" style="background:#ede7f6;">Match</div></div>
    <div class="p1 fb bg deep-purple level2">Level 2<div class="right px1" style="background:#d1c4e9;">Match</div></div>
    <div class="p1 fb bg deep-purple level3">Level 3<div class="right px1" style="background:#b39ddb;">Match</div></div>
    <div class="p1 fb bg deep-purple level4">level 4<div class="right px1" style="background:#9575cd;">Match</div></div>
    <div class="p1 fb bg deep-purple level5">level 5<div class="right px1" style="background:#7e57c2;">Match</div></div>
    <div class="p1 fb bg deep-purple">Base</div>
    <div class="p1 fb bg deep-purple level6">Level 6<div class="right px1" style="background:#5e35b1;">Match</div></div>
    <div class="p1 fb bg deep-purple level7">Level 7<div class="right px1" style="background:#512da8;">Match</div></div>    
    <div class="p1 fb bg deep-purple level8">Level 8<div class="right px1" style="background:#4527a0;">Match</div></div>
    <div class="p1 fb bg deep-purple level9">Level 9<div class="right px1" style="background:#311b92;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent green lighter">lighter<div class="right px1" style="background:#b388ff;">Match</div></div>
    <div class="p1 fb accent green light">light<div class="right px1" style="background:#7c4dff;">Match</div></div>
    <div class="p1 fb accent green dark">dark<div class="right px1" style="background:#651fff;">Match</div></div>
    <div class="p1 fb accent green darker">darker<div class="right px1" style="background:#6200ea;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb deep-purple trans1">Trans1</div>
    <div class="p1 fb deep-purple trans2">Trans2</div>
    <div class="p1 fb deep-purple trans3">Trans3</div>
    <div class="p1 fb deep-purple trans4">Trans4</div>
    <div class="p1 fb deep-purple trans5">Trans5</div>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="fb-4-desktop">
    <div class="p1 fb bg indigo"style="height:120px;">Indigo</div>
    <div class="p1 fb bg indigo level1">Level 1<div class="right px1" style="background:#e8eaf6;">Match</div></div>
    <div class="p1 fb bg indigo level2">Level 2<div class="right px1" style="background:#c5cae9;">Match</div></div>
    <div class="p1 fb bg indigo level3">Level 3<div class="right px1" style="background:#9fa8da;">Match</div></div>
    <div class="p1 fb bg indigo level4">level 4<div class="right px1" style="background:#7986cb;">Match</div></div>
    <div class="p1 fb bg indigo level5">level 5<div class="right px1" style="background:#5c6bc0;">Match</div></div>
    <div class="p1 fb bg indigo">Base</div>
    <div class="p1 fb bg indigo level6">Level 6<div class="right px1" style="background:#3949ab;">Match</div></div>
    <div class="p1 fb bg indigo level7">Level 7<div class="right px1" style="background:#303f9f;">Match</div></div>    
    <div class="p1 fb bg indigo level8">Level 8<div class="right px1" style="background:#283593;">Match</div></div>
    <div class="p1 fb bg indigo level9">Level 9<div class="right px1" style="background:#1a237e;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent indigo lighter">lighter<div class="right px1" style="background:#8c9eff;">Match</div></div>
    <div class="p1 fb accent indigo light">light<div class="right px1" style="background:#536dfe;">Match</div></div>
    <div class="p1 fb accent indigo dark">dark<div class="right px1" style="background:#3d5afe;">Match</div></div>
    <div class="p1 fb accent indigo darker">darker<div class="right px1" style="background:#304ffe;">Match</div></div>  
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb indigo trans1">Trans1</div>
    <div class="p1 fb indigo trans2">Trans2</div>
    <div class="p1 fb indigo trans3">Trans3</div>
    <div class="p1 fb indigo trans4">Trans4</div>
    <div class="p1 fb indigo trans5">Trans5</div>
    </div>
    </div>

    <div class="fb-4-desktop">
    <div class="p1 fb bg light-blue"style="height:120px;">Light Blue</div>
    <div class="p1 fb bg light-blue level1">Level 1<div class="right px1" style="background:#e1f5fe;">Match</div></div>
    <div class="p1 fb bg light-blue level2">Level 2<div class="right px1" style="background:#b3e5fc;">Match</div></div>
    <div class="p1 fb bg light-blue level3">Level 3<div class="right px1" style="background:#81d4fa;">Match</div></div>
    <div class="p1 fb bg light-blue level4">level 4<div class="right px1" style="background:#4fc3f7;">Match</div></div>
    <div class="p1 fb bg light-blue level5">level 5<div class="right px1" style="background:#29b6f6;">Match</div></div>
    <div class="p1 fb bg light-blue">Base</div>
    <div class="p1 fb bg light-blue level6">Level 6<div class="right px1" style="background:#039be5;">Match</div></div>
    <div class="p1 fb bg light-blue level7">Level 7<div class="right px1" style="background:#0288d1;">Match</div></div>    
    <div class="p1 fb bg light-blue level8">Level 8<div class="right px1" style="background:#0277bd;">Match</div></div>
    <div class="p1 fb bg light-blue level9">Level 9<div class="right px1" style="background:#01579b;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent light-blue lighter">lighter<div class="right px1" style="background:#80d8ff;">Match</div></div>
    <div class="p1 fb accent light-blue light">light<div class="right px1" style="background:#40c4ff;">Match</div></div>
    <div class="p1 fb accent light-blue dark">dark<div class="right px1" style="background:#00b0ff;">Match</div></div>
    <div class="p1 fb accent light-blue darker">darker<div class="right px1" style="background:#0091ea;">Match</div></div> 
    
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb bg light-blue fb trans1">Trans1</div>
    <div class="p1 fb bg light-blue fb trans2">Trans2</div>
    <div class="p1 fb bg light-blue fb trans3">Trans3</div>
    <div class="p1 fb bg light-blue fb trans4">Trans4</div>
    <div class="p1 fb bg light-blue fb trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg cyan"style="height:120px;">Cyan</div>
    <div class="p1 fb bg cyan level1">Level 1<div class="right px1" style="background:#e0f7fa;">Match</div></div>
    <div class="p1 fb bg cyan level2">Level 2<div class="right px1" style="background:#b2ebf2;">Match</div></div>
    <div class="p1 fb bg cyan level3">Level 3<div class="right px1" style="background:#80deea;">Match</div></div>
    <div class="p1 fb bg cyan level4">level 4<div class="right px1" style="background:#4dd0e1;">Match</div></div>
    <div class="p1 fb bg cyan level5">level 5<div class="right px1" style="background:#26c6da;">Match</div></div>
    <div class="p1 fb bg cyan">Base</div>
    <div class="p1 fb bg cyan level6">Level 6<div class="right px1" style="background:#00acc1;">Match</div></div>
    <div class="p1 fb bg cyan level7">Level 7<div class="right px1" style="background:#0097a7;">Match</div></div>    
    <div class="p1 fb bg cyan level8">Level 8<div class="right px1" style="background:#00838f;">Match</div></div>
    <div class="p1 fb bg cyan level9">Level 9<div class="right px1" style="background:#006064;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent cyan lighter">lighter<div class="right px1" style="background:#84ffff;">Match</div></div>
    <div class="p1 fb accent cyan light">light<div class="right px1" style="background:#18ffff;">Match</div></div>
    <div class="p1 fb accent cyan dark">dark<div class="right px1" style="background:#00e5ff;">Match</div></div>
    <div class="p1 fb accent cyan darker">darker<div class="right px1" style="background:#00b8d4;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb cyan trans1">Trans1</div>
    <div class="p1 fb cyan trans2">Trans2</div>
    <div class="p1 fb cyan trans3">Trans3</div>
    <div class="p1 fb cyan trans4">Trans4</div>
    <div class="p1 fb cyan trans5">Trans5</div>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="fb-4-desktop">
    <div class="p1 fb bg teal"style="height:120px;">Teal</div>
    <div class="p1 fb bg teal level1">Level 1<div class="right px1" style="background:#e0f2f1;">Match</div></div>
    <div class="p1 fb bg teal level2">Level 2<div class="right px1" style="background:#b2dfdb;">Match</div></div>
    <div class="p1 fb bg teal level3">Level 3<div class="right px1" style="background:#80cbc4;">Match</div></div>
    <div class="p1 fb bg teal level4">level 4<div class="right px1" style="background:#4db6ac;">Match</div></div>
    <div class="p1 fb bg teal level5">level 5<div class="right px1" style="background:#26a69a;">Match</div></div>
    <div class="p1 fb bg teal">Base</div>
    <div class="p1 fb bg teal level6">Level 6<div class="right px1" style="background:#00897b;">Match</div></div>
    <div class="p1 fb bg teal level7">Level 7<div class="right px1" style="background:#00796b;">Match</div></div>    
    <div class="p1 fb bg teal level8">Level 8<div class="right px1" style="background:#00695c;">Match</div></div>
    <div class="p1 fb bg teal level9">Level 9<div class="right px1" style="background:#004d40;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent teal lighter">lighter<div class="right px1" style="background:#a7ffeb;">Match</div></div>
    <div class="p1 fb accent teal light">light<div class="right px1" style="background:#64ffda;">Match</div></div>
    <div class="p1 fb accent teal dark">dark<div class="right px1" style="background:#1de9b6;">Match</div></div>
    <div class="p1 fb accent teal darker">darker<div class="right px1" style="background:#00bfa5;">Match</div></div>  
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb teal trans1">Trans1</div>
    <div class="p1 fb teal trans2">Trans2</div>
    <div class="p1 fb teal trans3">Trans3</div>
    <div class="p1 fb teal trans4">Trans4</div>
    <div class="p1 fb teal trans5">Trans5</div>
    </div>
    </div>

    <div class="fb-4-desktop">
    <div class="p1 fb bg light-green"style="height:120px;">Light Green</div>
    <div class="p1 fb bg light-green level1">Level 1<div class="right px1" style="background:#f1f8e9;">Match</div></div>
    <div class="p1 fb bg light-green level2">Level 2<div class="right px1" style="background:#dcedc8;">Match</div></div>
    <div class="p1 fb bg light-green level3">Level 3<div class="right px1" style="background:#c5e1a5;">Match</div></div>
    <div class="p1 fb bg light-green level4">level 4<div class="right px1" style="background:#aed581;">Match</div></div>
    <div class="p1 fb bg light-green level5">level 5<div class="right px1" style="background:#9ccc65;">Match</div></div>
    <div class="p1 fb bg light-green">Base</div>
    <div class="p1 fb bg light-green level6">Level 6<div class="right px1" style="background:#7cb342;">Match</div></div>
    <div class="p1 fb bg light-green level7">Level 7<div class="right px1" style="background:#689f38;">Match</div></div>    
    <div class="p1 fb bg light-green level8">Level 8<div class="right px1" style="background:#558b2f;">Match</div></div>
    <div class="p1 fb bg light-green level9">Level 9<div class="right px1" style="background:#33691e;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent light-green lighter">lighter<div class="right px1" style="background:#ccff90;">Match</div></div>
    <div class="p1 fb accent light-green light">light<div class="right px1" style="background:#b2ff59;">Match</div></div>
    <div class="p1 fb accent light-green dark">dark<div class="right px1" style="background:#76ff03;">Match</div></div>
    <div class="p1 fb accent light-green darker">darker<div class="right px1" style="background:#64dd17;">Match</div></div> 
    
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb light-green trans1">Trans1</div>
    <div class="p1 fb light-green trans2">Trans2</div>
    <div class="p1 fb light-green trans3">Trans3</div>
    <div class="p1 fb light-green trans4">Trans4</div>
    <div class="p1 fb light-green trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg lime"style="height:120px;">Lime</div>
    <div class="p1 fb bg lime level1">Level 1<div class="right px1" style="background:#f9fbe7;">Match</div></div>
    <div class="p1 fb bg lime level2">Level 2<div class="right px1" style="background:#f0f4c3;">Match</div></div>
    <div class="p1 fb bg lime level3">Level 3<div class="right px1" style="background:#e6ee9c;">Match</div></div>
    <div class="p1 fb bg lime level4">level 4<div class="right px1" style="background:#dce775;">Match</div></div>
    <div class="p1 fb bg lime level5">level 5<div class="right px1" style="background:#d4e157;">Match</div></div>
    <div class="p1 fb bg lime">Base</div>
    <div class="p1 fb bg lime level6">Level 6<div class="right px1" style="background:#c0ca33;">Match</div></div>
    <div class="p1 fb bg lime level7">Level 7<div class="right px1" style="background:#afb42b;">Match</div></div>    
    <div class="p1 fb bg lime level8">Level 8<div class="right px1" style="background:#9e9d24;">Match</div></div>
    <div class="p1 fb bg lime level9">Level 9<div class="right px1" style="background:#827717;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent lime lighter">lighter<div class="right px1" style="background:#f4ff81;">Match</div></div>
    <div class="p1 fb accent lime light">light<div class="right px1" style="background:#eeff41;">Match</div></div>
    <div class="p1 fb accent lime dark">dark<div class="right px1" style="background:#c6ff00;">Match</div></div>
    <div class="p1 fb accent lime darker">darker<div class="right px1" style="background:#aeea00;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb lime trans1">Trans1</div>
    <div class="p1 fb lime trans2">Trans2</div>
    <div class="p1 fb lime trans3">Trans3</div>
    <div class="p1 fb lime trans4">Trans4</div>
    <div class="p1 fb lime trans5">Trans5</div>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="fb-4-desktop">
    <div class="p1 fb bg yellow"style="height:120px;">Yellow</div>
    <div class="p1 fb bg yellow level1" >Level 1<div class="right px1" style="background:#fffde7;">Match</div></div>
    <div class="p1 fb bg yellow level2">Level 2<div class="right px1" style="background:#fff9c4;">Match</div></div>
    <div class="p1 fb bg yellow level3">Level 3<div class="right px1" style="background:#fff59d;">Match</div></div>
    <div class="p1 fb bg yellow level4">level 4<div class="right px1" style="background:#fff176;">Match</div></div>
    <div class="p1 fb bg yellow level5">level 5<div class="right px1" style="background:#ffee58;">Match</div></div>
    <div class="p1 fb bg yellow">Base</div>
    <div class="p1 fb bg yellow level6">Level 6<div class="right px1" style="background:#fdd835;">Match</div></div>
    <div class="p1 fb bg yellow level7">Level 7<div class="right px1" style="background:#fbc02d;">Match</div></div>    
    <div class="p1 fb bg yellow level8">Level 8<div class="right px1" style="background:#f9a825;">Match</div></div>
    <div class="p1 fb bg yellow level9">Level 9<div class="right px1" style="background:#f57f17;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent yellow lighter">lighter<div class="right px1" style="background:#ffff8d;">Match</div></div>
    <div class="p1 fb accent yellow light">light<div class="right px1" style="background:#ffff00;">Match</div></div>
    <div class="p1 fb accent yellow dark">dark<div class="right px1" style="background:#ffea00;">Match</div></div>
    <div class="p1 fb accent yellow darker">darker<div class="right px1" style="background:#ffd600;">Match</div></div>  
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb yellow trans1">Trans1</div>
    <div class="p1 fb yellow trans2">Trans2</div>
    <div class="p1 fb yellow trans3">Trans3</div>
    <div class="p1 fb yellow trans4">Trans4</div>
    <div class="p1 fb yellow trans5" ><span style="color:white;">Trans5</span></div>
    </div>
    </div>

    <div class="fb-4-desktop">
    <div class="p1 fb bg amber"style="height:120px;">Amber</div>
    <div class="p1 fb bg amber level1">Level 1<div class="right px1" style="background:#fff8e1;">Match</div></div>
    <div class="p1 fb bg amber level2">Level 2<div class="right px1" style="background:#ffecb3;">Match</div></div>
    <div class="p1 fb bg amber level3">Level 3<div class="right px1" style="background:#ffe082;">Match</div></div>
    <div class="p1 fb bg amber level4">level 4<div class="right px1" style="background:#ffd54f;">Match</div></div>
    <div class="p1 fb bg amber level5">level 5<div class="right px1" style="background:#ffca28;">Match</div></div>
    <div class="p1 fb bg amber">Base</div>
    <div class="p1 fb bg amber level6">Level 6<div class="right px1" style="background:#ffb300;">Match</div></div>
    <div class="p1 fb bg amber level7">Level 7<div class="right px1" style="background:#ffa000;">Match</div></div>    
    <div class="p1 fb bg amber level8">Level 8<div class="right px1" style="background:#ff8f00;">Match</div></div>
    <div class="p1 fb bg amber level9">Level 9<div class="right px1" style="background:#ff6f00;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent amber lighter">lighter<div class="right px1" style="background:#ffe57f;">Match</div></div>
    <div class="p1 fb accent amber light">light<div class="right px1" style="background:#ffd740;">Match</div></div>
    <div class="p1 fb accent amber dark">dark<div class="right px1" style="background:#ffc400;">Match</div></div>
    <div class="p1 fb accent amber darker">darker<div class="right px1" style="background:#ffab00;">Match</div></div> 
    
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb amber trans1">Trans1</div>
    <div class="p1 fb amber trans2">Trans2</div>
    <div class="p1 fb amber trans3">Trans3</div>
    <div class="p1 fb amber trans4">Trans4</div>
    <div class="p1 fb amber trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg orange"style="height:120px;">Orange</div>
    <div class="p1 fb bg orange level1">Level 1<div class="right px1" style="background:#fff3e0;">Match</div></div>
    <div class="p1 fb bg orange level2">Level 2<div class="right px1" style="background:#ffe0b2;">Match</div></div>
    <div class="p1 fb bg orange level3">Level 3<div class="right px1" style="background:#ffcc80;">Match</div></div>
    <div class="p1 fb bg orange level4">level 4<div class="right px1" style="background:#ffb74d;">Match</div></div>
    <div class="p1 fb bg orange level5">level 5<div class="right px1" style="background:#ffa726;">Match</div></div>
    <div class="p1 fb bg orange">Base</div>
    <div class="p1 fb bg orange level6">Level 6<div class="right px1" style="background:#fb8c00;">Match</div></div>
    <div class="p1 fb bg orange level7">Level 7<div class="right px1" style="background:#f57c00;">Match</div></div>    
    <div class="p1 fb bg orange level8">Level 8<div class="right px1" style="background:#ef6c00;">Match</div></div>
    <div class="p1 fb bg orange level9">Level 9<div class="right px1" style="background:#e65100;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent orange lighter">lighter<div class="right px1" style="background:#ffd180;">Match</div></div>
    <div class="p1 fb accent orange light">light<div class="right px1" style="background:#ffab40;">Match</div></div>
    <div class="p1 fb accent orange dark">dark<div class="right px1" style="background:#ff9100;">Match</div></div>
    <div class="p1 fb accent orange darker">darker<div class="right px1" style="background:#ff6d00;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb orange trans1">Trans1</div>
    <div class="p1 fb orange trans2">Trans2</div>
    <div class="p1 fb orange trans3">Trans3</div>
    <div class="p1 fb orange trans4">Trans4</div>
    <div class="p1 fb orange trans5">Trans5</div>
    </div>
    </div>
  </div>
  <div class="row">
  <div class="fb-4-desktop">
    <div class="p1 fb bg deep-orange"style="height:120px;">Deep Orange</div>
    <div class="p1 fb bg deep-orange level1">Level 1<div class="right px1" style="background:#fbe9e7;">Match</div></div>
    <div class="p1 fb bg deep-orange level2">Level 2<div class="right px1" style="background:#ffccbc;">Match</div></div>
    <div class="p1 fb bg deep-orange level3">Level 3<div class="right px1" style="background:#ffab91;">Match</div></div>
    <div class="p1 fb bg deep-orange level4">level 4<div class="right px1" style="background:#ff8a65;">Match</div></div>
    <div class="p1 fb bg deep-orange level5">level 5<div class="right px1" style="background:#ff7043;">Match</div></div>
    <div class="p1 fb bg deep-orange">Base</div>
    <div class="p1 fb bg deep-orange level6">Level 6<div class="right px1" style="background:#f4511e;">Match</div></div>
    <div class="p1 fb bg deep-orange level7">Level 7<div class="right px1" style="background:#e64a19;">Match</div></div>    
    <div class="p1 fb bg deep-orange level8">Level 8<div class="right px1" style="background:#d84315;">Match</div></div>
    <div class="p1 fb bg deep-orange level9">Level 9<div class="right px1" style="background:#bf360c;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent deep-orange lighter">lighter<div class="right px1" style="background:#ff9e80;">Match</div></div>
    <div class="p1 fb accent deep-orange light">light<div class="right px1" style="background:#ff6e40;">Match</div></div>
    <div class="p1 fb accent deep-orange dark">dark<div class="right px1" style="background:#ff3d00;">Match</div></div>
    <div class="p1 fb accent deep-orange darker">darker<div class="right px1" style="background:#dd2c00;">Match</div></div>  
    <div class="p1 h3">Transparency</div>
    <div class="p1 fb bg blue-grey level9">
    <div class="p1 fb deep-orange trans1">Trans1</div>
    <div class="p1 fb deep-orange trans2">Trans2</div>
    <div class="p1 fb deep-orange trans3">Trans3</div>
    <div class="p1 fb deep-orange trans4">Trans4</div>
    <div class="p1 fb deep-orange trans5">Trans5</div>
    </div>
    </div>

    <div class="fb-4-desktop">
    <div class="p1 fb bg brown"style="height:120px;">Brown</div>
    <div class="p1 fb bg brown level1">Level 1<div class="right px1" style="background:#efebe9;">Match</div></div>
    <div class="p1 fb bg brown level2">Level 2<div class="right px1" style="background:#d7ccc8;">Match</div></div>
    <div class="p1 fb bg brown level3">Level 3<div class="right px1" style="background:#bcaaa4;">Match</div></div>
    <div class="p1 fb bg brown level4">level 4<div class="right px1" style="background:#a1887f;">Match</div></div>
    <div class="p1 fb bg brown level5">level 5<div class="right px1" style="background:#8d6e63;">Match</div></div>
    <div class="p1 fb bg brown">Base</div>
    <div class="p1 fb bg brown level6">Level 6<div class="right px1" style="background:#6d4c41;">Match</div></div>
    <div class="p1 fb bg brown level7">Level 7<div class="right px1" style="background:#5d4037;">Match</div></div>    
    <div class="p1 fb bg brown level8">Level 8<div class="right px1" style="background:#4e342e;">Match</div></div>
    <div class="p1 fb bg brown level9">Level 9<div class="right px1" style="background:#3e2723;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent brown lighter">lighter<div class="right px1" style="background:#a6baff;">Match</div></div>
    <div class="p1 fb accent brown light">light<div class="right px1" style="background:#6889ff;">Match</div></div>
    <div class="p1 fb accent brown dark">dark<div class="right px1" style="background:#4d73f;">Match</div></div>
    <div class="p1 fb accent brown darker">darker<div class="right px1" style="background:#4d69ff;">Match</div></div> 
    
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb brown trans1">Trans1</div>
    <div class="p1 fb brown trans2">Trans2</div>
    <div class="p1 fb brown trans3">Trans3</div>
    <div class="p1 fb brown trans4">Trans4</div>
    <div class="p1 fb brown trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg grey"style="height:120px;">Grey</div>
    <div class="p1 fb bg grey level1">Level 1<div class="right px1" style="background:#fafafa;">Match</div></div>
    <div class="p1 fb bg grey level2">Level 2<div class="right px1" style="background:#f5f5f5;">Match</div></div>
    <div class="p1 fb bg grey level3">Level 3<div class="right px1" style="background:#eeeeee;">Match</div></div>
    <div class="p1 fb bg grey level4">level 4<div class="right px1" style="background:#e0e0e0;">Match</div></div>
    <div class="p1 fb bg grey level5">level 5<div class="right px1" style="background:#bdbdbd;">Match</div></div>
    <div class="p1 fb bg grey">Base</div>
    <div class="p1 fb bg grey level6">Level 6<div class="right px1" style="background:#757575;">Match</div></div>
    <div class="p1 fb bg grey level7">Level 7<div class="right px1" style="background:#616161;">Match</div></div>    
    <div class="p1 fb bg grey level8">Level 8<div class="right px1" style="background:#424242;">Match</div></div>
    <div class="p1 fb bg grey level9">Level 9<div class="right px1" style="background:#212121;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent grey lighter">lighter<div class="right px1" style="background:#a2f78d;">Match</div></div>
    <div class="p1 fb accent grey light">light<div class="right px1" style="background:#5af158;">Match</div></div>
    <div class="p1 fb accent grey dark">dark<div class="right px1" style="background:#212121;">Match</div></div>
    <div class="p1 fb accent grey darker">darker<div class="right px1" style="background:#000000;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb grey trans1">Trans1</div>
    <div class="p1 fb grey trans2">Trans2</div>
    <div class="p1 fb grey trans3">Trans3</div>
    <div class="p1 fb grey trans4">Trans4</div>
    <div class="p1 fb grey trans5">Trans5</div>
    </div>
    </div>
    <div class="fb-4-desktop">
    <div class="p1 fb bg blue-grey"style="height:120px;">blue-grey</div>
    <div class="p1 fb bg blue-grey level1">Level 1<div class="right px1" style="background:#eceff1;">Match</div></div>
    <div class="p1 fb bg blue-grey level2">Level 2<div class="right px1" style="background:#cfd8dc;">Match</div></div>
    <div class="p1 fb bg blue-grey level3">Level 3<div class="right px1" style="background:#b0bec5;">Match</div></div>
    <div class="p1 fb bg blue-grey level4">level 4<div class="right px1" style="background:#90a4ae;">Match</div></div>
    <div class="p1 fb bg blue-grey level5">level 5<div class="right px1" style="background:#78909c;">Match</div></div>
    <div class="p1 fb bg blue-grey">Base</div>
    <div class="p1 fb bg blue-grey level6">Level 6<div class="right px1" style="background:#546e7a;">Match</div></div>
    <div class="p1 fb bg blue-grey level7">Level 7<div class="right px1" style="background:#455a64;">Match</div></div>    
    <div class="p1 fb bg blue-grey level8">Level 8<div class="right px1" style="background:#37474f;">Match</div></div>
    <div class="p1 fb bg blue-grey level9">Level 9<div class="right px1" style="background:#263238;">Match</div></div>
    <div class="p1 h3 center">Accents</div>
    <div class="p1 fb accent blue-grey lighter">lighter<div class="right px1" style="background:#a2f78d;">Match</div></div>
    <div class="p1 fb accent blue-grey light">light<div class="right px1" style="background:#455a64;">Match</div></div>
    <div class="p1 fb accent blue-grey dark">dark<div class="right px1" style="background:#37474f;">Match</div></div>
    <div class="p1 fb accent blue-grey darker">darker<div class="right px1" style="background:#263238;">Match</div></div> 
    <div class="p1 h3">Transparency</div>
    <div class="p1"style="background-image: url('../dist/img/wallpaper.jpg');">
    <div class="p1 fb blue-grey trans1">Trans1</div>
    <div class="p1 fb blue-grey trans2">Trans2</div>
    <div class="p1 fb blue-grey trans3">Trans3</div>
    <div class="p1 fb blue-grey trans4">Trans4</div>
    <div class="p1 fb blue-grey trans5">Trans5</div>
    </div>
    </div>
  </div>
  </div>
</section>
<!-- End of Colors Section -->
<!-- Edit everything above -->
<!-- TESTING LIST -->
<ul class="row p2 fb red trans3">
  <li class="fb-3-desktop fb bg blue">I</li>
  <li class="fb-3-desktop fb bg red">will</li>
  <li class="fb-3-desktop fb bg green">rock</li>
  <li class="fb-3-desktop fb bg blue level3">you</li>
</ul>
    </div><!-- /.container -->

</div>
    <!--  -->

    <!--  -->
    <!-- Placed at the end of the document so the pages load faster -->


<script src="../js/libs/scotchPanels.js"></script>
<script type="text/javascript">
   $('.scotch-panel').scotchPanel({
                    containerSelector: 'body',
                    duration: 300,
                    transition: 'ease',
                    distanceX: '30%'
                });
</script>
  
  </body>
</html>

