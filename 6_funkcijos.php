<h1> 6. ND </h1>
<h2> Funkcijos </h2>



<!-- 1. -->

<?php
print '1 uzd.';
print '<br>';

function insert($text, $h_number = 1) {
    if (is_array($text)) {
        $text = $text[0];
    }
    print "<h$h_number style='display:inline;'>$text </h$h_number>";
    //print '<h1 style = "display: inline;">'.$match[0].' </h1>';
}

insert('Inserted text');

print '<br>';
print '<br>';
?>

<!-- 2. -->

<?php
print '2 uzd.';
print '<br>';

$h_number = 4;
insert("Second inserted text, used h$h_number", 4);

print '<br>';
print '<br>';
?>

<!-- 3. -->

<?php
print '3 uzd.';
print '<br>';

$hash_code = md5( time() ); //'f9ce456faa54220f704287365d042efc'; 
$pattern = '/\d+/';

print "hash_code: $hash_code <br>";

preg_replace_callback($pattern, 'insert', $hash_code);

print '<br>';
print '<br>';
?>

<!-- 4. -->

<?php
print '4 uzd.';
print '<br>';

function count_without_remainder($arg) {
    $count = 0;
    if ( is_integer($arg) ) {
        for ($i=2; $i <= $arg/2; $i++) { 
            $count += ( 0 == $arg % $i ? 1 : 0 );
        }
        return $count;
        
    } else {
        print "This argument: $arg, isn't integer!...<br>";
        return false;
        
    }
}

$arg = 15;
print "Argument: $arg <br>";

$count = count_without_remainder($arg);
if ($count != false) {
    print 'Count of divisor (integers), when the quotient is without remainder: '.$count.'<br>';
}


print '<br>';
print '<br>';
?>

<!-- 5. -->

<?php
print '5 uzd.';
print '<br>';

$arr_05 = [];

for ($i=0; $i < 100; $i++) { 
    $arr_05[] = rand(33,77);
}

usort($arr_05, function($arg1, $arg2) {
    return -(count_without_remainder($arg1) <=> count_without_remainder($arg2));
});

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

$arr_06 = [];

for ($i=0; $i < 100 ; $i++) { 
    $arr_06[] = rand(333,777);
}

print "Prime numbers: <br>";

foreach($arr_06 as $arg) {
    if ( 0 == count_without_remainder($arg) ) {
        print "$arg ";
    }
}

print '<br>';
print '<br>';
?>

<!-- 7. -->

<?php
print '7 uzd.';
print '<br>';

$deep_level = rand(4,8);

$arr_07 = [];

function recursion_07(&$arr, $deep) {
    $arr_length = rand(3,6);

    for ($i=0; $i < $arr_length; $i++) { 
        if ($i < $arr_length - 1) {
            $arr[] = rand(0,10); 
        } else if ($deep != 0){
            recursion_07($arr[], $deep-1);
        } else {
            $arr[] = 0;
        }
    }

}

recursion_07($arr_07, $deep_level);

print '>> Version 1 (without return) << <br>';
print '<pre>';
print_r($arr_07);
print '</pre>';


$oo = 0;
$arr = [0,1,2,3];
print $arr[++$oo]; print "<br>";

// -------------- Version 2 ----------------

function recursion_07_02($deep) {
    $arr = [];
    $arr_length = rand(3,6);

    for ($i=0; $i < $arr_length; $i++) { 
        if ($i < $arr_length - 1) {
            $arr[] = rand(0,10);
        } else if ($deep != 0) {
            $arr[] = recursion_07_02($deep-1);
        } else {
            $arr[] = 0;
        }
    }
    return $arr;
}

print '>> Version 2 (with return) << <br>';

print '<pre>';
print_r(recursion_07_02($deep_level));
print '</pre>';

print '<br>';
print '<br>';
?>

<!-- 8. -->

<?php
print '8 uzd.';
print '<br>';

function recursion_08($arr) {
    $sum = 0;
    foreach( $arr as $value) {
        if ( is_array($value) ) {
            $sum += recursion_08($value);
        } else {
            $sum += $value;
        }
    }

    return $sum;
}
$sum = recursion_08($arr_07);

print '<pre>';
print "Elements sum of version 1 array: $sum";
print '</pre>';

print '<br>';
print '<br>';
?>

<!-- 9. -->

<?php
print '9 uzd.';
print '<br>';

$arr_09 = [];
$arr_09_02 = [];
for ($i=0; $i < 3; $i++) { 
    $arr_09[] = rand(1,33);
    $arr_09_02[] = rand(1,33);
}

function recursion_09(&$arr) {
    for ($i=0; $i < 3; $i++) {
        if ( 0 < count_without_remainder($arr[array_key_last($arr) - $i]) ){
            $arr[] = rand(1,33);
            recursion_09($arr);
            break;
        }
    }
}

recursion_09($arr_09);

