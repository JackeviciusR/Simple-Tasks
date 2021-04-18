<?php

include __DIR__.'/Grybas.php';
include __DIR__.'/Krepsys.php';

$krepsys = new Krepsys();

while ($krepsys->svoris < 500) {
    $grybas = new Grybas();
    // print 'Gettype: '.gettype($grybas).'<br>';
    if (true == $grybas->valgomasis && false == $grybas->sukirmijes) {
        $krepsys->detiKrepsin($grybas);
    }
    print 'Kiekis: '.$krepsys->kiekis.', svoris: '.$krepsys->svoris.'<br>'; 
}