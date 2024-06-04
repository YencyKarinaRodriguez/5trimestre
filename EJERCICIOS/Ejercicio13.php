<?php

// Función para eliminar elementos duplicados de un arreglo multidimensional
function eliminarDuplicadosMultidimensional($array) {
    // Creamos un arreglo temporal para almacenar los elementos únicos
    $uniqueArray = array();
    
    // Recorremos el arreglo multidimensional
    foreach ($array as $subArray) {
        // Convertimos el subarreglo en una cadena para poder comparar fácilmente
        $serialized = serialize($subArray);
        // Si el subarreglo no existe en el arreglo temporal, lo agregamos
        if (!in_array($serialized, $uniqueArray)) {
            $uniqueArray[] = $serialized;
        }
    }
    
    // Convertimos de nuevo las cadenas serializadas a arreglos
    $result = array_map('unserialize', $uniqueArray);
    
    return $result;
}

// Ejemplo de uso
$miArregloMultidimensional = array(
    array('a', 'b', 'c'),
    array('d', 'e', 'f'),
    array('a', 'b', 'c'), // Duplicado
    array('g', 'h', 'i'),
    array('d', 'e', 'f')  // Duplicado
);

$resultado = eliminarDuplicadosMultidimensional($miArregloMultidimensional);
print_r($resultado);