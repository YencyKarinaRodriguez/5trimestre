<?php include 'includes/header.php';
    echo "Hola aprendices del sena";
    echo "<br>";
    echo ("Hola aprendices del sena");
    echo "<br>";
    print("Hola aprendices del sena");
    echo "<br>";
    print_r ("Hola aprendices del sena");
    echo "<br>";
    var_dump(30.8);
    $nombre = "Yency ";
    $_apellido = "Quiñonez"; 
    $direccion = "portal";
    echo "Nombre:" -$nombre;

    $nombre = "Yency ";
    $_apellido = "Quiñonez"; 
    $edad = 18;
    echo ($nombre."".$_apellido);
    $edad = 18.4;

    var_dump($edad);
    echo gettype($_apellido);
    define ('Rol', 'Instructor');
    echo Rol;
    //otra manera de crear una constante
    const gravedad=9.8;
    echo(gravedad);

include 'includes/footer.php';
?>