<?php

require_once __DIR__ . '/models/Category.php';

class Product {
    public $name;
    protected $price;
    public $description;
    private $id;
    public Category $category;

}

?>