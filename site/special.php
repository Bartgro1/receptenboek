<?php



require 'database.php';






$sql = "SELECT *, bereidingstijd + kooktijd as tijd FROM argentijnse_keuken where moeilijkheidsgraad = 'makkelijk' order by recepten_id limit 3";

$result  = mysqli_query($conn, $sql);

$makkelijke_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql2 = "SELECT *, bereidingstijd + kooktijd as tijd FROM argentijnse_keuken WHERE kooktijd = (select max(kooktijd) FROM argentijnse_keuken)";

$result  = mysqli_query($conn, $sql2);

$kooktijden = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql3 = "SELECT *,  bereidingstijd + kooktijd as tijd FROM argentijnse_keuken where aantal_personen = (select max(aantal_personen) FROM argentijnse_keuken)";

$result  = mysqli_query($conn, $sql3);

$totale_ingredienten = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_GET['submit'])) {

  $zoekterm = $_GET['zoekveld'];

  if (empty($zoekterm)) {
    header("location: special.php");
    exit;
  }


  $sql = "SELECT *, kooktijd + bereidingstijd as tijd FROM argentijnse_keuken where moeilijkheidsgraad LIKE '%$zoekterm%'";

  $result = mysqli_query($conn, $sql);

  $makkelijk_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
  <main class="normale-main">
    <div class="container">
      <form action="recepten.php" class="zoeken" method="get">

        <button class="button-zoeken" type="submit" name="submit">
          zoeken
        </button>
        <input type="text" name="zoekveld" id="zoekveld">

      </form>
     

      <div class="gerechten-container">
        <?php foreach ($makkelijke_recepten as $makkelijk_recept) : ?>

          <div class="gerechten">

            <a href="recept.php?id=<?php echo $makkelijk_recept['recepten_id'] ?>">
              <img src="<?php echo  $makkelijk_recept['plaatje'] ?>">
              <div class="gerechten-naam">
                <h2> <?php echo $makkelijk_recept['titel'] ?></h2>
              </div>
              <div class="overlay">
                <div class="overlay-bar">
                  <div class="overlay-bar-container">
                    <div class="overlay-bar-items">
                      <img src="images/gerecht.png" alt="">
                      <p> <?php echo $makkelijk_recept['menugang'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/klok.png" alt="">
                      <p> <?php echo $makkelijk_recept['tijd'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/ster.png" alt="">
                      <p> <?php echo $makkelijk_recept['moeilijkheidsgraad'] ?></p>
                    </div>
                    <div class="overlay-bar-items">
                      <img src="images/persoon.png" alt="">
                      <p> <?php echo $makkelijk_recept['aantal_personen'] ?></p>
                    </div>
                  </div>
                </div>
            </a>
          </div>
      </div>
    <?php endforeach; ?>
    <div class="categorie-tekst">
      <hr>
    </div>


    <div class="gerechten-container">
      <?php foreach ($kooktijden as $kooktijd) : ?>

        <div class="gerechten">

          <a href="recept.php?id=<?php echo $kooktijd['recepten_id'] ?>">
            <img src="<?php echo  $kooktijd['plaatje'] ?>">
            <div class="gerechten-naam">
              <h2> <?php echo $kooktijd['titel'] ?></h2>
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
                    <p> <?php echo $kooktijd['tijd'] ?></p>
                  </div>
                  <div class="overlay-bar-items">
                    <img src="images/ster.png" alt="">
                    <p> <?php echo $kooktijd['moeilijkheidsgraad'] ?></p>
                  </div>
                  <div class="overlay-bar-items">
                    <img src="images/persoon.png" alt="">
                    <p> <?php echo $kooktijd['aantal_personen'] ?></p>
                  </div>
                </div>
              </div>
          </a>
        </div>
    </div>
  <?php endforeach; ?>
  <div class="categorie-tekst">
    <hr>
  </div>
  <div class="gerechten-container">
    <?php foreach ($totale_ingredienten as $ingrediënt) : ?>
      <div class="gerechten">

        <a href="recept.php?id=<?php echo $ingrediënt['recepten_id'] ?>">
          <img src="<?php echo  $ingrediënt['plaatje'] ?>">
          <div class="gerechten-naam">
            <h2> <?php echo $ingrediënt['titel'] ?></h2>
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
                  <p> <?php echo $ingrediënt['tijd'] ?></p>
                </div>
                <div class="overlay-bar-items">
                  <img src="images/ster.png" alt="">
                  <p> <?php echo $ingrediënt['moeilijkheidsgraad'] ?></p>
                </div>
                <div class="overlay-bar-items">
                  <img src="images/persoon.png" alt="">
                  <p> <?php echo $ingrediënt['aantal_personen'] ?></p>
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