<?php
function eliminar_duplicados_multidimensional($array) {
    // Serializar cada sub-arreglo para permitir la comparación de igualdad
    $serializado_array = array_map('serialize', $array);

    // Eliminar duplicados utilizando array_unique
    $unico_array_serializado = array_unique($serializado_array);

    // Deserializar los sub-arreglos para volver a la estructura original
    $resultado = array_map('unserialize', $unico_array_serializado);

    return $resultado;
}

// Ejemplo de arreglo multidimensional
$arreglo_multidimensional = [
    ["nombre" => "Juan", "edad" => 25],
    ["nombre" => "Ana", "edad" => 30],
    ["nombre" => "Juan", "edad" => 25],
    ["nombre" => "Luis", "edad" => 35],
    ["nombre" => "Ana", "edad" => 30]
];

// Eliminar duplicados del arreglo multidimensional
$arreglo_sin_duplicados = eliminar_duplicados_multidimensional($arreglo_multidimensional);

// Imprimir el resultado
echo "Arreglo sin duplicados:\n";
print_r($arreglo_sin_duplicados);
?>
