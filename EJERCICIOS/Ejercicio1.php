<?php
function fibonacci_series($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } elseif ($n == 2) {
        return [0, 1];
    }

    $series = [0, 1];
    while (true) {
        $next_value = end($series) + prev($series);
        if ($next_value >= $n) {
            break;
        }
        $series[] = $next_value;
        next($series); // Reset the internal pointer to the end of the array
    }

    return $series;
}

// Solicitar al usuario que ingrese un número
echo "Ingrese un número: ";
$handle = fopen("php://stdin", "r");
$user_input = trim(fgets($handle));

// Verificar que la entrada sea un número
if (!is_numeric($user_input)) {
    echo "Por favor, ingrese un número válido.\n";
    exit(1);
}

$user_input = (int)$user_input;

// Calcular la serie de Fibonacci hasta el número dado
$fibonacci_result = fibonacci_series($user_input);

// Imprimir el resultado
echo "Serie de Fibonacci hasta $user_input es: " . implode(", ", $fibonacci_result) . "\n";
?>
