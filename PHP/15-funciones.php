<?php
declare (strict_types=1);
include 'includes/header.php'; 
require 'includes/header.php'; 
require_once 'includes/header.php'; 

// ----- Funciones en PHP -----
// Funciones sin parametros

function suma(){
    echo 6 + 5;
}
// Funciones con parametros
function sumar($num1 = 0, $num2 = 0){
    echo $num1 + $num2;
}
function sumare(int $num1 = 0, int $num2 = 0){
    echo $num1 + $num2;
}
function usuarioAutenticado(bool $autenticado):string{
    if ($autenticado){
        return "El usuario está autenticado";
    } else {
        return "El usuario no está autenticado";
    }
    
}
function usuarioAutenticado1(bool $autenticado):void{
    if ($autenticado){
        echo "Usuario Autenticado";
    } else {
        echo "Usuario no Autenticado";
    }
}
function usuarioAutenticado2(bool $autenticado):?string{
    if ($autenticado){
        return "El usuario está autenticado";
    } else {
        return "El usuario no está autenticado";
    }
    
}
function usuarioAutenticado3(bool $autenticado):string|int{
    if ($autenticado){
        return "El usuario está autenticado";
    } else {
        return "El usuario no está autenticado";
    }
    
}
//--------------------------------------------
suma();
echo "<br/>";
sumar(6, 8);
echo "<br/>";
sumar(6);
echo "<br/>";
sumare(16,);
echo "<br/>";
$usuario = usuarioAutenticado(false);
echo $usuario;
echo "<br/>";
$usuario = usuarioAutenticado1(true);
echo $usuario;
echo "<br/>";
$usuario = usuarioAutenticado2(false);
echo $usuario;
echo "<br/>";
$usuario = usuarioAutenticado3(true);
echo $usuario;


include 'includes/footer.php'; ?>