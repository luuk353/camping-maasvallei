<?php
include_once('php/connect.php');
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
    <title>Admin</title>
</head>
<body>
    <?php include_once "includes/header.php"; ?>

    <?php 
    $sql = "SELECT * FROM reserveringen";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) { 
        echo "<table>";
        echo "<tr>";
        echo "<td>{$res['datum']}</td>";
        echo "<td>{$res['klantnaam']}</td>";
        echo "<td>{$res['telefoonnummer']}</td>";
        echo "<td>{$res['e-mail']}</td>";
        echo "<td>{$res['reserveringsID']}</td>";
        echo "<td>{$res['locatie']}</td>";
        echo "</tr>";
        echo "</table>";
    }
    

     ?>

</body>
</html>