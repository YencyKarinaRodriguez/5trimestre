<?php
function ordenar_por_propiedad($array, $propiedad) {
    usort($array, function($a, $b) use ($propiedad) {
        if ($a->$propiedad == $b->$propiedad) {
            return 0;
        }
        return ($a->$propiedad < $b->$propiedad) ? -1 : 1;
    });

    return $array;
}

// Clase de ejemplo para los objetos
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __toString() {
        return "$this->nombre ($this->edad)";
    }
}

// Ejemplo de arreglo de objetos
$personas = [
    new Persona("Juan", 25),
    new Persona("Ana", 30),
    new Persona("Luis", 22),
    new Persona("Marta", 35),
    new Persona("Carlos", 28)
];

// Ordenar el arreglo por la propiedad 'edad'
$personas_ordenadas = ordenar_por_propiedad($personas, 'edad');

// Imprimir el resultado
echo "Personas ordenadas por edad:\n";
foreach ($personas_ordenadas as $persona) {
    echo $persona . "\n";
}
?>
