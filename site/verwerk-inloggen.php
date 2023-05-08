<?php 


require 'database.php';

$email                  = $_GET['email'];
$wachtwoord             = $_GET['wachtwoord'];


require 'database.php';

$sql = "SELECT * FROM gebruikers where email  = $email and wachtwoord = $wachtwoord and id != 0";


if (mysqli_query($conn, $sql)) {
    header("location: inloggen.php");
    exit;
}