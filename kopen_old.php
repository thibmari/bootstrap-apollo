<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="Ontdek vandaag nog nieuwe woningen te koop in regio Nieuwpoort of aan de kust in het aanbod van Immo Apollo. "/>
    <meta name="keywords"
          content="Immo Apollo kust woning huren nieuw nieuwpoort nieuwbouw residenties vastgoed panden regio "/>
    <title>Kopen | IMMO APOLLO</title>
    <link href="css/style.css?<?php $date = new DateTime();
    echo $date->getTimestamp(); ?>"
          rel="stylesheet" type="text/css"/>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
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
</head>
<body>
<div id="container">

    <div id="header">
        <div id="logo">
            <h1>IMMO APOLLO</h1>
            <h2>Vastgoed Makelaar Nieuwpoort</h2>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="over.php">OVER ONS</a></li>
                <li><a href="realisaties.php">NIEUWBOUW</a></li>
                <li class="current"><a href="kopen.php">TE KOOP</a></li>
                <li><a href="spanje.php">ZUID SPANJE</a></li>
                <li><a href="schatting.php">GRATIS SCHATTING</a></li>
                <li><a href="kantoor.php">KANTOOR</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <div id="leegbalk"></div>

    <div id="koptekst">
        <h2>Hier vindt u een overzicht van al onze projecten dat wij aanbieden!</h2>
    </div>

    <div id="content">
        <div id="content-left">

            <?php

            $rID = (isset($_GET['nieuwbouw'])) ? $_GET['nieuwbouw'] : null;

            $ddltype = -1;
            $ddlprijs = -1;
            if (!empty($_POST['Zoeken']) || !empty($_POST['order'])) {
                $ddltype = $_POST['Type'];
                $ddlprijs = $_POST['Prijscategorie'];
                $prijzen = explode(",", $ddlprijs);
                $prijs1 = $prijzen[0];
                if ($prijs1 != -1) {
                    $prijs2 = $prijzen[1];
                } else {
                    $prijs2 = 0;
                }
            }
            ?>

            <form method="post" action="" id="searchform">
                <ul>
                    <li>
                        <label for="Type">Type:</label>
                        <select name="Type" id="Type">
                            <option <?php if ($ddltype == -1) {
                                echo "selected='selected'";
                            } ?> value="-1">Selecteer een categorie
                            </option>
                            <option <?php if ($ddltype == 1) {
                                echo "selected='selected'";
                            } ?> value="1">Huis
                            </option>
                            <option <?php if ($ddltype == 2) {
                                echo "selected='selected'";
                            } ?> value="2">Appartement
                            </option>
                            <option <?php if ($ddltype == 3) {
                                echo "selected='selected'";
                            } ?> value="3">Villa
                            </option>
                            <option <?php if ($ddltype == 4) {
                                echo "selected='selected'";
                            } ?> value="4">Commercieel
                            </option>
                            <option <?php if ($ddltype == 5) {
                                echo "selected='selected'";
                            } ?> value="5">Garage
                            </option>
                            <option <?php if ($ddltype == 6) {
                                echo "selected='selected'";
                            } ?> value="6">Parkeerplaats
                            </option>
                            <option <?php if ($ddltype == 7) {
                                echo "selected='selected'";
                            } ?> value="7">Grond
                            </option>
                        </select>
                    </li>
                    <li>
                        <label for="Prijscategorie">Prijscategorie:</label>
                        <select name="Prijscategorie" id="Prijscategorie">
                            <option <?php if ($ddlprijs == -1) {
                                echo "selected='selected'";
                            } ?> value="-1">Selecteer een prijscategorie
                            </option>
                            <option <?php if ($ddlprijs == '0,125000') {
                                echo "selected='selected'";
                            } ?> value="0,125000">€ 0 - € 125.000
                            </option>
                            <option <?php if ($ddlprijs == '125000,250000') {
                                echo "selected='selected'";
                            } ?> value="125000,250000">€ 125.000 - € 250.000
                            </option>
                            <option <?php if ($ddlprijs == '250000,375000') {
                                echo "selected='selected'";
                            } ?> value="250000,375000">€ 250.000 - € 375.000
                            </option>
                            <option <?php if ($ddlprijs == '375000,500000') {
                                echo "selected='selected'";
                            } ?> value="375000,500000">€ 375.000 - € 500.000
                            </option>
                            <option <?php if ($ddlprijs == '500000,625000') {
                                echo "selected='selected'";
                            } ?> value="500000,625000">€ 500.000 - € 625.000
                            </option>
                            <option <?php if ($ddlprijs == '625000,750000') {
                                echo "selected='selected'";
                            } ?> value="625000,750000">€ 625.000 - € 750.000
                            </option>
                            <option <?php if ($ddlprijs == '750000,1000000') {
                                echo "selected='selected'";
                            } ?> value="750000,1000000">€ 750.000 - € 1.000.000
                            </option>
                            <option <?php if ($ddlprijs == '1000000,999999999') {
                                echo "selected='selected'";
                            } ?> value="1000000,999999999">€ 1.000.000 +
                            </option>
                        </select></li>
                    <li><input type="submit" name="Zoeken" id="ZoekenKopen" value="Zoeken"/></li>
                </ul>
            </form>
            <form method="post" action="" id="sortform">
                <ul>
                    <li>
                        <select name="Type" class="Type_sort">
                            <option <?php if ($_POST['order'] == -1) {
                                echo "selected='selected'";
                            } ?> value="-1">
                                Sorteren op relevantie
                            </option>
                            <option <?php if ($_POST['order'] == 1) {
                                echo "selected='selected'";
                            } ?> value="1">
                                Sorteren op prijs
                            </option>
                        </select>
                    </li>
                </ul>
            </form>

        </div><!-- Div content Left -->


        <div style="width: 100%; float:left;"></div>

        <?php


        $db = new mysqli("localhost", "immo_apollo_be", "Apollo0312", "immo_apollo_be");

        if (empty($_POST['Zoeken']) && empty($_POST['order']) && $rID == null) {
            $query = "SELECT * FROM woningen ORDER BY";
        } else if ($rID > 0) {
            $query = "SELECT * FROM woningen WHERE realisatie_id='$rID' ORDER BY";
        } else {
            if ($ddltype == -1 && $prijs1 == -1) {
                $query = "SELECT * FROM woningen ORDER BY";
            } else if ($ddltype == -1) {
                $query = "SELECT * FROM woningen WHERE prijs BETWEEN '$prijs1' AND '$prijs2' ORDER BY";
            } else if ($prijs1 == -1) {
                $query = "SELECT * FROM woningen WHERE type = '$ddltype' ORDER BY";
            } else {
                $query = "SELECT * FROM woningen WHERE type = '$ddltype' AND prijs BETWEEN '$prijs1' AND '$prijs2' ORDER BY";
            }
        }

        /* If we don't select a custom order we order by woning id */
        if (empty($_POST['order'])) {
            $query .= " woning_id DESC";
        } else {
            $query .= " prijs DESC";
        }

        $result = $db->query($query, MYSQLI_STORE_RESULT);

        if ($result->num_rows == 0) {
            echo "<p>Er zijn geen resultaten voor uw zoekcriteria.</p>";
            die();
        }

        while (list($woning_id, $realisatie_id, $code, $frontpage, $nieuw, $verkocht, $adres, $stad, $type, $staat, $prijs, $slaapkamers, $beschrijving) = $result->fetch_row()) {
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

            $randomnum = rand(1, 32000);
            echo "<div class='thumb2'>
                            <a href='
							
							";
            if ($verkocht != 1) {
                echo "woning_detail.php?id=$woning_id";
            }
            $directory = "images/woningen/Woning_$woning_id/";
            $files = scandir($directory);

            echo "'>
								 <div class='img_thumb'>	
							     <div style='background-image: url(images/woningen/Woning_$woning_id/001-mainpic.jpg?$randomnum); background-size: 290px 178px 
; height: 178px; width: 290px;'>
								 
								  ";
            if ($verkocht == 1) {
                echo "<img id='flag' src='images/verkocht.png' />";
            }

            else if ($nieuw == 1) {
                echo "<img id='flag' src='images/nieuw.png' />";
            }

            echo "
								</div>
								</div>
                            </a>
                            <p>
							";
            if ($type != 5 && $type != 6 && $type != 7) {
                echo
                    "<div class='bedrooms'>" .
                    $slaapkamers . " " . $slaap .
                    "</div>";
            }


            echo "
							
														</p>							
                            <div id='naarboven'>
								<div id='spanleft'><p>$mytype</p></div>
								<div id='spanright'><p>Prijs: <span class='red'>$deprijs</span></p></div>
							</div>
							
               </div>";
        }

        ?>

    </div>
</div>
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
                in Nieuwpoort.
            </p>
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
            </div>
            <div id="footerbottom_right">
                <p>Copyright © 2016 Immo Apollo</p>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="scripts/custom.js"></script>
</body>
</html>
