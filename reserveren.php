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
        <div class="steps">
            <p id = "stepstext">
            <br>
            1. vul de gegevens in<br>
            <br>
            2. selecteerd een kampeer plek<br>
            <br>
            3. selecteerd de betaalmethode <br>
            <br>
            4. ontvang confirmatie</p>
        </div>

        <div class="reserveren">
            <div class="titel">
                <h1>Reserveren</h1>
            </div>
            <form action="php/reserveren.php" method="POST">
                <p> kies de datum waarop u wilt reserveren</p>
                <input type="date" name="datum" id="datum">
                <p>Naam</p>
                <input type="text" name= "klantnaam">
                <p>E-mail</p>
                <input type="email" name = "email">
                <input type="submit" name="submit" value = "reserveren"  action="submit">
            </form>
        </div>

    </div>
    
</body>
</html>