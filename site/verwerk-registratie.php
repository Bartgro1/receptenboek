<?php  



   
        $voornaam              = $_POST['voornaam'];
        $achternaam            = $_POST['achternaam'];
        $email                 = $_POST['email'];
        $telefoonnummer        = $_POST['telefoonnummer'];
        $wachtwoord             = $_POST['wachtwoord'];
      
        require 'database.php';
    
        // wachtwoord hashen
        $hashed_password = password_hash($wachtwoord, PASSWORD_DEFAULT);
        


        $sql =  "INSERT INTO gebruikers(voornaam, achternaam, email, telefoonnummer, wachtwoord) 
        VALUES ('$voornaam','$achternaam','$email','$telefoonnummer','$hashed_password')";
    
        if (mysqli_query($conn, $sql)) {
            header("location: inloggen.php");
            exit;
        }