<?php

class Queue {
    private $cola = array(1,2,3,4,5); 

    public function getDatos() {
        return $this->cola;
    }

    public function setDatos($valor) {
        $this->cola[] = $valor;
    }

    public function borrarPrimerDato() {
        array_shift($this->cola);
    }

    public function obtenerLongitud() {
        return count($this->cola);
    }

}

$queue = new Queue();
$queue->setDatos(6);
$queue->setDatos(7);

$queue->borrarPrimerDato();

$cola = $queue->getDatos();
print_r($cola);

$longitud = $queue->obtenerLongitud();
echo "La longitud del array es: " . $longitud;

?>