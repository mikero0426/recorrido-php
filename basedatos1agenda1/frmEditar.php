<?php

$id=$_GET['id'];
echo $id;


require_once 'crud/bd.php';
$sql='SELECT *FROM contacto where id=?';
$sentencia=$pdo->prepare($sql); //prepara consulta
$sentencia->execute([$id]);
$resultado=$sentencia->fetch();//creo un arreglo con el resultado de la consulta
/* fechtall usalo cuando te vaya a devolver varios datos y fecth para cuando solo sea uno */
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
     <input type="text" name="" id="" value="<?php echo $resultado[0] ?>">
     <input type="text" name="" id="" value="<?php echo $resultado[1] ?>">
     <input type="text" name="" id="" value="<?php echo $resultado[2] ?>">
     <input type="text" name="" id="" value="<?php echo $resultado[4] ?>">
     <input type="text" name="" id="" value="<?php echo $resultado[5] ?>">
    
    </form>
   
</body>
</html>