<?php
// Función para determinar si un número es primo
function es_primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para encontrar los números primos dentro de un rango dado
function primos_en_rango($min, $max) {
    $primos = [];
    for ($i = $min; $i <= $max; $i++) {
        if (es_primo($i)) {
            $primos[] = $i;
        }
    }
    return $primos;
}

// Ejemplos de uso de la función
$min = 10;
$max = 50;
$primos = primos_en_rango($min, $max);

// Imprimir los resultados
echo "Números primos entre $min y $max: " . implode(", ", $primos) . "\n";
?>
