<?php
/////////////////////////
//--Head einbinden
/////////////////////////

function printHead(){

	print_r('
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			<meta name="viewport" content="width=device-width, initial-scale=1">

			<meta name="description" content="VitaMINT B ist der effizienteste Weg zum Traumberuf für MINT Studierende.">
			<meta name="keywords" content="Vitamin B, Karriere, Beruf, MINT"/>
			<meta name="author" content="VitaMINT B GmbH">
			<link rel="icon" href="http://www.vitamint-b.de/img/cd-icon.ico">

			<title>VitaMINT B</title>

		 <!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom styles for this website -->
			<link href="http://fonts.googleapis.com/css?family=Roboto:300,700,400" rel="stylesheet" type="text/css">
			<link href="css/reset_css.css" rel="stylesheet"  type="text/css">
			<link href="css/vitamint_b_css_base.css" rel="stylesheet"  type="text/css">
			<link href="css/vitamint_b_css_small.css" rel="stylesheet" type="text/css">
			<link href="css/vitamint_b_css_medium.css" rel="stylesheet" type="text/css" media="screen and (min-width : 768px)" >
			<link href="css/vitamint_b_css_large.css" rel="stylesheet" type="text/css" media="screen  and (min-width : 992px)" >
			<link href="css/vitamint_b_css_xlarge.css" rel="stylesheet" type="text/css" media="screen  and (min-width : 1245px)" >

			<script>
			(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,"script","//www.google-analytics.com/analytics.js","ga");

			ga("create", "UA-59354693-3", "auto");
			ga("send", "pageview");

		</script>

	</head>
			');
}

/////////////////////////
//--Header einbinden
/////////////////////////
function printHeader($pagename, $pagetype){

	//Image einbinden
	print_r('
  <header>

  <!--Navbar Large-->
  <nav class="navbar navbar-default large-menu">

    <div class="collapse navbar-collapse">
      <div class="row">

        <div class="col-md-7 col-xs-7">
          <ul class="nav navbar-nav pull-left">
            <li><a class="" href="index.php"><img class="logo" src="img/cd-logo.svg"></a></li>
						<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Für Studierende<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="menu-item"><a href="vorteile-studis.php">Vorteile</a></li>
                <li role="separator" class="divider2"></li>
                <li class="menu-item"><a href="funktion-studis.php">Ablauf</a></li>
								<!--<li role="separator" class="divider2"></li>
                <li class="menu-item"><a href="testimonials-vitamint.php">Testimonials</a></li>-->
								<li role="separator" class="divider2"></li>
                <li class="menu-item"><a href="testimonials.php">Erfahrungsberichte</a></li>
								<li role="separator" class="divider2"></li>
                <li class="menu-item"><a href="anmeldung-studis.php">Anmelden</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Für Unternehmen<span class="caret"></span></a>
              <ul class="dropdown-menu">
								<li class="menu-item"><a href="koop-unternehmen.php">Unser Angebot</a></li>
								<li role="separator" class="divider2"></li>
								<li class="menu-item"><a href="vorteile-unternehmen.php">Vorteile</a></li>
                <li role="separator" class="divider2"></li>
                <li class="menu-item"><a href="funktion-unternehmen.php">Ablauf</a></li>
								<li role="separator" class="divider2"></li>
                <li class="menu-item"><a href="anmeldung-unternehmen.php">Anfrage</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="col-md-5 col-xs-5 text-right">
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sonstiges<span class="caret"></span></a>
							<ul class="dropdown-menu pull-right">
								<li class="menu-item"><a href="team.php">Über uns</a></li>
								<li role="separator" class="divider2"></li>
								<li class="menu-item"><a href="faq-studis.php">FAQ</a></li>
								<li role="separator" class="divider2"></li>
								<li class="menu-item"><a href="Datenschutz.php">Datenschutz</a></li>
								<li role="separator" class="divider2"></li>
								<li class="menu-item "><a href="kontakt-impressum.php">Kontakt &amp; Impressum</a></li>

							</ul>
						</li>
						<li>
							<a class="" href="http://www.facebook.com/vitamint.b" target="_blank"><img class="social_link" src="img/buttons/dunkel/fb-button.svg"></a>
						</li>
						<li>
							<a class="" href="mailto:mail@vitamint-b.de?subject=Interesse%20an%20VitaMINT%20B"><img class="social_link" src="img/buttons/dunkel/mail-button.svg"></a>
						</li>
        </div>

      </div> <p>

      </p>
    </div>
  </nav>');

  if ($pagetype == 'main') {
    print_r('

    <!--Navbar Small-->
    <nav class="navbar small-menu">

      <div class="nav">
        <div  class="row">
          <div class="text-left active col-md-4 col-xs-4 element">
            <a href="#" class="menu-trigger">
              <img class="" src="img/buttons/dunkel/menu-button.svg" alt="Menü"/>
            </a>
          </div>
          <div class="text-center col-md-4 col-xs-4 element">
            <a href="index.php"><img class="logo" src="img/cd-logo.svg"></a>
          </div>
          <div class="text-right col-md-4 col-xs-4 element">
            <a class="" href="http://www.facebook.com/vitamint.b" target="_blank"><img src="img/buttons/dunkel/fb-button.svg">
            <a class="" href="mailto:mail@vitamint-b.de?subject=Interesse%20an%20VitaMINT%20B"><img src="img/buttons/dunkel/mail-button.svg"></a>
        </div>
      </div>
    </nav>

    ');
  }

  else {
    print_r('
    <!--Navbar Small-->
    <nav class="navbar small-menu">

      <div class="nav">
        <div  class="row">
          <div class="text-left active col-md-2 col-xs-2 element">
            <a href="#" class="menu-trigger">
              <img class="menu-button" src="img/buttons/dunkel/menu-button.svg" alt="Menu"/>
            </a>

          </div>
          <div class="text-center col-md-8 col-xs-8 element">
            <h2>'.$pagename.'</h2>
          </div>
          <div class="text-right col-md-2 col-xs-2 element">

            <a href="index.php"><img src="img/cd-logo.svg"></a>
          </div>
      </div>

      </div>
    </nav>
    ');
  }

  print_r('
  <!--Menü-->
  <div class="hide">
      <ul id="menu" class="list-unstyled">

        <li><a class="" href="index.php"><h2 class="white">Start</h2></a></li>

				<li><h2 class="">Für Studierende</h2></li>
          <li class="menu-item"><a class="" href="vorteile-studis.php">		Vorteile</a></li>
          <li class="menu-item"><a href="funktion-studis.php">Ablauf</a></li>
					<li class="menu-item"><a href="anmeldung-studis.php">Anmelden</a></li>
					<!--<li class="menu-item"><a href="testimonials-vitamint.php">Testimonials</a></li>
					<li class="menu-item"><a href="testimonials.php">Erfahrungsberichte</a></li>-->

        <li><h2 class="">Für Unternehmen</h2></li>
          <li class="menu-item"><a href="koop-unternehmen.php">Unser Angebot</a></li>
					<li class="menu-item"><a href="vorteile-unternehmen.php">Vorteile</a></li>
          <li class="menu-item"><a href="funktion-unternehmen.php">Ablauf</a></li>
					<li class="menu-item"><a href="anmeldung-unternehmen.php">Anfrage</a></li>

        <li><h2 class="">Sonstiges</h2></li>
					<li class="menu-item"><a href="team.php">Über uns</a></li>
					<li class="menu-item"><a href="faq-studis.php">FAQ</a></li>
          <li class="menu-item"><a href="Datenschutz.php">Datenschutz</a></li>
					<li class="menu-item"><a href="kontakt-impressum.php">Kontakt &amp; Impressum</a></li>
      </ul>
  </div>


  </header>

  ' );

}

/////////////////////////
//--Skripte einbinden einbinden
/////////////////////////

function loadScript(){


	print_r('
	<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>-->
			<script src="js/vitamint_b_js.js"></script>
			<script src="js/jquery.jPanelMenu.js"></script>
			');
}



/////////////////////////
//--Partner einbinden
/////////////////////////

function printPartner(){

	print_r('
	<img class="partner" src="img/partner/partner.png" alt=""/>
	<img class="partner2" src="img/partner/partner2.png" alt=""/>
			');
}

/////////////////////////
//--FAQ einbinden
/////////////////////////

function printFAQ($question, $answer){

	print_r('
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="col-md-1 col-xs-1 text-right bullet-point">
				<img src="img/bullet/bullet-point.svg" alt="" />
			</div>
			<div class="col-md-11 col-xs-11">
				<h2 class="text-dark">'.$question.'</h2>
				<p>'.$answer.'</p>
			</div>
		</div>
	</div>
			');
}

/////////////////////////
//--Get all Jobs and print them
/////////////////////////

//1. Load Jobs from SQL
function selectJobs(){
	global $db;
	global $database_name;
	global $database_table;
	$sql = "SELECT * FROM `$database_name`.`$database_table`";

	$query = $db->query($sql);
	$r = $query->fetchAll(PDO::FETCH_OBJ); //fetch(PDO::FETCH_BOTH);
	//return $r["job_title"];
	//print_r(count($r));

	$counter = 0;

	foreach ($r as $value){
		$job_picture = $value->job_picture;
		$job_title = $value->job_title;//"Praktikum Fahrwerk";
		$job_type = $value->job_type;
		$job_description = $value->job_description;
		$job_profile = $value->job_profile;
		$job_ref = $value->V_ID;
		$job_start = $value->job_start;
		$job_duration = $value->job_duration;

		$counter++;


		designJob($job_picture, $job_title, $job_type, $job_description, $job_profile, $job_ref, $job_start, $job_duration, $counter);
		if ($counter==3) {
			$counter=0;
		}
	}
}

/////////////////////////
//--Stellenanzeigen Formatierung
/////////////////////////

function designJob($job_picture, $job_title, $job_type, $job_description, $job_profile, $job_ref, $job_start, $job_duration, $counter){

	if ($counter == 1 || $counter%4==0) {
		print_r('
		<div class="row">
		');
	}
	print_r('
	<div class="col-xs-12  col-md-4">
		<div class="stellenanzeige-hintergrund '.$job_picture.'">
			<div class="stellenanzeige">

				<div class="stellenanzeige-content">
					<div class="row text-center job-title">
						<h3>'.$job_title.'</h3>
						<p class="text-blue">'.$job_type.'</p>
					</div>

					<div class="row">
						<h4 class="">Beschreibung</h4>
						<ul>');
						printList(explode(";", $job_description));
					print_r(
						'</ul>
					</div>
					<div class="row">
						<h4 class="">Voraussetzungen</h4>
						<ul>
						');
						printList(explode(";", $job_profile));
					print_r('
						</ul>
					</div>
					<div class="row text-center pill-row">
						<div class="">
							<div class="text-center"><span class="info-pill">Ref.: #'.$job_ref.'</span><span class="info-pill">'.$job_start.' – '.$job_duration.'</span>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</div>
			');
	if ($counter%3==0) {
		print_r('
		</div>
		');
	}
}

/////////////////////////
//--Array to <li>
/////////////////////////
function printList($array){

	foreach ($array as $value){
		print_r('
		<li><span class="text-white">'.$value.'</span></li>
		');
	}
}


?>
