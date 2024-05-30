<?php
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

// Ejemplos de uso de la función
$numero1 = 1234;
$numero2 = 56789;
$numero3 = 1023;

$suma1 = suma_digitos($numero1);
$suma2 = suma_digitos($numero2);
$suma3 = suma_digitos($numero3);

// Imprimir los resultados
echo "La suma de los dígitos de $numero1 es: $suma1\n";
echo "La suma de los dígitos de $numero2 es: $suma2\n";
echo "La suma de los dígitos de $numero3 es: $suma3\n";
?>
