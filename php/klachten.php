<?php
include_once("connect.php");

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $sql = "INSERT INTO `klachten` (bericht, klantnaam, email, onderwerp) 
    VALUES(:bericht, :klantnaam, :email, :onderwerp)";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":bericht", $_POST["bericht"]);
    $stmt -> bindParam(":klantnaam", $_POST["klantnaam"]);
    $stmt -> bindParam(":email", $_POST["email"]);
    $stmt -> bindParam(":onderwerp", $_POST["onderwerp"]);
    $stmt -> execute();
}
echo '<script>alert("De klacht is succesvol ingediend, een beheerder zal het zo snel mogelijk in behandeling nemen.")</script>';

echo"<script>window.location.href='../index.php'</script>";
?>