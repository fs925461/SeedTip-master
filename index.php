<?php
        error_reporting(E_ALL);
        ini_set('display_errors',true);
        // require_once ('./php/config.php');
        // require_once ('./php/functions.php');
?>


<!DOCTYPE html>
<html>
  <head>
	<title>Find Local Farmers Markets</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.seedtip.com/images/alpaca.jpg" />
	<meta property="og:title" content="Discover the closest Farmers Markets in your area!" />
	<meta property="og:site_title" content="Find Local Farmers Markets" />
	<meta property="og:description" content="Support your local farmers and small business owners. Visit a farmers market."/>
	<meta property="og:url" content="http://www.seedtip.com"/>

	<!--[if lt IE 9]>
		<script src="/js/html5shiv.min.js"></script>
	<![endif]-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script language="javascript" type="text/javascript" src="js/map.js" ></script>
	<script language="javascript" type="text/javascript" src="js/search.js"></script>
  </head>
  <body>

	<div id="control">
		<h2>Find interesting Companies</h2>
		<p>We'll help you locate companies that may suit your interests</p>
    <p>Die "vertauschten" Positionen sind bereits bei den Daten falsch!</p>
		<button id="button">Firmen anzeigen</button>
    <div class="test123">

    </div>

    <!-- <form method="get" id="chooseZip">

      <button type="submit" class="learnButton">Use current location</button>
			<button type="button" id="searchZip" class="learnButton">Search by Zip Code</button>
			<div class="clear"></div>
			<div class="zipSearch">
				<input id="textZip" type="text" name="zip" placeholder="enter your zip code" autofocus>
				<button type="submit" class="learnButton">Search</button>
			</div>
			<div class="clear"></div>
		</form> -->



		<div class="clear"></div>
		<div id="results"></div>

	</div>

	<!-- an empty div for the map -->
	<div id="map-canvas"></div>


  </body>
</html>
