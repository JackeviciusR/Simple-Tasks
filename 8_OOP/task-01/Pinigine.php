<?php

class Pinigine {
    private $popieriniaiPinigai = [];
    private $metaliniaiPinigai = [];

    public function ideti($kiekis) : void {
        $kiekis > 2 ? $this->popieriniaiPinigai[] += $kiekis : $this->metaliniaiPinigai[] += $kiekis;
    }

    public function skaiciuoti() : void {
        print 'Popieriniai: '.array_sum($this->popieriniaiPinigai).'<br>';
        print 'Metaliniai: '.array_sum($this->metaliniaiPinigai).'<br>';
        print 'Suma: '.(array_sum($this->popieriniaiPinigai) + array_sum($this->metaliniaiPinigai)).'<br><br>';
    }

    public function banknotai() : void {
        print 'Banknotu sk: '.count($this->popieriniaiPinigai).'<br>';
    }

    public function monetos() : void {
        print 'Monetu sk: '.count($this->metaliniaiPinigai).'<br>';
    }

}