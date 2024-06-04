<?php
function es_correo_valido($correo) {
    // Usar filter_var para validar el correo electrónico
    return filter_var($correo, FILTER_VALIDATE_EMAIL) !== false;
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["correo"])) {
        $user_input_correo = trim($_POST["correo"]);
        
        // Validar la dirección de correo electrónico ingresada
        if (es_correo_valido($user_input_correo)) {
            echo "<p>La dirección de correo electrónico '$user_input_correo' es válida.</p>";
        } else {
            echo "<p>La dirección de correo electrónico '$user_input_correo' no es válida.</p>";
        }
    } else {
        echo "<p>No se recibió ningún dato del formulario.</p>";
    }
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}
?>