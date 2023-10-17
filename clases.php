<?php

abstract class Vehiculo {

    protected $color = 'azul';
    protected $encendido = false;
    abstract function arrancar();
    public function parar() {
        $this->encendido = false;
    }


}


class Auto extends Vehiculo {

    public function arrancar()
    {
        $this->encendido = true;
        echo 'Arrancó auto';
    }

    public function estaEncendido() {
        if ($this->encendido){
            echo "El auto está encendido\n";
        } else {
            echo "El auto no está encendido\n";
        }
    }

}

class Avion extends Vehiculo {

    private $luces;

    public function __construct(Array $params)
    {
        $this->color = $params['color'];
        $this->encendido = $params['encendido'];
        $this->luces = $params['luces'];
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getLuces(){
        return $this->luces;
    }

    public function arrancar()
    {
        $this->encendido = true;
        echo "Arrancó avión\n";
    }

    public function prenderLuces()
    {
        $this->luces = true;
        echo "Encendió luces\n";
    }

    public function despegar() {

    }

}




class Persona {

    private string $nombre;
    private int $edad;

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function saludar(){
        echo "Hola, mi nombre es ". $this->nombre . ".";
    }

    public function obtenerEdad(){
        return $this->edad;
    }

    public function caminar(){

    }

    public function hablar(){
        
    }

    public function comer(){

    }

    public static function saludo($nombre){
        return 'Un nuevo saludo para ' . $nombre;
    }

}

// $persona = new Persona;

// $persona->nombre = "Carlos";
// $persona->edad = 25;

// $persona->saludar();
// $edad = $persona->obtenerEdad();
// print_r($edad);



// $avion = new Avion;
// $avion->arrancar();
// $avion->despegar();



// $nuevo_auto1 = new Auto;
// $nuevo_auto2 = new Auto;
// $nuevo_auto3 = new Auto;

// $nuevo_auto1->arrancar();
// print_r($nuevo_auto1);

// $nuevo_auto1->estaEncendido();
// $nuevo_auto2->estaEncendido();
// $nuevo_auto3->estaEncendido();

// $persona = new Persona;

// $persona->setNombre('Carlos');

// print_r($persona->getNombre());


// $persona2 = new Persona;

// $persona2->setNombre('Juan');

// print_r($persona2->getNombre());


// Persona::saludo("Juan");

$params = ['color' => 'rojo', 'encendido' => false, 'luces' => false];

$avion = new Avion($params);

$avion->arrancar();
echo $avion->getColor(). "\n";
$avion->prenderLuces();
echo $avion->getLuces(). "\n";
$avion->setColor('azul');
echo $avion->getColor(). "\n";

print_r($avion);

// $auto = new Auto;

// $auto->arrancar();
