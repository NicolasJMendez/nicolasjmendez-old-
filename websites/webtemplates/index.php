<?php
	$base_dir = "websites/webtemplates/";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/<?= (isset($base_dir))? $base_dir : '' ?>src/css/main.css">
	<script src="/<?= (isset($base_dir))? $base_dir : '' ?>src/js/main.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="/<?= (isset($base_dir))? $base_dir : '' ?>apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/<?= (isset($base_dir))? $base_dir : '' ?>favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/<?= (isset($base_dir))? $base_dir : '' ?>favicon-16x16.png">
	<link rel="manifest" href="/<?= (isset($base_dir))? $base_dir : '' ?>manifest.json">
	<link rel="mask-icon" href="/<?= (isset($base_dir))? $base_dir : '' ?>safari-pinned-tab.svg" color="#5bbad5">
	<link rel="stylesheet" type="text/css" href="/<?= (isset($base_dir))? $base_dir : '' ?>src/css/wysiwyg_styles.css">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
if (isset($base_dir)) { ?>
	<style type="text/css">
		#page_heading{
			background-image: url(/<?= $base_dir  ?>src/images/deskop_bg.jpg) !important;
		}
		@media (max-width: 767px){
			#page_heading{
				background: url(/<?= $base_dir  ?>src/images/mobile_back.png) repeat scroll 0 0 transparent !important;
			}
		}
	</style>
<?php
}
?>
<body>
	<header id="page_heading">
		<div id="header_container">
			<nav>
				<!--Logo-->
				<a href=""><img src="/<?= (isset($base_dir))? $base_dir : '' ?>src/images/site_Logo.png" class="logo"></a>
				<a href="" id="click" class=" mobile_toggle mobile_hamberger"><span class="entypo-menu pull_right"></span></a>
				<ul id="desktop">
					<!--Nav goes here-->
					<li><a href="">Home</a></li>
					<li><a href="">Page1</a></li>
					<li><a href="">Page2</a></li>
					<li><a href="">Page3</a></li>
					<li><a href="">Page4</a></li>
				</ul>
				<div class="clearfix"></div>
				<ul id="mobile" class="mobile_toggle">
					<!--Nav goes here-->
					<li><a href="">Home</a></li><hr>
					<li><a href="">Page1</a></li><hr>
					<li><a href="">Page2</a></li><hr>
					<li><a href="">Page3</a></li><hr>
					<li><a href="">Page4</a></li><hr>
				</ul>
			</nav>
			<div class="clearfix"></div>
			<div id="headline">
				<!-- headline goes here -->
				<h1>Welcome to a free <b>WebTemplate</b> designed by Nicolas Mendez. This is designed to test out a proprietary CMS, which is also developed by Nicolas Mendez. Thanks for visiting and feel free to look around!</h1><br>
				<p><i>- Royalty Free Image Provided By www.pexels.com</i></p>
			</div>
			<div id="action">
				<!--Call to action-->
				<p>
					<a href=""></a>
				</p>
			</div>			
		</div>
	</header>
	<main>
		<div class="testimonials_wrapper odd">
			<div class="container">
				<h3><span class="entypo-comment font-size-large"></span> <i>"This is the best website ever! I love it!" -Nicolas Mendez</i></h3>
			</div>
		</div>
		<section class="even">
			<div class="general_wrapper">
				<div class="container tall-container">
					<header class="text-center">
						<h2>Hello, this is a template design!</h2>
					</header>
					<article>
						<p>This is a template design that is made to act as a front-end to my new CMS. </p>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ac ante bibendum, ultrices nisi at, vehicula massa. Praesent id nisi interdum, mattis elit a, pulvinar urna. Proin varius commodo orci in tincidunt. Ut sollicitudin massa dolor, ut euismod lacus tincidunt ut. Cras suscipit venenatis ante, a interdum orci tempor eget. Nulla dapibus varius tempor. Vestibulum semper ultricies lorem. Vestibulum dignissim nulla non sapien faucibus, at rutrum augue fringilla. Sed sapien orci, efficitur sed ex eget, tempor pellentesque leo.</p>
						<p>Sed lorem elit, pulvinar ut scelerisque a, fermentum non orci. Fusce iaculis consequat consectetur. Sed scelerisque fringilla libero, vel auctor tortor dignissim a. Nulla at congue augue. Cras bibendum faucibus molestie. Phasellus consequat malesuada risus id vehicula. Suspendisse euismod semper feugiat. Nunc magna dui, vestibulum nec posuere a, lobortis sit amet velit.</p>
					</article>
				</div>
			</div>
		</section>
		<section class="odd">
			<div class="general_wrapper">
				<div class="container tall-container">
					<header class="text-center">
						<h2>Hello, this is a template design!</h2>
					</header>
					<article>
						<p>This is a template design that is made to act as a front-end to my new CMS. </p>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ac ante bibendum, ultrices nisi at, vehicula massa. Praesent id nisi interdum, mattis elit a, pulvinar urna. Proin varius commodo orci in tincidunt. Ut sollicitudin massa dolor, ut euismod lacus tincidunt ut. Cras suscipit venenatis ante, a interdum orci tempor eget. Nulla dapibus varius tempor. Vestibulum semper ultricies lorem. Vestibulum dignissim nulla non sapien faucibus, at rutrum augue fringilla. Sed sapien orci, efficitur sed ex eget, tempor pellentesque leo.</p>
						<p>Sed lorem elit, pulvinar ut scelerisque a, fermentum non orci. Fusce iaculis consequat consectetur. Sed scelerisque fringilla libero, vel auctor tortor dignissim a. Nulla at congue augue. Cras bibendum faucibus molestie. Phasellus consequat malesuada risus id vehicula. Suspendisse euismod semper feugiat. Nunc magna dui, vestibulum nec posuere a, lobortis sit amet velit.</p>
					</article>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="container">
			<h2 class="text-center">Visit us:</h2>
			<ul class="social">
			  <a href="" class="twitter"><li class="zocial-twitter"></li></a>
			  <a href="" class="facebook"><li class="brandico-facebook"></li></a>
			  <a href="" class="googleplus"><li class="zocial-googleplus"></li></a>
			  <a href="" class="vimeo"><li class="brandico-vimeo"></li></a>
			  <a href="" class="skype"><li class="brandico-skype"></li></a>
			  <a href="" class="instagram"><li class="brandico-instagram"></li></a>
			</ul><br>
			<div class="col-1 text-center">
				<p>Phone: (888)-888-8888</p>
				<p>Email: test@test.test</p>
				<p>100 10t St. NW Fakeville, Fake</p>
			</div>
			<div class="col-2 text-center">
				<p>Property of Nicolasjmendez</p>
				<p>Content Management System</p>
			</div>
			<div class="clearfix"></div></p><br><br>
			<p class="text-center">If you'd like to take a look at the backend CMS that generated this page, please <a href="http://www.nicolasjmendez.com/contactme.php" class="link no-decorate">Contact Me</a>.</p><br>
			<p class="text-center copy">&copy; 2017 www.nicolasjmendez.com <a href="">Thanks for visiting!</a></p>
		</div>
	</footer>
</body>
</html>