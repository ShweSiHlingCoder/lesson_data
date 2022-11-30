<?php
// php array
//indexed array
$car = array("Volvo", "BMW", "Toyota");
echo "I like" . $car[0] ."," . $car[1] ."and" . $car[2] . ".";
echo "<br>";
$array_indexed = array(1, 2, 3, 4, 5); // integer
echo $array_indexed[0];
echo "<br>";

echo "<pre>";
print_r($array_indexed);
echo "</pre>";
echo "<hr>";
// for loop
for ($i = 0; $i < count($array_indexed); $i ++) {
 echo $array_indexed[$i];
 echo "<br>";
}
echo "<hr>";
// foreach loop
foreach ($array_indexed as $value) {
 echo $value;
 echo "<br>";
}
echo "<hr>";
$class = array("php", "html", "css", "javascript", 12, 30, 345, 3.54, "hello");
$count = count($class);
echo $count;
echo "<hr>";
echo "<pre>";
print_r($class);
echo "</pre>";
echo "<hr>";

// associative array
$age = array("Peter" => "35" , "Ben" => "37", "Joe" => "43"); // key => value
echo "Peter is" . $age['Peter'] . "years old.";
echo "<hr>";
echo "<pre>";
print_r($age);
echo "</pre>";

echo "<hr>";
//foreach loop
foreach ($age as $key => $value) {
 echo $key ." is " . $value . " years old.";
 echo "<br>";
}
echo "<hr>";

// muldidimesional array
$cars = array( 
 array("Volvo", 22, 18),
 array("BMW", 15, 13),
 array("Saab", 5, 2),
 array("Land Rover", 17, 15)
);
echo $cars[0][0] . ": In stock : " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<Br>";
echo $cars[0][0] . ": In stock : " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<Br>";
echo "<Hr>";
echo "<pre>";
print_r($cars);
echo "</pre>";
// foreach loop
foreach ($cars as $key => $value) { 
 echo $value[0] . ": In stock: " . $value[1] . ", sold: " . $value[2] . "<Br>";
}