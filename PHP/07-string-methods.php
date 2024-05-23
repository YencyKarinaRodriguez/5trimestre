}<?php include 'includes/header.php' ;

//funciones utilizadas en los string
$nombreCliente=" Yency Quiñonez ";
echo($nombreCliente);
echo "<br>";

//conocer la cantidad de caracteres
var_dump($nombreCliente);
echo(strlen($nombreCliente));
echo "<br>";

//eliminar los espacios en blanco
$texto= trim($nombreCliente);
echo($texto);
echo(strlen($texto));
echo "<br>";

//convertir mayusculas
echo(strtoupper($nombreCliente));
echo "<br>";

//convertir en miniscula la cadena
echo(strtolower($nombreCliente));
$correo1="yency072005@gmail.com";
$correo2="karina072005@gmail.com";
echo "<br>";

//reemplazar un caracter o caracteres
var_dump(strtolower($correo1)==strtolower($correo2));
echo "<br>";
//reemplazar un caracter o caracteres
$nombreCliente=str_replace('Yency Quiñonez', 'Tatiana Mendez',$nombreCliente);
echo($nombreCliente);
echo "<br>";

//revisar si un string existe o no
echo strpos($nombreCliente, 'Tatiana');
echo "<br>";

//para concatenar cadenas de texto
$tipoCliente = 'Premium';
echo "El cliente" . $nombreCliente. "es". $tipoCliente;
echo "<br>";
echo "el cliente {$nombreCliente} es {$tipoCliente}";
echo "<br>";

//funcion para extraer una parte de una cadena
echo substr($correo1,-6,5);

include 'includes/footer.php';
?>