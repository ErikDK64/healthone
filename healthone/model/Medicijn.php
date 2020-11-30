<?php

namespace model;

class Medicijn
{
    private $id;
    private $naam;
    private $maker;
    private $compansated;
    private $side_efect;
    private $benefits;

//    public function __construct($id, $name, $maker, $compansated, $side_efect, $benefits){
//        $this->id = $id;
//        $this->benefits = $benefits;
//        $this->compansated = $compansated;
//        $this->maker = $maker;
//        $this->name = $name;
//        $this->side_efect = $side_efect;
//    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    //with this u get a variable that u asked for

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
    //with this u set or change a variable u chose
}
