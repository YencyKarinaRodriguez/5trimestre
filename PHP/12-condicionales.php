<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

// If anidados...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'información' => [
        'tipo' => 'Premiun'
    ]
];

echo "<br>";
if ( !empty($cliente) ) {
    echo "El Arreglo de cliente no esta vacio";
    
    if ($cliente ['saldo'] > 0) {
        echo "El Cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

// else if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premiun') {
    echo "El cliente es premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

// switch
$tecnologia = 'PHP';
switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excenlente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial,el lenguaje de la web";
        break;
    case 'HTML':
        echo "Emmm";
        break;
    default:
    echo "Algun lenguaje que no se cual es";
    break;
}

include 'includes/pie de página.php';