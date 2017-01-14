<?php
    function checkUrl($urlToCheck) {
        $url = $_SERVER['PHP_SELF'];
        if (strpos($url, $urlToCheck) !== false) {
            return true;
        } else {
            return false;
        }
    }
?>

<button class="navbar-toggler hidden-md-up float-sm-right float-xs-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>

<div class="container responsive-menu text-lg-center">
    <a class="navbar-brand no-hover" href="index.php">
        <img src="images/logo-h.png" alt="logo horizontal" />
    </a>
    <div class="clearfix hidden-lg-only"></div>
    <div class="nav-top-right hidden-lg-down">
        <h2>Uw makelaar te Nieuwpoort</h2>
    </div>
    <div class="collapse navbar-toggleable-md" id="navbarResponsive">
        <ul class="nav navbar-nav text-md-center">
            <li class="nav-item <?php if(checkUrl('kopen') || checkUrl('woning')) {echo 'active';} ?>">
                <a class="nav-link" href="kopen">Kopen</a>
            </li>
            <li class="nav-item <?php if(checkUrl('nieuwbouw')) {echo 'active';} ?>">
                <a class="nav-link" href="#">Nieuwbouw</a>
            </li>
            <li class="nav-item <?php if(checkUrl('spanje')) {echo 'active';} ?>">
                <a class="nav-link" href="spanje">Zuid Spanje</a>
            </li>
            <li class="nav-item <?php if(checkUrl('over')) {echo 'active';} ?>">
                <a class="nav-link" href="over">Over ons</a>
            </li>
            <li class="nav-item <?php if(checkUrl('contact')) {echo 'active';} ?>">
                <a class="nav-link" href="contact">Contact</a>
            </li>
        </ul>
    </div>
</div>