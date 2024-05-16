<?php include 'includes/header.php';

$carrito=[];
$carrito=['uno', 'dos', '3'];
//otra manera de crear arreglo
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes');

echo "<pre>";
echo ($semana[0]. "<br>");
echo ($semana[1]. "<br>");
echo ($semana[2]. "<br>");
echo ($semana[3]. "<br>");
echo ($semana[4]. "<br>");
echo ($semana[5]. "<br>");
echo ($semana[6]. "<br>");
echo "</pre>"; //imprimir

//reemplaxar un elemento del array
$carrito[4]= 'Four';
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//agregar un elemento 
array_push($carrito, 'Five');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//agregar un elemento al principio del array
array_unshift($carrito, 'Numbers');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//loop para recorrer un array
foreach ($carrito as $elemento){
    echo ('<li>' .$elemento . '</li>');
}

include 'includes/footer.php';
?>