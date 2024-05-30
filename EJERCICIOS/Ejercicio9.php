<?php
function union_arreglos($array1, $array2) {
    // Unir los dos arreglos y eliminar duplicados usando array_unique
    return array_unique(array_merge($array1, $array2));
}

function interseccion_arreglos($array1, $array2) {
    // Encontrar la intersección de los dos arreglos usando array_intersect
    return array_values(array_intersect($array1, $array2));
}

// Definir dos arreglos de ejemplo
$arreglo1 = [1, 2, 3, 4, 5];
$arreglo2 = [4, 5, 6, 7, 8];

// Encontrar la unión de los arreglos
$union_resultado = union_arreglos($arreglo1, $arreglo2);

// Encontrar la intersección de los arreglos
$interseccion_resultado = interseccion_arreglos($arreglo1, $arreglo2);

// Imprimir los resultados
echo "Arreglo 1: " . implode(", ", $arreglo1) . "\n";
echo "Arreglo 2: " . implode(", ", $arreglo2) . "\n";
echo "Unión de los arreglos: " . implode(", ", $union_resultado) . "\n";
echo "Intersección de los arreglos: " . implode(", ", $interseccion_resultado) . "\n";
?>
