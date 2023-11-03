<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="klachtenlijst.css">
    <title>Admin</title>
</head>
<body>
    <?php
    include_once "includes/header.php";

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM `klachten` WHERE klachtID = :klachtID";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":klachtID", $_GET["id"]);
        $stmt -> execute();
    }
    ?>

    <div class="container">
        <?php
        $sql = "SELECT * FROM klachten";
        $stmt = $connect -> prepare($sql);
        $stmt -> execute();
        $klachten = $stmt -> fetchAll();
        ?>
    
        <!-- Klachten -->
        <div class="klachten">
            <h3>Klachten</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Klantnaam</th>
                    <th>Email</th>
                    <th>Bericht</th>
                    <th>Verwerken</th>
                </tr>

                <?php foreach($klachten as $res) { ?>
                    <tr>
                        <td><?php echo $res['klachtID'] ?></td>
                        <td><?php echo $res['klantnaam'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['bericht'] ?></td>
                        <td>
                            <a href="klachtenlijst.php?id=<?php echo $res['klachtID'] ?>">
                                Verwerkt
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>