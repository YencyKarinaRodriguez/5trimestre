<?php include 'includes/header.php';

$varios = array('Lunes', 'Martes', 'Miercoles', 3, 7, true);
$animales =array('Cat'=>'Gato','Dog'=>'Perro','Bird'=>'Pajaro');
var_dump($varios);
echo "<br>";
echo($varios['3']);
echo "<br>";

var_dump($animales);
echo "<br>";
echo($animales['Cat']);

//Array multidimensionales
$amigos=array(array('Maria', '18', 'Aprendiz', '25/04/2006', 3144539901),
                array('Pedro', '38', 'Ingeniero Industrial', '09/09/1987', 3035684281),
                array('Mabel', '55', 'Profesora', '02/07/1967', 3105862254),
                array('Luis', 'Cra 1 Nro 98-90 SUr', 'O+', array(3073901563, 3218906651))
);
echo "<br>";
echo ('La Profesion de '.$amigos[0][0]. ' es: '. $amigos[0][2]);

echo "<br>";
echo ('El 1 número de telefono de '.$amigos[3][0]. ' es: '. $amigos[3][3][0]);

echo "<br>";
echo ('La Fecha de nacimiento de '.$amigos[2][0]. ' es: '. $amigos[2][3]);
echo "<br>";

$cant = count($amigos);
echo ('Total de amigos es: '. $cant);
echo "<br>";

echo ('Nombre del ultimo amigo es: '. $amigos[$cant-1][0]);
echo "<br>";

// Ejercicio arreglos php
//utilizando arreglos almacene una cadena de caracteres en un arreglo caracter por caracter e imprimir dicho arreglo acompañado de la cadena de caracteres

$cadena = "Servicio Nacional de Aprendizaje SENA";
$caracteres = str_split($cadena);
echo "Cadena de caracteres: $cadena ";
echo "<br>";
echo "Arreglo de caracteres: ";
print_r($caracteres);



include 'includes/footer.php';
?>