<?php

$curso = "Consolidacion de fundamentos de PHP";
$precio = 1000;
$descripcion = "Este es un curso de consolidacion de fundamentos de PHP";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso; ?></title>
</head>
<body>
    
<h1> <?= $curso; ?></h1>


<p>Este es un curso de php sobre: <?= $descripcion;?> con un precio de $<?= $precio; ?></p>

</body>
</html>