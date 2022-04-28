
<!-- la empresa de servicios públicos de nuestra ciudad calcula la factura del consumo de agua de
acuerdo con la tabla de estratos adjunta. Se requiere determinar el pago que debe realizar una
persona por el total de metros cúbicos que consume al llenar una piscina (ver figura), la
liquidación consiste en multiplicar los metros cubos por el valor del metro de acuerdo con el
estrato correspondiente. Realice una WebApp que solucione dicho problema.  -->
 <?php
 
   /*  $estrato = $_POST['estrato'];
    $metroscubicos = $_POST['metro'];
    $resultado=0;

    switch ($estrato){

        case '1':
            $resultado=$metroscubicos*5000; 
            echo $resultado;
            break;
    
        case '2':
            $resultado=$metroscubicos*6500; 
            echo $resultado;
            break;
        case '3':
            $resultado=$metroscubicos*7000; 
            echo $resultado;
            break;
        case '4':
            $resultado=$metroscubicos*8000; 
            echo $resultado;
            break;
        case '5':
            $resultado=$metroscubicos*9200; 
            echo $resultado;
            break;
         default:
          echo 'ingrese un estrato mencionado no sea rico';
          break;
    
    } */

 /*  2  “La langosta ahumada” es una empresa dedicada a ofrecer banquetes; sus tarifas son las
siguientes: el costo de platillo por persona es de $14.000, pero si el número de personas es
mayor a 200 pero menor o igual a 300, el costo es de $11.000. Para más de 300 personas el
costo por platillo es de $9.000. Se requiere una WebApp que ayude a determinar el
presupuesto que se debe presentar a los clientes que deseen realizar un evento. */

/* $numeroDePersona = $_POST['numerop'];
$costolangosta=0;



if ($numeroDePersona>200 and $numeroDePersona<=300) {
    $costolangosta= $numeroDePersona*11000;
    echo 'El costo total de langosta '.$costolangosta;


}
else{
    if($numeroDePersona>300){
        $costolangosta= $numeroDePersona*9000;
       echo 'El costo total de langosta '.$costolangosta;
    }
    else{
        $costolangosta= $numeroDePersona*14000;
        echo 'El costo total de langosta '.$costolangosta .' compre mas no sea pobre'; 
    }
} */

/*3  La asociación de vinicultores tiene como política fijar un precio inicial al kilo de uva, la cual se
clasifica en tipos A y B, y además en tamaños 1 y 2. Cuando se realiza la venta del producto,
ésta es de un solo tipo y tamaño, se requiere determinar cuánto recibirá un productor por los
kilos de uva que entrega en un embarque, considerando lo siguiente: si es de tipo A, se le
cargan $2000 al precio inicial cuando es de tamaño 1; y 1000 si es de tamaño 2. Si es de tipo
B, se rebajan $500 cuando es de tamaño 1, y $900 cuando es de tamaño 2. (Considere un valor
inicial del kilo de uva de $ 2000, deberá calcular el valor total del embarque).
 */

/* $estrato = $_POST['estrato'];
$metroscubicos = $_POST['metro'];
$resultado=0;


if ($numeroDePersona>200 and $numeroDePersona<=300) {
    $costolangosta= $numeroDePersona*11000;
    echo 'El costo total de langosta '.$costolangosta;


}
else{
    if($numeroDePersona>300){
        $costolangosta= $numeroDePersona*9000;
       echo 'El costo total de langosta '.$costolangosta;
    }
    else{
        $costolangosta= $numeroDePersona*14000;
        echo 'El costo total de langosta '.$costolangosta .' compre mas no sea pobre'; 
    }
} */

/* 3. La asociación de vinicultores tiene como política fijar un precio inicial al kilo de uva, la cual se
clasifica en tipos A y B, y además en tamaños 1 y 2. Cuando se realiza la venta del producto,
ésta es de un solo tipo y tamaño, se requiere determinar cuánto recibirá un productor por los
kilos de uva que entrega en un embarque, considerando lo siguiente: si es de tipo A, se le
cargan $2000 al precio inicial cuando es de tamaño 1; y 1000 si es de tamaño 2. Si es de tipo
B, se rebajan $500 cuando es de tamaño 1, y $900 cuando es de tamaño 2. (Considere un valor
inicial del kilo de uva de $ 2000, deberá calcular el valor total del embarque).
 */

/* $tipouva = $_POST['estrato'];
$tamano = $_POST['Tamanouva'];
$kiloUva = $_POST['kilo'];
$resultado=0;


if ($tipouva== "a" and $tamano == 1) {
    $resultado=(2000*$kiloUva)+2000;
    echo 'El vaor de tu embarque '.$resultado;
}

else{
    
if ($tipouva== "a" and $tamano ==2 ) {
    $resultado=(2000*$kiloUva)+1000;
    echo 'El vaor de tu embarque '.$resultado;
}
    else{
        if ($tipouva== "b" and $tamano==2 ) {
            $resultado=(2000*$kiloUva)-900;
            echo 'El vaor de tu embarque '.$resultado;
        }
        else{
            $resultado=(2000*$kiloUva)-500;
            echo 'El vaor de tu embarque '.$resultado;

        }
    }
} */

/*4 El director de una escuela está organizando un viaje de estudios, y requiere determinar cuánto
debe pagar a la compañía de viajes por el servicio. La forma de cobrar es la siguiente: si son
100 alumnos o más, el costo por cada alumno es de $6.500; de 50 a 99 alumnos, el costo es
de $7.000, de 30 a 49, de $9.500, y si son menos de 30, el costo de la renta del autobús es de
$400.000 dividido entre los alumnos. */

/* $alumnos = $_POST['cdalumnos'];
$resultado=0;



if ($alumnos<=100) {
    $resultado=(6500*$alumnos);
    echo 'El vaor de tu embarque '.$resultado;
}

else{   
if ($alumnos>=50 and $alumnos<=99) {
    $resultado=(7000*$alumnos);
    echo 'El vaor de tu embarque '.$resultado;
}

    else{

        if ($alumnos>=30 and $alumnos<=49 ) {
            $resultado=(9500*$alumnos);
            echo 'El vaor de tu embarque '.$resultado;
        }
        else{
            $resultado=(2000*$kiloUva)-500;
            echo 'El vaor de tu embarque '.$resultado;
        }
    } */