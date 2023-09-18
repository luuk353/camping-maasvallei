<?php
include_once "php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <?php include_once("includes/header.php") ?>

    <div class="login">
        <!-- TODO: Link to backend -->
        <form action="php/loginauth.php" method="post" class="login">
            <h1>Login</h1>

            <label for="username">username</label>
            <input type="username" name="username" id="username" placeholder="username invullen...">
    
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" placeholder="Wachtwoord invullen...">
    
            <input type="submit" value="Inloggen">

            <a href="./register.php">Account registeren</a>
        </form>
    </div>
</body>
</html>