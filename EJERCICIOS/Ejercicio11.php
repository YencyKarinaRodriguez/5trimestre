<?php
function generar_numero_aleatorio($min, $max) {
    // Verificar que el rango es válido
    if ($min > $max) {
        throw new InvalidArgumentException("El valor mínimo no puede ser mayor que el valor máximo.");
    }

    // Generar un número aleatorio dentro del rango
    return rand($min, $max);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["min"]) && isset($_POST["max"])) {
        $user_input_min = intval($_POST["min"]);
        $user_input_max = intval($_POST["max"]);

        // Generar el número aleatorio
        try {
            $numero_aleatorio = generar_numero_aleatorio($user_input_min, $user_input_max);
            echo "<p>Número aleatorio entre $user_input_min y $user_input_max: $numero_aleatorio</p>";
        } catch (InvalidArgumentException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>No se recibieron todos los datos del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>