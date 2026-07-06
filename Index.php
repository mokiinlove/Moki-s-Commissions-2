<?php
    session_start();

    $selected = $_SESSION['lang'] ?? 'en';

    $lang = require __DIR__ . "/languages/$selected.php";
?>

<!DOCTYPE html> <!-- TO CHANGE YOUR COMMISSIONS STATUS YOU CHANGE IT IN BOTH ENGLISH AND SPANISH FILES -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['page-title'] ?></title>
    
    <link rel="stylesheet" href="Index.css">
    <link rel="icon" type="image/png" href="./images/others/page-icon.png">
</head>
<body>
    <div class="full-div">
        <div class="inside-div"> <!-- FIRST INSIDE DIV -->
            <div class="status-div">
                <h1><?= $lang['status'] ?></h1>
            </div>
            <div class="status-text-div">
                <p><?= $lang['status-text'] ?></p>
            </div>
        </div>

        <div class="inside-div"> <!-- SECOND INSIDE DIV -->
            <div class="info-div">
                <h3><?= $lang['info-1'] ?></h3>
            </div>
        </div>
    </div>
</body>
</html>