<h1> 4. ND </h1>
<h2> Masyvai </h2>



<!-- 1. -->

<?php
print '1 uzd.';
print '<br>';

//phpinfo();


$arr = [];

for ($i=0; $i < 30; $i++) { 
    $arr[] = rand(0,25);
}

print '<pre>';
print_r($arr);
//_d($arr);
print '</pre>';

print '<br>';
print '<br>';
?>


<!-- 2. -->
<div style = 'width: 100%;'>
    <span>
<?php
print '2 uzd.';
print '<br>';

$greater_than_10 = 0;
$max_value = 0;
$sum_of_values = 0;
$arrD = [];

// a, b, c, d
foreach($arr as $key => $value) {
    $greater_than_10 += $value > 10 ? 1 : 0;
    $max_value = $value > $max_value ? $value : $max_value;
    $sum_of_values += $value;
    $arrD[] = $value - $key;
}

// e
for ($i=0; $i < 10; $i++) { 
    $arr[] = rand(5,25);
}

$arrE = $arr; 

// f, g
$arrF_paired_1 = $arrF_paired_2 = [];
$arrF_unpaired_1 = [];
$min_index_of_value = 0;
$time = 0; // value greater tha 10
foreach($arr as $key => $value) {
    if ($key%2 == 0) { // paired
        $arrF_paired_1[] = $value; // f
        $arrF_paired_2[] = (15 < $value ? 0 : $value); // g
        unset($arr[$key]); // i
    } else { // unpaired
        $arrF_unpaired_1[] = $value; // f
    }

    if (10 < $value && 0 == $time) { // h
        $min_index_of_value = $key;
        $time++;
    }

}



print "a) Number of values greater then 10: $greater_than_10 <br>";
print "b) Max value: $max_value <br>";
print "c) Sum of values: $sum_of_values <br>";

print '<br>';
?>
    </span>
    <div>
        <span style = 'float:left; width: 20%; box-sizing: border-box;'><?php print "d) "; print "<pre>";  print_r($arrD); print '</pre>';?></span>
        <span style = 'float:left; width: 20%; box-sizing: border-box;'><?php print "e) "; print "<pre>";  print_r($arrE); print '</pre>';?></span>
        <span style = 'float:left; width: 20%; box-sizing: border-box;'><?php print "f) "; print "<pre>";  print "Paired:<br>"; print_r($arrF_paired_1); print "Unpaired:<br>"; print_r($arrF_unpaired_1); print '</pre>';?></span>
        <span style = 'float:left; width: 20%; box-sizing: border-box;'><?php print "g) "; print "<pre>";  print "With paired:<br>"; print_r($arrF_paired_2); print '</pre>';?></span>
        <span style = 'float:left; width: 20%; box-sizing: border-box;'><?php print "h) "; print "<pre>";  print_r($arr); print '</pre>';?></span>
    </div>
    <div style = 'float:left; width: 100%;'><?php print "i) Used e) array <br> With unset(): key: $min_index_of_value; value: $arrE[$min_index_of_value] <br><br><br>" ?></div>
</div>


<div style = 'float:left; width: 100%;'>

<!-- 3. -->

<?php
print '3 uzd.';
print '<br>';

// A-D => 65-68 (ASCII)

$letter_arr = [];
$letter_A = 0;
$letter_B = 0;
$letter_C = 0;
$letter_D = 0;

for ($i=0; $i < 200; $i++) { 
    $letter_arr[] = chr(rand(65,68)); // letter
}

foreach($letter_arr as $value) {
    if ('A' == $value) {$letter_A++;}
    if ('B' == $value) {$letter_B++;}
    if ('C' == $value) {$letter_C++;}
    if ('D' == $value) {$letter_D++;}
}

print "Number:<br>";
print "- A letters: $letter_A <br>";
print "- B letters: $letter_B <br>";
print "- C letters: $letter_C <br>";
print "- D letters: $letter_D <br>";


print '<br>';
print '<br>';
?>
</div>

<!-- 4. -->
<div style = 'float:left; width: 100%;'>
<?php
print '4 uzd.';
print '<br>';

sort($letter_arr, 4);
$arr_count = count($letter_arr);

for ($i=0; $i < 5; $i++) {
    $arr_iterval = array_slice($letter_arr,$i*($arr_count/5),$arr_count/5, true);
    print "<pre style = 'float:left; width: 20%;'>";
    print_r($arr_iterval);
    print "</pre>";
}

print '<br>';
print '<br>';
?>


<!-- 5. -->

<?php
print '5 uzd.';
print '<br>';

// A-D => 65-68 (ASCII)

$letter_arr_01 = [];
$letter_arr_02 = [];
$letter_arr_03 = [];
$letters_arrays_sum = [];

for ($i=0; $i < 200; $i++) { 
    $letter_arr_01[] = chr(rand(65,68)); // letters
    $letter_arr_02[] = chr(rand(65,68));
    $letter_arr_03[] = chr(rand(65,68));
}


foreach($letter_arr_01 as $key => $value) {
    $letters_arrays_sum[] = $letter_arr_01[$key].$letter_arr_02[$key].$letter_arr_03[$key];
}

$unique_combinations_arr = array_unique($letters_arrays_sum);

sort($unique_combinations_arr);
$unique_count = count($unique_combinations_arr);

$col_num  = 4;


for ($i=0; $i < $col_num; $i++) {
    
    $arr_iterval = array_slice($unique_combinations_arr, $i*ceil($unique_count/$col_num), ceil($unique_count/$col_num), true); 
    
    print "<pre style = 'float:left; width: ".(100/$col_num)."%;'>";
    print_r($arr_iterval);
    print "</pre>";
}

print "<p style ='float:left; width: 100%;'> Count of unique values: $unique_count / ".(4*4*4)."</p>";




