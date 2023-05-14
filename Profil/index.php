<?php

include "../vendor/autoload.php";

include "../LogIn/googleReturn.php";



// if(empty($_SESSION['user'])){
//     header('location:../LogIn/index.php');
// }


    if(empty($_COOKIE['info'])){
        header('location:../LogIn/index.php');
    } else {
        $string = $_COOKIE['info'];
        $payload = json_decode($string);
    }

    
    



?>


<img src="<?= $payload->picture ?>" alt="tete">
    <?php
    echo $payload->given_name;
    echo $payload->email;
    ?>



