<?php


$stack = array(1, 2, 3, 4, 5);

function add($value) {
    global $stack;
    array_push($stack, $value);
  }
  
  add(6);
  add(7);
  print_r($stack);


function destroy() {
    global $stack;
    array_pop($stack);
  }

  destroy();
  print_r($stack);
  

  ///////////////////////////////////////////////////////////////////

class Pila {
    private $datos = array(1,2,3,4,5);

    public function getDatos() {
        return $this->datos;
    }

    public function setDatos($valor) {
        $this->datos[] = $valor;
    }

    public function borrarUltimoDato() {
        array_pop($this->datos);
    }
}


$pila = new Pila();
$pila->setDatos(6);
$pila->setDatos(7);
$pila->setDatos(8);
$pila->setDatos(9);


$pila->borrarUltimoDato();

$datos = $pila->getDatos();
print_r($datos);

?>