print '<pre>';
print 'FIRST version: <br>';
print_r($arr_09);
print '</pre>';

function dynamicArrayGenerator($dynamicArray) {
    $currentArray = $dynamicArray;
    foreach(array_splice($currentArray, -3) as $value) {
        //print_r($currentArray);
        if(count_without_remainder($value) > 0) {
        //if (gmp_prob_prime($value) != 2) { // si funkcija pas mane neveikia
            // ------- ARBA -------
            // $dynamicArray[] = rand(1,33);
            // return dynamicArrayGenerator($dynamicArray);
            // ------- ARBA -------
            array_push($dynamicArray, rand(1,33));
            return dynamicArrayGenerator($dynamicArray);
        }
    }
    return $dynamicArray;
}

print "<pre>";
print "SECOND version: <br>";
print_r($arr_09_02);
print "after generation (second version): <br>";
print_r(dynamicArrayGenerator($arr_09_02));
print "</pre>";

print '<br>';
print '<br>';
?>

<!-- 10. -->

<?php
print '10 uzd.';
print '<br>';

$arr_10 = [];
for ($i=0; $i < 10; $i++) {
    for ($j=0; $j < 10; $j++) { 
        $arr_10[$i][] = rand(1,100);
    }
}

while(true) {
    $prime_count = 0;
    $prime_sum = 0;
    $min_value = 101;
    $min_keys = []; // row, col
    foreach($arr_10 as $key_row => $inner_arr) {
        foreach($inner_arr as $key_col => $value) {
            if ( $value < $min_value ) {
                $min_value = $value;
                $min_keys = [$key_row, $key_col];
            }
            if ( 0 == count_without_remainder($value) ) {
                $prime_count++;
                $prime_sum += $value;
            }
        }
    }
    print "Prime numbers mean: ".($prime_sum / $prime_count)." ";
    if ( 70 > $prime_sum / $prime_count ) {
        print ', repeat! <br>';
        $arr_10[$min_keys[0]][$min_keys[1]] += 3; 
    } else {
        break;
    }
}

print '<pre>';
print '</pre>';

print '<br>';
print '<br>';
?>

<!-- 11. PAPILDOMAS -->

<?php
print '11 uzd. PAPILDOMAS';
print '<br>';

function recursion_11(&$arr, &$id_arr, &$backg_arr, &$elements_count) {
    $deep = 0;
    $inner_arr_legth = rand(1,5);
    for ($i=0; $i < $inner_arr_legth; $i++) {
        while (true) { // id
            $id = rand(0,10000);
            if ( !in_array($id, $id_arr) ) {
                $id_arr[] = $id;
                break;
            }
        }
        while (true) { // color
            $color = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255));
            if ( !in_array($color, $backg_arr) ) {
                $backg_arr[] = $color;
                break;
            }
        }
        
        print "<div id=$id style = 'background-color: $color; float: left; padding: 2px; margin: 1px;'> ";
        print $id;
        if ( 30 <= rand(1, 100) ) {
                $arr[] = rand(0,100);
                $elements_count++;
        } else {
            //print " recursion";
            $element_deep = recursion_11($arr[$i], $id_arr, $backg_arr, $elements_count);
            $deep = $element_deep > $deep ? $element_deep : $deep;
        }
        print '</div>';
    }

    return $deep + 1;

}


$arr_11_length = rand(10,20);
$arr_11 = [];
$id_arr = [];
$backg_arr = [];

$max_deep = 0;
$elements_count = 0; // elements with value!

$color = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255));
$backg_arr[] = $color;

print "<div style='display:flex; flex-wrap:wrap;  background-color:$color; padding: 3px;'>";
for ($i=0; $i < $arr_11_length; $i++) { 
    while (true) { // id
        $id = rand(0,10000);
        if ( !in_array($id, $id_arr) ) {
            $id_arr[] = $id;
            break;
        }
    }
    while (true) { // color
        $color = sprintf('#%02x%02x%02x', rand(0,255), rand(0,255), rand(0,255));
        if ( !in_array($color, $backg_arr) ) {
            $backg_arr[] = $color;
            break;
        }
    }

    print "<div id=$id style = 'background-color: $color; flex:100%; float: left; padding: 2px; margin: 2px;'> ";
    print $id;
    if ( 50 <= rand(1, 100) ) {
        $arr_11[] = rand(0,100);
        $elements_count++;
    } else {
        $element_deep = recursion_11($arr_11[$i], $id_arr, $backg_arr, $elements_count);
        $max_deep = $element_deep > $max_deep ? $element_deep : $max_deep;
    }
   print '</div>';

}
print "</div>";


print "<h4>Max deep: $max_deep</h4>";
print "<h4>Elements sum <i>(elements with values)</i>: $elements_count</h4>";
//print "<br><br>Max deep: $max_deep <br><br>";

print '<pre>';
print_r($arr_11);
print '</pre>';



print '<br>';
print '<br>';
?>