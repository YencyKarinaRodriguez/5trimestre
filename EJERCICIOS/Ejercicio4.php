<?php
function eliminar_duplicados($array) {
    // Usar array_unique para eliminar elementos duplicados
    return array_unique($array);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["array"])) {
        $user_input = trim($_POST["array"]);

        // Convertir la entrada del usuario en un arreglo
        $array = explode(",", $user_input);

        // Eliminar espacios en blanco de cada elemento
        $array = array_map('trim', $array);

        // Eliminar los elementos duplicados
        $array_sin_duplicados = eliminar_duplicados($array);

        // Imprimir el resultado
        echo "<p>Arreglo sin duplicados: " . implode(", ", $array_sin_duplicados) . "</p>";
    } else {
        echo "<p>No se recibió ningún dato del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>
