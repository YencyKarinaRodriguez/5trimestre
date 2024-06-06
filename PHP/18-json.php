<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true,
    ],
    [
        'nombre' => 'Televisor 24"',
        'precio' => 500,
        'disponible' => true,
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 350,
        'disponible' => false,
        'stock' => 34,
    ],
];

echo "<pre>";
    var_dump($productos);
    $json= json_encode($productos, JSON_UNESCAPED_UNICODE);
    var_dump($json);
    $json_array= json_decode($json);
    var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';
?>