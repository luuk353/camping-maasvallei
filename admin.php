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

    ?>
    <!-- Reserveringen -->
    <h3>Reserveringen</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Klantnaam</th>
            <th>Email</th>
            <th>Begindatum</th>
            <th>Einddatum</th>
        </tr>
        <?php foreach($result as $res) { ?>
            <tr>
                <td><?php echo $res['reserveringsID'] ?></td>
                <td><?php echo $res['klantnaam'] ?></td>
                <td><?php echo $res['email'] ?></td>
                <td><?php echo $res['begindatum'] ?></td>
                <td><?php echo $res['einddatum'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>