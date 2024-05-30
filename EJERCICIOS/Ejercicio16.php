<?php
function distancia_levenshtein($cadena1, $cadena2) {
    $len1 = strlen($cadena1);
    $len2 = strlen($cadena2);

    // Crear una matriz
    $matriz = [];

    // Inicializar la primera fila y columna
    for ($i = 0; $i <= $len1; $i++) {
        $matriz[$i][0] = $i;
    }
    for ($j = 0; $j <= $len2; $j++) {
        $matriz[0][$j] = $j;
    }

    // Llenar la matriz
    for ($i = 1; $i <= $len1; $i++) {
        for ($j = 1; $j <= $len2; $j++) {
            $costo = ($cadena1[$i - 1] === $cadena2[$j - 1]) ? 0 : 1;

            $matriz[$i][$j] = min(
                $matriz[$i - 1][$j] + 1,       // Eliminación
                $matriz[$i][$j - 1] + 1,       // Inserción
                $matriz[$i - 1][$j - 1] + $costo // Sustitución
            );
        }
    }

    // La distancia de Levenshtein está en la esquina inferior derecha de la matriz
    return $matriz[$len1][$len2];
}

// Ejemplos de uso de la función
$cadena1 = "kitten";
$cadena2 = "sitting";
$distancia = distancia_levenshtein($cadena1, $cadena2);

echo "La distancia de Levenshtein entre '$cadena1' y '$cadena2' es: $distancia\n";

// Más ejemplos
$cadena3 = "flaw";
$cadena4 = "lawn";
$distancia2 = distancia_levenshtein($cadena3, $cadena4);

echo "La distancia de Levenshtein entre '$cadena3' y '$cadena4' es: $distancia2\n";
?>
