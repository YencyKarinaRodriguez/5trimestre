<?php include 'includes/header.php';
// in_array - buscar elementos en un arreglo

$carrito = ['Tablet', 'Computador','Impresora', 'Teclado'];
var_dump(in_array('Tablet', $carrito));

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