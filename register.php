<?php
include_once "php/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="register.css">
    <title>Registeren</title>
</head>
<body>
    <?php include_once("includes/header.php") ?>

    <div class="content">
                <form name ="form" id="formulier-register" action="php/accountregister.php" method="post">
                <P>maak hier uw account aan: </P><br>
                <input type="text" name="username" placeholder="username" ><br>
                <p>maak hier uw wachtwoord aan:</p><br>
                <input type="password" name="password" placeholder="password"><br>
                <p> maak hier uw forgotcode aan, BEWAAR DEZE GOED!<br>(maximaal 5 cijfers)</p><br>
                <input type = "password" name = "forgotcode" placeholder = "forgotcode"> <br>
                <input type="submit" value="submit" name="submit"> <p> heeft u al een account? klik <a href = "login.php">hier </a>om in te loggen.</p>
    
            </form>
    </div>
</body>
</html>