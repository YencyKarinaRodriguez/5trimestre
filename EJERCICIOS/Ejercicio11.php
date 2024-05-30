<?php
function generar_numero_aleatorio($min, $max) {
    // Verificar que el rango es válido
    if ($min > $max) {
        throw new InvalidArgumentException("El valor mínimo no puede ser mayor que el valor máximo.");
    }

    // Generar un número aleatorio dentro del rango
    return rand($min, $max);
}

// Ejemplos de uso de la función
try {
    $numero_aleatorio1 = generar_numero_aleatorio(1, 10);
    echo "Número aleatorio entre 1 y 10: $numero_aleatorio1\n";

    $numero_aleatorio2 = generar_numero_aleatorio(100, 200);
    echo "Número aleatorio entre 100 y 200: $numero_aleatorio2\n";

    $numero_aleatorio3 = generar_numero_aleatorio(-50, 50);
    echo "Número aleatorio entre -50 y 50: $numero_aleatorio3\n";

    // Ejemplo con rango inválido
    // $numero_aleatorio4 = generar_numero_aleatorio(10, 1);
    // echo "Número aleatorio entre 10 y 1: $numero_aleatorio4\n";

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
