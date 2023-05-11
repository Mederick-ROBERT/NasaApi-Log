<head>
    <link rel="stylesheet" href="./style.css">
</head>

<?php
include "../template/header.html";

?>

<body class="whiteChange">
   
<section id="wrapper">

    <div id="container">

        <div id="logInCard">

            <div id="logInCard--Info">

                <h4 id="createTitle">Create Your Account</h4>


                <label class="labelFor" for="yourName">Name :</label>
                <div id="name">
                    <input type="text" name="nameOff" id="yourName">
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