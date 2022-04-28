<?php

//recibo valores del formulario
//$opcion=$_post['dato1']

$opcion = 3;

//estructura de decision 
switch ($opcion){

    case '1':
        echo 'orden pizza';
        break;

    case '2':
        echo 'ordenaste perro cliente ';
        break;
    case '3':
        echo 'ordenaste hamburguesa ';
        break; 
    case '4':
        echo 'ordenaste desgranado';
        break;
    case '5':
        echo 'ordenaste ensalada';
        break;
     default:
      echo 'debe elegir una opcion valida del menu!';
      break;
      


}

echo "<br>";
