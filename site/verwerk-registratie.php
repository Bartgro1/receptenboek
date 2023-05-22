<?php  



    
    
        $voornaam              = $_POST['voornaam'];
        $achternaam            = $_POST['achternaam'];
        $email                 = $_POST['email'];
        $telefoonnummer        = $_POST['telefoonnummer'];
        $wachtwoord             = $_POST['wachtwoord'];
        $verzeker_wachtwoord   = $_POST['verzeker_wachtwoord'];
      
        require 'database.php';
    
        // wachtwoord hashen
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        $sql =  "INSERT INTO gebruikers(voornaam, achternaam, email, telefoonnummer, wachtwoord, verzeker_wachtwoord) 
        VALUES ('$voornaam','$achternaam','$email','$telefoonnummer','$wachtwoord','$verzeker_wachtwoord')";
    
        if (mysqli_query($conn, $sql)) {
            header("location: inloggen.php");
            exit;
        }