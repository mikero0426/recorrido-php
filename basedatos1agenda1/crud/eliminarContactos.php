<?php

require_once 'BD.php'; //incluyo la cadena de conexion php




//recibimos la data formulario



//hacer el proceso de request  - response

$sql = 'DELETE FROM `contacto`';
$sentencia= $pdo->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia 

header('location:../index.php');