<?php

class Curso{

/* 

definir estas propiedad de esta forma actualmente no es la mejor practica,
ya que se recomienda encapsular las propiedades de la clase y definir metodos para acceder a ellas, pero para fines didacticos lo dejaremos asi.

*/
public $titulo;
public $subtitulo;
public $descripcion;
public $precio;
public $curso_relacionados;
public $lecciones;


// creamos un constructor para inicializar las propiedades de la clase

public function __construct($titulo, $subtitulo, $descripcion, $precio, $curso_relacionados, $lecciones){
    $this->titulo = $titulo;
    $this->subtitulo = $subtitulo;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->curso_relacionados = $curso_relacionados;
    $this->lecciones = $lecciones;

}
}

class Autor
{
    /*
     * Constructor Property Promotion (PHP 8+).
     * Permite declarar e inicializar las propiedades
     * de la clase directamente en el constructor,
     * reduciendo la cantidad de código.
     */

    public function __construct(
        public string $nombre,
        public string $profesion,
        public string $fecha_publicacion,
    ) {}
}


// creamos un objeto de la clase Curso
$Curso = new Curso(
    "Consolidacion de fundamentos de PHP",
    "Curso de PHP para principiantes",
    "Este es un curso de consolidacion de fundamentos de PHP",
    1000,
    [
        "C#" => "Curso de C# para desarrollo web",
        "C++" => "Curso de C++ para programadores",
        "Ruby" => "Curso de Ruby on Rails",
        "Go" => "Curso de Go para backend",
        "Swift" => "Curso de Swift para iOS",
        "Kotlin" => "Curso de Kotlin para Android"
    ],
    [
        "Leccion 1" => "Introduccion a PHP",
        "Leccion 2" => "Variables y tipos de datos",
        "Leccion 3" => "Estructuras de control",
        "Leccion 4" => "Funciones y arrays",
        "Leccion 5" => "Programacion orientada a objetos",
        "Leccion 6" => "Manejo de errores y excepciones",
        "Leccion 7" => "Conexion a bases de datos",
        "Leccion 8" => "Seguridad en aplicaciones web",
        "Leccion 9" => "Despliegue y mantenimiento de aplicaciones web",
        "Leccion 10" => "Buenas practicas y patrones de diseño"
    ]
);

// creamos un objeto de la clase Autor
$Autor = new Autor(
   nombre: "Juan Pérez",
   profesion: "Desarrollador Web",
   fecha_publicacion: "2023-01-01"
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $Curso->titulo ?></title>
</head>
<body>

<h2><?= $Curso->subtitulo ?></h2>
<p><?= $Curso->descripcion ?></p>
<p>Precio: $<?= $Curso->precio ?></p>

    <strong>Cursos relacionados</strong>
    <ul>
        <?php
              foreach($Curso->curso_relacionados as $key => $curso):
            ?>
        <li><?= $key; ?>: <?= $curso; ?></li>
        <?php endforeach; ?>
    </ul>

    <strong>Lecciones</strong>
    <ul>
        <?php
              foreach($Curso->lecciones as $key => $leccion):
            ?>
        <li><?= $key; ?>: <?= $leccion; ?></li>
        <?php endforeach; ?>
    </ul>

    <strong>Autor</strong>
    <p><?= $Autor->nombre ?></p>
    <p><?= $Autor->profesion ?></p>
    <p><?= $Autor->fecha_publicacion ?></p>

</body>
</html>