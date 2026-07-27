<?php 


$courses = [

"titulo" => "Consolidacion de fundamentos de PHP",
"subtitulo" => "Curso de PHP desde cero",
"descripcion" => "La consolidacion de fundamentos de PHP",
"precio" => 1000,       
"curso relaconados" => [
    "PHP" => "Consolidacion de fundamentos de PHP",
    "JavaScript" => "Curso de JavaScript desde cero",
    "Python" => "Curso de Python para principiantes",
    "Java" => "Curso de Java avanzado",
    "C#" => "Curso de C# para desarrollo web",
    "C++" => "Curso de C++ para programadores",
    "Ruby" => "Curso de Ruby on Rails",
    "Go" => "Curso de Go para backend",
    "Swift" => "Curso de Swift para iOS",
    "Kotlin" => "Curso de Kotlin para Android"],

 "lecciones" => [
    "Leccion 1" => "Introduccion a PHP",
    "Leccion 2" => "Variables y tipos de datos",
    "Leccion 3" => "Estructuras de control",
    "Leccion 4" => "Funciones y arrays",
    "Leccion 5" => "Programacion orientada a objetos",
    "Leccion 6" => "Manejo de errores y excepciones",
    "Leccion 7" => "Conexion a bases de datos",
    "Leccion 8" => "Seguridad en aplicaciones web",
    "Leccion 9" => "Despliegue y mantenimiento de aplicaciones web",
    "Leccion 10" => "Buenas practicas y patrones de diseño"] 

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $courses['titulo'] ?></title>
</head>

<body>
    <h2><?= $courses['subtitulo'] ?></h2>
    <p>Este es un curso de php sobre: <?= $courses['descripcion'] ?> con un precio de $<?= $courses['precio'] ?></p>

    <strong>Cursos relacionados</strong>

    <ul style="list-style-type: square;">

        <?php
              foreach($courses['curso relaconados'] as $key => $curso):
            ?>
        <li><?= $key; ?>: <?= $curso; ?></li>
        <?php endforeach; ?>

    </ul>
    
     <strong>Lecciones</strong>

    <ul style="list-style-type: square;">

        <?php
              foreach($courses['lecciones'] as $key => $leccion): ?>
        <li><?= $key; ?>: <?= $leccion; ?></li>
        <?php endforeach; ?>
    </ul>   
    
</body>

</html>