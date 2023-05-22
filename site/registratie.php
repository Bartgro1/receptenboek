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
    <main>
        <div class="registratie-pagina">
            <div class="form-panel">
                <div class="panel-body">
                    <div class="stripe-outer">
                        <div class="form-outer">
                            <h1> registratie</h1>
                            <form action="verwerk-registratie.php" method="post">


                                <div class="input-groep">
                                    <label class="input-label" for="voornaam"> Voornaam </label>
                                    <input type="text" name="voornaam" id="voornaam">
                                </div>

                                <div class="input-groep">
                                    <label class="input-label" for="achternaam"> Achternaam </label>
                                    <input type="text" name="achternaam" id="achternaam">
                                </div>

                                <div class="input-groep">
                                    <label class="input-label" for="email">Email Address</label>
                                    <input class="input-email" type="email" name="email" id="email">
                                </div>

                                <div class="input-groep">
                                    <label class="input-label" for="telefoonnummer">Telefoonnummer</label>
                                    <input class="input-tel" type="tel" name="telefoonnummer" id="telefoonnummer">
                                </div>

                                <div class="input-groep">
                                    <label class="input-label" for="wachtwoord">Wachtwoord</label>
                                    <input type="password" name="wachtwoord" id="wachtwoord">
                                </div>

                                <div class="input-groep">
                                    <label class="input-label" for="verzeker_wachtwoord">Verzeker Wachtwoord</label>
                                    <input type="password" name="verzeker_wachtwoord" id="verzeker_wachtwoord">
                                </div>

                                <div class="input-groep">
                                    <button type="submit" class="input_button"> Registeer nu</button>
                                </div>
                            </form>
                        </div>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>