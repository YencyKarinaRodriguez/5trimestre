<?php
function union_arreglos($array1, $array2) {
    // Unir los dos arreglos y eliminar duplicados usando array_unique
    return array_unique(array_merge($array1, $array2));
}

function interseccion_arreglos($array1, $array2) {
    // Encontrar la intersección de los dos arreglos usando array_intersect
    return array_values(array_intersect($array1, $array2));
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["arreglo1"]) && isset($_POST["arreglo2"])) {
        $user_input_arreglo1 = trim($_POST["arreglo1"]);
        $user_input_arreglo2 = trim($_POST["arreglo2"]);

        // Convertir la entrada del usuario en arreglos
        $arreglo1 = explode(",", $user_input_arreglo1);
        $arreglo2 = explode(",", $user_input_arreglo2);

        // Convertir los elementos de los arreglos a enteros
        $arreglo1 = array_map('intval', $arreglo1);
        $arreglo2 = array_map('intval', $arreglo2);

        // Encontrar la unión de los arreglos
        $union_resultado = union_arreglos($arreglo1, $arreglo2);

        // Encontrar la intersección de los arreglos
        $interseccion_resultado = interseccion_arreglos($arreglo1, $arreglo2);

        // Imprimir los resultados
        echo "<p>Arreglo 1: " . implode(", ", $arreglo1) . "</p>";
        echo "<p>Arreglo 2: " . implode(", ", $arreglo2) . "</p>";
        echo "<p>Unión de los arreglos: " . implode(", ", $union_resultado) . "</p>";
        echo "<p>Intersección de los arreglos: " . implode(", ", $interseccion_resultado) . "</p>";
    } else {
        echo "<p>No se recibieron todos los datos del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>
