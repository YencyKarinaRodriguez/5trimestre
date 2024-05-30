<?php
function es_palindromo($input) {
    // Convertir el input a una cadena y remover espacios y caracteres no alfanuméricos
    $sanitized_input = preg_replace("/[^A-Za-z0-9]/", '', strtolower($input));

    // Comparar la cadena con su reverso
    return $sanitized_input === strrev($sanitized_input);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["input"])) {
        $user_input = trim($_POST["input"]);

        // Verificar si el input es un palíndromo
        if (es_palindromo($user_input)) {
            echo "<p>El número o frase '$user_input' es un palíndromo.</p>";
        } else {
            echo "<p>El número o frase '$user_input' no es un palíndromo.</p>";
        }
    } else {
        echo "<p>No se recibió ningún dato del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>

