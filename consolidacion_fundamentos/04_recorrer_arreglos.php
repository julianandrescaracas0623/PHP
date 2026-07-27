<?php 

$titulo = "Arreglos en PHP";
$curso = "Consolidacion de fundamentos de PHP";
$parrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sapiente pariatur, accusamus dicta possimus excepturi dolor optio. <br> Ut debitis quos laborum? Alias accusantium doloribus assumenda quam accusamus, facilis eaque sunt.";
$lista_de_lenguajes = ["PHP", "JavaScript", "Python", "Java", "C#", "C++", "Ruby", "Go", "Swift", "Kotlin"];
$cursos_relacionados = [
    "PHP" => "Consolidacion de fundamentos de PHP",
    "JavaScript" => "Curso de JavaScript desde cero",
    "Python" => "Curso de Python para principiantes",
    "Java" => "Curso de Java avanzado",
    "C#" => "Curso de C# para desarrollo web",
    "C++" => "Curso de C++ para programadores",
    "Ruby" => "Curso de Ruby on Rails",
    "Go" => "Curso de Go para backend",
    "Swift" => "Curso de Swift para iOS",
    "Kotlin" => "Curso de Kotlin para Android"
];

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

    <ol>
        <?php 
            // esta seria la primera forma de recorrer un arregl  
            foreach($lista_de_lenguajes as $lenguaje):
            ?>
        <li><?= $lenguaje; ?></li>
        <?php endforeach; ?>
    </ol>

    <h2>Cursos relacionados</h2>

    <ul style="list-style-type: square;">

        <?php
              foreach($cursos_relacionados as $key => $curso):
            ?>
        <li><?= $key; ?>: <?= $curso; ?></li>
        <?php endforeach; ?>

    </ul>


</body>

</html>