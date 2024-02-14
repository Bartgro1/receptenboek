<?php


require 'database.php';


$sql = "SELECT *, kooktijd + bereidingstijd as tijd FROM argentijnse_keuken  order by recepten_id";




$stmt = $conn->prepare($sql);
$stmt->execute();
$recepten = $stmt->fetchAll(PDO::FETCH_ASSOC);

//if 
if (isset($_GET['submit'])) {

  $zoekterm = $_GET['zoekveld'];

  if (empty($zoekterm)) {
    header("location: recepten.php");
    exit;
  }


  $sql = "SELECT *, kooktijd + bereidingstijd as tijd FROM argentijnse_keuken where titel LIKE '%$zoekterm%'";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $recepten = $stmt->fetchAll(PDO::FETCH_ASSOC);
}




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

      <form action="recepten.php" class="zoeken" method="get">
        
         <button class="button-zoeken" type="submit" name="submit">
           zoeken
        </button>
<input type="text" name="zoekveld" id="zoekveld">
       
      </form>


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
                      <p> <?php echo $recept['tijd'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/ster.png" alt="">
                      <p> <?php echo $recept['moeilijkheidsgraad'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/persoon.png" alt="">
                      <p> <?php echo $recept['aantal_personen'] ?></p>
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