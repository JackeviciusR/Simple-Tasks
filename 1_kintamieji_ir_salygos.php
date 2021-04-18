<h1> 1. ND </h1>
<h2> Kinatieji ir salygos </h2>

<!-- adresas: http://localhost/php_paskaitos/nd/nd1_kintamieji_ir_salygos.php -->

<!-- 1. -->
<?php
print '1 uzd';
print '<br>';

$vardas = 'Rokas';
$pavarde = 'Jackevicius';
$gimimo_data = -33;
$einamieji_metai = 2021;

$amzius = $einamieji_metai - $gimimo_data;

print "As esu $vardas $pavarde. Man yra $amzius metu.";
print '<br>';
print '<br>';
?>

<!-- 2. -->
<?php
print '2 uzd';
print '<br>';

$min = 0; $max = 4;
$a = rand($min, $max);
$b = rand($min, $max);

if (0 !== $a and 0 !== $b) {
    $dalmuo = round( ($a > $b ? $a/$b : $b/$a), 2 );
} else {
    $dalmuo = 'nedaliname is nulio';
}

print $dalmuo;
print '<br>';
print '<br>';
?>

<!-- 3. -->
<?php
print '3 uzd';
print '<br>';

$min = 0; $max = 25;
$a = rand($min, $max);
$b = rand($min, $max);
$c = rand($min, $max);

$vidurinis = null;

if ($a > $b) {
    if ($a === $c or $b === $c) {
        $vidurinis = 'nera turincio vidurine reiksme';
    } else if ($c  > $a) {
        $vidurinis = 'a';
    } else if ($c > $b) {
        $vidurinis = 'c';
    } else {
        $vidurinis = 'b';
    }
} else if ($b > $a) {
    if ($a === $c or $b === $c) {
        $vidurinis = 'nera turincio vidurine reiksme';
    } else if ($c > $b) {
        $vidurinis = 'b';
    } else if ($c > $a) {
        $vidurinis = 'c';
    } else {
        $vidurinis = 'a';
    }
} else {
    $vidurinis = 'nera turincio vidurine reiksme';
}

print "a = $a, b = $b, c = $c";
print '<br>';
print "kintamasasis turintis vidurine reiksme: $vidurinis";
print '<br>';
print '<br>';
?>


<!-- 4. -->
<?php
print '4 uzd';
print '<br>';

// krastiniu ilgiai
$min = 1; $max = 10;
$a = rand($min, $max);
$b = rand($min, $max);
$c = rand($min, $max);

$pusperimetris = ($a + $b + $c)/2;
$plotas = sqrt($pusperimetris*($pusperimetris - $a)*($pusperimetris -$b)*($pusperimetris-$c));

print "krastiniu ilgiai: a = $a, b = $b, c = $c";
print '<br>';

if (0 < $plotas) {
    $plotas = round($plotas, 2);
    print "trikampi galima sudaryti, trikampio plotas = $plotas";
} else {
    print 'negalima sudaryti trikampio';
}

print '<br>';
print '<br>';
?>



<!-- 5. -->
<?php
print '5 uzd';
print '<br>';

$min = 0; $max = 2;
$a = rand($min, $max);
$b = rand($min, $max);
$c = rand($min, $max);
$d = rand($min, $max);

$nuliu_suma = 0;
$vienetu_suma = 0;
$dvejatu_suma = 0;

$suma = $a + $b + $c + $d;
$dvejatu_suma += floor($a/2) + floor($b/2) + floor($c/2) + floor($d/2);
$vienetu_suma = $suma - $dvejatu_suma*2;
$nuliu_suma = 4 - $dvejatu_suma - $vienetu_suma;

print "a = $a, b = $b, c = $c, d = $d <br>";
print "nuliu suma: $nuliu_suma <br> vienetu suma: $vienetu_suma <br> dvejatu suma: $dvejatu_suma";

print '<br>';
print '<br>';
?>



<!-- 6. -->
<?php
print '6 uzd';
print '<br>';
$min = 1; $max = 6;
$h = rand($min, $max);

print "<h$h> $h </h$h>";

?>


<!-- 7. -->
<style>
p.green {
     color: green;
 }
p.red {
     color: red;
 }
p.blue {
     color: blue;
 }
 </style>
 
<?php
print '7 uzd';
print '<br>';

$min = -10;
$max = 10;
$sk1 = rand($min, $max);
$sk2 = rand($min, $max);
$sk3 = rand($min, $max);

$color1 = (0 > $sk1 ? 'green' : (0 == $sk1 ? 'red' : 'blue') );
$color2 = (0 > $sk2 ? 'green' : (0 == $sk2 ? 'red' : 'blue') );
$color3 = (0 > $sk3 ? 'green' : (0 == $sk3 ? 'red' : 'blue') );

?>
<p class = " <?php print "$color1"?> "> <?php print "$sk1"?> </p>
<p class = " <?php print "$color2"?> "> <?php print "$sk2"?> </p>
<p class = " <?php print "$color3"?> "> <?php print "$sk3"?> </p>




<!-- 8. -->
<?php
print '8 uzd';
print '<br>';

$min = 5; $max = 3000;
$suma = rand($min, $max);
$nuolaida = 0;

if (2000 < $suma) {
    $nuolaida = 4;
} else if (1000 < $suma) {
    $nuolaida = 3;
}

$nuolaidos_kiekis = $suma * $nuolaida / 100;
$galutine_kaina = $suma - $nuolaidos_kiekis;

print "Zvakiu sk: $suma, kaina: $suma Eur. <br>";
if (1000 < $suma) {print "nuolaida: -$nuolaidos_kiekis Eur., $nuolaida% <br>";}
print "galutine kaina: $galutine_kaina Eur.";

