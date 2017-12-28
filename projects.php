<?php 
	require($_SERVER['DOCUMENT_ROOT']."/includes/header.php")
?>
	<link rel="stylesheet" type="text/css" href="/src/css/projects-styles.css">
	<div id="gradient">
		<div id="grad-content">
			<h2 id="grad-heading" class="nav-nowrap" data-swipe="1">Projects</h2>
			<p id="grad-subheading" class="nav-nowrap" data-swipe="1">Here are a few of my projects.</p>
		</div>
	</div>
	<div id="mainbody">
		<div data-scroll-id='1' class="newsection">
			<section>
				<h1>These are some of my latest projects that I've worked on or developed:</h1><br>
				<ul id="list">
					<li><a href="http://www.imagepanel.net/">Image Panel</a></li>
					<li><a href="http://dracoisles.com/b1/">Draco Isles</a></li>
					<li>Adaptify</li>
					<li><a href="http://www.sams-clothing.com/">Sam's Clothing</a></li>
					<li><a href="/websites/webtemplates/index.php">Web Templates (CMS)</a></li>
				</ul>
			</section>
		</div>
		<div data-scroll-id='2' class="newsection">
			<section id="imagepanel">
				<h1><a href="http://www.imagepanel.net/">Image Panel</a></h1><br>
				<div class="col-1-1">
					<p>Image Panel is a web page that I made as a school project, but I kept developing it into what it is now. ImagePanel is an online image uploader/downloader to get your images out on the web to share. I have implemented multiple security features that help protect your images on the back end. When I scan the suspected uploaded image I look for the file extension and then I parse through the file, looking through the binary for any added php tags, to prevent intrusion.</p>
				</div>
				<div class="col-2-1">
					<img src="/src/images/imagepanelmulti.png" alt="Image Panel Picture" class="img1">
				</div>
				
				
			</section>
		</div>
		<div data-scroll-id='3' class="newsection">
			<section id="dracoisles">
				<h1><a href="http://dracoisles.com/b1">Draco Isles</a></h1><br>
				<div class="col-1-2">
					<img src="/src/images/dracoisles.png" alt="Draco Isles Picture" class="img1 curved-border">
				</div><br>
				<div class="col-2-2">
					<p>Draco Isles is a website where you breed dragons and send them out on quests! I had partaken in some of the development of Draco Isles as it's an on-going collaboration between the students and the instructor. My group was tasked with adding in a questing system so that people can send their dragons on a quest. We are built all of the quest scripts that are being used on this project.</p>
				</div>
				
				
			</section>
		</div>
		<div data-scroll-id='4' class="newsection">
			<section id="adaptify">
				<h1>Adaptify (Prototyping)<span class="link_hover"> (Mobile Friendly!)</span></h1><br>
				<div class="col-1-1">
					<p>Adaptify is a collaboration between me (The Web Developer) and Trevin Corkery (C++ Application Developer).Adaptify is an online SMT (Software Management Tool). If you are a developer of an application (Written in any language that is web accessible and is able to post to a web page, C++, C#, Java, etc.) you are able to upload your compiled code to our SMT and disperse your program to your users whenever you wish to push an update, all from our website. This will be done by using an API (still in production) on our website. Adaptify will also provide security, through TLS encrypted requests, on your application by authorizing each user, making sure they have the privileges required by you, the developer. This website is not published and is currently under development. It is hosted on a local stating server that I have set up.</p>
				</div>
				<div class="col-2-1">
					<img src="/src/images/adaptify.png" alt="Adaptify Picture" class="img1">
				</div>
			</section>
		</div>
		<div data-scroll-id='5' class="newsection">
			<section id="samsclothing">
				<h1><a href="http://www.sams-clothing.com/">Sam's Clothing</a> <span class="link_hover"> (Mobile Friendly!)</span></h1><br>
				<div class="col-1-2">
					<img src="/src/images/samsclothing.png" alt="Sam's Clothing Picture" class="img1 curved-border">
				</div><br>
				<div class="col-2-2">
					<p>Sam's Clothing is a clothing store based in Oelwein, IA. This was my first real project for a customer. I had faced some challenges building this static website, such as a strict color palette. This project took a couple of months to make due to making it mobile friendly and cross-browser compatible. This is my first responsive ready website, take a look! </p>
				</div>
				
				
			</section>
		</div>
		<div data-scroll-id='6' class="newsection">
			<section id="webtemplates">
				<h1><a href="/websites/webtemplates/index.php">Web Templates (CMS)</a> <span class="link_hover"> (Mobile Friendly!)</span></h1><br>
				<div class="col-1-1">
					<p>I am currently making a CMS and this is the front-end of it. I will be updating this description with more information as I continue development. There isn't much more that I can say about this as it is mainly back-end work, if you'd like to take a look you may <a href="/contactme.php">Contact Me</a> and I can show you around! (IN DEVELOPMENT)</p>
				</div>
				<div class="col-2-1">
					<img src="/src/images/CMS.png" alt="Adaptify Picture" class="img1">
				</div>
			</section>
		</div>
	</div>

<?php 
	require($_SERVER['DOCUMENT_ROOT']."/includes/footer.php")
?>