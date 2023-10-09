<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klachten</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="klachten.css">
</head>
<body>
  <?php include_once('includes/header.php') ?>
  
  <div class="banner">
    <h2>Klachten</h2>
  </div>

  <div class="container">
    <div class="klachten">
      <img src="./img/klachten-1.png" alt="">
      <div>
        <p>
          Heeft u last van klachten?. <br>
          Maak een melding via deze pagina. <br>
          Wij proberen je zo snel mogelijk te helpen. <br>
          Ons team van werkemers gaan zo snel mogelijk aan de slag met u melding.
        </p>
      </div>
    </div>

    <form action="php/klachten.php">
      <label for="name">Naam:</label>
      <input type="text" name="name" id="name">

      <label for="email">Email:</label>
      <input type="email" name="email" id="email">

      <label for="description">Omschrijving:</label>
      <textarea name="description" id="description" cols="30" rows="10"></textarea>

      <input type="submit" value="Versturen">
    </form>
  </div>
</body>
</html>