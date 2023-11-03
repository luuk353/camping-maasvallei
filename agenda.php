<?php include_once('php/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="agenda.css">
</head>
<body>
    <?php include_once "includes/header.php"; ?>

    <div class="banner">
        <h2>Agenda</h2>
    </div>

    <div class="container">
      <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FAmsterdam&title=Maasvallei&mode=WEEK&src=N2UyZmE0NjQ3NzBjMTdiMDc5NjY3ZmM4YTM3OTk4Y2I4M2EyZjRiMTViMTAzNGI2ZGJlZjQ1ZmMyZDZjMGViM0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4" style="border:solid 1px #777" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
    </div>
</body>
</html>