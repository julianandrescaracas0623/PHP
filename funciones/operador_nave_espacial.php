<?php



$array = array(3,5,7,3,2,1,7,8);

usort($array, function($a, $b) {
    return $a <=> $b;
});

echo "Array ordenado: ";
print_r($array);