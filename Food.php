<?php
require_once __DIR__ . "/./Product.php";
class Food extends Product{
    private $calories;
    private $weight;
    private $ingredients;

    
    public function getCalories(){
        return $this->calories;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getIngredients(){
        return $this->ingredients;
    }


    public function setCalories(){
        return $this->calories;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }

    public function __construct($title, $img, $price, $category, $calories, $weight, $ingredients)
    {
        parent::__construct($title, $img, $price, $category);
        $this->calories= $calories;
        $this-> weight = $weight;
        $this-> ingredients = $ingredients;
    }
}