<?php 

$titulo = "Arreglos en PHP";
$curso = "Consolidacion de fundamentos de PHP";
$parrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sapiente pariatur, accusamus dicta possimus excepturi dolor optio. <br> Ut debitis quos laborum? Alias accusantium doloribus assumenda quam accusamus, facilis eaque sunt.";
$lista_de_lenguajes = ["PHP", "JavaScript", "Python", "Java", "C#", "C++", "Ruby", "Go", "Swift", "Kotlin"];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso; ?></title>
</head>
<body>
      <h1><?= $titulo; ?></h1>
      <p><?= $parrafo; ?></p>

        <h2>Lista de lenguajes de programacion</h2>

        <ul>
            <li><?= $lista_de_lenguajes[2]; ?></li>
            <li><?= $lista_de_lenguajes[9]; ?></li>
        </ul>
</body>
</html> 