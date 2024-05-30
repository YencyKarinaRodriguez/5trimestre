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

// Definir el arreglo de ejemplo
$arreglo = [1, 2, 3, 2, 4, 1];

// Calcular el producto de los elementos únicos
$producto_resultado = producto_elementos_unicos($arreglo);

// Imprimir el resultado
echo "El producto de los elementos únicos es: $producto_resultado\n";
?>
