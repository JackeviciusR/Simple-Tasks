<?php

include __DIR__.'/Pinigine.php';

$pin01 = new Pinigine();

$pin01->ideti(6);
$pin01->skaiciuoti();
$pin01->ideti(1);
$pin01->skaiciuoti();
$pin01->ideti(2);
$pin01->skaiciuoti();
$pin01->ideti(4);
$pin01->skaiciuoti();
$pin01->banknotai();
$pin01->monetos();