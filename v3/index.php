<!DOCTYPE html>
<html lang="de-DE" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title>Katharina Franz, a designer & developer. — www.katharinafranz.com</title>
		<meta name="description" content="Katharina Franz &middot; www.katharinafranz.com is just my business card in this world wide web." />
		<meta name="google-site-verification" content="_iwf-b9mPxgWqbRBiUdR-aeP3R9zOM4F4g7Vs-swWA4" />
		<meta name="p:domain_verify" content="ec20cafafa7314fbee6600e9745e2eeb" />
		<meta name="author" content="Katharina Franz" />

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container" class="container intro-effect-push">
			<!-- Top Navigation -->
			<header class="header">
				<div class="bg-img"><img src="img/background.jpg" alt="Background Image" /></div>
				<div class="title">
					<nav class="links">
						<a href="http://blog.katharinafranz.com" target="_blank">Blog</a>
						<a href="https://www.facebook.com/heartcrazed" target="_blank">Facebook</a>
						<a href="https://twitter.com/heartcrazed" target="_blank">Twitter</a>
						<a href="https://plus.google.com/+KatharinaFranz/posts" target="_blank">Google+</a>
						<a href="http://500px.com/heartcrazed" target="_blank">500px</a>
						<a href="http://dribbble.com/heartcrazed" target="_blank">Dribbble</a>
						<a href="http://www.lastfm.de/user/heartcrazed" target="_blank">Last.fm</a>
					</nav>
					<h1>Katharina Franz</h1>
				</div>
			</header>
			<button class="trigger" data-info="scroll down or click here"><span>nach unten</span></button>
			<div class="title">
				<img id="portrait" src="img/katharina.jpg" alt="Portrait of Katharina Franz" />
				<h1>Katharina Franz</h1>
				<p class="subline">designer <span id="this-is-only-temporary" style="font-family: 'Bell MT'; font-style: italic; color: #cf704a;">&amp;</span> developer.</p>
			</div>
			<article class="content">
				<div>
					<p><strong>Hi there!</strong> Right now I’m <?php function alter($datum){ $geburtstag = new DateTime($datum); $heute = new DateTime(date('Y-m-d')); $differenz = $geburtstag->diff($heute); return $differenz->format('%y');} print(alter('1989-11-01')); ?> years old, living in Egelsbach, Germany. I’ve gained a bachelor’s degree in Online Media at <a href="http://www.dhbw-msobach.de/on" target="_blank">DHBW Mosbach</a> and do now work as a web developer in Frankfurt am Main.</p>
					
					<p>I love to create and build websites which make the user feel happy and invites him or her to share it with it’s friends and/or collegues.</p>
					<p>For me, creating a whole web experience does not only mean pushing around pixels in Photoshop (although I love to do that!), but also making a concept first, be careful about the usability and – of course – developing the frontend of a site, which means coding HTML 5, CSS 3, some JQuery (at least I try), and working with a content management system like TYPO3, Wordpress, Ghost or others. Those are all parts of my every-day work.</p>
					<p>Despite that’s not my focus, I’m interested in the scripting or backend area with components like JavaScript, PHP, MySQL etc., because I am always willing to learn new things and improve my web design skills with everything that touches the topic.</p>
				</div>
			</article>

			<footer class="footer">
				<p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#105;&#108;&#64;&#107;&#97;&#116;&#104;&#97;&#114;&#105;&#110;&#97;&#102;&#114;&#97;&#110;&#122;&#46;&#99;&#111;&#109;" rel="nofollow">&#109;&#97;&#105;&#108; &#64; &#107;&#97;&#116;&#104;&#97;&#114;&#105;&#110;&#97;&#102;&#114;&#97;&#110;&#122;&#46;&#99;&#111;&#109;</a><br />
				<a href="http://blog.katharinafranz.com/impressum" target="_blank">German Imprint</a></p>

			</footer>

		</div><!-- /container -->
		
		<script src="js/classie.js"></script>
		<script src="js/script.js"></script>

		<!-- GOOGLE ANALYTICS -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-11098363-7']);
		  _gaq.push(['_setDomainName', 'katharinafranz.com']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<!-- END ANALYTICS -->
		
	</body>
</html>