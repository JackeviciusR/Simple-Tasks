<?php


class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis) {
        $this->turis = $turis;
    }

    public function ipilti($kiekis) : void {
        $kiekis0 = $this->kiekis;
        if ($this->turis >= $this->kiekis + $kiekis) {
            $this->kiekis += $kiekis;
        } else {
            $this->kiekis = $this->turis;
        } 
        print 'Ipilta: '.($this->kiekis - $kiekis0).', kiekis: '.$this->kiekis.'<br>';
    }

    public function ispilti() : int{
        print 'Ispilta: '.$this->kiekis.'<br><br>';
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;

    }

}