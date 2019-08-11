<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>mBox</title>

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<link rel="stylesheet" type = "text/css" href="./css/global.css">
		<link rel="stylesheet" type = "text/css" href="./css/mBox.css">
		<link rel="stylesheet" type = "text/css" href="./css/github.css">
	</head>
	<body>
		<nav>
			<div class="container">
				<h3 class = "title"><a href="./index.php">mBox</a> <small class="super-small ml-1">jQuery lightbox plugin</small></h3>
			</div>
		</nav>
		<div class = "container">
			<div class="example-block">
				<h4 class="title mb-2 mt-0">About the plugin</h4>
				<p>mBox is a simple jQuery lightbox plugin. It's main goal is to be easy to use and lightweight. As you can see in the examples below, it takes only 4 lines of code to initialize the plugin and transform your static images into awesome lightbox gallery. Also, mBox gives you some basic customization options which you can check <a href="./index.php#options">here</a>.</p>
			</div>
			<div class="example-block">
				<h5 class="title mb-2 mt-0">Installation guide</h5>
				<p>First, download mBox here:</p>
				<div class="mb-3"><a href="./poppa.rar" class="btn btn-primary">Download</a><a href="./poppa.rar" class="btn btn-primary ml-2">View on Github</a></div>
				<p>After extracting the file, include the Javascript at the bottom of your page before the closing <code class="super-clean">&lt;/body&gt;</code> tag. Also, make sure jQuery, which is required by the plugin is also included:</p>
<pre><code class="html">&lt;!&#45;&#45; Load jQuery first &#45;&#45;&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;script src="./js/mBox.js"&gt;&lt;/script&gt;</code></pre>
				<p>Include the CSS at the top of your page in your <code class="super-clean">&lt;head&gt;</code> tag:</p>
				<pre><code class="html">&lt;link rel="stylesheet" type="text/css" href="./css/mBox.css"&gt;</code></pre>
			</div>
			<div class="example-block">
				<h5 class = "section-header">Single image</h5>
				<p>To activate mBox on selected image, simply add mBox class and call <code class="super-clean">.mBox()</code> plugin on jQuery selection.</p>		
				<div class="row">
					<div class = "col-5 pr-0">
						<div class = "image-container">
							<img src = "./img/babel.jpg" class = "mBox" title = "Babel the cat" />
						</div>
					</div>
					<div class = "col-7">
						<span>HTML</span>
						<pre><code class="html">&lt;img src="./img/babel.jpg" class="mBox" title="Babel the cat" /&gt;</code></pre>
						<span>Javascript</span>
						<pre><code class="javascript">$('.mBox').mBox();</code></pre>
					</div>
				</div>
			</div>
			<div class="example-block">
				<h5 class = "section-header">Images collection</h5>
				<p>You can call mBox on the parent element of the images collection. mBox will automatically find all images stored within the container and combine them into one lightbox gallery.</p>
				<div class = "row">
					<div class="col-5 pr-0">
						<div class="row mBox">
							<div class = "col-6 mb-2">
								<div class = "image-container">
									<img src = "./img/flowers.jpg" title = "KTM" />
								</div>
							</div>
							<div class = "col-6 mb-2">
								<div class = "image-container">
									<img src = "./img/spring.jpg" title = "KTM" />
								</div>
							</div>
							<div class = "col-6 mb-2">
									<div class = "image-container">
									<img src = "./img/autumn.jpg" title = "KTM" />
								</div>
							</div>
							<div class = "col-6 mb-2">
								<div class = "image-container">
									<img src = "./img/wheat.jpg" title = "KTM" />
								</div>
							</div>
						</div>
					</div>
					<div class = "col-7">
						<span>HTML</span>
<pre><code class="html">&lt;div class="mBox"&gt;
   &lt;img src="./img/flowers.jpg" title="KTM" /&gt;
   &lt;img src="./img/flowers.jpg" title="KTM" /&gt;
   &lt;img src="./img/flowers.jpg" title="KTM" /&gt;
   &lt;img src="./img/flowers.jpg" title="KTM" /&gt;
&lt;/div&gt;</code></pre>
						<span>Javascript</span>
						<pre><code class="javascript">$('.mBox').mBox();</code></pre>
					</div>
				</div>
			</div>
			<h5 class = "title" id="options">Options</h5>
			<table class="table table-sm">
				<thead>
					<tr>
						<th>Option</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>imagesPerPage</td><td>3</td><td>Specifies how many thumbnails to display on a single page.</td></tr>
					<tr><td>displayNavigation</td><td>true</td><td>Displays/hides navigation arrows.</td></tr>
					<tr><td>displayTitle</td><td>true</td><td>Display the image title as image description.</td></tr>
					<tr><td>displayThumbnails</td><td>true</td><td>Displays/hides thumbnails.</td></tr>
					<tr><td>keyboardNavigation</td><td>true</td><td>If keyboard navigation is active, you can navigate trough images with left and right keyboard arrows.</td></tr>
				</tbody>
			</table>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src = "./js/global.js"></script>
		<script src = "./js/mBox.js"></script>
		<script src = "./js/highlight.js"></script>

		<script>

			$(document).ready(function() {

				hljs.initHighlightingOnLoad();

				$('.mBox').mBox({'imagesPerPage': 3, 'displayNavigation': true});

			});

		</script>
	</body>
</html>