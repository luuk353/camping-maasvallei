<?php
include_once("connect.php");

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $sql = "INSERT INTO `reserveringen` (begindatum, einddatum, klantnaam, email)
    VALUES(:begindatum, :einddatum, :klantnaam, :email)";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":begindatum", $_POST["begindatum"]);
    $stmt -> bindParam(":einddatum", $_POST["einddatum"]);
    $stmt -> bindParam(":klantnaam", $_POST["klantnaam"]);
    $stmt -> bindParam(":email", $_POST["email"]);
    $stmt -> execute();
}
echo'<script>alert("Je reservering is doorgestuurd naar de beheerder, je hoort zo snel mogelijk van ons!")</script>';

echo"<script>window.location.href='../index.php'</script>";
?>