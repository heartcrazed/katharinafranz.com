<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      
	<?php function alter($d,$m,$y) {
    	$birth = mktime(0,0,0,$m,$d,$y);
    	$yet = time();
    	$jahre = (int) date('Y', $yet) - (int) date('Y', $birth);
        if ((int) date('md', $birth) > (int) date('md', $yet)) {
        $jahre--;
    	}

        $monate = (int) date('m', $yet) - (int) date('m', $birth);
    	$tage = (int) date('d', $yet) - (int) date('d', $birth);
   		if ($tage<0) {
    	    $monate--;
        	$tage=$tage*(-1);
   		}
        if ($monate<0) {
        $monate=$monate+12;
		}
		print($jahre." Jahre und ".$monate." Monat(e)");
	} ?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>katharinafranz.com</title>
	<link rel="stylesheet" type="text/css" media="screen, projection" href="css/style.css" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	
	<div id="inhalt">
		<h1><a href="./">katharinafranz.com</a></h1>
		<h2 class="rechts"><a href="http://kattitu.de">*Blog</a></h2>
		<h2 class="links"><a href="http://500px.com/heartcrazed">*Fotos</a></h2>
		<h2 class="rechts"><a href="http://heartcrazed.tumblr.com">*Tumblr</a></h2>

		<br style="clear:both;" />

		<table border="0">
			<tr>
				<td class="links"><p><span class="zeile">Name</span></p></td>
				<td class="rechts"><p><span class="zeile">Katharina Franz</span></p></td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">Alter</span></p></td>
				<td class="rechts"><p><span class="zeile"><?php alter(01,11,1989) ?></span></p></td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">Adresse</span></p></td>
				<td class="rechts">
					<p><a href="http://bit.ly/lxtoKz" title="Link zu Google Maps"><span class="zeile">Unterwittbacher Str. 21</span><br /><span class="zeile">97892 Kreuzwertheim</span></a></p>
					<p>&nbsp;</p></td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">Interessen</span></p></td>
				<td class="rechts">
					<p><span class="zeile">Webdesign</span>
					<span class="zeile">Fotografie</span>
					<span class="zeile">Typografie</span></p>
				</td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">F&auml;higkeiten</span></p></td>
				<td class="rechts">
					<p><span class="zeile">(X)<acronym title="Hypertext Markup Language">HTML</acronym></span>
					<span class="zeile"><acronym title="Cascading Style Sheet">CSS</acronym></span>
					<span class="zeile">Wordpress</span>
					<span class="zeile">Adobe Photoshop</span>
					<span class="zeile">Adobe InDesign</span>
					<span class="zeile">Adobe Illustrator</span></p>
				</td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">Projekte</span></p></td>
				<td class="rechts">
					<p><span class="zeile"><del><a href="http://maedchendinge.de">mædchendinge.de</a> (02/2011)</del></span></p>
					<p><span class="zeile"><a href="http://typofails.tumblr.com">typofails.tumblr.com</a> (04/2011)</span></p>
				</td>
			</tr>
			<tr>
				<td class="links">
					<p><span class="zeile">Ausbildung</span></p>
					<p><span class="zeile">(2009&mdash;2012)</span></p></td>
				<td class="rechts">
					<p><a href="http://dhbw-mosbach.de/on"><span class="zeile">Duale Hochschule Baden-W&uuml;rttemberg Mosbach</span><br />
					<span class="zeile">Studiengang Onlinemedien</span></a></p>
					<p><span class="zeile">Angestrebter Abschluss: Bachelor of Arts</span></p>
					<p>&nbsp;</p>
				</td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">Social Media</span></p></td>
				<td class="rechts">
					<p><span class="zeile"><a href="https://www.facebook.com/heartcrazed"><strong style="color:#3B5998;">facebook.com</strong></a></span> <span class="zeile"><a href="http://www.twitter.com/heartcrazed"><strong style="color:#2299CC;">twitter.com</strong></a></span> <span class="zeile"><a href="http://www.lastfm.de/user/heartcrazed"><strong style="color:#DD1303;">last.fm</strong></a></span> <span class="zeile"><a href="http://heartcrazed.tumblr.com"><strong style="color:#3C5873;">tumblr.com</strong></a></span> <span class="zeile"><a href="http://dribbble.com/heartcrazed"><strong style="color:#C5376D;">dribbble.com</strong></a></span> <span class="zeile"><a href="http://500px.com/heartcrazed"><strong style="color:black;">500px.com</strong></a></span> <span class="zeile"><a href="http://vimeo.com/heartcrazed"><strong style="color:#0DADD6;">vimeo.com</strong></a></span> <span class="zeile"><a href="http://www.youtube.com/user/heartcrzd"><strong style="color:#FF2312;">youtube.com</strong></a></span> <span class="zeile"><a href="http://zootool.com/user/heartcrazed"><strong style="color:#49361F;">zootool.com</strong></a></span></p>
				</td>
			</tr>
			<tr>
				<td class="links"><p><span class="zeile">Kontakt</span></p></td>
				<td class="rechts">
					<p><span class="zeile"><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#105;&#108;&#64;&#107;&#97;&#116;&#104;&#97;&#114;&#105;&#110;&#97;&#102;&#114;&#97;&#110;&#122;&#46;&#99;&#111;&#109;" rel="nofollow">&#109;&#97;&#105;&#108;&#64;&#107;&#97;&#116;&#104;&#97;&#114;&#105;&#110;&#97;&#102;&#114;&#97;&#110;&#122;&#46;&#99;&#111;&#109;</a></span></p>
					<p><span class="zeile">(Tel. auf Anfrage)</span></p>
				</td>
			</tr>
		</table>
		
		<p id="footer"><a href="http://www.kattitu.de/impressum/">Impressum</a></p>
	</div>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11098363-7']);
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
