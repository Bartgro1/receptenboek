<?php


require 'database.php';

$sql = "SELECT * FROM argentijnse_keuken";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <?php foreach ($recepten as $recept) : ?>

          <div class="recept">
            <a href="recept.php">
              <img src="<?php echo  $recept['plaatje'] ?>">
              <div class="receptnaam">
                <h2> <?php echo $recept['naam'] ?></h2>
              </div>
              <div class="overlay">
                <div class="overlay-bar">
                  <div class="overlay-bar-container">
                    <div class="overlay-bar-items">
                      <img src="images/gerecht.png" alt="">
                      <p> <?php echo $recept['menugang'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/klok.png" alt="">
                      <p> <?php echo $recept['totale tijd'] ?></p>
                    </div>
                    <div class="overlay-bar-items">

                      <img src="images/ster.png" alt="">
                      <p> <?php echo $recept['moeilijkheidsgraad'] ?></p>

                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/persoon.png" alt="">
                      <p> <?php echo $recept['aantal personen'] ?></p>
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