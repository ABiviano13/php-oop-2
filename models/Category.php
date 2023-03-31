<?php

class Category {

    public $tipology;
    public $img;

    function __construct($_tipology, $_url){
        if($_tipology == "Cane" || "Gatto"){
            $this->tipology = $_tipology;
        } else {
            return
        }
    }
}

?>