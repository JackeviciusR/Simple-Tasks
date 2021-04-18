<h1> 5. ND </h1>
<h2> Masyvai 2 </h2>



<!-- 1. -->

<?php
print '1 uzd.';
print '<br>';

$arr = [];

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 5 ; $j++) { 
        $arr[$i][] = rand(5,25);
    }
}

print '<pre>';
print_r($arr);
print '</pre>';

print '<br>';
print '<br>';
?>


<!-- 2. -->

<?php
print '2 uzd.';
print '<br>';
//print (count($arr));
$greater_than_10 = 0; // a)
$max_value = 0; // b)
$inner_arr_equal_indexes_values_sum = array_fill(0, count($arr[0]), 0); // c)
$inner_arr_index_values_sum = array_fill(0, count($arr), 0); // e)

// a), b), c)
foreach ($arr as $key => $inner_arr) {
    //print "$key <br>";
    //$index_values_sum = 0;
    foreach($inner_arr as $inner_key => $value) {
        $greater_than_10 += ($value > 10 ? 1 : 0); // a)
        $max_value = ($value > $max_value ? $value : $max_value); // b)
        $inner_arr_equal_indexes_values_sum[$inner_key] += $value; // c)
        $inner_arr_index_values_sum[$key] += $value; // e)
    }

}

// d)
foreach($arr as $main_key => $_) {
    for ($i=0; $i < 2 ; $i++) { 
        $arr[$main_key][] = rand(5,25);
    }
}

print "a) Number of values greater than 10: $greater_than_10 <br>";
print "b) Max value: $max_value <br>";
print "c) Sum of same indexes: <br>";
print '<pre>';
print_r($inner_arr_equal_indexes_values_sum);
print '</pre>';
print "d) Extended array: <br>";
print '<pre>';
print_r($arr);
print '</pre>';
print "e) Indexes values sum: <br>";
print '<pre>';
print_r($inner_arr_index_values_sum);
print '</pre>';


print '<br>';
print '<br>';
?>



<!-- 3. -->

<?php
print '3 uzd.';
print '<br>';

$arr_03 = [];

for ($i=0; $i < 10 ; $i++) {
    
    for ($j=0; $j < rand(2,20); $j++) { 
        $arr_03[$i][$j] = chr(rand(65,90)); // range('A','Z');
    }
}

foreach($arr_03 as $key_03 => $_) {
    usort($arr_03[$key_03], function($val1, $val2) {
        return $val1 <=> $val2;
    });
}

//sort($arr_03);
print '<pre>';

print_r($arr_03);
print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 4. -->

<?php
print '4 uzd.';
print '<br>';

usort($arr_03, function($arr1, $arr2) {
    
    if ( in_array('K', $arr1) && in_array('K', $arr2) ) {
        return count($arr1) <=> count($arr2);
    } else if ( in_array('K', $arr1) ) {
        return 0;
    } else if ( in_array('K', $arr2) ) {
        return 1;
    }
    return count($arr1) <=> count($arr2);
});

print '<pre>';
print_r($arr_03);

print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 5. -->

<?php
print '5 uzd.';
print '<br>';

$user_id = 'user_id';
$place_in_row = 'place_in_row';

$arr_05 = [];
for ($i=0; $i < 30; $i++) {
    while(true) {
        $id = rand(1, 1000000);
        if ( !in_array($id, $arr_05) ) {
            $arr_05[$i][$user_id] = $id;
            break;
        }
    } 
    $arr_05[$i][$place_in_row] = rand(0, 100);
}

print '<pre>';
print_r($arr_05);
print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 6. -->

<?php
print '6 uzd.';
print '<br>';


usort($arr_05, function($val1, $val2) use ($user_id){
    return $val1[$user_id] <=> $val2[$user_id];
});

print '<pre>';
print_r($arr_05);
print '</pre>';


usort($arr_05, function($val1, $val2) use ($place_in_row){
    return -($val1[$place_in_row] <=> $val2[$place_in_row]);
});

print '<pre>';
print_r($arr_05);
print '</pre>';


print '<br>';
print '<br>';
?>



<!-- 7. -->

<?php
print '7 uzd.';
print '<br>';

foreach($arr_05 as $key => $_) {
    $name = '';
    $surname = '';
    for ($i=0; $i < rand(2,15); $i++) { 
        $name .= chr(rand(65,90));
    }
    for ($j=0; $j < rand(2,15); $j++) { 
        $surname .= chr(rand(65,90));
    }
    $arr_05[$key]['name'] = $name;
    $arr_05[$key]['surname'] = $surname;
}


print '<pre>';
print_r($arr_05);
print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 8. -->

<?php
print '8 uzd.';
print '<br>';

$arr_08 = [];

for ($i=0; $i < 10; $i++) { 
    $arr_length = rand(0,5);
    if(0 == $arr_length) {
        $arr_08[$i] = 10;
    }
    for ($j=0; $j < $arr_length; $j++) { 
        $arr_08[$i][$j] = rand(0,10);
    }
}

print '<pre>';
print_r($arr_08);
print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 9. -->

<?php
print '9 uzd.';
print '<br>';

$test_arr = [0 => 30, 1 => 20, 2 => [0 => 100, 1 => 200], 3 => [0 => 1000]];
$arr_values_sum = 0;

foreach($arr_08 as $val_or_arr) {
    $arr_values_sum += ( is_array($val_or_arr) ? array_sum($val_or_arr) : $val_or_arr );
}

usort($arr_08, function($val1, $val2) {
    $sum1 = ( is_array($val1) ? array_sum($val1) : $val1 );
    $sum2 = ( is_array($val2) ? array_sum($val2) : $val2 );
    return $sum1 <=> $sum2;
});

print "All values sum: $arr_values_sum <br>";
print '<pre>';
print_r($arr_08);
print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 10. -->

<?php
print '10 uzd.';
print '<br>';
print '<br>';

$arr_10 = [];
$value = 'value';
$color = 'color';
$simbols = ['#','%','+','*','@','裡'];

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        $arr_10[$i][$j][$value] = $simbols[rand( 0, count($simbols)-1 )];
        $arr_10[$i][$j][$color] = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255)); // arba dechex(rand(0x000000,0xFFFFFF));
    }
}

foreach($arr_10 as $main_arr) {
    foreach($main_arr as $inner_arr) {
        print "<a style = 'color:$inner_arr[$color]; font-size: 10px; width: 15px; text-align:center;float:left;'>".$inner_arr[$value].'</a>';
    }
    print "<br>";
}

print '<pre>';
//print_r($arr_10);
print '</pre>';

print '<br>';
print '<br>';
?>



<!-- 11. PAPILDOMAS -->

<?php
print '11 uzd. PAPILDOMAS';
print '<br>';

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);

$long = rand(10,30);
$sk_a = $sk_b = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];

for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}

foreach($c as $val) {
    $sk_a += ($val % $b) / ($a % $b);
    $sk_b += ($val % $a) / ($b % $a);
}

echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';

echo '<h3>Skaičius '.$a.' yra pakartotas '.$sk_a.' kartų, o skaičius '.$b.' - '.$sk_b.' kartų.</h3>';


print '<pre>';


print '</pre>';

print '<br>';
print '<br>';


?>



