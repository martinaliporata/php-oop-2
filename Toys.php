<?php
require_once __DIR__ . "/./Product.php";

class Toys extends Product{
    private $color;
    private $noise;
    private $size;

    public function getColor(){
        return $this->color;
    }

    public function getNoise() {
        return $this->noise;
    }

    public function getSize(){
        return $this->size;
    }


    public function setColor($color){
        $this->color = $color;
    }

    public function setNoise($noise){
        $this->noise = $noise;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function __construct($title, $img, $price, $category, $color, $noise, $size)
    {
        parent::__construct($title, $img, $price, $category);
        $this-> color = $color;
        $this-> noise = $noise;
        $this-> size = $size;
    }
}