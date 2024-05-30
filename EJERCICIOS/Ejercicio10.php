<?php
function es_correo_valido($correo) {
    // Usar filter_var para validar el correo electrónico
    return filter_var($correo, FILTER_VALIDATE_EMAIL) !== false;
}

// Ejemplos de correos electrónicos para probar
$correos = [
    "usuario@ejemplo.com",
    "usuario.ejemplo@dominio.com",
    "usuario@dominio",
    "usuario@dominio..com",
    "usuario@.dominio.com",
    "usuario@dominio.c",
    "usuario@dominio.com",
    "usuario@dominio.museum"
];

// Probar la función con diferentes correos electrónicos
foreach ($correos as $correo) {
    if (es_correo_valido($correo)) {
        echo "El correo '$correo' es válido.\n";
    } else {
        echo "El correo '$correo' no es válido.\n";
    }
}
?>
