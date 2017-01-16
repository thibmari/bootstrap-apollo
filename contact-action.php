<?php

$naam               = isset($_POST["name"]) ? $_POST["name"] : 'No name set';
$adres              = isset($_POST["adres"]) ? $_POST["adres"] : 'No adress set';
$postcode           = isset($_POST["postcode"]) ? $_POST["postcode"] : 'No postcode set';
$plaats             = isset($_POST["plaats"]) ? $_POST["plaats"] : 'No plaats set';
$email              = isset($_POST["email"]) ? $_POST["email"] : 'No email set';
$bericht            = isset($_POST["message"]) ? $_POST["message"] : 'No message set';
$telefoon           = isset($_POST["tel"]) ? $_POST["tel"] : 'No telephone set';

$recaptchaResponse  = $_POST["g-recaptcha-response"];
$recaptchaUrl       = 'https://www.google.com/recaptcha/api/siteverify';
$secret             = "6Lf6-iYTAAAAAB4d7g6FlAANKpQytgwbJqlFtq4s";

$data               = [ "secret" => $secret,
                        "response" => $recaptchaResponse
                      ];

// Calling the end point for verification
$recaptchaResponse = CallApi('post', $recaptchaUrl, $data);
$RescaptcheJson    = json_decode($recaptchaResponse);
$success           = $RescaptcheJson->success;

if (!$success) {
    header('location:contact?success=no');
}

$from    = $email;
//$from = "formulier@immo-apollo.be";
$headers = "From:" . $from;

$to = "info@immo-apollo.be";
//$to = "thibaultmarin@hotmail.com";

$subject = "Formulier Immo Apollo " . "- " . $naam;

$message = "Email automatisch verstuurt na het invullen van het formulier op immo-apollo.be \n\n" .
    "Naam & Voornaam: " . $naam . "\n" .
    "Adres: " . $adres . "\n" .
    "Postcode: " . $postcode . "\n" .
    "Plaats: " . $plaats . "\n" .
    "Email: " . $email . "\n" .
    "Telefoon: " . $telefoon . "\n\n" .
    "Bericht: " . $bericht;


if ($success) {
   //mail($to, $subject, $message, $headers);
   header('location:contact.php?success=yes&naam=' . $naam);
}

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}

