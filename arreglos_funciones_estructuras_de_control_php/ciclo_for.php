<?php

/*
Este ciclo nos permite definir una serie de condiciones, desde donde queremos comenzar hasta donde queremos terminar, nosotros le decimos explicitamente cuantas iteracioneshara, es por eso que decimos que este es un ciclo definido
*/


for($contador= 0; $contador < 10; $contador++)
{

 echo $contador. "\n";


}

echo"\n";

for($contador= 10; $contador > 0; $contador--)
{

 echo $contador. "\n";

}

echo"\n";

	
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863),
    array('name' => 'Julian', 'salt' => 215863),
   	
);

for($i = 0, $size = count($people); $i < $size; ++$i) {
  echo "el salto de ".$people[$i]["name"]." es " .$people[$i]['salt'] = mt_rand(000000, 999999). "\n" ;
}

echo"\n";