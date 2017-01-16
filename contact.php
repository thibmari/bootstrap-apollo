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

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

<nav class="navbar navbar-light bg-faded">
    <?php include "partials/navigation.php"; ?>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-sm-12">
            <form class="contact-form" method="post" action="contact-action.php">
                <h2 class="margin-top">Contact opnemen</h2>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Naam*</label>
                    <div class="col-lg-9 col-sm-12">
                        <input required name="name" class="form-control" type="text" placeholder="Voornaam Achternaam" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Adres</label>
                    <div class="col-lg-9 col-sm-12">
                        <input name="adres" class="form-control" type="text" placeholder="Albert I Laan 153" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-lg-3 col-sm-12 col-form-label">Postcode</label>
                    <div class="col-lg-9 col-sm-12">
                        <input name="postcode" class="form-control" type="number" placeholder="8620" id="example-number-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-3 col-sm-12 col-form-label">Plaats</label>
                    <div class="col-lg-9 col-sm-12">
                        <input name="plaats" class="form-control" type="text" placeholder="Nieuwpoort" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-lg-3 col-sm-12 col-form-label">Email*</label>
                    <div class="col-lg-9 col-sm-12">
                        <input required name="email" class="form-control" type="email" placeholder="email@voorbeeld.be" id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-lg-3 col-sm-12 col-form-label">Telephone*</label>
                    <div class="col-lg-9 col-sm-12">
                        <input required name="tel" class="form-control" type="tel" placeholder="059 205 555" id="example-tel-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea" class="col-lg-3 col-sm-12 col-form-label">Opmerking</label>
                    <div class="col-lg-9 col-sm-12">
                        <textarea name="message" class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea" class="col-lg-3 col-sm-12 col-form-label">Beveiliging</label>
                    <div class="g-recaptcha col-lg-9 col-sm-12" data-sitekey="6Lf6-iYTAAAAAJQl79Z9vZvs97q-x5cZMWMrjUfY"></div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea" class="col-lg-3 col-sm-12 invisible"></label>
                    <div class="col-lg-9 col-sm-12">
                        <button type="submit" class="btn btn-primary">Verzenden</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-1 hidden-lg-down"></div>
        <div class="info-sidebar col-lg-6 col-sm-12">
            <h2 class="h2_custom">Vastgoed te Nieuwpoort en omstreken</h2>
            <img class="img-fluid" src="images/kantoor.jpg" alt="interieur van het kantoor" />
            <h2 class="h2_custom margin-top">Contactgegevens</h2>
            <p>Albert I Laan 153/c</p>
            <p>8620 Nieuwpoort</p>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="">+32 58 24 14 14</a>
            </p>
            <p>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a href="#">info@immo-apollo.be</a>
            </p>
        </div>
    </div>
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
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
