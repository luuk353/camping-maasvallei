<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <?php 
    include_once "includes/header.php";

    if(isset($_POST['gebruikerID'])) {
        $sql = "UPDATE gebruikers
                SET username = :username, password = :password, rol = :rol, forgotcode = :forgotcode
                WHERE gebruikerID = :gebruikerID";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":username", $_POST["username"]);
        $stmt -> bindParam(":password", $_POST["password"]);
        $stmt -> bindParam(":rol", $_POST["rol"]);
        $stmt -> bindParam(":forgotcode", $_POST["forgotcode"]);
        $stmt -> bindParam(":gebruikerID", $_POST["gebruikerID"]);
        $stmt -> execute();
    }
    
    $sql = "SELECT * FROM reserveringen";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    $reserveringen = $stmt -> fetchAll();

    $sql = "SELECT * FROM klachten";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    $klachten = $stmt -> fetchAll();

    $sql = "SELECT * FROM gebruikers";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    $gebruikers = $stmt -> fetchAll();
    ?>
    
    <!-- Gebruikers -->
    <div class="gebruikers">
        <div>
            <h3>Gebruikers</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Rol</th>
                    <th>Forgotcode</th>
                    <th>Edit</th>
                </tr>
                <?php foreach($gebruikers as $res) { ?>
                    <tr>
                        <td><?php echo $res['gebruikerID'] ?></td>
                        <td><?php echo $res['username'] ?></td>
                        <td><?php echo $res['password'] ?></td>
                        <td><?php echo $res['rol'] ?></td>
                        <td><?php echo $res['forgotcode'] ?></td>
                        <td>
                            <a href="admin.php?gebruikerID=<?php echo $res['gebruikerID'] ?>">test</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <?php if(isset($_GET['gebruikerID'])) { ?>
            <?php
                $sql = "SELECT * FROM gebruikers WHERE gebruikerID = :gebruikerID";
                $stmt = $connect -> prepare($sql);
                $stmt -> bindParam(":gebruikerID", $_GET["gebruikerID"]);
                $stmt -> execute();
                $gebruiker = $stmt -> fetch();
            ?>
            
            <div>
                <h4>Gebruikers aanpassen</h4>
                <form action="admin.php" method="post">
                    <input type="text" name="gebruikerID" id="gebruikerID" value="<?= $gebruiker['gebruikerID'] ?>" hidden>

                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?= $gebruiker['username'] ?>">
                    
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="<?= $gebruiker['password'] ?>">
                    
                    <label for="rol">Rol</label>
                    <input type="text" name="rol" id="rol" value="<?= $gebruiker['rol'] ?>">
    
                    <label for="forgotcode">Forgotcode</label>
                    <input type="text" name="forgotcode" id="forgotcode" value="<?= $gebruiker['forgotcode'] ?>">
                    
                    <input type="submit" value="submit">
                </form>
            </div>
        <?php } ?>
    </div>
    
    <div class="container">
        <!-- Reserveringen -->
        <div class="reserveringen">
            <h3>Reserveringen</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Klantnaam</th>
                    <th>Email</th>
                    <th>Begindatum</th>
                    <th>Einddatum</th>
                </tr>
                <?php foreach($reserveringen as $res) { ?>
                    <tr>
                        <td><?php echo $res['reserveringsID'] ?></td>
                        <td><?php echo $res['klantnaam'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['begindatum'] ?></td>
                        <td><?php echo $res['einddatum'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    
        <!-- Klachten -->
        <div class="klachten">
            <h3>Klachten</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Klantnaam</th>
                    <th>Email</th>
                    <th>Bericht</th>
                </tr>
                
                <?php foreach($klachten as $res) { ?>
                    <tr>
                        <td><?php echo $res['klachtID'] ?></td>
                        <td><?php echo $res['klantnaam'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td>
                            <div class="bericht">
                                <p><?php echo $res['bericht'] ?></p>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>