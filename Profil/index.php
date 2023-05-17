<?php

// Vérification du profil


include "../template/header.html";

include "../vendor/autoload.php";

include "../LogIn/googleReturn.php";

include "./cookie.php";

?>

<head>
    <link rel="stylesheet" href="./style.css">

</head>

<body class="whiteChange">

<section id="wrapper">
    
    <div id="container">

        <div id="profilCard">
     
            <div id="picture">
                <?php
                if($payload != null):
                ?>
                <img src="<?= $payload->picture ?>" id="profilPicture" alt="tete">
                <?php
                endif;
                ?>

<?php
                if($result != null):
                ?>
                <div id="loopPicture">
                    <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_oTxIKY4Uu6.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player> -->
                    <div id="spaceman">
                        <img id="spacemanPicture" src="../image/spaceman/moonSpaceMan2.png" alt="">
                    </div>
                </div>
                <?php
                endif;
                ?>
                
            </div>


            <div id="profilInfo">

                <div id="profilInfo--Card">

                    <?php
                        if($payload != null):
                    ?>

                    <h3 id="profilName"><?= $payload->name ?></h3>

                    <?php
                        endif;
                    ?>

                    <?php
                        if($result != null):
                    ?>

                    <h2 id="profilName"><?= $emailResult['usernameProfil'] ?></h2>

                    <h3 id="profilName"><?= $emailResult['emailProfil'] ?></h3>
                    
                    <?php
                        endif;
                    ?>

                </div>
               
             </div>

        </div>
        
    </div>

</section>  

<script src="../JS/flout.js"></script>
<script src="../JS/blackHole.js"></script>
<script src="../JS/logHidden.js"></script>

</body>





