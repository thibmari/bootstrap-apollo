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

<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>

<div class="container">
    <a class="navbar-brand no-hover" href="index.php">
        <img src="images/logo-h.png" alt="logo horizontal" />
    </a>

    <div class="collapse navbar-toggleable-md text-xs-center" id="navbarResponsive">
        <ul class="nav navbar-nav">
            <li class="nav-item <?php if(checkUrl('nieuwbouw')) {echo 'active';} ?>">
                <a class="nav-link" href="#">Nieuwbouw</a>
            </li>
            <li class="nav-item <?php if(checkUrl('kopen') || checkUrl('woning')) {echo 'active';} ?>">
                <a class="nav-link" href="kopen">Te koop</a>
            </li>
            <li class="nav-item <?php if(checkUrl('spanje')) {echo 'active';} ?>">
                <a class="nav-link" href="spanje">Zuid Spanje</a>
            </li>
        </ul>
    </div>

</div>