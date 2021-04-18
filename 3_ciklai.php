<h1> 3. ND </h1>
<h2> Ciklai </h2>



<!-- 1. -->

<?php
print '1 uzd.';
print '<br>';

$zenklas = '* ';
$linija1 = '';
$linija2 = '';
$klase = "linija";

for ($i = 1; $i <= 400; $i++) {
    $linija1 .= $zenklas;
    $linija2 .= $zenklas;
    if (0 == $i%50) {
        $linija2 .='<br>';
    }
}

print "<p style = 'font-size:10px;'>$linija1</p>";
print '<br>';
print "<p style = 'font-size:10px;'>$linija2</p>";

print '<br>';
print '<br>';
?>


<!-- 2. -->
<?php
print '2 uzd.';
print '<br>';

$number = 0;

for ($i=0; $i < 300; $i++) {
    $random_number = rand(0, 300);
    $color = (275 < $random_number ? 'red' : 'black');
    $number += (150 < $random_number ? 1 : 0);
    print "<i style = color:$color;>$random_number </i>";
}

print "<br><i>Skaičių daugiau už 150: </i> $number";

print '<br>';
print '<br>';
?>

<!-- 3. -->
<?php
print '3 uzd.';
print '<br>';

$iki = rand(3000, 4000);

for ($i=1; $i < $iki; $i++) {
    if ($i%77 == 0) {
        print ($i + 77 > $iki ? $i : $i.', ');
    }
}

print '<br>';
print '<br>';
?>

<!-- 4.-->
<?php
print '4 uzd.';
print '<br>';
print '<br>';

$max_size = 20;
$color = "grey";

for ($i=0; $i < $max_size ; $i++) { 
    for ($j=0; $j < $max_size; $j++) {
        print "<i style = 'color: $color; font-size: 15px; line-height: 7.5px;'>*</i>";
    }
    print '<br>';
}

print '<br>';
print '<br>';
?>

<!-- 5. -->
<?php
print '5 uzd.';
print '<br>';
print '<br>';

$max_size = 20;

for ($i=0; $i < $max_size ; $i++) { 
    for ($j=0; $j < $max_size; $j++) {
        $color = ($i == $j || $max_size - $i - 1 == $j ? 'red' : 'grey');
        print "<i style = 'color: $color; font-size: 15px; line-height: 7.5px;'>*</i>";
    }
    print '<br>';
}

print '<br>';
print '<br>';
?>

<!-- 6. -->
<?php
print '6 uzd.';
print '<br>';

$salyga = 2;
// monetos metima stabdome:
// 0 - iskritus herbui;
// 1 - tris kartus iskritus herbui;
// 2 - tris kartus (is eiles) iskritus herbui
$herbo_skaicius = 0;

while (true) {
    $monetos_puse = rand(0,1);
    print (0 == $monetos_puse ? "<i style = 'font-weight: bold';>herbas </i>" : 'skaicius ');

    if (0 == $salyga) {
        if (0 == $monetos_puse) {break;}
    } else if (1 == $salyga) {
        $herbo_skaicius += (0 == $monetos_puse ? 1 : 0);
        if (3 == $herbo_skaicius) {break;}
    } else if (2 == $salyga) {
        $herbo_skaicius = (0 == $monetos_puse ? ++$herbo_skaicius : 0);
        if (3 == $herbo_skaicius) {break;}
    }
}

print '<br>';
print '<br>';
?>

<!-- 7. -->
<?php
print '7 uzd.';
print '<br>';

$pirmas_vardas = 'Kazys';
$antras_vardas = 'Petras';
$pirmas_partijos_taskai = 0;
$antras_partijos_taskai = 0;
$pirmas_suma = 0;
$antras_suma = 0;

$partija = 0;
while (true) {
    
    $pirmas_zaidejas = rand(10, 20);
    $antras_zaidejas = rand(5, 25);

    $pirmas_partijos_taskai += $pirmas_zaidejas;
    $antras_partijos_taskai += $antras_zaidejas;

    $pirmas_suma +=$pirmas_zaidejas;
    $antras_suma +=$antras_zaidejas;

    if (22 <= $pirmas_partijos_taskai || 22 <= $antras_partijos_taskai) {
        $partija++;
        $laimejo = ( $pirmas_partijos_taskai > $antras_partijos_taskai ? $pirmas_vardas : ($pirmas_partijos_taskai < $antras_partijos_taskai ? $antras_vardas : 'lygiosios') );
        print "<p>partija: $partija >>  $pirmas_vardas, taškai: $pirmas_partijos_taskai, suma: $pirmas_suma; $antras_vardas, taškai: $antras_partijos_taskai, suma: $antras_suma; Laimejo: $laimejo</p>" ;
        $pirmas_partijos_taskai = 0;
        $antras_partijos_taskai = 0;
    }

    if (222 <= $pirmas_suma || 222 <= $antras_suma) {
        break;
    }
}

print '<br>';
print '<br>';
?>

<!-- 8. -->
<?php
print '8 uzd.';
print '<br>';

$max_size = 21;

// 1 variantas
print '1 variantas (galimas kvadratinis zvaigzduciu fonas)<br><br>';

$background_color = 'red'; // zvaigzduciu fonas tik pirmame varinate

