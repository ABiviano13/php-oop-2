<?php

require_once './models/Category.php';

class Product {
    public $name;
    public $price;
    public $description;
    public Category $category;

    function __construct($_name, $_price, $_description, $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->category = $_category;

    }

    

    public function printCardProductHTML() {
 ?>       
        <div class="card">
            <div class="card-body">
                <ul>
                    <li class="list-item">
                        <strong>
                            Nome del prodotto: 
                        </strong>
                    </li>
                </ul>
            </div>
        </div>

 <?php       
    }

}

?>