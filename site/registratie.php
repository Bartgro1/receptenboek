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
    <main>
        <div class="container">
            <form action="" method="post">
                <div class="form-body">
                    <div class="row">
                        <div class="input-groep">
                            <label for="first">first</label>
                            <input type="text" name="first" id="">
                        </div>
                        <div class="input-groep">
                            <label for="second">second</label>
                            <input type="text" name="second" id="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>