<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Ana');

//Empty revisa si un arreglo esta vacio
var_dump(empty($clientes));
echo "<br>";
var_dump(empty($clientes3));
echo "<br>";
var_dump(empty($clientes2));

//Isset- Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes3));
var_dump(isset($clientes2));

//Isset - Revisar si una propiedad esta definida
echo "<br>";
var_dump(isset($cliente['nombre']));

include 'includes/footer.php';
?>