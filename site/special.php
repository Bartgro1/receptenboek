<?php



require 'database.php';






$sql = "SELECT * FROM argentijnse_keuken where moeilijkheidsgraad = 'makkelijk'";

$result  = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql2 = "SELECT * FROM argentijnse_keuken where kooktijd = (select max(kooktijd) FROM argentijnse_keuken)";

$result  = mysqli_query($conn, $sql2);

$kooktijden = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql3 = "SELECT * FROM argentijnse_keuken where ingredienten = (select max(ingredienten) FROM argentijnse_keuken)";

$result  = mysqli_query($conn, $sql3);

$totale_ingredienten = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">

</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <main>
    <div class="container">
      <div class="test">
            <h2> kooktijd  </h2>
      </div>

      <div class="gerechten-container">       
        <?php foreach ($recepten as $recept) : ?>

          <div class="gerechten">
            
            <a href="recept.php?id=<?php echo $recept['recepten_id'] ?>">
              <img src="<?php echo  $recept['plaatje'] ?>">
              <div class="gerechten-naam">
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
    
    <div class="gerechten-container">       
        <?php foreach ($kooktijden as $kooktijd) : ?>
            
          <div class="gerechten">
            
            <a href="recept.php?id=<?php echo $kooktijd['recepten_id'] ?>">
              <img src="<?php echo  $kooktijd['plaatje'] ?>">
              <div class="gerechten-naam">
                <h2> <?php echo $kooktijd['naam'] ?></h2>
              </div>
              <div class="overlay">
                <div class="overlay-bar">
                  <div class="overlay-bar-container">
                    <div class="overlay-bar-items">
                      <img src="images/gerecht.png" alt="">
                      <p> <?php echo $kooktijd['menugang'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/klok.png" alt="">
                      <p> <?php echo $kooktijd['totale tijd'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/ster.png" alt="">
                      <p> <?php echo $kooktijd['moeilijkheidsgraad'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/persoon.png" alt="">
                      <p> <?php echo $kooktijd['aantal personen'] ?></p>
                    </div>
                  </div>
                </div>
            </a>        
          </div>
      </div> 
      <?php endforeach; ?>
      <div class="gerechten-container">       
        <?php foreach ($totale_ingredienten as $ingrediënt) : ?>

          <div class="gerechten">
            
            <a href="recept.php?id=<?php echo $ingrediënt['recepten_id'] ?>">
              <img src="<?php echo  $ingrediënt['plaatje'] ?>">
              <div class="gerechten-naam">
                <h2> <?php echo $ingrediënt['naam'] ?></h2>
              </div>
              <div class="overlay">
                <div class="overlay-bar">
                  <div class="overlay-bar-container">
                    <div class="overlay-bar-items">
                      <img src="images/gerecht.png" alt="">
                      <p> <?php echo $ingrediënt['menugang'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/klok.png" alt="">
                      <p> <?php echo $ingrediënt['totale tijd'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/ster.png" alt="">
                      <p> <?php echo $ingrediënt['moeilijkheidsgraad'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/persoon.png" alt="">
                      <p> <?php echo $ingrediënt['aantal personen'] ?></p>
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