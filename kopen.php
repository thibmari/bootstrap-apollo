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

<?php
include "partials/db_connect.php";

$query          = "SELECT * FROM woningen ORDER BY";
$rID            = (isset($_GET['nieuwbouw'])) ? $_GET['nieuwbouw'] : null;
$prijs1         = (isset($_POST['priceInput1'])) ? $_POST['priceInput1'] : -1;
$prijs2         = (isset($_POST['priceInput2'])) ? $_POST['priceInput2'] : 90000000;
$ddltype        = (isset($_POST['typeInput'])) ? $_POST['typeInput'] : -1;
$orderOnPrice   = ((isset($_GET['order']) && $_GET['order'] == 'price')) ? true : false;

if (empty($_POST) && $rID == null) {
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

if (!$orderOnPrice) {
    $query .= " woning_id DESC";
} else {
    $query .= " prijs DESC";
}

$result     = $db->query($query, MYSQLI_STORE_RESULT);

?>

<body>
<nav class="navbar navbar-light bg-faded">
    <?php include "partials/navigation.php" ; ?>
</nav>
<div class="searchbox">
    <div class="container">
        <form method="post" id="searchForm" action="kopen.php">
            <div class="form-group row">
                <div class="col-sm-12 col-lg-4">
                    <select class="form-control" id="typeInput" name="typeInput">
                        <option <?php if ($ddltype == -1) {
                            echo "selected='selected'";
                        } ?> value="-1">Categorie, huis, appartement,..
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
                    <i class="fa fa-angle-down ddl-angle" aria-hidden="true"></i>
                </div>
                <div class="col-sm-6 col-xs-6 col-lg-3">
                    <label for="example-search-input" class="col-form-label price-label">Van</label>
                    <select class="form-control category" id="priceInput1" name="priceInput1">
                        <option <?php if ($prijs1 == -1) { echo "selected";} ?> value="0">€ 0</option>
                        <option <?php if ($prijs1 == 125000) { echo "selected";} ?> value="125000">€ 125.000</option>
                        <option <?php if ($prijs1 == 250000) { echo "selected";} ?> value="250000">€ 250.000</option>
                        <option <?php if ($prijs1 == 375000) { echo "selected";} ?> value="375000">€ 375.000</option>
                        <option <?php if ($prijs1 == 500000) { echo "selected";} ?> value="500000">€ 500.000</option>
                        <option <?php if ( $prijs1 == 625000) { echo "selected";} ?> value="625000">€ 625.000</option>
                        <option <?php if ($prijs1 == 750000) { echo "selected";} ?> value="750000">€ 750.000</option>
                        <option <?php if ($prijs1 == 1000000) { echo "selected";} ?> value="1000000">€ 1.000.000</option>
                    </select>
                    <i class="fa fa-angle-down ddl-angle" aria-hidden="true"></i>
                </div>
                <div class="col-sm-6 col-xs-6 col-lg-3">
                    <label for="example-search-input" class="col-form-label price-label">Tot</label>
                    <select class="form-control category" id="priceInput2" name="priceInput2">
                        <option <?php if ($prijs2 == 125000) { echo "selected";} ?> value="125000">€ 125.000</option>
                        <option <?php if ($prijs2 == 250000) { echo "selected";} ?> value="250000">€ 250.000</option>
                        <option <?php if ($prijs2 == 375000) { echo "selected";} ?> value="375000">€ 375.000</option>
                        <option <?php if ($prijs2 == 500000) { echo "selected";} ?> value="500000">€ 500.000</option>
                        <option <?php if ($prijs2 == 625000) { echo "selected";} ?> value="625000">€ 625.000</option>
                        <option <?php if ($prijs2 == 750000) { echo "selected";} ?> value="750000">€ 750.000</option>
                        <option <?php if ($prijs2 == 1000000) { echo "selected";} ?> value="1000000">€ 1.000.000</option>
                        <option <?php if ($prijs2 == 90000000) { echo "selected";} ?> value="90000000">Geen maximum</option>
                    </select>
                    <i class="fa fa-angle-down ddl-angle" aria-hidden="true"></i>
                </div>
                <div class="col-sm-12 col-lg-2">
                    <button name="Zoeken" type="submit" class="btn btn-primary">Zoeken</button>
                </div>
            </div>
        </form>
        <?php
        if ($orderOnPrice) {
            echo "<a href='kopen'>Sorteer op relevantie";
        } else {
            echo "<a href='kopen?order=price'>Sorteer op prijs";
        }
        ?>
        <i class="fa fa-angle-down angle-relevance" aria-hidden="true"></i>
        </a>
    </div>
</div>
<div class="container">
    <!-- <h2 class="h2_custom text-sm-center text-xs-center">Alle panden te regio Nieuwpoort</h2> -->
    <div class="row woning-grid text-lg-left text-md-left text-sm-center text-xs-center active">
        <?php include 'partials/searchbox.php' ; ?>
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
</body>
</html>
