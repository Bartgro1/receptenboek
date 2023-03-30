<?php


require 'database.php';

$sql = "SELECT * FROM argentijnse_keuken Where recepten_id = 4";

$result = mysqli_query($conn, $sql);

$hoofd_recept = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM argentijnse_keuken limit 3";

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
</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'nav.php' ?>
    <main>
        <div class="top-content">
            <a href="recept.php?id=<?php echo $hoofd_recept['recepten_id'] ?>">
                <img class="recept-foto" src="<?php echo  $hoofd_recept['plaatje'] ?>">
                </div>
                <div class="top-content-naam">
                    <h2><?php echo  $hoofd_recept['naam'] ?></h2>
            </a>
        </div>
        <div class="container">
            <div class="recept-titel">
                <h1> Recepten </h1>
                <hr>
            </div>
             
            <div class="recepten-flexbox">
           <?php foreach ($recepten as $recept): ?>
               <div class="recepten-item">
               <a href="recept.php?id=<?php echo $recept['recepten_id'] ?>">
                <img class="recept-foto" src="<?php echo  $recept['plaatje'] ?>">
                <p><?php echo  $recept['naam'] ?></p> </a>
               </div>
               <?php endforeach; ?>                      
            </div>           
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>