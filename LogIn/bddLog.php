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

if(!empty($_POST)){

   foreach($result as $connexion){
        $emailRequest = $result[$i]['emailProfil'];
        $passRequest = $result[$i]['passwordProfil'];

        $str = [
            "email" => $emailRequest,
            "pass" => $passRequest,
        ];

        if($email == $emailRequest && $pass == $passRequest){

            $encode = json_encode($str);
            
            setcookie("conn", $encode, time()+3600*2, "/");

            header("location: ../Profil/index.php");

            unset($email);
            unset($pass);

            break;
        } else {
            $i++;
        }
    } 

    echo "mauvaise identification";

}





?>