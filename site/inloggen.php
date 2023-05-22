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
                            <h1> Aanmelden</h1>
                        </div>


                        <form action="verwerk-inloggen.php" method="post">

                            <div class="input-groep">
                                <label class="input-label" for="email">Email Address</label>
                                <input class="input_email_login" type="email" name="email" id="email">
                            </div>

                            <div class="input-groep">
                                <label class="input-label" for="wachtwoord">Wachtwoord</label>
                                <input class="input_wachtwoord_login" type="password" name="wachtwoord" id="wachtwoord">
                            </div>
                            <div class="input-groep">
                                <p> Nieuw bij onze website </p>
                            </div>

                            <div class="input-groep">
                                <a href="registratie.php"> Geen account klik hier</a>
                            </div>

                            <div class="input-groep">
                                <button type="submit" class="input-button"> Aanmelden</button>
                            </div>
                        </form>
                    </div>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>