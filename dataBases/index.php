<?php

$data = 'mysql:host=192.168.1.30;dbname=nasaApi-Log;charset=UTF8';
$user = 'mrobert';
$password = 'Bret@gne_29';
$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

try{
    $conn = new PDO($data,$user,$password,$option);
} catch (PDOException $exception){
    echo 'Connexion échouée : '.$exception->getMessage();
	exit();
}

?>