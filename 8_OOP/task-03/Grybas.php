<?php

class Grybas {
    private $valgomasis, $sukirmijes, $svoris;

    public function __construct() {
        $this->valgomasis = rand(0,1) == 1 ? true : false;
        $this->sukirmijes = rand(0,1) == 1 ? true : false;
        $this->svoris = rand(5,45);
    }

    public function __get($prop) {
        return $this->$prop;
    }

}