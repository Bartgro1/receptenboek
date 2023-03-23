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
</head>
<body>
     <main>
        <div class="container">
            
        </div>
     </main>
</body>
</html>