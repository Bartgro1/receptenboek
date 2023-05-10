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

        <form action="verwerk-inloggen.php" method="post">
            <h1> inloggen</h1>



            <div class="input-groep">
                <label for="Email Address">Email Address</label>
                <input class="input_email_login" type="email" name="email" id="email">
            </div>

            <div class="input-groep">
                <label for="wachtwoord">Wachtwoord</label>
                <input class="input_wachtwoord_login" type="password" name="wachtwoord" id="wachtwoord">
            </div>


            <div class="input-groep">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
  

</body>

</html>