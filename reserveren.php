<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reserveren.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "includes/header.php";

    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
    }
    ?>

    <div class = "container"> 
        <div class="reserveren">
            <div class="titel">
                <h1>Reserveren</h1>
            </div>
            <form action="php/reserveren.php" method="POST">
                <p> kies de begindatum waarop u wilt reserveren</p>
                <input type="date" name="begindatum" id="begindatum">
                <p>kies de Einddatum van de reservering</p>
                <input type="date" name="einddatum" id="einddatum">
                <p>vul hier uw naam in</p>
                <input type="text" name= "klantnaam">
                <p>vul hier uw E-mail zodat we u op de hoogte kunnen houden van uw reservering</p>
                <input type="email" name = "email">
                <input type="submit" name="submit" value = "reserveren"  action="submit">
            </form>
        </div>

    </div>
    
</body>
</html>