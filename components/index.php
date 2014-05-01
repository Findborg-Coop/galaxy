<?php include "../config.php"; ?>
<!DOCTYPE html>
<!-- saved from url=(0063)http://www.speich.net/articles/css-flexiblebox-layout-full.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>CSS3 Application Layout</title>
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
html, body {
	height: 100%;
	width: 100%;
	padding: 0;
	margin: 0;
}

body {
	overflow: hidden;
	display: flex;
	flex-direction: column;
}

header {
	
	background: #e9e9e7;
}

footer {
	height: 40px;
	min-height: 40px;
}

main {
	display: flex;
	flex-direction: row;
	flex: auto;
	border: solid grey;
	border-width: 1px 0;
	overflow: hidden;
}

nav {
	width: 200px;
	min-width: 200px;
}

article {
	border: solid grey;
	border-width: 0 0 0 1px;
	flex: auto;
	overflow-x: hidden;
	overflow-y: auto;
}

aside {
	width: 50px;
	min-width: 50px;
	overflow-x: hidden;
	overflow-y: auto;
}

.splitter {
	border-left: 1px solid grey;
	width: 4px;
	min-width: 4px;
	cursor: col-resize;
}
</style>
<link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/js/page_context.js"></script></head>

<body screen_capture_injected="true">
<header>
	<?php include "../header.php"; ?>
</header>
<main>
	<nav>
		<ul>
			<li>Dropdowns</li>
			<li>Tabs</li>
			<li>Colors</li>
			<li>Buttons</li>
			<li>Toolbars</li>
			<li>Lists</li>
			<li>Button Groups</li>
		</ul>
	</nav>

	<article style="width: 50%;">
		<section class="px1">
		<h1>Galaxy UI Components</h1>
		<h2>A collection of elements that will help you build and add on to your website or application.</h2>
		<p>I want to build and piece together re-usable UI components that will make it easy for anyone to build readable and usable
		 websites or applications.</p>
		 <p>The main goal is to build application styles that are usable and responsive to any screen size.</p>
		 </section>
	</article>
	<div class="splitter"></div>
	<aside style="width: 50%;background:#222;color:#a9d0e9;">
	<p class="px1">One thing you will notice about the Galaxy Framework is that you can build normal websites or you can build application style websites.
Galaxy is very flexible.  You can even use it to build only Tablet or Mobile applications.  I am taking great care to use html 5 and or css3 only
where I can.  I do this in hopes to eliminate as much javascript as I can.  The reason being is I want to be able to use Galaxy with any outside
javascript that I want.  This is a big problem with other frameworks such as Bootstrap.  I kept running into javascript conflicts.  That being said,
I find myself falling back on a lot of jquery to get things done.  
	</p>
	</aside>
</main>
<footer>footer</footer>
<script type="text/javascript">
var w = window, d = document, splitter;

splitter = {
	lastX: 0,
	leftEl: null,
	rightEl: null,

	init: function(handler, leftEl, rightEl) {
		var self = this;

		this.leftEl = leftEl;
		this.rightEl = rightEl;

		handler.addEventListener('mousedown', function(evt) {
			evt.preventDefault();	/* prevent text selection */

			self.lastX = evt.clientX;

			w.addEventListener('mousemove', self.drag);
			w.addEventListener('mouseup', self.endDrag);
		});
	},

	drag: function(evt) {
		var wL, wR, wDiff = evt.clientX - splitter.lastX;

		wL = d.defaultView.getComputedStyle(splitter.leftEl, '').getPropertyValue('width');
		wR = d.defaultView.getComputedStyle(splitter.rightEl, '').getPropertyValue('width');
		wL = parseInt(wL, 10) + wDiff;
		wR = parseInt(wR, 10) - wDiff;
		splitter.leftEl.style.width = wL + 'px';
		splitter.rightEl.style.width = wR + 'px';

		splitter.lastX = evt.clientX;
	},

	endDrag: function() {
		w.removeEventListener('mousemove', splitter.drag);
		w.removeEventListener('mouseup', splitter.endDrag);
	}
};

splitter.init(d.getElementsByClassName('splitter')[0], d.getElementsByTagName('article')[0], d.getElementsByTagName('aside')[0]);
</script>

</body></html>