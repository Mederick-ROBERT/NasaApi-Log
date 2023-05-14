<?php
/**
 * Qu'est ce qu'il y aura dans mon home ?
 * 
 *  récap du profil -> création d'une page de profil + d'une page de connexion
 *  https://lottiefiles.com/143987-gradient
 * 
 *  Latest Information sous forme d'un slider
 * 
 *  Distance et info de la planete préferer
 * 
 *  (en + : un avatar)
 * 
 */
?>

<head>
    <link rel="stylesheet" href="./style.css">
</head>



<?php
include "../template/header.html";

include "../vendor/autoload.php";

include "../LogIn/googleReturn.php";

?>


<body class="whiteChange">
   
<section id="wrapper">

    <div id="header">
        <img class="principalLogo" src="../image/NASA_logo.png" alt="">
        <h1 id="principalTitle">NasaAPI-Log</h1>
    </div>


    <img src="<?= $payload['picture'] ?>" alt="">
    <?php
    echo $payload['given_name'];
    echo $payload['email'];
    ?>

</section>

</body>

<script src="../JS/flout.js"></script>
<script src="../JS/blackHole.js"></script>