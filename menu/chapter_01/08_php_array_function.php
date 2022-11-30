<?php
// php array function 
// sort - sort an array in ascending order
$sort_array = array(1, 10, 2, 8, 5, 6, 7, 4, 9, 3);
sort($sort_array);
echo "<pre>";
print_r($sort_array);
echo "</pre>";

//sort arrays in descending order
$sort_array_1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
rsort($sort_array_1);
echo "<pre>";
print_r($sort_array_1);
echo "</pre>";
//sort associative arrays in ascending order, according to the value
$sort_array_2 = array("a" => 10, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6, "g" => 7, "h" => 8, "i" => 9, "j" => 1);
asort($sort_array_2);
echo "<pre>";
print_r($sort_array_2);
echo "</pre>";

//sort associative arrays in ascending order, according to the key
$sort_array_3 = array("a"=>10, "b"=>2, "c"=>3, "d"=>4, "e"=>5, "f"=>6, "g"=>7, "h"=>8, "i"=>9, "j"=>1);
ksort($sort_array_3);
echo "<pre>";
print_r($sort_array_3);
echo "</pre>";

//sort associative arrays in descending order, according to the value
$sort_array_4 = array("b"=>1, "a"=>2, "c"=>3, "d"=>4, "e"=>5, "f"=>6, "g"=>7, "h"=>8, "i"=>9, "j"=>10);
ksort($sort_array_4);
echo "<pre>";
print_r($sort_array_4);
echo "</pre>";


//sort associative arrays in descending order, according to the key
$sort_array_5 = array("b"=>1, "a"=>2, "c"=>3, "d"=>4, "e"=>5, "f"=>6, "g"=>7, "h"=>8, "i"=>9, "j"=>10);
ksort($sort_array_5);
echo "<pre>";
print_r($sort_array_5);
echo "</pre>";


echo "<hr>";
// array_pop - remove the last element of an array
$pop_array = array(1,2,3,4,5,6,7,8,9,10);
array_pop($pop_array);
echo "<pre>";
print_r($pop_array);
echo "</pre>";

echo "<hr>";
// array_push - add one or more elements to the end of an array
$push_array = array(1,2,3,4,5,6,7,8,9,10);
array_push($push_array, 11,12,13,14,15);
echo "<pre>";
print_r($push_array);
echo "</pre>";

echo "<hr>";
// array_shift - remove the first element of an array
$shift_array = array(1,2,3,4,5,6,7,8,9,10);
array_shift($shift_array);
echo "<pre>";
print_r($shift_array);
echo "</pre>";

echo "<hr>";
// array_unshift - add nnone or more elements to teh beginning of an array
$unshift_array = array(1,2,3,4,5,6,7,8,9,10);
array_unshift($unshift_array, 0, 11, 12, 13, 14, 15);
echo "<pre>";
print_r($unshift_array);
echo "</pre>";

echo "<hr>";
// array_splice - remove elements from an array
$splice_array = array(1,2,3,4,5,6,7,8,9,10);
array_splice($splice_array, 3, 2);
echo "<pre>";
print_r($splice_array);
echo "</pre>";

echo "<hr>";