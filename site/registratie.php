
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>

    <div class="registratie-pagina">
        
        <form action="verwerk-registratie.php" method="post">
            <h1> registratie</h1>

            <div class="input-groep">
                <label for="voornaam">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam">
            </div>

            <div class="input-groep">
                <label for="achternaam">Achternaam</label>
                <input type="text" name="achternaam" id="achternaam">
            </div>

            <div class="input-groep">
                <label for="Email Address">Email Address</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="input-groep">
                <label for="Phone">Telefoonnummer</label>
                <input type="tel" name="telefoonnummer" id="telefoonnummer">
            </div>

            <div class="input-groep">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" id="wachtwoord">
            </div>

            <div class="input-groep">
                <label for="verzeker_wachtwoord">Verzeker Wachtwoord</label>
                <input type="password" name="verzeker_wachtwoord" id="verzeker_wachtwoord">
            </div>

            <div class="input-groep">
                <button type="submit">Registeer nu</button>
            </div>
        </form>
    </div>

</body>

</html>