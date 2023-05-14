<?php

// print_r($_COOKIE);
// print_r($_POST);

if(!empty($_POST['credential'])){

    if(empty($_COOKIE['g_csrf_token']) || empty($_POST['g_csrf_token']) || $_COOKIE['g_csrf_token'] != $_POST['g_csrf_token']){
        echo "Erreur vérification jeton CSRF";
        exit();
    }


    // Get $idToken via HTTPS POST.

    $clientID = '200504414713-2eul6gujkfmfegiep91h2ea4a5htmorv.apps.googleusercontent.com';

    $client = new Google_Client(['client_id' => $clientID]);  // Specify the CLIENT_ID of the app that accesses the backend

    $guzzleClient = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), )); // empeche l'erreur guzzle (?) ... Temporaire !!
    $client->setHttpClient($guzzleClient);

    $idToken = $_POST['credential'];
    $payload = $client->verifyIdToken($idToken);

    // $payload sont les infos du compte qui vient de se connecter

    // print_r($payload);

    if ($payload) {
        $_SESSION['user'] = $payload;

        header("http://localhost/mutipage/NasaApi-Log/home/index.php");
        
        // If request specified a G Suite domain:
        //$domain = $payload['hd'];

    } else {
        // Invalid ID token
        echo "Erreur d'authentifcation";
    }

    
}

?>