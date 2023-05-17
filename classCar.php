<?php

class car{
    public $model;
    public $colour;
    public $acc;

    public function __construct($model,$colour,$acc = 0){
        $this->model = $model;
        $this->colour = $colour;
        $this->acc = $acc;
    }

    public function getColour(){
        return $this->colour;
    }

    public function setColour($colour){
        $this->colour = $colour;
    }

    public function accelerate(){
        $this->acc++;
    }

    public function brake(){
        $this->acc--;
    }

    public function getAcc(){
        return $this->acc;
    }

    public function showInfo(){
        $info = "<h1>Car Info: <h1><br>";
        $info .= "Model: ".$this->model."<br>";
        $info .= "Colour: ".$this->getColour()."<br>";
        $info .= "Acceleration: ".$this->getAcc()."<br>";
        return $info;
    }
}

?>