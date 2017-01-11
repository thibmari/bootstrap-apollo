<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Ontdek vandaag nog nieuwe woningen te koop in regio Nieuwpoort of aan de kust in het vastgoed aanbod van Immo Apollo.">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="favicon.ico?v=2">

    <title>Kopen | IMMO APOLLO</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

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
    <?php include "partials/navigation.php" ; ?>
</nav>

<div class="container">
    <!--<h2 class="text-lg-left text-md-left text-sm-center text-xs-center margin-top">Vakantiehuizen te koop in Zuid Spanje</h2>-->

    <div class='row woning-grid woning-grid_spanje text-lg-left text-md-left text-sm-center text-xs-center active'>

        <?php
            $xml = simplexml_load_file("http://media.egorealestate.com/XML/oktober%202016_4486.xml");
            foreach ($xml as $key=>$house) {
                $price = $house->Forsale->__toString();
                $priceFormatted = number_format($price, 0, ',', '.');
                $image = explode(',', $house->ImageLink);
                echo "                                
                    <div class='col-md-4 lazy'>
                        <a href='spanje-detail?id=$key'>
                            <img class='img-fluid img-border' src='$image[0]' />
                        </a>
                        <ul>
                            <li>Kamers: $house->Rooms</li>
                            <li>$house->Propertytype</li>
                            <li>€ $priceFormatted</li>
                        </ul>
                    </div>                                    
                ";
            }
        ?>

    </div>

</div> <!-- /container -->

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
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="docs/assets/js/ie10-viewport-bug-workaround.js"></script>
<script>
    $( document ).ready(function() {
        $('.carousel').carousel();
    });
</script>
<script src="dist/js/jquery.lazyload.js"></script>
<script>
    $(function() {
        $("div.lazy").lazyload();
    });
</script>
</body>
</html>
