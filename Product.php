<?php
// Creata classe dei prodotti (contenente immagine, titolo, prezzo, icona della categoria ed il tipo di articolo)
class Product{
    private $title;
    private $img;
    private $price;
    private $category;


    public function getTitle(){
        return $this->title;
    }
    public function getImg(){
        return $this->img;
    }  
    public function getPrice(){
        return $this->price;
    }
    public function getCategory(){
        return $this->category;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function setImg($img){
        $this->img = $img;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setCategory($category){
        $this->category = $category;
    }

    public function __construct($title, $img, $price, $category)
    {
        $this->title = $title;
        $this->img = $img;
        $this->price = $price;
        $this->category = $category;
    }
}