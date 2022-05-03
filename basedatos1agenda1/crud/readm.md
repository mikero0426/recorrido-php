# proyecto agenda

la base de datos se llamara agenda y la tabla contactos


contacto

id autoincrimentable int
nombre vrchar(200)
apellido vrchar(200)
email vrchar(200)
telfono vrchar(200)
movil varchar (100)

activo booleano // para lista : el boolean se transforma en tinyint(1) donde 1 es true y 0 false


# conexion a la base de datos

php tiene varias clase predeterminadas para manejar conexiones con Bases de datos 

CLASE PREDETERMINADA 1:  mysqli()  //solo sirve para base de datos mysql

CLASE predeterminada 2: PDO() // UNIVERSAL php data


# require,include, require_once, include_once

todos incluyen un archivo externo, la diferencia esta en el manejo de errores

si hay un error grave include rompe o aborta la carga normal del programa el requiere genera el error pero permite la carga del aplicativo

## PATRON DE DISEÑO FRONT CONTROLLER

En el diseño del aplicativo tengo una sola " puerta de entrada " a las funcionalidades


