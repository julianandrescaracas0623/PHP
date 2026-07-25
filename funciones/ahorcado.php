<?php

function clear(){
    if (PHP_OS === 'WINNT') {
        system('cls');
    } else {
        system('clear');
    }

}

// definimos un arreglo con las posibles palabras a adivinar
$posible_words = ["Bebida", "Comida", "Fruta", "Verdura", "Carne", "Pescado", "Postre", "Dulce", "Salado", "Amargo"];

// definimos una constante para los intentos máximos permitidos

define("MAX_ATTEMPTS", 6);

echo "Bienvenido al juego del ahorcado!\n\n";
echo "Tienes " . MAX_ATTEMPTS . " intentos para adivinar la palabra.\n";

// iniciamos el juego

$choosen_word = $posible_words[rand(0, count($posible_words) - 1)]; // elegimos una palabra al azar del arreglo
$choosen_word = strtolower($choosen_word); // convertimos la palabra a minúsculas para evitar problemas de comparación
$word_length = strlen($choosen_word); // obtenemos la longitud de la palabra
$discovered_letters = str_pad("", $word_length, "_"); // inicializamos el arreglo de letras descubiertas con guiones bajos
$attemps = 0; // inicializamos el contador de intentos


do {
echo "La palabra a adivinar tiene $word_length letras.\n\n";
echo $discovered_letters . "\n\n";

$player_letter = readline("Ingresa una letra: "); // pedimos al jugador que ingrese una letra
$player_letter = strtolower($player_letter); // convertimos la letra a minúsculas para evitar problemas de comparación


if( str_contains($choosen_word, $player_letter)){

// vericamos todas las ocurrencias de esta letra para reemplazarla
$offset = 0;
while (($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false) {

 $discovered_letters[$letter_position] = $player_letter;
 $offset = $letter_position + 1;

}
} else {
 clear();
 $attemps++;
 echo "Letra incorrecta te quedan " . (MAX_ATTEMPTS - $attemps) . " intentos\n";

 sleep(1);
}

clear();

}while($attemps < MAX_ATTEMPTS && $discovered_letters != $choosen_word);

clear();

if ($attemps < MAX_ATTEMPTS) {
    echo "Felicidades has adivinado la palabra: $choosen_word\n";
} else {
    echo "Lo siento, has perdido. La palabra era: $choosen_word\n";
}


echo "\n";