<head>
    <link rel="stylesheet" href="./style.css">

</head>



<?php
include "../template/header.html";

/* fichier pour les google log */

require "./config.php";

require "./googleReturn.php";

?>


<body class="whiteChange">
   
<section id="wrapper">

    <div id="container">

        <div id="logInCard">

            <div id="logInCard--Info">

                <?php
                require "./bddLog.php";
                ?>

                <h1 id="principalTitle">Hello There !</h1>
                <h4 id="welcomeTitle">Welcome to the NasaAPI-Log !</h4>


                <div id="g_id_onload"
                    data-client_id="200504414713-2eul6gujkfmfegiep91h2ea4a5htmorv.apps.googleusercontent.com"
                    data-context="signin"
                    data-ux_mode="popup"
                    data-login_uri="http://localhost/mutipage/NasaApi-Log/Profil/index.php"
                    data-auto_prompt="false">
                </div>

                <div class="g_id_signin"
                    data-type="standard"
                    data-shape="pill"
                    data-theme="outline"
                    data-text="signin_with"
                    data-size="large"
                    data-locale="en"
                    data-logo_alignment="left">
                </div>
        
        
                <div id="separate">
                    <hr class="hr">
                    <p id="Or">Or</p>
                    <hr class="hr">
                </div>
        

                <form method="post">

                <div id="email">
                    <input type="email" name="email" id="yourEmail" placeholder="Your email ...">
                </div>
        
                <div id="password">
                    <input type="password" name="pass" id="yourPass" placeholder="Your password ...">
                </div>
        
                <div id="forgot">
                    <a href="../Forgot/index.php" id="forgotPass">Forgot Password ?</a>
                </div>
        
                <div id="logInInApp">
                    <button type="submit" name="logInButton" id="logInButton">Log In</button>
                </div>
        
                <div id="createAccount">
                    <p class="noAccount">
                        Don't have an account ?
                    </p>
                    <a href="../SignUp/index.php" id="signUp">Sign Up</a>
                </div>

                </form>
                

            </div>

            <div id="logInCard--Picture">

                <div id="pictureLog">
                    
                </div>

            </div>

        </div>


    </div>
    
</section>

<script src="https://accounts.google.com/gsi/client" async defer></script>

<script src="../JS/flout.js"></script>
<script src="../JS/blackHole.js"></script>
<script src="../JS/logHidden.js"></script>

</body>

