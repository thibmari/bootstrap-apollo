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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <?php include "partials/google-analytics.php"; ?>
</head>
<?php
    include "partials/db_connect.php";
    $query  = "SELECT * FROM woningen WHERE frontpage = '1'";
    $result = $db->query($query, MYSQLI_STORE_RESULT);
    ?>
<body>
<nav class="navbar navbar-light bg-faded">
    <?php include "partials/navigation.php" ; ?>
</nav>

<div class="jumbotron jumbotron-image">
    <div class="container text-lg-center text-xs-center">
        <img src="images/logo.png" alt="immo apollo logo" />
        <h1 class="display-3">Vind uw koopwoning te regio Nieuwpoort</h1>
        <h3>Uw vastgoed specialist</h3>
        <p><a class="btn btn-primary btn-lg" href="kopen" role="button">Zoek een woning &raquo;</a></p>
    </div>
</div>

<div class="container container_home">
    <h2 class="h2_custom text-sm-center text-xs-center">Woning in beeld</h2>

    <div class="overflow-wrapper">
        <div id="woning-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                foreach ($result as $key=>$woning) {
                    if ($key % 3 == 0) {
                        $active = ($key == 0) ? 'active' : '';
                        echo "<div class='carousel-item text-lg-left text-md-left text-sm-center text-xs-center $active'>
                          <div class='woning-grid text-lg-left text-md-left text-sm-center text-xs-center'>";
                    }
                    $price       = number_format($woning['prijs'], 0, ',', '.');
                    $slaapkamers = $woning['slaapkamers'];
                    $woningID    = $woning['woning_id'];
                    $randomnum   = rand(1, 32000);
                    $slaap       = ($slaapkamers == 1) ? 'slaapkamer' : 'slaapkamers';

                    switch ($woning['type']) {
                        case 1;
                            $woningType = 'Huis';
                            break;
                        case 2;
                            $woningType = 'Appartement';
                            break;
                        case 3;
                            $woningType = 'Villa';
                            break;
                        case 4;
                            $woningType = 'Commercieel';
                            break;
                        case 5:
                            $woningType = 'Garage';
                            break;
                        case 6:
                            $woningType = 'Parkeerplaats';
                            break;
                        case 7:
                            $woningType = 'Grond';
                            break;
                        default:
                            $woningType = 'Huis';
                    }

                    echo "
                    <div class='col-md-4'>
                        <a href='woning?id=$woningID'>
                            <img class='img-fluid' src='images/woningen/Woning_$woningID/001-mainpic.jpg?$randomnum' />
                        </a>
                        <ul>
                            <li>$slaapkamers $slaap</li>
                            <li>$woningType</li>
                            <li>€ $price </li>
                        </ul>
                    </div>
                ";
                    if ($key == 2 || $key == 5 || $key == 8 || $key == 11 || $key == 14) {
                        echo "</div></div>";
                    }
                }
                ?>
            </div><!-- /Carousel inner -->

            <!-- Carousel Controls Custom -->
            <a class="carousel-control-prev" href="#woning-carousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden=""></i>
            </a>
            <a class="carousel-control-next" href="#woning-carousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>

        </div><!-- /Woning Carousel -->
    </div>


    <div class="col-sm-12 text-lg-center text-xs-center">
        <p><a class="btn btn-primary btn-lg" href="kopen" role="button">Bekijk het volledig koopaanbod &raquo;</a></p>
    </div>

</div> <!-- /container -->

<div class="jumbotron jumbotron_small-padding no-margin-bottom">
    <div class="container">
        <h2 class="h2_custom text-sm-center text-xs-center">Over Immo Apollo</h2>
        <div class="row text-lg-center text-xs-center">
            <div class="col-lg-3 invisible">.</div>
            <div class="col-sm-12 col-lg-6 small-p">
                <p>Immo Apollo is al vele jaren een van de grootste vastgoedspecialisten te Nieuwpoort. Wij zijn voornamelijk gespecialiseerd in nieuwbouw projecten, je kan ook beleggen op nieuwbouwresidenties.</p>
                <p>Didier De Gendt is een gespecialiseerd vastgoedmakelaar te Nieuwpoort. Didier is gespecialiseerd in nieuwbouw residenties.</p>
                <p>Met meer dan 30 jaar ervaring en professionele kennis in allerhande vastgoedtransacties bent u bij ons aan het juiste adres!</p>
                <p><a class="btn btn-primary btn-lg" href="over" role="button">Lees meer &raquo;</a></p>
            </div>
        </div>
    </div><!-- /container -->
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
<script>
    function initMap() {
        var mapCanvas = document.getElementById('google-map'),
            myLatLng = new google.maps.LatLng(51.1501859, 2.7210115000000314),
            mapOptions = {
                center: myLatLng,
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            },
            map = new google.maps.Map(mapCanvas, mapOptions),
            buildingMarker = {
                url: 'images/icon.png'
            },
            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: buildingMarker,
                title: 'Immo Apollo'
            });
        marker.setMap(map);
    }
</script>
</body>
</html>
