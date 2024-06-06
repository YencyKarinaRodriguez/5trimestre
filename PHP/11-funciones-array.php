<?php include 'includes/header.php';
// in_array - buscar elementos en un arreglo

$carrito = ['Tablet', 'Computador','Impresora', 'Teclado'];
var_dump(in_array('Tablet', $carrito));

$cliente = [
    'nombre' => 'Juan',
    'saldo' =>100,
    'edad' => 34
];
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Orderar Arreglos asociativos por el valor de las propiedades
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Orderar Arreglos asociativos por las Llaves Ascendente
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Onderar Arreglos asociativos por las llaves - Descendente
krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

//Ordenar arreglos
$aleatorios = [4,6,2,9,6,4,3,9,7, "arbol", "armonia"];
rsort($aleatorios);
echo("---Orden Descendete---");
foreach($aleatorios as $item){
    echo('<li>'.$item.'</li>');
}
sort($aleatorios);
echo("---Orden Ascendente---");
foreach($aleatorios as $item){
    echo('<li>'.$item.'</li>');
}

include 'includes/footer.php';