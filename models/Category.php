<?php

class Category {

    public $tipology;

    function __construct($_tipology){
        if($_tipology == "Cane" || "Gatto"){
            $this->tipology = $_tipology;
        }
    }

    public function getTipology() {
        return $this->tipology;
    }
}

?>