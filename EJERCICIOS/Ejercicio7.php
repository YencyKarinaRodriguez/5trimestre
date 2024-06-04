<?php
function producto_elementos_unicos($array) {
    // Eliminar los elementos duplicados
    $array_unico = array_unique($array);

    // Calcular el producto de los elementos únicos
    $producto = 1;
    foreach ($array_unico as $elemento) {
        $producto *= $elemento;
    }

    return $producto;
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["arreglo"])) {
        $user_input = trim($_POST["arreglo"]);
        // Convertir la entrada del usuario en un arreglo
        $arreglo = explode(",", $user_input);
        // Convertir los elementos del arreglo a enteros
        $arreglo = array_map('intval', $arreglo);

        // Calcular el producto de los elementos únicos
        $producto_resultado = producto_elementos_unicos($arreglo);

        // Imprimir el resultado
        echo "<p>El producto de los elementos únicos es: $producto_resultado</p>";
    } else {
        echo "<p>No se recibió ningún dato del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>
