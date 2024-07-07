<?php
require_once __DIR__ . "/./Product.php";

class Accessories extends Product{
    private $color;
    private $size;
    private $weight;
    private $material;

    public function getColor(){
        return $this->color;
    }

    public function getSize() {
        return $this->size;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getMaterial(){
        return $this->material;
    }


    public function setColor($color){
        $this->color = $color;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setMaterial(){
        return $this->material;
    }

    public function __construct($title, $img, $price, $category, $color, $size, $weight, $material)
    {
        parent::__construct($title, $img, $price, $category);
        $this-> color = $color;
        $this-> size= $size;
        $this-> weight = $weight;
        $this-> material = $material;
    }
}