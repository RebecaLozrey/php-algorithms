<?php

class Automovil{
    public $marca;
    public $modelo;
    public function mostrar(){
        echo "Un automovil de marca $this->marca y de modelo $this->modelo";
    }

}

$new_car = new Automovil();
$new_car -> marca = "Toyota";
$new_car -> modelo = "Corolla";
$new_car->mostrar();


class Vivienda{
    public $terreno;
    public $construccion;
    public function mostrar(){
        echo "Con superfice de terreno $this->terreno y de construccion $this->construccion";
    }

}

$new_house = new Vivienda();
$new_house -> terreno = 100;
$new_house -> construccion = 300;
$new_house->mostrar();



?>


