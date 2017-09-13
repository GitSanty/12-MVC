<?php
 
require_once('model/connection.php');
 
if (isset($_POST['controller']) && isset($_POST['action'])) {
    
    $controller = $_POST['controller'];
    $action = $_POST['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}

/*require_once('views/making_of_view.php');*/
require_once('views/corporate_info_view.php');
require_once('views/introduction_dev_view.php');
require_once('views/interview_view.php'); 

?>


<!DOCTYPE HTML>
<!--
	Lens by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lens by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Webdev Interview</h1>
						<p>Just another succes story  </p>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<article>
							<a class="thumbnail" href="images/fulls/01.jpg" data-position="left center"><img src="images/thumbs/01.jpg" alt="" /></a>
							<h2>Making Of</h2>
							<p id='pcolor'>I use to talk or text with many people who works in IT.
							 In this opportunity I met to Jordi by accident, one night i was surfing by internet as usual, since the beginning  
							 of my IT-training. First i sent un email to jordi. 
							 We were talking and sharing experiences, in addition it was not easy to translate from catalan to french and from french to catalan in order to make questions 
							 I would like to do my scholarship  in Barcelona, but i think is not possible</p>
							
							
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/02.jpg"><img src="images/thumbs/02.jpg" alt="" /></a>
							<h2>Corporate information</h2>
							<p id='pcolor'>CaixaBank is the leading retail bank in Spain, with the largest customer base, a robust balance sheet and a culture drawing on deeply engrained values. Its business model is based on specialisation, with a value proposition tailored to each segment; a comprehensive offering of products and services; the largest branch network in the country; a multi-channel approach and reach; and a team of highly-trained specialists. CaixaBank’s priorities include: achieving exacting quality of service standards; a firm commitment to mobility and digitalisation; and a determination to be set apart by its proximity, robust financial position, capacity for innovation and social responsibility. </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/03.jpg" data-position="top center"><img src="images/thumbs/03.jpg" alt="" /></a>
							<h2>Introduction of the analyst/developer</h2>
							<p id='pcolor'>Jordi is from Girona, he is 40 and never been married, in his daily work Jordi has 
							meetings twice or more a day with his team and with his superiors.
							He works with PLI/3090 of IBM this is a complex system and DB2 as data base, Oracle and many others tools, the CAIXABANK has a several deparments whose develop separately apps and applications, for example they use HTML, CSS, XML, Flash. CMS: Vignette (NEO) / PIT and VPN as system security  </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/04.jpg"><img src="images/thumbs/04.jpg" alt="" /></a>
							<h2>Interview</h2>
							<p id='pcolor'>Jordi is from Girona, he is 40 and never been married, in his daily work Jordi has 
							meetings twice or more a day with his team and with his superiors.
							He works with PLI/3090 of IBM this is a complex system and DB2 as data base, Oracle and many others tools, the CAIXABANK has a several deparments whose develop separately apps and applications, for example they use HTML, CSS, XML, Flash. CMS: Vignette (NEO) / PIT and VPN as system security  </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/05.jpg" data-position="top center"><img src="images/thumbs/05.jpg" alt="" /></a>
							<h2>Plaça francesc macia barcelona</h2>
							<p> </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/06.jpg"><img src="images/thumbs/06.jpg" alt="" /></a>
							<h2>Camp nou mosaic</h2>
							<p> </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/07.jpg"><img src="images/thumbs/07.jpg" alt="" /></a>
							<h2>Las Ramblas</h2>
							<p> </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/08.jpg"><img src="images/thumbs/08.jpg" alt="" /></a>
							<h2>Plaça Espanya</h2>
							<p> </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/09.jpg"><img src="images/thumbs/09.jpg" alt="" /></a>
							<h2>Montjuic</h2>
							<p> </p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/10.jpg"><img src="images/thumbs/10.jpg" alt="" /></a>
							<h2>Port Olimpic</h2>
							<p>Vestibulum ante ipsum primis in faucibus orci luctus ac tincidunt dolor.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/11.jpg"><img src="images/thumbs/11.jpg" alt="" /></a>
							<h2>Pharetra ex non faucibus</h2>
							<p>Ut sed magna euismod leo laoreet congue. Fusce congue enim ultricies.</p>
						</article>
						<article>
							<a class="thumbnail" href="images/fulls/12.jpg"><img src="images/thumbs/12.jpg" alt="" /></a>
							<h2>Mattis lorem sodales</h2>
							<p>Feugiat auctor leo massa, nec vestibulum nisl erat faucibus, rutrum nulla.</p>
						</article>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a>.</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>