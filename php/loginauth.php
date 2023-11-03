<?php
include_once("connect.php");


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM gebruikers WHERE username = :username";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":username", $_POST["username"]);
    $stmt -> execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
        if($_POST["password"] == $res["password"]) {
            $_SESSION["username"] = $res["username"];
            $_SESSION["rol"] = $res["rol"];
            break;
        }
    }
}

if(isset($_SESSION["rol"]) && $_SESSION["rol"] == 'admin') {
    header("Location: ../index.php");
} elseif (isset($_SESSION["rol"]) && $_SESSION["rol"] == 'werknemer') {
    header("Location: ../agenda.php");
} else {
    header("Location: ../index.php");
}
?>