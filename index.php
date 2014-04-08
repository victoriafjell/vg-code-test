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
					<li><a href="#varnish">Varnish</a></li>
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
					<h2>Varnish</h2>
					
				</div>
				<div id="json" class="wrapper">
					<h2>Json-feed</h2>
				</div>
			</div>
		</section>
		<footer>
			<p>Victoria F. Engebretsen - VG test</p>
		</footer>
	</body>
</html>
