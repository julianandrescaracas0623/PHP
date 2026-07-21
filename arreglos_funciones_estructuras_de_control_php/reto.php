<?php

/*
 Reto construye un arreglo donde tengamos por lo menos tres personas, cada uno debe tener nombre,apellido,edad,ocupacion y comidas, y estas deben ir sub divididas en comidas favoritas y comidas que no le gustan 
*/


$personas = [

    "julian" => [
        "nombre" => "Julian",
        "apellido" => "Caracas",
        "edad" => 24,
        "ocupacion" => "Estudiante",

        "comidas" => [
            "favoritas" => [
                "salchipapa",
                "hamburguesa",
                "arroz con pollo"
            ],
            "noFavoritas" => [
                "pescado",
                "pollo",
                "salchichón"
            ]
        ]
    ],

    "andres" => [
        "nombre" => "Andres",
        "apellido" => "Sanchez",
        "edad" => 25,
        "ocupacion" => "Programador",

        "comidas" => [
            "favoritas" => [
                "pizza",
                "lasaña",
                "empanadas"
            ],
            "noFavoritas" => [
                "brócoli",
                "espinaca",
                "coliflor"
            ]
        ]
    ],

    "maria" => [
        "nombre" => "Maria",
        "apellido" => "Lopez",
        "edad" => 22,
        "ocupacion" => "Diseñadora",

        "comidas" => [
            "favoritas" => [
                "sushi",
                "tacos",
                "pasta"
            ],
            "noFavoritas" => [
                "hígado",
                "remolacha",
                "lentejas"
            ]
        ]
    ]

];

print_r($personas);