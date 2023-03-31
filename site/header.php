<?php

require 'database.php';



$sql = "SELECT count(titel) AS aantal FROM argentijnse_keuken ";

$result  = mysqli_query($conn, $sql);

$recepten_aantal = mysqli_fetch_assoc($result);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="top-header">
          <span style="color:goldenrod; font-size:30px" ><?php echo $recepten_aantal['aantal'] ?></span>
                   
    </header>

</body>
</html>