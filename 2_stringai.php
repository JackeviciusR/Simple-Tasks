<h1> 2. ND </h1>
<h2> Stringai </h2>

<!--  -->

<!-- 1. -->
<?php
print '1 uzd.';
print '<br>';

$vardas = 'Rokas';
$pavarde = 'Jackevicius';

print "$vardas $pavarde <br>";
print 'Trumpiausias string\'as: ';
//echo "$vardas";
print ( (strlen($vardas) < strlen($pavarde)) ? $vardas : $pavarde); 

print '<br>';
print '<br>';
?>

<!-- 2. -->
<?php
print '2 uzd.';
print '<br>';

$vardas = 'RoKaS';
$pavarde = 'JaCkEvIČIuS';

print "$vardas $pavarde <br> after: <br>";
$vardas = strtoupper($vardas);
$pavarde = strtolower($pavarde);
print "$vardas $pavarde";

print '<br>';
print '<br>';
?>

<!--3. -->
<?php
print '3 uzd.';
print '<br>';

$vardas = 'Rokas';
$pavarde = 'Jackevicius';

$pirmosios_raides = $vardas[0].$pavarde[0];
print $pirmosios_raides;

print '<br>';
print '<br>';
?>

<!-- 4. -->
<?php
print '4 uzd.';
print '<br>';

$vardas = 'Rokas';
$pavarde = 'Jackevičius';

print substr($vardas,-3).substr($pavarde,-3);

print '<br>';
print '<br>';
?>

<!-- 5. -->
<?php
print '5 uzd.';
print '<br>';

$tekstas = 'An American in Paris';
print "$tekstas <br>";
print str_ireplace('a', '*', $tekstas);

print '<br>';
print '<br>';
?>

<!-- 6. -->
<?php
print '6 uzd.';
print '<br>';

$tekstas = 'An American in Paris';
print "$tekstas <br>";

// 1var
str_ireplace('a', '*', $tekstas, $pakeistu_raidziu_sk);
print "Raidziu (A, a) skaicius: <br>";
print '1 variantas: '.$pakeistu_raidziu_sk;

print '<br>';
// 2var
$A_skaicius = substr_count($tekstas, 'A');
$a_skaicius = substr_count($tekstas, 'a');
print "2 variantas: ".($A_skaicius + $a_skaicius);

print '<br>';
print '<br>';
?>

<!-- 7. -->
<?php
print '7 uzd.';
print '<br>';

$tekstas1 = 'An American in Paris';
$tekstas2 = 'Breakfast at Tiffany\'s';
$tekstas3 = '2001: A Space Odyssey';
$tekstas4 = 'It\'s a Wonderful Life';

$tekstai = array($tekstas1, $tekstas2, $tekstas3, $tekstas4);
//print_r($tekstai);

foreach($tekstai as $tekstas) {
    print '> '.$tekstas.'<br>';

    $array_tekstas = str_split($tekstas);
    foreach($array_tekstas as $raide) {
        $case_raide = strtoupper($raide);
        
        if ( 'A' == $case_raide or 'E' == $case_raide or 'I' == $case_raide or 'O' == $case_raide or 'U' == $case_raide ) {
            $tekstas = str_replace($raide, '', $tekstas);
            }
    }

    print 'Ištrynus balses: '.$tekstas.'<br>';
}

print '<br>';
?>

<!-- 8. -->
<?php
print '8 uzd.';
print '<br>';

$filmas_ir_epizodas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,15) . ' - A New Hope';

print '<pre>';
print $filmas_ir_epizodas.'<br>';
print '</pre>';

$epizodo_dalis = stristr($filmas_ir_epizodas,'Episode');
$epizodo_dalis = stristr($epizodo_dalis,' ');
$epizodo_dalis = stristr($epizodo_dalis,'-', true);
print '(1var) Epizodo numeris: '.intval($epizodo_dalis).'<br>';

