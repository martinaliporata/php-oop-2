<?php
require_once __DIR__ . "/./Product.php";
class Food extends Product{
    private $calories;
    private $weight;
    private $ingredients;

    public function __construct($name, $brand, $price, $imgUrl, $isAvailable, Category $category, $calories, $weight, $ingredients)
    {
        parent::__construct($name, $brand, $price, $imgUrl, $isAvailable, $category);
        $this-> weight = $calories;
        $this->calories= $weight;
        $this-> ingredients = $ingredients;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getCalories(){
        return $this->calories;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

//     public function setCalories(){
//         return $this->calories;
//     }

//     public function setWeight($weight){
//         $this->weight = $weight;
//     }

//     public function setIngredients($ingredients){
//         $this->ingredients = $ingredients;
// }
}