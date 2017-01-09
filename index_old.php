<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="Ontdek vandaag nog nieuwe woningen te koop in regio Nieuwpoort of aan de kust in het aanbod van Immo Apollo. "/>
    <meta name="keywords"
          content="Immo Apollo kust woning huren nieuw nieuwpoort nieuwbouw residenties vastgoed panden regio "/>
    <title>Vastgoed Nieuwpoort | IMMO APOLLO</title>
    <link href="css/style.css?<?php $date = new DateTime(); echo $date->getTimestamp();?>"
          rel="stylesheet" type="text/css"/>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-git.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.cycle.all.js"></script>

    <script type="text/javascript">
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });

        $(function () {
            $('#slideshow')
                .cycle({
                    fx: 'scrollHorz',
                    delay: -500,
                    timeout: 4000,
                    next: '#go_right',
                    prev: '#go_left'
                });
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-19130992-3']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

</head>
<body>
<div id="container">

    <?php include 'partials/header.php'; ?>

    <div id="leegbalk"></div>
    <div id="introImage">
        <img src="images/logo.png" alt="grafisch element immo apollo"/>
    </div><!-- Einde IntroImage -->
    <div id="introText">
        <h1>Uw vastgoedspecialist</h1>
        <h2>in appartementen, nieuwbouw en huizen.</h2>
        <p>Immo Apollo is al vele jaren een van de grootste vastgoedspecialisten te Nieuwpoort. Wij zijn voornamelijk
            gespecialiseerd in nieuwbouw projecten, je kan ook beleggen op nieuwbouwresidenties.</p>
    </div><!-- Einde Introtext -->

    <div id="content">
        <hr/>
        <h3>Aanbiedingen in de kijker</h3>
        <div id="slideshow">
            <?php

            $db = new mysqli("localhost", "immo_apollo_be", "Apollo0312", "immo_apollo_be");

            $query = "SELECT * FROM woningen WHERE frontpage = '1'";

            $result = $db->query($query, MYSQLI_STORE_RESULT);

            if ($result->num_rows == 0) {
                echo "<p>Er zijn geen resultaten voor uw zoekcriteria.</p>";
            }

            $counter = 0;
            $values = array();
            $values2 = array();

            for ($i = 1; $i <= 250; $i += 3) {
                array_push($values, $i);
            }

            for ($p = 3; $p <= 252; $p += 3) {
                array_push($values2, $p);
            }

            while (list($woning_id, $realisatie_id, $code, $frontpage, $nieuw, $verkocht, $adres, $stad, $type, $staat, $prijs, $slaapkamers, $beschrijving) = $result->fetch_row()) {
                $counter++;

                $deprijs = ' &euro; ' . number_format($prijs, 0, ',', ' ');

                switch ($type) {
                    case 1;
                        $mytype = 'Huis';
                        break;
                    case 2;
                        $mytype = 'Appartement';
                        break;
                    case 3;
                        $mytype = 'Villa';
                        break;
                    case 4;
                        $mytype = 'Commercieel';
                        break;
                    case 5:
                        $mytype = 'Garage';
                        break;
                    case 6:
                        $mytype = 'Parkeerplaats';
                        break;
                    case 7:
                        $mytype = 'Grond';
                        break;
                }

                if ($slaapkamers == 1) {
                    $slaap = 'slaapkamer';
                } else {
                    $slaap = 'slaapkamers';
                }

                $directory = "images/woningen/Woning_$woning_id/";
                $files = scandir($directory);
                $randomnum = rand(1, 32000);

                if (in_array($counter, $values)) {
                    echo "
			<div class='slide'>
			<div class='thumb2'>
					<a href='woning_detail.php?id=$woning_id'>
						<img class='img_thumb3' src='images/woningen/Woning_$woning_id/001-mainpic.jpg?$randomnum'/>
					</a>
					<p>$slaapkamers $slaap</p>							
					<div id='naarboven'>
						<div id='spanleft'><p>$mytype</p></div>
						<div id='spanright'><p>Prijs: <span class='red'>$deprijs</span></p></div>
					</div>
               </div>			  
			   ";
                } else if (in_array($counter, $values2)) {
                    echo "
			<div class='thumb2'>
					<a href='woning_detail.php?id=$woning_id'>
						<img class='img_thumb3' src='images/woningen/Woning_$woning_id/001-mainpic.jpg?$randomnum'/>
					</a>
					<p>$slaapkamers $slaap</p>							
					<div id='naarboven'>
						<div id='spanleft'><p>$mytype</p></div>
						<div id='spanright'><p>Prijs: <span class='red'>$deprijs</span></p></div>
					</div>
               </div>
			   </div>
			   ";
                } else {
                    echo "
		<div class='thumb2'>
				<a href='woning_detail.php?id=$woning_id'>
					<img class='img_thumb3' src='images/woningen/Woning_$woning_id/001-mainpic.jpg?$randomnum'/>
				</a>
				<p>$slaapkamers $slaap</p>							
				<div id='naarboven'>
					<div id='spanleft'><p>$mytype</p></div>
					<div id='spanright'><p>Prijs: <span class='red'>$deprijs</span></p></div>
				</div>
         </div>
		 ";
                }
            }
            ?>

        </div><!-- Einde Slideshow -->
        <div id="arrow_left"><a id="go_left" href="#"></a></div>
        <div id="arrow_right"><a id="go_right" href="#"></a></div>
    </div> <!-- Einde Content -->
</div><!-- Einde Container -->

<div id="footer">
    <div id="footerbinnen">
        <div id="kolom_1">
            <h2>Immo Apollo</h2>
            <hr/>
            <p>Immo Apollo is het immokantoor dat gegroeid is in de schoot van groep AP.
                Groep AP is een kleine bouwpromotor uit Veurne, die al jarenlang grootse projecten realiseert.
                Wij verkopen voornamelijk de projecten die wij zelf bouwen, maar staan ook graag in voor de herverkoop
                van appartementen en huizen in Nieuwpoort en omgeving.
                Als dochter van Groep AP zijn wij Uw bevoorrechte partner voor de aankoop van een nieuwbouwappartement
                in Nieuwpoort.</p>
        </div>
        <div id="kolom_2">
            <h2>Sitemap</h2>
            <hr/>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="over.php">Over ons</a></li>
                <li><a href="realisaties.php">Nieuwbouw</a></li>
                <li><a href="kopen.php">Te koop</a></li>
                <li><a href="schatting.php">Gratis schatting</a></li>
                <li><a href="kantoor.php">Kantoor</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div id="kolom_3">
            <h2>Contacteer Ons</h2>
            <hr/>
            <ul>
                <li>IMMO APOLLO</li>
                <li>Albert I Laan 153/c</li>
                <li>8620 Nieuwpoort</li>
            </ul>
            <ul>
                <li>Tel: 058 24 14 14</li>
                <li>Email: info@immo-apollo.be</li>
            </ul>
            <ul>
                <li>BIV nr: 201807</li>
                <li>Ondernemingsnummer: BE 0473.821.145</li>
            </ul>
        </div>
        <div id="footerbottom">
            <hr/>
            <div id="footerbottom_left">
                <p>Site by <a href="mailto:thibaultmarin@hotmail.com">Thibault Marin</a></p>
            </div><!-- Footerbottom_left -->
            <div id="footerbottom_right">
                <p>Copyright © 2016 Immo Apollo</p>
            </div><!-- Footerbottom_right -->
        </div><!-- Footerbottom -->
    </div> <!-- Einde Footerbinnen -->
</div><!-- Einde Footer -->
</body>
</html>
