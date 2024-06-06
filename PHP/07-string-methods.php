<?php include 'includes/header.php';
    
//Funciones utilizadas en los string
$nombreCliente="  Maria Jose Perez  ";
echo($nombreCliente);
echo "<br>";

//Conocer la cantidad de caracteres
var_dump($nombreCliente);
echo(strlen($nombreCliente));
echo "<br>";

//Eliminar los espacios en blanco
$texto= trim($nombreCliente);
echo($texto);
echo(strlen($texto));
echo "<br>";

//Convertir mayusculas
echo(strtoupper($nombreCliente));
echo "<br>";

//Convertir en minuscula la cadena
echo(strtolower($nombreCliente));
$correo1="majoperezsa25@gmail.com";
$correo2="Majoperezsa25@gmail.com";
echo "<br>";

//Reemplazar un caracter o caracteres
var_dump(strtolower($correo1)==strtolower($correo2));
echo "<br>";
//Reemplazar un caracter o caracteres
$nombreCliente=str_replace('Maria Jose','Maria Mabel',$nombreCliente);
echo($nombreCliente);
echo "<br>";

//Revisar si un string existe o no
echo strpos($nombreCliente,'Mabel');
echo "<br>";

//Para concatenar cadenas de texto
$tipoCliente ='Premium';
echo "El cliente" . $nombreCliente. "es". $tipoCliente;
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";
echo "<br>";

//Funcion para extraer una parte de una cadena
echo substr($correo1,-6,5);

include 'includes/footer.php';