for ($i=0; $i < $max_size ; $i++) { 
    $delta = floor($max_size/2) - abs(floor($max_size/2) - $i);
    for ($j=0; $j < $max_size; $j++) {
        if ( floor($max_size/2) - $delta <= $j && floor($max_size/2) + $delta >= $j) {
            // RGB -> HEX
            $color = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255) );
            print "<i style = 'color: $color; font-size: 15px; line-height: 7.5px;'>*</i>";
        } else {
            print "<i style = 'color: $background_color; font-size: 15px; line-height: 7.5px;'>*</i>";
        }
    }
    print '<br>';
    
}

//print '<br>';
print '<br>';
?>
<!-- 2 variantas. -->
<p> 2 variantas </p>
<div style = 'text-align: center; width: 170px; font-size: 15px; line-height: 7.5px;'>
<?php

    $zvaigzduciu_skaicius = 1; //pirmoji zvaigzdute

    for ($i=0; $i < $max_size; $i++) {
        if (0 < $i) {
            $zvaigzduciu_skaicius += ( floor($max_size/2) < $i ? -2 : 2 );
        }
        for ($z=0; $z < $zvaigzduciu_skaicius ; $z++) { 
            $color = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255));
            print "<i style = color:$color>*</i>";
        }
        print '<br>';
    }

    print '<br>';
    print '<br>';

?>
</div>

<!-- 3 variantas. -->
<p> 3 variantas (su while)</p>
<div style = 'text-align: center; width: 170px; font-size: 15px; line-height: 7.5px;'>
<?php
    
    $zenklu_skaicius_eiluteje = 1;
    $riba = $zenklu_skaicius_eiluteje;
    $zenklo_kiekis = 0;
    
    while (true) {
        $color = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255));
        print "<i style = color:$color>*</i>";
        $zenklo_kiekis++;

        if ($zenklo_kiekis == $zenklu_skaicius_eiluteje) {
            if ($riba < $max_size ) {
                $zenklu_skaicius_eiluteje += 2;
            } else if (1 < $zenklu_skaicius_eiluteje) {
                $zenklu_skaicius_eiluteje -= 2;
            } else {
                $riba += 1;
                break;
            }
            print '<br>';
            $zenklo_kiekis = 0;
            $riba += 2;
        }

    }

    print '<br>';
    print '<br>';
    print '<br>';

?>
</div>

<!-- 9. -->
<?php
print '9 uzd.';
print '<br>';

$time_start = microtime(true);

for ($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu';
}

$time_inter = microtime(true);

for ($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu";
}

$time_end = microtime(true);

print 'With microtime(true): <br>';
print 'viengubos kabutes: '.($time_inter - $time_start).' s <br>';
print 'dvigubos kabutes: '.($time_end - $time_inter).' s <br>';

print '<br>';
print '<br>';
?>

<!-- 10. -->
<?php
print '10 uzd.';
print '<br>';

$viniu_skaicius = 5;

// a)
$ikalta = 0;
$smugiu_skaicius = 0;

for ($i=0; $i < $viniu_skaicius ; $i++) {
    $vinies_ilgis = 85; // mm
    while (true) {
        $vinies_ilgis -= rand(5, 20);
        $smugiu_skaicius++;
        if (0 >= $vinies_ilgis) {
            break;
        }
    }
}
print "a) Įkalti $viniu_skaicius vinis reikėjo silpnų $smugiu_skaicius smūgių  <br>";

// b)
$vinies_ilgis = 85; // mm
$ikalta = 0;
$smugiu_skaicius = 0;

for ($i=0; $i < $viniu_skaicius ; $i++) {
    $vinies_ilgis = 85; // mm
    while (true) {
        $vinies_ilgis -= rand(20, 30) * rand(0,1);
        $smugiu_skaicius++;
        if (0 >= $vinies_ilgis) {
            break;
        }
    }
}
print "b) Įkalti $viniu_skaicius vinis reikėjo stiprių $smugiu_skaicius smūgių  <br>";


print '<br>';
print '<br>';
?>

<!-- 11. PAPILDOMAS -->
<?php
print '11 uzd. PAPILDOMAS';
print '<br>';

// $stringas = 'labas as esu ir ponas niekas';
// var_dump(str_contains($stringas, 'nas'));

// print '<br>';
// print "<p style = 'text-align: center; width: 100px; line-height: 7.5px;'> * </p>";;
// print "<i style = 'text-align: center; width: 100px; line-height: 7.5px;'> *** </i>";;
// print '<br>';

// $arr = [1,12,13];
// print implode(' ', $arr);

$arr1 = [];
$arr2 = [];

for ($i=0; $i < 50; $i++) { 
    while (true) {
        $skaicius = rand(1,200);
        if(!in_array($skaicius, $arr1)){
            array_push($arr1, $skaicius);
            break;
        }
    }
}

sort($arr1);

foreach($arr1 as $verte) {
    for ($i=2; $i < $verte ; $i++) {
        //print "$verte % $i: ".($verte % $i).'<br>';
        if (0 == $verte % $i || 1 == $verte) {
            break;
        }
        if ($verte - 1 == $i) {
           array_push($arr2, $verte); 
        }
    }
}


$stringas1 = implode(' ', $arr1);
$stringas2 = implode(' ', $arr2);
print "Pirmas stringas: <br>$stringas1<br>";
print "Antras stringas (pirminiai skaičiai): <br>$stringas2";

print '<br>';
print '<br>';

?>
