<?php
    session_start();

    $selected = $_SESSION['lang'] ?? 'en';

    $lang = require __DIR__ . "/languages/$selected.php";
?>

<!DOCTYPE html> <!-- TO CHANGE YOUR COMMISSIONS STATUS YOU CHANGE IT IN BOTH ENGLISH AND SPANISH FILES -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['page-title'] ?></title>
    
    <link rel="stylesheet" href="Index.css">
    <link rel="icon" type="image/png" href="./images/others/page-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Pixel&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-div">

        <div class="inside-div first-inside-div"> <!-- FIRST INSIDE DIV -->

            <div class="status-div">
                <h1 class="text-no-margin"><?= $lang['mollys'] ?></h1>
            </div>
            <div class="status-text-div">
                <p class="text-margin-1"><?= $lang['status-text'] ?></p>
            </div>

        </div>

        <div class="inside-div second-inside-div"> <!-- SECOND INSIDE DIV -->

            <div class="info-double-div">
                <label class="text-no-margin"><?= $lang['info-2'] ?></label>

                <div class="separator"></div>
                
                <div class=img-fetti-div>
                    <img class="img-fetti-og" src="./images/artwork/fetti-og.png" onclick="playClick()">
                </div>
            </div>

        </div>

    </div>

</body>
</html>



<audio id="clickSound" src="./sound/meow.mp3" preload="auto"></audio>

<script src="./sound.js"></script>