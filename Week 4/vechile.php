<?php 

abstract class Vehilce{
    protected $brand;
    protected $model;

    public function __construct($brand, $model){
        $this->brand  = $brand;
        $this->model = $model;
    }

    abstract public function start();

    abstract public function stop();
}

class Car extends Vehilce{
    public function start(){
        echo "{$this->brand} {$this->model} is starting. Buckle up.";
    }
    public function stop(){
        echo"{$this->brand} {$this->model} has stopped. Have a safe jounrey ";
    }
}
$myCar = new Car("Toyota", "Camry");
$myCar->start();
echo "<br>";
$myCar->stop();