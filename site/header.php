<!--<?php

require 'database.php';



$sql = "SELECT count(naam) AS aantal FROM argentijnse_keuken ";

$result  = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

var_dump($recept);




?>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <header class="top-header">
          <span style="color:goldenrod; font-size:30px" ><?php echo $recept['aantal'] ?></span>
                   
    </header>

</body>
</html>