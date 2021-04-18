<?php

include __DIR__.'/Stikline.php';

$stMAX = new Stikline(200);
$stMID = new Stikline(150);
$stMIN = new Stikline(100);

$stMAX->ipilti(200);
$stMID->ipilti($stMAX->ispilti());
$stMIN->ipilti($stMID->ispilti());
$stMIN->ispilti();