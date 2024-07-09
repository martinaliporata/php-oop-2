<?php
require_once __DIR__ . "/./Product.php";

class Toys extends Product{
    private $material;

    public function getMaterial(){
        return $this->material;
    }

    public function __construct($name, $brand, $price, $imgUrl, $isAvailable, Category $category, $material)
    {
        parent::__construct($name, $brand, $price, $imgUrl, $isAvailable, $category);
        $this-> material = $material;
    }
}