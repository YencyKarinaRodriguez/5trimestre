<?php
    // Función para calcular la serie de Fibonacci hasta un número dado
    function fibonacci($numero) {
        $serie = [];
        $a = 0;
        $b = 1;

        // Agregar los primeros dos números de la serie
        $serie[] = $a;
        $serie[] = $b;

        // Calcular la serie de Fibonacci hasta el número dado
        while (($c = $a + $b) <= $numero) {
            $serie[] = $c;
            $a = $b;
            $b = $c;
        }

        return $serie;
    }

    // Procesar el formulario y calcular la serie de Fibonacci
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Verificar si se ingresó un número válido
        if (is_numeric($numero) && $numero >= 0) {
            // Calcular la serie de Fibonacci
            $serie_fibonacci = fibonacci($numero);

            // Imprimir la serie de Fibonacci
            echo "Serie de Fibonacci hasta el número $numero: ";
            echo implode(", ", $serie_fibonacci);
        } else {
            echo "Por favor, ingresa un número válido.";
        }
    }
?>