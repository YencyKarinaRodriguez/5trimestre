<?php
// Crear un arreglo asociativo con algunas claves y valores
$arreglo_asociativo = [
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Madrid",
    "profesion" => "Ingeniero"
];

// Imprimir todas las claves y valores utilizando un ciclo
echo "<ul>";
foreach ($arreglo_asociativo as $clave => $valor) {
    echo "<li>Clave: $clave, Valor: $valor</li>";
}
echo "</ul>";
?>

