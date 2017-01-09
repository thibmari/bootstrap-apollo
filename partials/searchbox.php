<?php

foreach ($result as $woning) {
    $price       = number_format($woning['prijs'], 0, ',', '.');
    $price       = ($price == 0) ? 'Verkocht' : '€ ' . $price;
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
                        <li>$price </li>
                    </ul>
                </div>
            ";
}