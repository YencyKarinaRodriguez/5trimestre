<?php
function rotar_izquierda($array, $posiciones) {
    $longitud = count($array);
    $posiciones = $posiciones % $longitud; // Asegurarse de que las posiciones no excedan la longitud del array
    return array_merge(array_slice($array, $posiciones), array_slice($array, 0, $posiciones));
}

function rotar_derecha($array, $posiciones) {
    $longitud = count($array);
    $posiciones = $posiciones % $longitud; // Asegurarse de que las posiciones no excedan la longitud del array
    return array_merge(array_slice($array, -$posiciones), array_slice($array, 0, $longitud - $posiciones));
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["arreglo"]) && isset($_POST["posiciones"])) {
        $user_input_arreglo = trim($_POST["arreglo"]);
        $user_input_posiciones = intval($_POST["posiciones"]);

        // Convertir la entrada del usuario en un arreglo
        $arreglo = explode(",", $user_input_arreglo);
        // Convertir los elementos del arreglo a enteros
        $arreglo = array_map('intval', $arreglo);

        // Rotar a la izquierda
        $arreglo_rotado_izquierda = rotar_izquierda($arreglo, $user_input_posiciones);

        // Rotar a la derecha
        $arreglo_rotado_derecha = rotar_derecha($arreglo, $user_input_posiciones);

        // Imprimir los resultados
        echo "<p>Arreglo original: " . implode(", ", $arreglo) . "</p>";
        echo "<p>Arreglo rotado a la izquierda $user_input_posiciones posiciones: " . implode(", ", $arreglo_rotado_izquierda) . "</p>";
        echo "<p>Arreglo rotado a la derecha $user_input_posiciones posiciones: " . implode(", ", $arreglo_rotado_derecha) . "</p>";
    } else {
        echo "<p>No se recibieron todos los datos del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>