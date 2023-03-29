<?php



require 'database.php';

$sql = "SELECT * FROM argentijnse_keuken";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);




$sql2 = "SELECT * FROM argentijnse_keuken where moeilijkheidsgraad = 'makkelijk'";


$result  = mysqli_query($conn, $sql2);

$makkelijk = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <main>
        <div class="container">
            <div class="flex-container">
                <div class="buttons">



                    <form action="special.php">
                        <button type="submit">Click me </button>
                    </form>


                </div>
                <?php foreach ($recepten as $recept) : ?>
                    <div class="recept">
                        <div class="receptnaam">

                        </div>
                        <div class="overlay">
                            <div class="overlay-bar">
                                <div class="overlay-bar-container">
                                    <div class="overlay-bar-items">
                                        <img src="images/gerecht.png" alt="">

                                    </div>
                                    <div class="overlay-bar-items">
                                        <img src="images/klok.png" alt="">

                                    </div>
                                    <div class="overlay-bar-items">
                                        <img src="images/ster.png" alt="">

                                    </div>
                                    <div class="overlay-bar-items">
                                        <img src="images/persoon.png" alt="">
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>