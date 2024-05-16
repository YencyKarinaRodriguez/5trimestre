<?php include 'includes/header.php';

$varios = array ('Lunes', 'Martes', 'Miercoles', 3, 7, true);
$animales = array ('Cat'=> 'Gato', 'Dog'=>'Perro','Bird'=>'Pajaro');
var_dump($varios);
echo "<br>";
echo($varios['3']);
echo "<br>";

var_dump($animales);
echo "<br>";
echo($animales['Cat']);

//array multidimensionales
$amigos=array(array('Jose', '21', 'Aprendiz', '24/07/2000', 3245678964),
                array('Diego', '24', 'Ingeniero', '02/09/2002', 8765438906),
                array('Luisa', '34', 'Profesor', '07/09/1999'. 9865427894),
                array('Tatiana', 'Calle 143', '0+', array(3456890234, 8753013478))                
);
echo "<br>";
echo ('La profesion de '.$amigos[0][0]. 'es: '. $amigos[0][2]);

echo "<br>";
echo ('El 1 nunmero de telefono de '.$amigos[3][0]. 'es: '. $amigos[3][3][0]);

echo "<br>";
echo ('La fecha de nacimiento de '.$amigos[2][0]. 'es: '. $amigos[2][3]);
echo "<br>";

$cant = count($amigos);
echo ('Total de amigos es: '.$cant);
echo "<br>";

echo ('Nombre del ultimo es: '.$amigos[$cant-1][0]);

$cadena="Servicio nacional de aprendizaje sena";
$caracteres= str_split($cadena);

echo "cadena de caracteres: $cadena\n";
echo "arreglo de caracteres:\n";
print_r($caracteres);

include 'includes/footer.php';
?>