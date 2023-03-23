<?php


require 'database.php';

$sql = "SELECT * FROM argentijnse_keuken";

$result = mysqli_query($conn, $sql);

$alle_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <?php foreach ($alle_recepten as $recept) : ?>
          <div class="recepten">
            <div class="recept-tijd-titel">
              <h1> <?php echo $recept['naam'] ?> </h1>
              <!--<p class="persone"> <?php echo $recept['aantal personen'] ?> 
               class="personen"  </p>
              <p class="personn" </p> -->
              <hr>
            </div>
            <div class="recept-box">
              <div class="recept-ing">
                <img class="recept-foto" src="<?php echo  $recept['plaatje'] ?>">


                .
                <div class="timers">
                  <img class="timer" src="images/klok.png" alt="">
                  <h2>kooktijd</h2>

                </div class="vis">
                <p> <?php echo $recept['bereidingstijd'] ?> </p>
              </div>

            </div>
            <div class="timers">

              <img class="timer" src="images/klok.png" alt="">
              <h2>kooktijd</h2>
              <div class="vis">
              <p><?php echo $recept['kooktijd'] ?> </p>
              </div>
            </div>
            <p class="in"> ingrediënten: </p>
            <p class="in-2"> <?php echo $recept['ingredienten'] ?></p>
          </div>

          <div class="recept-instr">
            <h2> instructies</h2>
            <p> <?php echo $recept['bereidingswijze'] ?> </p>
          </div>
      </div>
      <hr>
    <?php endforeach; ?>

    </div>
    </div>
    </div>
    </div>
  </main>
  <?php include 'footer.php' ?>
</body>

</html>