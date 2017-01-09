<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="Ontdek vandaag nog nieuwe woningen te koop in regio Nieuwpoort of aan de kust in het aanbod van Immo Apollo. " />
    <meta name="keywords" content="Immo Apollo kust woning huren nieuw nieuwpoort nieuwbouw residenties vastgoed panden regio " />

    <script type="text/javascript">
        var afb = [];
    </script>

    <?php
    $id = $_GET['id'];

    $con = mysql_connect("localhost", "immo_apollo_be", "Apollo0312");

    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("immo_apollo_be", $con);

    $result = mysql_query("SELECT * FROM woningen WHERE woning_id='$id' ");

    while($row = mysql_fetch_array($result))
    {
        $code = $row['code'];
        $frontpage = $row['frontpage'];
        $nieuw = $row['nieuw'];
        $verkocht = $row['verkocht'];
        $adres = $row['adres'];
        $stad = $row['stad'];
        $type = $row['type'];
        $staat = $row['staat'];
        $prijs = $row['prijs'];
        $slaapkamers = $row['slaapkamers'];

        $slaaphoek = $row['slaaphoek'];
        $bemeubeld = $row['bemeubeld'];
        $omgeving = $row['omgeving'];
        $verdieping = $row['verdieping'];
        $overstroming = $row['overstroming'];
        $voorkooprecht = $row['voorkooprecht'];
        $bouwjaar = $row['bouwjaar'];
        $lasten = $row['lasten'];
        $oppervlakte1 = $row['oppervlakte1'];
        $oppervlakte2 = $row['oppervlakte2'];
        $KI = $row['KI'];
        $SBK = $row['SBK'];
        $EPCW = $row['EPCW'];
        $EPCR = $row['EPCR'];

        $terrasN = $row['terrasN'];
        $terras = $row['terras'];
        $livingN = $row['livingN'];
        $living = $row['living'];
        $inkomN = $row['inkomN'];
        $inkom = $row['inkom'];
        $hoekN = $row['hoekN'];
        $hoek = $row['hoek'];
        $slaapN = $row['slaapN'];
        $slaap = $row['slaap'];
        $badkamerN = $row['badkamerN'];
        $badkamer = $row['badkamer'];
        $keukenN = $row['keukenN'];
        $keuken = $row['keuken'];
        $bergingN = $row['bergingN'];
        $berging = $row['berging'];
        $garageN = $row['garageN'];
        $garage = $row['garage'];
        $parkeerplaatsN = $row['parkeerplaatsN'];
        $parkeerplaats = $row['parkeerplaats'];
        $tuinN = $row['tuinN'];
        $tuin = $row['tuin'];

        $extra1N = $row['extra1N'];
        $extra1 = $row['extra1'];
        $extra2N = $row['extra2N'];
        $extra2 = $row['extra2'];
        $extra3N = $row['extra3N'];
        $extra3 = $row['extra3'];
        $extra4N = $row['extra4N'];
        $extra4 = $row['extra4'];
        $extra5N = $row['extra5N'];
        $extra5 = $row['extra5'];
        $extra6N = $row['extra6N'];
        $extra6 = $row['extra6'];

        $beschrijving = $row['beschrijving'];
    }

    switch($type)
    {
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
        case 8:
            $mytype = 'Studio';
            break;
        case 9:
            $mytype = 'Studio met slaaphoek';
            break;
    }

    switch($omgeving)
    {
        case 1;
            $omgeving1 = 'NIET';
            break;
        case 2;
            $omgeving1 = 'Centrum';
            break;
        case 3;
            $omgeving1 = 'Zeedijk';
            break;
        case 4;
            $omgeving1 = 'Haven';
            break;
        case 5:
            $omgeving1 = 'Park';
            break;
        case 6:
            $omgeving1 = 'Rustig';
            break;
        case 7:
            $omgeving1 = 'Landelijk';
            break;
        case 8:
            $omgeving1 = 'Duinen';
            break;
        case 9:
            $omgeving1 = 'Villawijk';
            break;
    }

    switch($staat)
    {
        case 1;
            $mystaat = 'Nieuwbouw';
            break;
        case 2;
            $mystaat = 'Herverkoop';
            break;
        case 3;
            $mystaat = 'Gerenoveerd';
            break;
        case 4;
            $mystaat = 'Op te knappen';
            break;
        case 5;
            $mystaat = 'Instapklaar';
            break;
        case 6;
            $mystaat = 'Als nieuw';
            break;
        case 7;
            $mystaat = 'Perfect onderhouden';
            break;
        case 8;
            $mystaat = 'Tip Top in orde';
            break;
    }

    $steden = explode(" ",$stad);
    $postcode = $steden[0];
    $stad1 = $steden[1];

    $deprijs =' &euro; ' . number_format($prijs, 0, ',', ' ');


    //for getting images and putting them in javascript array / afb[]

    $directory =  "images/woningen/Woning_$id/";
    $files = scandir($directory);
    natcasesort($files);
    foreach($files as $fil)
    {
        if($fil != "." && $fil != "..")
        {
            echo "
					<script>						
						afb.push('$fil');						   
					</script>				
					";
        }
    }
    ?>

    <title><?php echo $mytype . ' te koop in ' . $stad .' | ' . $slaapkamers .' slaapkamers  '  ;  ?> | IMMO APOLLO</title>

    <link href="css/style.css?<?php $date = new DateTime(); echo $date->getTimestamp();?>"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href="css/print.css" rel="stylesheet" type="text/css" media="print"/>
    <link rel="icon" href="images/favicon.ico" rel="shortcut icon"  type="image/x-icon" />

    <script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="scripts/slimbox2.js"></script>
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAxDvJmPF_djeOc1j7IAE-mgvHgr18JxTc&sensor=false">
    </script>
    <script type="text/javascript">
        //google maps kaartje
        //------------------------------------------------------------------------------------------------------------------
        var geocoder;
        var map;
        var centertje;

        function initialize() {

            geocoder = new google.maps.Geocoder();
            var address = '<?php echo $stad ;?>, <?php echo $adres ; ?>';
            var image = 'images/icon.png';

            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    centertje = results[0].geometry.location;

                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        icon: image
                    });
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });

            var myOptions =
                {
                    zoom: 15,
                    center: centertje,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        }

        //basic jquery slideshow function
        //------------------------------------------------------------------------------------------------------------------
        $(function() {
            $('#slideshow')
                .cycle({
                    fx:     'scrollHorz',
                    delay:  -500,
                    timeout: 0,
                    next:   '#go_right',
                    prev:   '#go_left'
                });


        });

        //Google Analytics
        //------------------------------------------------------------------------------------------------------------------
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-19130992-3']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body onload="initialize()">

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
        <h2><?php echo $mytype . ' te koop in ' . $stad .' | ' . $slaapkamers .' slaapkamers | '  . $code  ;  ?></h2>
    </div>

    <div id="content">
        <div id="content_left">

            <h2>Adres</h2>
            <p><span class="black">Adres:</span><?php echo" ". $adres;?> </p>
            <p><span class="black">Stad:</span><?php echo" ". $stad;?> </p>
            <hr />
            <h2>Financieel</h2>
            <p><span class="black">Prijs:</span><span class="red"><?php echo $deprijs; ?></span></p>
            <hr />
            <h2>Specificaties</h2>
            <p><span class="black">Type:</span><?php echo" ". $mytype;?>  </p>
            <p><span class="black">Staat:</span><?php echo" ". $mystaat;?>  </p>
            <?php 	if ($type != 5 && $type != 6 && $type != 7) {echo "<p><span class='black'>Slaapkamers: </span> $slaapkamers </p>";}    ?>
            <p><span class="black">Woning Code:</span><?php echo" ". $code . " ";?></p>
            <hr/>
            <h2>Aanvullende informatie</h2>
            <?php
            if($slaaphoek != 0){echo "<p><span class='black'>Slaaphoek(en): </span> $slaaphoek </p>";}
            if ($bemeubeld == 1){echo "<p>Woning is bemeubeld.</p>";}
            if ($omgeving >= 2){echo "<p><span class='black'>Omgeving: </span> $omgeving1 </p>";}
            if ($verdieping != 0){echo "<p><span class='black'>Verdieping: </span> $verdieping </p>";}
            if ($overstroming == 1 ){echo "<p>Deze woning ligt in een gebied waar er mogelijk overstromingsgevaar is.</p>";}
            if ($voorkooprecht == 1 ){echo "<p>Deze woning heeft voorkooprecht.</p>";}
            if ($bouwjaar != 0) {echo "<p><span class='black'>Bouwjaar: </span> $bouwjaar </p>";}
            if ($lasten != 0) {echo "<p><span class='black'>Maandelijkse lasten: </span> $lasten €</p>";}
            if ($oppervlakte1 != 0) {echo "<p><span class='black'>Oppervlakte grond: </span> $oppervlakte1 m² </p>";}
            if ($oppervlakte2 != 0) {echo "<p><span class='black'>Oppervlakte bewoonbaar: </span> $oppervlakte2 m² </p>";}
            if ($KI != "") {echo "<p><span class='black'>KI: </span> $KI </p>";}
            if ($SBK != "") {echo "<p><span class='black'>SBK: </span> $SBK </p>";}
            if ($EPCW != "") {echo "<p><span class='black'>EPC Waarde: </span> $EPCW </p>";}
            if ($EPCR != "") {echo "<p><span class='black'>EPC Referentie: </span> $EPCR </p>";}

            echo "<hr/><h2>Indeling</h2>" ;
            if ($terrasN != 0){echo "<p><span class='black'>Terras</span> - $terras</p>";}
            if ($livingN != 0){echo "<p><span class='black'>Woonkamer</span>  - $living</p>";}
            if ($inkomN != 0){echo "<p><span class='black'>Inkomhal</span> - $inkom</p>";}
            if ($hoekN != 0){echo "<p><span class='black'>Slaaphoek</span> - $hoek</p>";}
            if ($slaapN != 0){echo "<p><span class='black'>$slaapN Slaapkamer(s)</span> - $slaap</p>";}
            if ($badkamerN != 0){echo "<p><span class='black'>$badkamerN Badkamer(s)</span> - $badkamer</p>";}
            if ($keukenN != 0){echo "<p><span class='black'>Keuken</span> - $keuken</p>";}
            if ($bergingN != 0){echo "<p><span class='black'>Berging</span> - $berging</p>";}
            if ($garageN != 0){echo "<p><span class='black'>Garage</span> - $garage</p>";}
            if ($parkeerplaatsN != 0){echo "<p><span class='black'>Parkeerplaats</span> - $parkeerplaats</p>";}
            if ($tuinN != 0){echo "<p><span class='black'>Tuin</span> - $tuin</p>";}

            if ($extra1N != 0){echo "<p><span class='black'>$extra1N</span> Extra - $extra1</p>";}
            if ($extra2N != 0){echo "<p><span class='black'>$extra2N</span> Extra - $extra2</p>";}
            if ($extra3N != 0){echo "<p><span class='black'>$extra3N</span> Extra - $extra3</p>";}
            if ($extra4N != 0){echo "<p><span class='black'>$extra4N</span> Extra - $extra4</p>";}
            if ($extra5N != 0){echo "<p><span class='black'>$extra5N</span> Extra - $extra5</p>";}
            if ($extra6N != 0){echo "<p><span class='black'>$extra6N</span> Extra - $extra6</p>";}

            ?>
            <hr/></hr>

            <div id="omschrijving">
                <h2>Omschrijving</h2>
                <p><?php echo $beschrijving; ?></p>  </div> <!-- Einde Omschrijving -->
            <?php
            $structure = 'files/woningen/Woning_' . $id;
            if(is_dir($structure)){
                echo "<hr />";
                echo "<h2>Specificatie documenten</h2>";

                if ($handle = opendir('files/woningen/Woning_' . $id)) {
                    echo "<div id='documentlist'>";
                    echo "<ul>";
                    while (false !== ($entry = readdir($handle)))
                    {
                        if ($entry !== '.' && $entry !== '..')
                        {
                            echo "<li><a target='_blank' href='$structure/$entry'>$entry</a></li>"  ;}
                    }
                    closedir($handle);
                }
                echo "</ul>";
                echo "</div>";
            }
            ?>

            <div id="map_canvas">
            </div>

        </div><!-- Einde content Left -->


        <div id="content_right">

            <ul>
                <a href="contact.php?ref=Graag meer informatie betreffende het volgende pand: <?php echo $code ." | " . $adres;?>"><li class="info">Informatie aanvragen</li></a>

                <a href="contact.php?ref=Graag een bezoek voor het volgende pand: <?php echo $code ." | " . $adres;?>"><li class="info">Bezoek aanvragen</li></a>
                <a href="javascript:window.print()"><li class="print">
                        Afdrukken</li></a></ul>

            <div id='afbeeldingen'>
            </div>

            <script type="text/javascript">
                console.log('afbeeldingen ', afb);
                for (var i = 0 ; i < afb.length ; i++)
                {
                    document.getElementById("afbeeldingen").innerHTML += "<div class='test' id='img_box'><a  href='images/woningen/Woning_<?php echo $id; ?>/" + afb[i] + "' rel='lightbox-apollo' name=" + afb[i] + "><img src='images/woningen/Woning_<?php echo $id; ?>/" + afb[i] + "'></a></div>";
                }
            </script>
        </div>


    </div><!-- Einde Content -->
</div><!-- Einde Container -->
<div id="footer">
    <div id="footerbinnen">
        <div id="kolom_1">
            <h2>Immo Apollo</h2>
            <hr />
            <p>Immo Apollo is het immokantoor dat gegroeid is in de schoot van groep AP.
                Groep AP is een kleine bouwpromotor uit Veurne, die al jarenlang grootse projecten realiseert.
                Wij verkopen voornamelijk de projecten die wij zelf bouwen, maar staan ook graag in voor de herverkoop van appartementen en huizen in Nieuwpoort en omgeving.
                Als dochter van Groep AP zijn wij Uw bevoorrechte partner voor de aankoop van een nieuwbouwappartement in Nieuwpoort.</p>
        </div>
        <div id="kolom_2">
            <h2>Sitemap</h2>
            <hr />
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
            <hr />
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
            <hr />
            <div id="footerbottom_left">
                <p>Site by <a href="mailto:thibaultmarin@hotmail.com">Thibault Marin</a></p>
            </div>
            <div id="footerbottom_right">
                <p>Copyright © 2016 Immo Apollo</p>
            </div>
        </div>
    </div> <!-- Einde Footer binnen -->
</div><!-- Einde Footer -->
</body>
</html>
