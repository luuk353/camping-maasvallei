<?php
    include_once('php/connect.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php include_once "includes/header.php"; ?>

    <div class="banner">
        <h2>Reserveer nu</h2>
    </div>

    <div class="container">
        <img src="./img/index-1.png" alt="">
        
        <div class="content">
            <div class="info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolo</p>
            </div>
            <div class="info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolo</p>
            </div>
        </div>

        <div class="content">
            <div class="info">
                <h2>Maak makkelijk een reservering</h2>
            </div>
            
            <div class="info">
                <img src="./img/index-2.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>