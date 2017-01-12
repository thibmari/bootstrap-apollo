<?php
    include "partials/details-fetching.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Ontdek vandaag nog nieuwe woningen te koop in regio Nieuwpoort of aan de kust in het vastgoed aanbod van Immo Apollo.">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="favicon.ico?v=2">

    <title>Vastgoed Nieuwpoort | IMMO APOLLO</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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

    <meta property="og:url"         content="<?php echo $fullUrl; ?>" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Woning te koop te <?php echo $woningResult['adres'] ; ?>" />
    <meta property="og:description" content="Woning te koop via immo-apollo.be" />
    <meta property="og:image"       content="http://www.immo-apollo.be/images/woningen/Woning_<?php echo $id ; ?>/001-mainpic.jpg" />
</head>

<body>

<nav class="navbar navbar-light bg-faded">
    <?php include "partials/navigation.php"; ?>
</nav>

<div class="container woning_headers">
    <h2 class="text-lg-left text-md-left"><?php echo $woningResult['adres']; ?></h2>
    <h6><?php echo $woningResult['stad']; ?></h6>
    <h5>€ <?php echo $price; ?></h5>
</div> <!-- /container -->

<div class="container container_img">
    <a href="images/woningen/Woning_<?php echo $id ; ?>/001-mainpic.jpg" data-toggle="lightbox" data-gallery='woning-pics'>
        <img class="first-pic img-fluid" src='images/woningen/Woning_<?php echo $id ; ?>/001-mainpic.jpg' alt='afbeelding pand'>
    </a>
    <div class="pic-container hidden-lg-down">
        <?php
            $directory = "images/woningen/Woning_$id";
            $files     = scandir($directory);
            $i         = 0;
            $lastFile  = '001-mainpic.jpg';
            natcasesort($files);
            foreach($files as $fil) {
                $i++;
                if ($fil != "." && $fil != ".." && $fil != '001-mainpic.jpg' && $i < 7) {
                    echo "<a href=\"$directory/$fil\" data-toggle='lightbox' data-gallery='woning-pics'>
                            <img class='img-fluid' src='$directory/$fil' alt='afbeelding pand'>
                          </a>
                    ";
                } elseif ($i >= 7) {
                    if ($i == count($files)) {
                        $lastFile = $fil;
                        break;
                    }
                    echo "<a class='invisible' href=\"$directory/$fil\" data-toggle='lightbox' data-gallery='woning-pics'></a>";
                }
            }
            $imgCount = $i - 2;
        ?>
    </div>
    <p>
        <a data-toggle="lightbox" data-gallery="woning-pics" class="btn btn-primary btn-lg"
          href="<?php echo $directory . '/' . $lastFile ; ?>" role="button">
            Alle <?php echo $imgCount; ?> afbeeldingen
        </a>
        <a href="kopen" class="btn btn-secondary btn-lg" role="button">
            <i class="fa fa-th" aria-hidden="true"></i>
            Overzicht
        </a>
    </p>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-sm-12">
            <h2 class="margin-top">Omschrijving</h2>
            <p><?php echo $woningResult['beschrijving']; ?></p>
            <h2 class="margin-top">Kenmerken</h2>
            <div class="row">
                <ul class="col-sm-12 col-lg-6 description-list">
                    <li>
                        <span class="list-header">Type:</span>
                        <span class="list-content"><?php echo $mytype ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Bouwjaar:</span>
                        <span class="list-content"><?php echo $bouwjaar ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Staat:</span>
                        <span class="list-content"><?php echo $mystaat ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Woon opp:</span>
                        <span class="list-content"><?php echo $woonOpp ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Grond opp:</span>
                        <span class="list-content"><?php echo $grondOpp ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Omgeving</span>
                        <span class="list-content"><?php echo $omgeving ; ?></span>
                    </li>
                </ul>
                <ul class="col-sm-12 col-lg-6 description-list">
                    <li>
                        <span class="list-header">Woning code:</span>
                        <span class="list-content"><?php echo $woningCode ;?></span>
                    </li>
                    <li>
                        <span class="list-header">Slaapkamers:</span>
                        <span class="list-content"><?php echo $slaapN ;?></span>
                    </li>
                    <li>
                        <span class="list-header">KI:</span>
                        <span class="list-content"><?php echo $ki ;?></span>
                    </li>
                    <li>
                        <span class="list-header">SBK:</span>
                        <span class="list-content"><?php echo $sbk ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">EPC waarde:</span>
                        <span class="list-content"><?php echo $epcw ; ?></span>
                    </li>
                    <li>
                        <span class="list-header">EPC referentie:</span>
                        <span class="list-content"><?php echo $epcr ; ?></span>
                    </li>
                </ul>
            </div>
            
            <h2>Indeling</h2>
            <ul class="info-list">
                <?php
                if ($terrasN != 0){echo "<li><span class='list-header'>Terras</span> - $terras</li>";}
                if ($livingN != 0){echo "<li><span class='list-header'>Woonkamer</span>  - $living</li>";}
                if ($inkomN != 0){echo "<li><span class='list-header'>Inkomhal</span> - $inkom</li>";}
                if ($hoekN != 0){echo "<li><span class='list-header'>Slaaphoek</span> - $hoek</li>";}
                if ($slaapN != 0){echo "<li><span class='list-header'>$slaapN Slaapkamer(s)</span> - $slaap</li>";}
                if ($badkamerN != 0){echo "<li><span class='list-header'>$badkamerN Badkamer(s)</span> - $badkamer</li>";}
                if ($keukenN != 0){echo "<li><span class='list-header'>Keuken</span> - $keuken</li>";}
                if ($bergingN != 0){echo "<li><span class='list-header'>Berging</span> - $berging</li>";}
                if ($garageN != 0){echo "<li><span class='list-header'>Garage</span> - $garage</li>";}
                if ($parkeerplaatsN != 0){echo "<li><span class='list-header'>Parkeerplaats</span> - $parkeerplaats</li>";}
                if ($tuinN != 0){echo "<li><span class='list-header'>Tuin</span> - $tuin</li>";}
                if ($extra1N != 0){echo "<li>$extra1</li>";}
                if ($extra2N != 0){echo "<li>$extra2</li>";}
                ?>
            </ul>

            <h2 class="margin-top">Bijkomende informatie</h2>
            <ul class="info-list custom-bottom">
                <li>
                    Werd er een stedenbouwkundige vergunning uitgereikt? Ja
                </li>
                <li>
                    Meest recente stedenbouwkundige bestemming? Woongebied
                </li>
                <li>
                    Dagvaardingen? Nee
                </li>
                <li>
                    Voorkooprecht? Nee
                </li>
                <li>
                    Verkavelingsvergunning? Nee
                </li>
                <li>
                    As-Built Attest verkregen? Nee
                </li>
                <li>
                    Effectief overstromingsgevoelig? Nee
                </li>
                <li>
                    Mogelijk overstromingsgevoelig? Nee
                </li>
                <li>
                    Afgebakend overstromingsgebied? Nee
                </li>
                <li>
                    Afgebakende oeverzone? Nee
                </li>
                <li>
                    Risicozone voor overstromingen? Nee
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-12 padding-left-cs margin-bottom-double margin-top">
            <h2 class="h2_custom text-lg-center text-xs-center">Interesse in deze woning?</h2>
            <a class="btn btn-primary btn-sm full-width" href="kopen" role="button">Informatie aanvragen</a>
            <a class="btn btn-primary btn-sm full-width" href="kopen" role="button">Bezoek aanvragen</a>
            <a class="btn btn-secondary btn-sm full-width" href="kopen" role="button">Pagina afdrukken</a>

            <div class="share-bar">
                <span class="share-title">Deel deze woning</span>
                <div class="share-icons">
                    <ul>
                        <li>
                          <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $fullUrl; ?>">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li>
                            <a href="mailto:?subject=Woning te <?php echo $woningResult['adres'] ; ?>&amp;body=Ik heb een interessante woning gevonden op <?php echo $fullUrl; ?>." title="deel deze woning">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="whatsapp://send?text=Ik heb een interessante woning gevonden op <?php echo $fullUrl; ?>." data-action="share/whatsapp/share">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- /Sharebar -->

        </div>
    </div>
</div>

<div class="jumbotron no-padding no-margin-bottom">
   <div id="google-map"></div>
</div>

<footer>
    <?php include "partials/footer.php"; ?>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgG5z2MZt73Pz7zK_T4o6YGAgcdUMaov0&callback=initMap" async defer></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="docs/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.min.js"></script>
<script>
    var map;
    function initMap() {
        var mapCanvas = document.getElementById('google-map'),
            myLatLng = new google.maps.LatLng(51.1501859, 2.7210115000000314),
            mapOptions = {
                center: myLatLng,
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            },
            map = new google.maps.Map(mapCanvas, mapOptions);
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
    }
    function geocodeAddress(geocoder, resultsMap) {
        var address = '<?php echo $woningResult['adres'] . ' ' . $woningResult['stad'] ; ?>';
        geocoder.geocode({'address': address}, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                resultsMap.setCenter(results[0].geometry.location);
                var buildingMarker = {
                    url: 'images/icon.png'
                };
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    icon: buildingMarker,
                    title: 'locatie pand',
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
</body>
</html>
