<?php
//Prevent google analytics from requesting page again
if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
        exit();
}

//Domain redirect
if ($_SERVER['HTTP_HOST'] == "nicolasjmendez.com")
{
   $url = "http://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header("Location: $url");
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Portfolio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Welcome to my Portfolio! My name is Nicolas Mendez and I am a Web Developer and Designer. Visit my projects and resume pages to find out more about me. View the contact page.">
	<link rel="stylesheet" type="text/css" href="/src/css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="canonical" href="http://www.nicolasjmendez.com/">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97007153-1', 'auto');
  ga('send', 'pageview');
</script>
	<script src="/dist/js/main.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Include Structured Data JSON-LD -->
	
<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "WebPage",
    "breadcrumb": "Homepage > <?= pathinfo(basename($_SERVER['SCRIPT_FILENAME']), PATHINFO_FILENAME) ?>"
}
</script>


<!-- <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "WebPage",
    "breadcrumb": "Homepage > ",
    "mainEntity":
       {
          "@type": "Product",
             "image":"http://www.example.com/image-of-the-great-widget.jpg",
             "name": "My Great Hypothetical Widget",
             "description": "The description of the great hypothetical widget and an overview of its greatness."
       }
}
</script> -->
</head>
<body>
<div id="wrapper">
	<div id="nav">
		<div class="container">
		<div id="top">
			<div id="top-contents">
				<p class="pull-left"><a href="http://nicolasjmendez.com/">www.NicolasjMendez.com</a></p>
				<ul class="pull-right">
					<li><a href="http://nicolasjmendez.com/resume.php">Resume</a></li>
					<li><a href="http://nicolasjmendez.com/contactme.php">Contact Me</a></li>
				</ul>
			</div>
		</div>
		</div>
		<div class="clearfix"></div>
		<div id="mid-contents">
			<ul>
				<li><a href="http://nicolasjmendez.com/">Home</a></li>
				<li><a href="http://nicolasjmendez.com/projects.php">Projects</a></li>
				<li><a href="http://nicolasjmendez.com/aboutme.php">About&nbsp;Me</a></li>
				<li><a href="http://nicolasjmendez.com/internships.php">Internships</a></li>
			</ul>
		</div>
	</div>