print '<br>';
print '<br>';
?>


<!-- 9. -->
<?php
print '9 uzd';
print '<br>';

$min = 0; $max = 100;
$a = rand($min, $max);
$b = rand($min, $max);
$c = rand($min, $max);

$vidurkis1 = round( ($a + $b + $c)/3, 0);
$suma2 = 0;
$kintamuju_skaicius2 = 0;
$kinatmuju_vertes_intervale2 = '';
if (10 <= $a and 90 >= $a) {
    $suma2 += $a;
    $kintamuju_skaicius2 += 1;
    $kinatmuju_vertes_intervale2 .= $a;
}
if (10 <= $b and 90 >= $b) {
    $kintamuju_skaicius2 += 1;
    $suma2 += $b;
    $kinatmuju_vertes_intervale2 .= ' '.$b;
}
if (10 <= $c and 90 >= $c) {
    $kintamuju_skaicius2 += 1;
    $suma2 += $c;
    $kinatmuju_vertes_intervale2 .= ' '.$c;
}

print "kintamieji: a = $a, b = $b, c = $c <br>";
print "vidurkis1 (visu): $vidurkis1 <br>";
if (0 < $kintamuju_skaicius2) {
    $vidurkis2 = round( $suma2 / $kintamuju_skaicius2, 0);
    print "vidurkis2 ($kinatmuju_vertes_intervale2): $vidurkis2 <br>";
} else {
    print 'vidurkis2 nera galimas, visu kitamuju reiksmes <10 arba 90<';
}

print '<br>';
print '<br>';
?>


<!-- 10. -->
<?php
print '10 uzd';
print '<br>';

$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);
$praejes_laikas = rand(0,300);

print "$valandos : $minutes : $sekundes <br>";

$sekundziu_skaicius = $valandos*60*60 + $minutes*60 + $sekundes + $praejes_laikas;
if ( (24*60*60-1) < $sekundziu_skaicius ) {
    $sekundziu_skaicius = $sekundziu_skaicius - 24*60*60;
}

$valandos = floor( $sekundziu_skaicius / (60*60) );
$minutes = floor( ($sekundziu_skaicius - $valandos*60*60)/60 );
$sekundes = $sekundziu_skaicius - ($valandos*60*60 + $minutes*60);

print "praejus $praejes_laikas s <br>";
print "$valandos : $minutes : $sekundes";

print '<br>';
print '<br>';
?>


<!-- 11. PAPILDOMAS -->
<!-- Galima tik su if ir else spręsti! -->
<?php
print '11 uzd. PAPILDOMAS';
print '<br>';

$min = 1000; $max = 9999;

$sk1 = 100; //rand($min, $max);
$sk2 = 100; //rand($min, $max);
$sk3 = 101; //rand($min, $max);
$sk4 = 100; //rand($min, $max);
$sk5 = 100; //rand($min, $max);
$sk6 = 100; //rand($min, $max);

print "sugeneruoti skaiciai: $sk1, $sk2, $sk3, $sk4, $sk5, $sk6 <br>";

if ($sk2 > $sk1) {
    $laikinas = $sk2;
    $sk2 = $sk1;
    $sk1 = $laikinas;
}

$laikinas = $sk3;
if ($sk3 > $sk1) {
    $sk3 = $sk2;
    $sk2 = $sk1;
    $sk1 = $laikinas;
} else if ($sk3 > $sk2) {
    $sk3 = $sk2;
    $sk2 = $laikinas;
}

$laikinas = $sk4;
if ($sk4 > $sk1) {
    $sk4 = $sk3;
    $sk3 = $sk2;
    $sk2 = $sk1;
    $sk1 = $laikinas;
} else if ($sk4 > $sk2) {
    $sk4 = $sk3;
    $sk3 = $sk2;
    $sk2 = $laikinas;
} else if ($sk4 > $sk3) {
    $sk4 = $sk3;
    $sk3 = $laikinas;
}

$laikinas = $sk5;
if ($sk5 > $sk1) {
    $sk5 = $sk4;
    $sk4 = $sk3;
    $sk3 = $sk2;
    $sk2 = $sk1;
    $sk1 = $laikinas;
} else if ($sk5 > $sk2) {
    $sk5 = $sk4;
    $sk4 = $sk3;
    $sk3 = $sk2;
    $sk2 = $laikinas;
} else if ($sk5 > $sk3) {
    $sk5 = $sk4;
    $sk4 = $sk3;
    $sk3 = $laikinas;
} else if ($sk5 > $sk4) {
    $sk5 = $sk4;
    $sk4 = $laikinas;
}

$laikinas = $sk6;
if ($sk6 > $sk1) {
    $sk6 = $sk5;
    $sk5 = $sk4;
    $sk4 = $sk3;
    $sk3 = $sk2;
    $sk2 = $sk1;
    $sk1 = $laikinas;
} else if ($sk6 > $sk2) {
    $sk6 = $sk5;
    $sk5 = $sk4;
    $sk4 = $sk3;
    $sk3 = $sk2;
    $sk2 = $laikinas;
} else if ($sk6 > $sk3) {
    $sk6 = $sk5;
    $sk5 = $sk4;
    $sk4 = $sk3;
    $sk3 = $laikinas;
} else if ($sk6 > $sk4) {
    $sk6 = $sk5;
    $sk5 = $sk4;
    $sk4 = $laikinas;
} else if ($sk6 > $sk5) {
    $sk6 = $sk5;
    $sk5 = $laikinas;
}

print 'Isrikiavimas nuo didziausio iki maziausio (be "for" ir masyvu): <br>';
print "$sk1, $sk2, $sk3, $sk4, $sk5, $sk6";

print '<br>';
print '<br>';
?>