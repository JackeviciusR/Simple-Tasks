<?php

class Krepsys {
    public $svoris = 0;
    public $kiekis = 0;
    public function __construct() {

    }
    public function detiKrepsin($grybas) : void {
        $this->svoris += $grybas->svoris;
        $this->kiekis += 1;
    }

}