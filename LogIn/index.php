<head>
    <link rel="stylesheet" href="./style.css">

    <meta name="google-signin-client_id" content="200504414713-2eul6gujkfmfegiep91h2ea4a5htmorv.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../JS/google.js"></script>
</head>

<?php
include "../template/header.html";

?>

<body class="whiteChange">
   
<section id="wrapper">

    <div id="container">

        <div id="logInCard">

            <div id="logInCard--Info">

                <h1 id="principalTitle">Hello There !</h1>
                <h4 id="welcomeTitle">Welcome to the NasaAPI-Log !</h4>
        
                <!-- <div id="googleLog">
                    <img src="../image/google.svg" alt="">
                    <a href="#" id="googleLinks">Log In With Google</a>
                </div> -->

                <div id="bloc_page">

                    <div id="gSignIn"></div>		
                    <div class="userContent"></div>

                                        
                </div>
        
        
                <div id="separate">
                    <hr class="hr">
                    <p id="Or">Or</p>
                    <hr class="hr">
                </div>
        
                <div id="email">
                    <input type="email" name="email" id="yourEmail" placeholder="Your email ...">
                </div>
        
                <div id="password">
                    <input type="password" name="pass" id="yourPass" placeholder="Your password ...">
                </div>
        
                <div id="forgot">
                    <a href="#" id="forgotPass">Forgot Password ?</a>
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