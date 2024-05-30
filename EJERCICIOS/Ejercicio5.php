<?php
function imprimir_patron_asteriscos($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat("*", $i) . "\n";
    }
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numero"])) {
        $user_input = trim($_POST["numero"]);

        // Verificar que la entrada sea un número válido
        if (!is_numeric($user_input) || $user_input <= 0) {
            echo "<p>Por favor, ingrese un número válido.</p>";
        } else {
            // Convertir la entrada a un número entero
            $user_input = (int)$user_input;

            // Imprimir el patrón de asteriscos
            imprimir_patron_asteriscos($user_input);
        }
    } else {
        echo "<p>No se recibió ningún dato del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>
