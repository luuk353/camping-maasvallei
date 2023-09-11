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

    <div class="register">
        <!-- TODO: Link to backend -->
        <form action="#" method="post" class="login">
            <h1>Registeren</h1>
            
            <label for="naam">Voornaam en achternaam</label>
            <input type="text" name="name" id="name" placeholder="Bijv: Jan van Huis">
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email invullen...">
    
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" placeholder="Wachtwoord invullen...">
    
            <label for="password">Wachtwoord nog een keer</label>
            <input type="password" name="password-repeat" id="password-repeat" placeholder="Wachtwoord invullen...">
            
            <input type="submit" value="Registeren">
            
            <a href="./login.php">Inloggen</a>
        </form>
    </div>
</body>
</html>