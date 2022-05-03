<?php
require_once 'BD.php'; //incluyo la cadena de conexion php

//hacer el proceso de request  - response

$sql = 'SELECT * FROM `contacto`';
$sentencia= $pdo->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia 
$resultado= $sentencia->fetchAll(); //lmacena la consulta en formato array




/* echo '<pre>';

var_dump($resultado);

echo '</pre>'; */















