<?php


function estudiante_legend($plazi_rank){

 if($plazi_rank >= 20000){

  echo  "eres leyenda \n";
}
else
{
  
 echo "sigue trabajando y lo lograras \n";

}
	
}


do{

$plazi_rank = (int) readline("Ingrese su Plazi Rank: ");

estudiante_legend($plazi_rank);


}while(true);


echo "Programa finalizado.\n";