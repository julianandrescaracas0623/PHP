<?php


// These operators are used to combine two or more statements and determine whether the result is true or false

$michis_felinos = true;
$michis_4_patas = true;
$michi_independiente = true;
$michis_vuelan = false;
$michis_programan = false;


//operators AND para que se cumplan todas deben ser TRUE

var_dump($michis_felinos AND $michis_4_patas ); // this is true
var_dump($michis_4_patas AND $michi_independiente); // this is true
var_dump($michis_felinos AND $michis_vuelan); // this is false
var_dump($michis_4_patas AND $michis_programan && $michi_independiente); // this is false

echo "\n";

// operators OR para que se cumplan una de las condciones debe ser verdadera

var_dump($michi_independiente OR $michis_programan); // this is true
var_dump($michi_independiente OR $michis_felinos); // this is true
var_dump($michi_independiente || $michis_felinos OR $michis_vuelan); // this is true
var_dump($michis_vuelan || $michis_programan && $michi_independiente); // this is false

echo "\n";

// operators NOT invirte las condiciones si la condicion se cumple la invirte a false, y si //no se cumple la invierte a true.

var_dump(!$michi_independiente && $michis_programan); // this is false
var_dump(!$michis_programan && !$michis_vuelan = false); // this is true porque no vuelan y no programan
var_dump(!$michis_4_patas && !$michis_felinos); //this is false
var_dump(!$michi_independiente && !$michis_vuelan);