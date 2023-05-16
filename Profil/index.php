<?php

// Vrification du profil

include "../template/header.html";

include "../vendor/autoload.php";

include "../LogIn/googleReturn.php";


    if(empty($_COOKIE['info'])){
        header('location:../LogIn/index.php');
    } else {
        $string = $_COOKIE['info'];
        $payload = json_decode($string);
    }

    
?>

<head>
    <link rel="stylesheet" href="./style.css">

</head>

<body class="whiteChange">

<section id="wrapper">

    

    <div id="container">

        <div id="profilCard">
     
            <div id="picture">
                <img src="<?= $payload->picture ?>" id="profilPicture" alt="tete">
            </div>


            <div id="profilInfo">

                <h3 id="profilName"><?= $payload->name ?></h3>
                <?php
                // echo $payload->given_name;
                // echo $payload->email;
                ?>

             </div>

        </div>
        
    </div>




</section>  

<script src="../JS/flout.js"></script>
<script src="../JS/blackHole.js"></script>
<script src="../JS/logHidden.js"></script>

</body>





