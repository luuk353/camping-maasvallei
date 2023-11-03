<?php include_once('php/connect.php'); ?>

<nav class="header">
    <!-- Alleen te zien als je niet ingelogd bent -->
    <?php if(!isset($_SESSION["rol"])) { ?>
        <div class="login-link">
            <a href="./login.php"><p>Login</p></a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
    <?php } elseif(isset($_SESSION["rol"])) {?>
        <div class="login-link">
            <a href="php/logout.php"><p>Uitloggen</p></a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
    <?php } ?>
    
    <div class="links">
        <a href="./index.php"><p>Welkom</p></a>        
        <a href="./reserveren.php"><p>Reserveren</p></a>
        <a href="./fotogalerij.php"><p>Fotogalerij</p></a>
        <a href="./klachten.php"><p>Klachten</p></a>
        <a href="./kampeer-plaatsen.php"><p>Kampeer Plaatsen</p></a>

        <!-- Alleen voor werknemers te zien -->
        <?php if(isset($_SESSION["rol"]) && $_SESSION["rol"] == 'werknemer') { ?>
            <a href="./agenda.php"><p>Agenda</p></a>
        <?php } ?>

        <?php if(isset($_SESSION["rol"]) && $_SESSION["rol"] == 'admin') { ?>
            <a href="./admin.php"><p>Admin</p></a>
        <?php } ?>
    </div>
</nav>