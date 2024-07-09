<?php
require_once __DIR__ . "/./Product.php";

class Accessories extends Product{
    private $color;
    private $size;
    private $function;

    public function __construct($name, $brand, $price, $imgUrl, $isAvailable, Category $category, $color, $size, $function)
    {
        parent::__construct($name, $brand, $price, $imgUrl, $isAvailable, $category);
        $this-> color = $color;
        $this->size= $size;
        $this-> function = $function;
    }

    public function getColor(){
        return $this->color;
    }

    public function getSize() {
        return $this->size;
    }

    public function getFunction() {
        return $this->function;
    }

    // public function setColor($color){
    //     $this->color = $color;
    // }

    // public function setSize($size){
    //     $this->size = $size;
    // }

    // public function setWeight($weight){
    //     $this->weight = $weight;
    // }

    // public function setMaterial(){
    //     return $this->material;
    // }

}