<?php
// Definir la función para calcular la suma de los dígitos
function suma_digitos($numero) {
    // Convertir el número a cadena para iterar sobre sus dígitos
    $cadena_numero = strval($numero);
    $suma = 0;

    // Iterar sobre cada caracter de la cadena
    for ($i = 0; $i < strlen($cadena_numero); $i++) {
        // Convertir el caracter a entero y sumarlo al total
        $suma += intval($cadena_numero[$i]);
    }

    return $suma;
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtener el número ingresado por el usuario
$numero = $_POST["numero"];


// Calcular la suma de los dígitos del número ingresado
$suma_digitos = suma_digitos($numero);

// Mostrar el resultado
echo "<p>La suma de los dígitos de $numero es: $suma_digitos</p>";
}
?>