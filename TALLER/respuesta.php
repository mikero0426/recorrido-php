<?php
//primera respuesta 
/* $NombreUsuario = $_POST['Nombre'];
$ApellidoUsuario = $_POST['Apellido'];
$edadusuario = $_POST['Edad'];


if ($edadusuario>18) {
 echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
"<br>"."<br>". "El apellido ingresado es:  ".$ApellidoUsuario.
"<br>"."<br>". "La edad ingresada es: ".$edadusuario
;
};
 */


//segunda pregunta
/* 
$NombreUsuario = $_POST['Nombre'];
$ApellidoUsuario = $_POST['Apellido'];
$edadusuario = $_POST['Edad'];

if ($edadusuario>18) {
    echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
   "<br>"."<br>". "El apellido ingresado es:  ".$ApellidoUsuario.
   "<br>"."<br>". "La edad ingresada es: ".$edadusuario
   ;
   }
   else {
     echo "eres menor de edad no puedes usar esta app";
   }; */


 //tercera 
/*  
$NombreUsuario = $_POST['Nombre'];
$edadusuario= $_POST['edad'];
$sexousuario = $_POST['sexo'];

if ($edadusuario >= 18 and $sexousuario==1) {
    echo "el nombre Ingresado al formulario es:  ".$NombreUsuario.
   "<br>"."<br>". "El apellido ingresado es:  ".$edadusuario.
   "<br>"."<br>". "La edad ingresada es: ".$sexousuario
   ;
   }
   else {
     echo "no puedes ingresar";
   };

 */

//cuarta 
/* $numero=$_POST['numero'];
$vlrabs= abs($numero) ;
echo "el numero es:".$numero."<br>"."el valor absoluto es:".$vlrabs; */



//QUINTA
/* $numero=$_POST['numero'];
$vlr= sqrt($numero);
if ($numero>0) {
    echo "el numero es:".$numero."<br>"."su raiz es:".$vlr;
}
else {
    echo "".$numero."<br>"."su raiz es imaginaria ";
};
 */
//sexta
$numero=$_POST['numero'];
$numero2=$_POST['numero2'];

$vlr= sqrt($numero);
if ($numero>0 and $numero2>0) {
    echo "el numero es:".$numero."<br>"."el segundo es:".$numero2;
}
else {
    echo "numero negativo";
};






  











