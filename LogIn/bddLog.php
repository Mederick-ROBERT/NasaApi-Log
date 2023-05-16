<?php

/* log en bdd */

include "../dataBases/index.php";

$sql = 'SELECT emailProfil, passwordProfil FROM profil';

$request = $conn->query($sql);

$result = $request->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);

// echo $result[0]['emailProfil'];

$email = '';
$pass = '';

if(!empty($_POST)){

    if(isset($_POST['email']) && isset($_POST['pass'])){

        if(!empty($_POST['email']) && !empty($_POST['pass'])){

            $email = $_POST['email'];
            $pass = $_POST['pass'];

        } else {
            echo "informations(s) manquante(s)";
        }

    } // fin du isset

}

$i = 0;

foreach($result as $connexion){
    $emailRequest = $result[$i]['emailProfil'];
    $passRequest = $result[$i]['passwordProfil'];

    if($email == $emailRequest && $pass == $passRequest){
        header("location: ../home/index.php");
        break;
    } else {
        $i++;
        echo "Mauvaise identification.";
    }
}



?>