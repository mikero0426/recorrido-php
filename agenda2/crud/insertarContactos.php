<?php

require_once 'BD.php'; //incluyo la cadena de conexion php




//recibimos la data formulario

$NOMBRE=$_POST['nombre'];
$APELLIDO=$_POST['apellido'];
$EMAIL=$_POST['email'];
$TELEFONO=$_POST['telefono'];
$MOVIL=$_POST['movil'];




//hacer el proceso de request  - response

$sql = 'INSERT INTO `contacto` (`nombre`, `Apellido`, `Email`, `Telefono`, `Movil`) VALUES ( ?, ?, ?, ?, ?);';
$sentencia= $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$NOMBRE,$APELLIDO,$EMAIL,$TELEFONO,$MOVIL]); //ejecuta la sentencia 

header('location:../index.php');




