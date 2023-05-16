<head>
    <link rel="stylesheet" href="./style.css">
</head>

<?php

include "../dataBases/index.php";

if(!empty($_POST)){

    if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])){
        if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pass'])){

            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // inscription de la requete

            $sql = 'INSERT INTO `profil` (`nameProfil`, `usernameProfil`, `emailProfil`, `passwordProfil`) VALUES (:name, :username, :email, :pass)';

            // preparation de la requete
            $query = $conn->prepare($sql);

            // injection des valeur
            $query->bindValue(":name", $name);
            $query->bindValue(":username", $username);
            $query->bindValue(":email", $email);
            $query->bindValue(":pass", $pass);

            // execution de la requete
            $query->execute();

            header("location: ../home/index.php");
            exit();

        } else {
            echo "informations manquantes ou invalides";
        }
    } // fin du isset



}

?>

<?php
include "../template/header.html";

?>

<body class="whiteChange">
   
<section id="wrapper">

    <div id="container">

        <div id="logInCard">

            <div id="logInCard--Info">

                <h4 id="createTitle">Create Your Account</h4>

                <form method="post">

                    <label class="labelFor" for="yourName">Name :</label>
                    <div id="name">
                        <input type="text" name="name" id="yourName">
                    </div>

                    <label class="labelFor" for="yourUsername">Username</label>
                    <div id="username">
                        <input type="text" name="username" id="yourUsername">
                    </div>

                    <label class="labelFor" for="yourEmail">Email :</label>
                    <div id="email">
                        <input type="email" name="email" id="yourEmail">
                    </div>

                    <label class="labelFor" for="yourPass">Password :</label>
                    <div id="password">
                        <input type="password" name="pass" id="yourPass">
                    </div>
            
                    
            
                    <div id="signUpInApp">
                        <button type="submit" name="signUpButton" id="signUpButton">Sign Up</button>
                    </div>

                </form>

            </div>

            <div id="logInCard--Picture">

                <div id="pictureLog">
                    <!-- <img id="pictureLog--Astro" src="../image/Astronaute.png" alt=""> -->
                </div>

            </div>

        </div>


    </div>
    
</section>

</body>

<script src="../JS/flout.js"></script>
<script src="../JS/blackHole.js"></script>
<script src="../JS/logHidden.js"></script>