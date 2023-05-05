<?php
include "../template/header.html";

include "./array_info.php";
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="wrapper">
        <button onclick="clickPlus()">changer+1</button>
        <button onclick="clickMinus()">changer-1</button>
        <?php
            for ($i = 0; $i < count($array); $i++):
        ?>
            <div class="Planet data">                    

                <div class="planet_info">
                    <img class="planet_img" src="<?= $array[$i]['picture'] ?>" alt="">
                                
                    <article class="info">
                        <h3 class="title_Planet"> <?= $array[$i]['name'] ?> </h3>
                        <span class="title_for_info">Planet Type</span><span class="info_of_Planete"><?= $array[$i]['type'] ?></span>
                        <span class="title_for_info">Length Of Year</span><span class="info_of_Planete"><?= $array[$i]['year'] ?></span>
                        <span class="title_for_info">Distance From Sun</span><span class="info_of_Planete"><?= $array[$i]['distance'] ?></span>
                        <span class="title_for_info">Size Comparison</span><span class="info_of_Planete"><?= $array[$i]['size'] ?></span>
                
                    </article>
                </div>

                <article>
                    <p class="text_info">
                    <?= $array[$i]['text'] ?>
                    </p>
                </article>             

            </div>

        <?php
            endfor;
        ?>
        
    </section>
</body>



<script src="../JS/app.js"></script>