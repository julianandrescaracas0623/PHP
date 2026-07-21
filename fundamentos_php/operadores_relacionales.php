<?php


//They are the operators that help compare two values


$a = "5";
$b = 8;
$c = 10;
$d = 5;

// > mayor que

var_dump(5 > 3); // true
var_dump($b > $c); // false
var_dump($c > $b); // true


echo "\n";

// < menor que

var_dump(5 < 3); // false
var_dump($c < $b); // false
var_dump(3 < 6); // true

echo "\n";

// == igual este comparador no compara los tipos de datos

var_dump($a == $b); // false
var_dump($d == $a); // true
var_dump(3 == 7); // false

echo "\n";

// === identico este operador compara los tipos de datos

var_dump( $a === $b); // this is false
var_dump( $b === $c); //this is false who 8 and 10 they are not the  same.
var_dump( $c === $c); // this is true
var_dump($d === $a); // this is false

echo "\n";

// != Diferente

var_dump($a != $d); //this is false
var_dump($b != $c); // this is true

echo "\n";

// !== No idéntico Compara si 2 variables NO son iguales en cuanto a sus valores o tipos de datos.

var_dump($a != $d); //this is false
var_dump($b !== $c); // this is true

echo "\n";

// >= mayor o igual que

var_dump(5 >= 3); // true
var_dump($b >= $c); // false
var_dump($c >= $b); // true

echo "\n";

// <= menor o igual que

var_dump(5 <= 3); // false
var_dump($c <= $b); // false
var_dump(3 <= 6); // true


// operador de nave espacial<=>

// Números enteros
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Números decimales
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// Cadenas de caracteres
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
