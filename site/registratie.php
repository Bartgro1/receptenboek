<?php
require 'database.php';
?>

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
        <form class="signup-form" action="" method="post">
            <div class="form-header">
                <h1>registratie form </h1>
            </div>
            <div class="form-body">
                <div class="row">
                    <div class="input-group">
                        <label>First name </label>
                        <input type="text" placholder="Enter your first name">
                    </div>
                    <div class="input-group">
                        <label>Last name</label>
                        <input type="text" placholder="Enter your last name">
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>