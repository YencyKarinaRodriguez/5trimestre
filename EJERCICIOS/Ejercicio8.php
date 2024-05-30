<?php
function rotar_izquierda($array, $posiciones) {
    $longitud = count($array);
    $posiciones = $posiciones % $longitud; // Asegurarse de que las posiciones no excedan la longitud del array
    return array_merge(array_slice($array, $posiciones), array_slice($array, 0, $posiciones));
}

function rotar_derecha($array, $posiciones) {
    $longitud = count($array);
    $posiciones = $posiciones % $longitud; // Asegurarse de que las posiciones no excedan la longitud del array
    return array_merge(array_slice($array, -$posiciones), array_slice($array, 0, $longitud - $posiciones));
}

// Definir el arreglo de ejemplo
$arreglo = [1, 2, 3, 4, 5];

// Número de posiciones a rotar
$posiciones = 2;

// Rotar a la izquierda
$arreglo_rotado_izquierda = rotar_izquierda($arreglo, $posiciones);

// Rotar a la derecha
$arreglo_rotado_derecha = rotar_derecha($arreglo, $posiciones);

// Imprimir los resultados
echo "Arreglo original: " . implode(", ", $arreglo) . "\n";
echo "Arreglo rotado a la izquierda $posiciones posiciones: " . implode(", ", $arreglo_rotado_izquierda) . "\n";
echo "Arreglo rotado a la derecha $posiciones posiciones: " . implode(", ", $arreglo_rotado_derecha) . "\n";
?>
