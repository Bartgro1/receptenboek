<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include 'index.php';
    exit;
}

$email    = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

require 'database.php';

$sql = "SELECT * FROM gebruikers WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

$gebruiker = mysqli_fetch_assoc($result);

if (!is_array($gebruiker)) {
    header("location: inloggen.php");
    exit();
}

if (password_verify($wachtwoord, $user['password'])) {
    session_start();

    $_SESSION['isIngelogd'] = true;
    $_SESSION['firstname'] = $gebruiker['voornaam'];
    
    header("location: dashboard.php");
    exit();
}












header("location: inloggen.php");
exit();
