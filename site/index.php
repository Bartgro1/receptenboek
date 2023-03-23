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

              
              <hr>
            </div>
            <div class="recept-box">
              <div class="recept-ing">
                <img class="recept-foto" src="<?php echo  $recept['plaatje'] ?>">


                .
                <div class="timers">
                
                <div class="timer-tijd">
                  <img class="timer" src="images/klok.png" alt="">
                  <h2>bereidingstijd</h2>
                </div>
                <div class="bereidingstijd">
                <p class="kooktijd"> <?php echo $recept['bereidingstijd'] ?> </p>
                </div>
                </div>

                <div class="timers">
                <div class="timer-tijd">
                  <img class="timer" src="images/klok.png" alt="">
                  <h2>kooktijd</h2>
                  </div>
                  <div class="bereidingstijd">
                  <p class="kooktijd">  <?php echo $recept['kooktijd'] ?> </p>
                  <div class="ingrediënten">
                      <h2> ingrediënten </h2>
                      <p><?php echo $recept['ingredienten'] ?></p>
                  </div>
                  </div>            
                </div>
                 </div>
              

              <div class="recept-instr">
                <h2> <?php echo $recept['menugang'] ?></h2>
                <p> <?php echo $recept['bereidingswijze'] ?> </p>
                <div class="blok"> 
                  <div class="blok-inhoud">
                   <img src="images/ster.png" alt=""> 
                  <p> <?php echo $recept['moeilijkheidsgraad']?></p>
                  </div>
                </div>
                
              </div>
            </div>
            <hr>
          <?php endforeach; ?>
    </div>
    </div>
  </main>
  <?php include 'footer.php' ?>
</body>

</html>