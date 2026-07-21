<?php

$fruits = [

    "banana" => 2000,
    "fresa" => 3500,
    "aguacate" => 500,    
    "pera" => 4000,
    

];

foreach ($fruits as $name => $price) {

echo"Actualmente encontre a la fruta $name \n";

if($name == "pera"){

    echo"!encontre a pera";
    break;
}    

}



echo "\n";


foreach ($fruits as $name => $price) {

    if ($name == "aguacate") {
        continue;
    }

    echo "Actualmente encontré a la fruta $name\n";
}

echo "\n";