preg_match('/Episode[ ]+(\d+)/', $filmas_ir_epizodas, $epizodo_numeris); // Episode[ ]+ - nurodau, kad po Episode, gali buti labai daug tarpu iki skaiciaus, o (\d+) - nurodau, kad skaiciu issisaugau, sioje vietoje pliusas reiskia, kad imsime skaicius kol jie eis vienas paskui kita be jokiu kitu isiterpimu
//print_r($epizodo_numeris); // [0] - Episode 9, [1] - issaugo, kas buvo islupta su skliausteliai, t.y 9 
print "(2 var. su RegEx) Epizodo numeris: $epizodo_numeris[1]";

print '<br>';
print '<br>';
?>

<!-- 9. -->
<?php
print '9 uzd.';
print '<br>';

$filmo_pavadinimas1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$filmo_pavadinimas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$filmo_pavadinimas3 = 'Test\'s:ar g$er#ai,veikia..,skaičiavimas;apčyy ir ačiūŪ!!!!';

$filmu_pavadinimai = array($filmo_pavadinimas1, $filmo_pavadinimas2, $filmo_pavadinimas3);

foreach($filmu_pavadinimai as $filmas) {

    print $filmas.'<br>';
    $filmo_pavadinimo_arr = strtr($filmas, ',\.\:\;', ' \ \ \ '); // kokie simboliai bus paversti i kitokius simbolius
    $filmo_pavadinimo_arr = explode(' ', $filmo_pavadinimo_arr);

    $trumpesnis_nei_6 = 0;
    $zodziu_skaicius = 0;

    foreach($filmo_pavadinimo_arr as $zodis) {

        $raidziu_skaicius = preg_match_all("/[a-z]/i", $zodis);
        $raidziu_skaicius += preg_match_all("/[ą-ž]/i", $zodis) / 2;
        if (0 < $raidziu_skaicius and 6 > $raidziu_skaicius) {
            $trumpesnis_nei_6++;
            print "- $zodis ($raidziu_skaicius) <br>";
        }
        if (0 < $raidziu_skaicius) {$zodziu_skaicius++;}
    }

print '<i>Žodžių trumpesnių nei 6 raidės skaičius: </i>'.$trumpesnis_nei_6.' / '.$zodziu_skaicius.'<br><br>';

}


?>

<!-- 10. -->
<?php
print '10 uzd.';
print '<br>';

$raide_pirma = 97;
$raide_paskutine = 122;
$zodis = '';
$max_raidziu_skaicius = 5;

for ($skaicius = 0; $skaicius < $max_raidziu_skaicius; $skaicius++) {
    $zodis .= chr(rand($raide_pirma, $raide_paskutine));
}

print "Sugeneruotas žodis iš $max_raidziu_skaicius raidžių: $zodis";

print '<br>';
print '<br>';
?>

<!-- 11. Papildomas -->
<?php
print '11 uzd. PAPILDOMAS';
print '<br>';

$filmo_pavadinimas1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$filmo_pavadinimas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$zodziu_arr = [];
$new_array = [];

$zodziai = $filmo_pavadinimas1.' '.$filmo_pavadinimas2;
print $zodziai;
print '<br>';

$zodziai = strtr($zodziai, ',\.\:\;', ' \ \ \ '); // pakeiciame

$zodziai = array_unique( explode(' ', $zodziai) ); // paverciame i array ir paliekame unikalius elementus

foreach($zodziai as $zodis) {
    if (0 < strlen($zodis)) {array_push($zodziu_arr, $zodis);}
}

while (count($new_array) < 10) {

    while (true) {
        $zodis = $zodziu_arr[ rand(0, count($zodziu_arr)-1) ];
        $ar_sutampa = 0;

        if ( !in_array($zodis, $new_array, true) ) { // true - kad sutaptu ir tipas
            array_push($new_array, $zodis);
            break;
        }

    }

}

print '<br> <i>Sugeneruotas naujas sakinys:</i> <br>';
print implode(' ', $new_array); // i string'a pakeiciam

print '<br>';
print '<br>';
?>