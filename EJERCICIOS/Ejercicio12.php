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

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["min"]) && isset($_POST["max"])) {
        $user_input_min = intval($_POST["min"]);
        $user_input_max = intval($_POST["max"]);

        // Encontrar los números primos dentro del rango
        $primos = primos_en_rango($user_input_min, $user_input_max);

        // Imprimir los resultados
        echo "<p>Números primos entre $user_input_min y $user_input_max: " . implode(", ", $primos) . "</p>";
    } else {
        echo "<p>No se recibieron todos los datos del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>
