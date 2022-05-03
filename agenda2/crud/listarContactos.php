<?php
require_once 'BD.php'; //incluyo la cadena de conexion php

//hacer el proceso de request  - response

$sql = 'SELECT * FROM `contacto`';
$sentencia= $pdo->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia 
$resultado=$sentencia->fetchall(PDO::FETCH_OBJ);
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */



/* echo '<pre>';

var_dump($resultado);

echo '</pre>'; */















