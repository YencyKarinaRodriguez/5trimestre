<?php
function suma_digitos($numero) {
    // Convertir el número a cadena para poder iterar sobre sus caracteres
    $numero_str = strval($numero);
    $suma = 0;

    // Iterar sobre cada caracter en la cadena y sumar los valores numéricos
    for ($i = 0; $i < strlen($numero_str); $i++) {
        $suma += intval($numero_str[$i]);
    }

    return $suma;
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numero"])) {
        $user_input = trim($_POST["numero"]);

        // Verificar que la entrada sea un número válido
        if (!is_numeric($user_input)) {
            echo "<p>Por favor, ingrese un número válido.</p>";
        } else {
            // Convertir la entrada a un número entero
            $user_input = (int)$user_input;

            // Calcular la suma de los dígitos del número dado
            $suma_resultado = suma_digitos($user_input);

            // Imprimir el resultado
            echo "<p>La suma de los dígitos de $user_input es: $suma_resultado</p>";
        }
    } else {
        echo "<p>No se recibió ningún dato del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>
