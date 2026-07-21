<?php



function get_pokemon(){

 $numero_aleatorio = rand(1,3);

 switch($numero_aleatorio){
     case 1:
         echo "pikachu";
     break;
     
     case 2:
          echo "mopkepon";
     break;
     
     case 3:
         echo "pokefuego";
     break;

}

}

get_pokemon();

echo "\n";