<?php

include "db_connect.php";

$id             = isset($_GET['id']) ? $_GET['id'] : 0;
$query          = "SELECT * FROM woningen WHERE woning_id='$id' ";
$result         = $db->query($query, MYSQLI_STORE_RESULT);
$woningResult   = mysqli_fetch_array($result, MYSQLI_ASSOC);
$price          = number_format($woningResult['prijs'], 0, ',', '.');
$fullUrl        = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$terrasN        = $woningResult['terrasN'];
$terras         = $woningResult['terras'];
$livingN        = $woningResult['livingN'];
$living         = $woningResult['living'];
$inkomN         = $woningResult['inkomN'];
$inkom          = $woningResult['inkom'];
$hoekN          = $woningResult['hoekN'];
$hoek           = $woningResult['hoek'];
$slaapN         = $woningResult['slaapN'];
$slaap          = $woningResult['slaap'];
$badkamerN      = $woningResult['badkamerN'];
$badkamer       = $woningResult['badkamer'];
$keukenN        = $woningResult['keukenN'];
$keuken         = $woningResult['keuken'];
$bergingN       = $woningResult['bergingN'];
$berging        = $woningResult['berging'];
$garageN        = $woningResult['garageN'];
$garage         = $woningResult['garage'];
$parkeerplaatsN = $woningResult['parkeerplaatsN'];
$parkeerplaats  = $woningResult['parkeerplaats'];
$tuinN          = $woningResult['tuinN'];
$tuin           = $woningResult['tuin'];

$extra1N        = $woningResult['extra1N'];
$extra1         = $woningResult['extra1'];
$extra2         = $woningResult['extra2'];
$extra2N        = $woningResult['extra2N'];

$woningCode     = $woningResult['code'];

$bouwjaar       = (isset($woningResult['bouwjaar']) && $woningResult['bouwjaar'] > 0) ? $woningResult['bouwjaar'] : '';
$grondOpp       = (isset($woningResult['oppervlakte1']) && $woningResult['oppervlakte1'] > 0) ? $woningResult['oppervlakte1'] . 'm²' : '';
$woonOpp        = (isset($woningResult['oppervlakte2']) && $woningResult['oppervlakte2'] > 0) ? $woningResult['oppervlakte2'] . 'm²' : '';

$ki             = (isset($woningResult['ki']) && $woningResult['ki'] > 0) ? $woningResult['ki'] : '';
$sbk            = (isset($woningResult['sbk']) && $woningResult['sbk'] > 0) ? $woningResult['sbk'] : '';

$epcw            = (isset($woningResult['EPCW'])) ? $woningResult['EPCW'] : '';
$epcr            = (isset($woningResult['EPCR'])) ? $woningResult['EPCR'] : '';

$mytype         = 'Not Set';

switch($woningResult['type']) {
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

switch($woningResult['type']) {
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
    default:
        $mystaat = 'Goed';
        break;
}

switch($woningResult['omgeving']) {
    case 1;
        $omgeving = '';
        break;
    case 2;
        $omgeving = 'Centrum';
        break;
    case 3;
        $omgeving = 'Zeedijk';
        break;
    case 4;
        $omgeving = 'Haven';
        break;
    case 5:
        $omgeving = 'Park';
        break;
    case 6:
        $omgeving = 'Rustig';
        break;
    case 7:
        $omgeving = 'Landelijk';
        break;
    case 8:
        $omgeving = 'Duinen';
        break;
    case 9:
        $omgeving = 'Villawijk';
        break;
    default:
        $omgeving1 = '';
        break;
}