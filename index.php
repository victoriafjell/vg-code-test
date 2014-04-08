<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="author" content="Victoria F. Engebretsen - victoriafjell.com">
		<title></title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="js/custom.js"></script>
		
	</head>
	<body>
		<header>
			<h1>VG Standard Code Test</h1>
		</header>
		<section>
			<div id="tabs">
				<ul>
					<li><a href="#rss">RSS-feed VG</a></li>
					<li><a href="#varnish">VGTV</a></li>
					<li><a href="#json">Json-feed</a></li>
				</ul>
				<div id="rss" class="wrapper">
					<h2>Siste nytt fra vg.no</h2>
				     <?php
				     include('rss.php');
				   	 $feedlist = new rss('http://www.vg.no/rss/nyfront.php?frontId=1');
				     echo $feedlist->display(9);
				     ?> 
				</div>
				<div id="varnish" class="wrapper">
					<h2>VGTV</h2>
					<div class="one-two">
						<h3>5 mest besøkte video</h3>
						<ol>
							<li><h4>Slik reagerer læreren når graviditetstesten leses opp på høyttaler</h4>
								<iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79752" frameborder="0" allowfullscreen="true"></iframe></li>
							<li><h4>Her brekker HamKam-spilleren beinet</h4>
								<iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79763" frameborder="0" allowfullscreen="true"></iframe></li>
								<li><h4>LEVEL UP #71: Goat Simulatior, Trials Frontier, TG-konkurranse</h4>
									<iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79775" frameborder="0" allowfullscreen="true"></iframe></li>
									<li><h4>Gunhild Hjelper Deg episode 5: Odd Nordstoga</h4><iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=78950" frameborder="0" allowfullscreen="true"></iframe></li>
									<li><h4>Kone skal ha drept og kokt sin egen mann</h4><iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79841" frameborder="0" allowfullscreen="true"></iframe></li>
						</ol>
					</div>
					<div class="one-two">
						<h3>5 mest lastet ned video</h3>
						<ol>
							<li><h4>LEVEL UP #71: Goat Simulatior, Trials Frontier, TG-konkurranse</h4>
								<iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79775" frameborder="0" allowfullscreen="true"></iframe></li>
							<li><h4>Kone skal ha drept og kokt sin egen mann</h4><iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79841" frameborder="0" allowfullscreen="true"></iframe></li>
							
								<li><h4>Gunhild Hjelper Deg episode 5: Odd Nordstoga</h4><iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=78950" frameborder="0" allowfullscreen="true"></iframe></li>
									<li><h4>Slik reagerer læreren når graviditetstesten leses opp på høyttaler</h4>
								<iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79752" frameborder="0" allowfullscreen="true"></iframe></li>
									<li><h4>Her brekker HamKam-spilleren beinet</h4>
										<iframe width="100%" height="auto" src="http://www.vgtv.no/embed/?id=79763" frameborder="0" allowfullscreen="true"></iframe></li>
						</ol>
					</div>
				</div>
				<div id="json" class="wrapper">
					<h2>Json-feed</h2>
					<div class="feeds">
						<div class="feed">
							<h3><a href="http://www.vg.no/nyheter/innenriks/artikkel.php?artid=10072539">Støre dropper omstridt bokprosjekt</a></h3>
							<p>Utenriksminister Jonas Gahr Støre stanser bokprosjektet der han skulle være en hovedperson. UD skulle betalt 1 million kroner for utgivelsen.</p>
							<p class="date">29 Mars 2012</p>
							<p class="category">Innenriks</p>
						</div>
						<div class="feed">
							<h3><a href="http://www.vg.no/nyheter/innenriks/artikkel.php?artid=10072542">Rune Øygard er tiltalt</a></h3>
							<p>Vågå-ordførerens forsvarer sier han var forberedt på tiltalen og håper å rensvaske se</p>
							<p class="date">29 Mars 2012</p>
							<p class="category">Innenriks</p>
						</div>
						<div class="feed">
							<h3><a href="http://www.vg.no/bil-og-motor/artikkel.php?artid=10072525">Volvo tilbakekaller 115.000 nye biler</a></h3>
							<p>Volvo må tilbakekalle 115.000 nye biler fordi kollisjonsputene risikerer å ikke l\u00f8se seg ut.</p>
							<p class="date">13 Februar 2012</p>
							<p class="category">Innenriks</p>
						</div>
						<div class="feed">
							<h3><a href="http://www.vg.no/sport/fotball/artikkel.php?artid=10072531">Her blir fotballeksperten refset av mor på direkten</a></h3>
							<p>Rosenborg-speider Stig Torbjørnsen (46) fikk klar beskjed fra mor om å ta på seg brillene etter sine uttalelser om Alexis Sanchez' svalestup.</p>
							<p class="date">18 Januar 2012</p>
							<p class="category">Sport</p>
						</div>
						<div class="feed">
							<h3><a href="http://minmote.no/index.php/2012/03/sjekk-dorthe-skappels-stilforvandling-gjennom-tidene/">Sjekk Dorthe Skappels enorme stilforvandling</a></h3>
							<p class="date">7 Mars 2011</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<p>Victoria F. Engebretsen - VG test</p>
		</footer>
	</body>
</html>
