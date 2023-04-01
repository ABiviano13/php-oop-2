<?php

class Product {
    public $name;
    public $price;
    public $description;
    public $tipology;
    public $img;

    function __construct($_name, $_price, $_description, $_tipology, $_img) {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->img = $_img;

        if($_tipology == "Cane" || "Gatto"){
            $this->tipology = $_tipology;
        }

    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getTipology() {
        return $this->tipology;
    }

    public function getSrc() {
        return $this->img;
    }

    

    public function printCardProductHTML() {
 ?>       
        <div class="card col">
            <div class="card-body">
                <ul>
                    <li class="list-item">
                        <img class="img-card card-img-top" src="<?php echo $this->getSrc(); ?>" alt="<?php echo $this->getName(); ?>">
                    </li>
                    <li class="list-item text-center">
                        <h3>
                            <?php echo $this->getName(); ?>
                        </h3>
                    </li>
                    <li class="list-item">
                        <strong>
                            Decrizione del prodotto: 
                        </strong>
                        <?php echo $this->getDescription(); ?>;
                    </li>
                    <li class="list-item">
                        <strong>
                            Categoria: 
                        </strong>
                        <?php echo $this->getTipology(); ?>;
                    </li>
                    <li class="list-item">
                        <strong>
                            Prezzo del prodotto: 
                        </strong>
                        <?php echo $this->getPrice(); ?> euro.
                    </li>
                    
                </ul>
            </div>
        </div>

 <?php       
    }

}

?>