<?php

include "../dataBases/index.php";

$payload = null;

$result = null;

if (isset($_COOKIE['conn'])){
    if(!empty($_COOKIE['conn'])){
        $stringA = $_COOKIE['conn'];
        $result = json_decode(($stringA));
    }   
} 
elseif (isset($_COOKIE['info'])){
    if(!empty($_COOKIE['info'])){
        $stringB = $_COOKIE['info'];
        $payload = json_decode($stringB);
    } 
} 
elseif (isset($_COOKIE['info']) && isset($_COOKIE['conn'])){
    setcookie('info','',(time()-3600));
    setcookie('conn','',(time()-3600));
    header('location:../LogIn/index.php');
} 
else {
    header('location:../LogIn/index.php');
}

if($result != null){
    $email = $result->email;
}

$sql = "SELECT * FROM `profil` WHERE emailProfil = '{$email}'"; // écrire '{$exempleDeVariable}' quand l'on veut écrire une variable comme attribut de requetes

$request = $conn->query($sql);

$emailResult = $request->fetch(PDO::FETCH_ASSOC);

?>