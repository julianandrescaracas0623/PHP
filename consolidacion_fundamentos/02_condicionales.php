<?php

$curso = "Consolidacion de fundamentos de PHP";
$precio = 1000;
$descripcion = "Este es un curso de consolidacion de fundamentos de PHP";
$archived =  true;
$status = $archived ? "Este curso está archivado." : "Este curso está disponible.";
$nivel = ["Básico", "Intermedio", "Avanzado"];
$nivel_curso = $nivel[1]; // Nivel del curso: Básico, Intermedio o Avanzado
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

<p>Este curso tiene un nivel de dificultad: <?= $nivel_curso; ?></p>
<?php if($nivel_curso === "Básico") { ?>
    <p>Este es un curso para principiantes.</p>
<?php } elseif($nivel_curso === "Intermedio") { ?>
    <p>Este es un curso para personas con conocimientos básicos.</p>
<?php } else { ?>
    <p>Este es un curso para personas con conocimientos avanzados.</p>
<?php } ?>


<p><?= $status; ?></p>

</body>
</html>