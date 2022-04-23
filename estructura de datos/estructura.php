<?php

// por defecto

$frutas = ["string ", 9,true,"mango",3.45];

//impresion de arreglo
var_dump($frutas);
echo '<hr>';
print_r($frutas);

//asociativo

$equipos =[
"n1"=> "deportivo cali",
"n2"=> 89,
"c4"=> 8.67,
"estaod"=> true

];
echo '<br>';
echo '<pre>';
var_dump($equipos);
echo '</pre>';
echo '<hr>';
print_r($equipos);

//posicion especifica
echo '<br>';
echo $equipos["c4"];
echo '<br>';
echo $frutas[3];
echo '<br>';
echo $frutas[3]."-".$equipos["c4"];
echo '<br>';
echo '<hr>';



foreach ($equipos as $equipos) {
    echo $equipos.'<br>';
}