print '<br>';
print '<br>';
print '<br>';
?>
</div>

<!-- 6. -->
<div style = 'float:left; width: 100%;'>
<?php
print '6 uzd.';
print '<br>';
print '<br>';

$arr_01 = [];
$arr_02 = [];

for ($i=0; $i < 100; $i++) { 
    while (true) {
        $value = rand(100, 999);
        if ( !in_array($value, $arr_01, true) ) {
            $arr_01[] = $value;
            break;
        }
    }
    while (true) {
        $value = rand(100, 999);
        if ( !in_array($value, $arr_02, true) ) {
            $arr_02[] = $value;
            break;
        }
    }
}

$arr_count = count($arr_01);
print "COUNT: $arr_count <br>";
$col_num = 5;

for ($n=1; $n <= 2; $n++) { 
    print "<div style = 'float:left; width: 100%;'>";
    print "Array $n:<br>";
    $arr_name = "arr_0$n";
    for ($i=0; $i < $col_num; $i++) {
        
        $arr_iterval = array_slice($$arr_name, $i*ceil($arr_count/$col_num), ceil($arr_count/$col_num), true); 
        
        print "<pre style = 'float:left; width: ".(100/$col_num)."%;'>";
        print_r($arr_iterval);
        print "</pre>";
    }
    print "</div>";
}




print '<br>';
print '<br>';
?>
</div>

<!-- 7. -->
<div style = 'float:left; width: 100%;'>
<?php
print '7 uzd.';
print '<br>';

$arr_03 = [];
for ($i=0; $i < 100; $i++) { 
    while (true) {
        $value = rand(100, 999);
        if ( in_array($value, $arr_01) && !in_array($value, $arr_02) ) {
            $arr_03[] = $value;
            break;
        }
    }
}

$arr_count = count($arr_03);
$col_num = 5;

for ($i=0; $i < $col_num; $i++) {
    
    $arr_iterval = array_slice($arr_03, $i*ceil($arr_count/$col_num), ceil($arr_count/$col_num), true); 
    
    print "<pre style = 'float:left; width: ".(100/$col_num)."%;'>";
    print_r($arr_iterval);
    print "</pre>";

}

print '<br>';
print '<br>';
?>
</div>

<!-- 8. -->
<div style = 'float:left; width: 100%;'>
<?php
print '8 uzd.';
print '<br>';

$arr_04 = [];
for ($i=0; $i < 100; $i++) { 
    while (true) {
        $value = rand(100, 999);
        if ( in_array($value, $arr_01) && in_array($value, $arr_02) ) {
            $arr_04[] = $value;
            break;
        }
    }
}

$arr_count = count($arr_04);
$col_num = 5;

for ($i=0; $i < $col_num; $i++) {
    
    $arr_iterval = array_slice($arr_04, $i*ceil($arr_count/$col_num), ceil($arr_count/$col_num), true); 

    print "<pre style = 'float:left; width: ".(100/$col_num)."%;'>";
    print_r($arr_iterval);
    print "</pre>";

}


print '<br>';
print '<br>';
?>
</div>

<!-- 9. -->
<div style = 'float:left; width: 100%;'>
<?php
print '9 uzd.';
print '<br>';

$arr_05 = [];

foreach($arr_01 as $key => $value) {
    $arr_05[$value] = $arr_02[$key];
}

ksort($arr_05);
$arr_count = count($arr_05);
$col_num = 5;

for ($i=0; $i < $col_num; $i++) {
    
    $arr_iterval = array_slice($arr_05, $i*(floor($arr_count/$col_num)),floor($arr_count/$col_num), true); 

    print "<pre style = 'float:left; width: ".(100/$col_num)."%;'>";
    print_r($arr_iterval);
    print "</pre>";

}



print '<br>';
print '<br>';
?>
</div>

<!-- 10. -->
<div style = 'float:left; width: 100%;'>
<?php
print '10 uzd.';
print '<br>';

$arr_06 = [];

$arr_06[] = rand(5,25);
$arr_06[] = rand(5,25);

for ($i=2; $i < 10; $i++) { 
    $arr_06[] = $arr_06[$i-2] + $arr_06[$i-1];
}

print "<pre>";
print_r($arr_06);
print "</pre>";

print '<br>';
print '<br>';
?>
</div>

<!-- 11. PAPILDOMAS-->
<div style = 'float:left; width: 100%;'>
<?php
print '11 uzd. PAPILDOMAS';
print '<br>';

$arr_101 = [];
$arr_left = [];
$arr_right = [];

for ($i=0; $i < 101; $i++) {
    $arr_101[] = rand(0, 300);
    array_unique($arr_101);
}

usort($arr_101, function($val1, $val2){
    return -($val1 <=> $val2);
});

$arr_middle[] = $arr_101[0];
$arr_left = [];
$arr_right = [];

for ($j=0; $j < 50; $j++) { 

    if (array_sum($arr_left) - array_sum($arr_right) > 0 ) {
        $arr_left[$j] = $arr_101[$j * 2 + 2];
        $arr_right[$j] = $arr_101[$j * 2 + 1];
    } else {
        $arr_left[$j] = $arr_101[$j * 2 + 1];
        $arr_right[$j] = $arr_101[$j * 2 + 2];
    }
}

sort($arr_left);
$new_arr = array_merge($arr_left, $arr_middle, $arr_right);

print "<br>";
print "sum: arr_left: ".array_sum($arr_left);
print "<br>";
print "sum: arr_right: ".array_sum($arr_right);
print "<br>";
print "difference: ".array_sum($arr_left) - array_sum($arr_right);

print "<pre>";
print_r($new_arr);
print "</pre>";

print '<br>';
print '<br>';
?>

</div>