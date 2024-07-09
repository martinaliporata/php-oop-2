<?php
require_once __DIR__ . '/Category.php';
class Product{
    private $name;
    private $brand;
    private $price;
    private $imgUrl;
    private $isAvailable;
    private $category;

    public function __construct($name, $brand, $price, $imgUrl, $isAvailable, $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->imgUrl = $imgUrl;
        $this->isAvailable = $isAvailable;
        $this->category = $category;
    }

    public function getName(){
        return $this->name;
    }
    public function getBrand(){
        return $this->brand;
    }  
    public function getPrice(){
        return $this->price;
    }
    public function getImgUrl(){
        return $this->imgUrl;
    }
    public function getIsAvailable(){
        return $this->isAvailable;
    }    
    public function getCategory(){
        return $this->category;
    }

    // public function setTitle($title){
    //     $this->title = $title;
    // }
    // public function setImg($img){
    //     $this->img = $img;
    // }
    // public function setPrice($price){
    //     $this->price = $price;
    // }
    // public function setCategory($category){
    //     $this->category = $category;
    // }

}