<?php
    $id             = $_GET['id'];
    $xml            = simplexml_load_file("http://media.egorealestate.com/XML/oktober%202016_4486.xml");
    $house          = $xml->$id;
    $code           = $xml->$id;

    $fullUrl        = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    $price          = $house->Forsale->__toString();
    $priceFormatted = '€ ' . number_format($price, 0, ',', '.');

    $images         = explode(',', $house->ImageLink);
    $imageCount     = count($images) - 1;
    $lastImage      = $images[$imageCount];
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

    <title>Vakantiewoning Spanje | IMMO APOLLO | Vastgoed regio Nieuwpoort</title>

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
</head>

<body>

<nav class="navbar navbar-light bg-faded">
    <?php include "partials/navigation.php"; ?>
</nav>

<div class="container woning_headers">
    <div class="row">
        <div class="col-sm-12 col-lg-9">
            <h2 class="text-lg-left text-md-left"><?php echo $house->Neighborhood; ?></h2>
            <h6><?php echo $house->Town; ?></h6>
            <h5><?php echo $priceFormatted; ?></h5>
        </div>
        <div class="col-sm-12 col-lg-3 phone-padding hidden-lg-down">
            <a href="spanje" class="btn btn-primary btn-lg" role="button">
                <i class="fa fa-th" aria-hidden="true"></i>
                Terug naar overzicht
            </a>
            <a data-toggle="lightbox" data-gallery="woning-pics" class="btn btn-secondary btn-lg" href="<?php echo $lastImage; ?>">
                <i class="fa fa-image" aria-hidden="true"></i>
                Bekijk afbeeldingen
            </a>
        </div>
    </div>
</div> <!-- /container -->

<div class="container container_img">
    <a href="<?php echo $images[0]; ?>" data-toggle="lightbox" data-gallery='woning-pics'>
        <img class="first-pic img-fluid" src='<?php echo $images[0]; ?>' alt='afbeelding pand'>
    </a>
    <div class="pic-container hidden-lg-down">

        <?php
            foreach($images as $key=>$image) {
                if($key != 0 && $key < 4) {
                    echo " 
                        <a href='$image' data-toggle='lightbox' data-gallery='woning-pics'>
                            <img class='img-fluid' src='$image' alt='afbeelding pand'>
                        </a>
                    ";
                }
            }
        ?>

    <a class='invisible' href="<?php echo $lastImage;?>" data-toggle='lightbox' data-gallery='woning-pics'></a>

    </div>
    <p>
        <a class="btn btn-primary btn-lg" href="tel:003258241414" role="button">
            <i class="fa fa-phone" aria-hidden="true"></i>
            +32 58 24 14 14
        </a>
        <a data-toggle="lightbox" data-gallery="woning-pics" class="btn btn-secondary btn-lg"
           href="<?php echo $lastImage; ?>" role="button">
            Alle <?php echo $imageCount; ?> afbeeldingen
        </a>
    </p>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-sm-12">
            <h2 class="margin-top">Omschrijving</h2>
            <p><?php echo $house->{"Description_en-gb"}; ?></p>
            <h2 class="margin-top">Kenmerken</h2>
            <div class="row">
                <ul class="col-sm-12 col-lg-6 description-list">
                    <li>
                        <span class="list-header">Type:</span>
                        <span class="list-content"><?php echo $house->Propertytype;?></span>
                    </li>
                    <li>
                        <span class="list-header">Referentie:</span>
                        <span class="list-content"><?php echo $house->Reference; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Staat:</span>
                        <span class="list-content"><?php echo $house->Condition; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Woon opp:</span>
                        <span class="list-content"><?php echo $house->NetArea; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Grond opp:</span>
                        <span class="list-content"><?php echo $house->LandArea; ?></span>
                    </li>
                    <li>
                        <span class="list-header">Bouwjaar</span>
                        <span class="list-content"><?php echo $house->Constructionended; ?></span>
                    </li>
                </ul>
            </div>
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
                            <a href="mailto:?subject=Woning te <?php echo $house->Town; ?>&amp;body=Ik heb een interessante woning gevonden op <?php echo $fullUrl; ?>." title="deel deze woning">
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
            mapOptions = {
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            },
            map = new google.maps.Map(mapCanvas, mapOptions);
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
    }
    function geocodeAddress(geocoder, resultsMap) {
        var address = '<?php echo $house->Town ; ?>';
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
