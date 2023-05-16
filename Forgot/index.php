<head>
    <link rel="stylesheet" href="./style.css">
</head>

<?php
include "../template/header.html";
?>

<?php

$email = '...';
$number = '';

include "../dataBases/index.php";

$sql = "SELECT emailProfil FROM `profil`";

$request = $conn->query($sql);

$result = $request->fetch(PDO::FETCH_ASSOC);

// var_dump($result);
// echo $result['emailProfil'];

var_dump($_POST);

if(!empty($_POST)){
    if(isset($_POST['email'])){
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        }
    }

    if(isset($_POST['number'])){
        if(!empty($_POST['number'])){
            $number = $_POST['number'];
        }
    }
}

foreach($result as $emailResult){
    if($emailResult === $email){
        echo "yes";

        // Utilisation de php mailer


        // utilisation de php sendmail

        // if(mail($email, 'Changement de mot de passe', 'code de vérification :', 'From : man.crepe56@gmail.com')){
        //     echo "mail bien envoyer";
        // } else {
        //     echo "mail non-envoyer";
        // }
        $email = "...";
    } else {
        echo "no";
    }
}

if($number != 10){
    $email = "...";
}

?>

<body class="whiteChange">
   
    <section id="wrapper">

    <div id="container">

        <div id="forgotCard">

            <div id="forgotCard--Info">

            <h4 id="forgotTitle">One forgets ?</h4>

            <form method="post">

                <label class="labelFor" for="yourEmail">Whrite your email here :</label>
                <div id="email">
                    <input type="email" name="email" id="yourEmail">
                </div>

                <div class="forgetButtonDiv">
                    <button type="submit" name="forgetButton" class="forgetButton">Send</button>
                </div>

            </form>

            <p class="text">The verifing code was send to <?= $email ?>.</p>

            <form method="post">

            <label class="labelFor" for="number">Verification code :</label>
            <div id="number">
               <input type="text" name="number" id="yourNumber"> 
            </div>

            <div class="forgetButtonDiv">
                <button type="submit" name="forgetButton" class="forgetButton">Verifing</button>
            </div>
            
            </form>

            </div>

            <div id="forgotCard--Picture">

                <div id="forgotPicture">
                    <!-- <img id="pictureLog--Astro" src="../image/Astronaute.png" alt=""> -->
                </div>

            </div>

        </div>


    </div>

    </section>

<script src="../JS/flout.js"></script>
<script src="../JS/blackHole.js"></script>
<script src="../JS/logHidden.js"></script>

</body>