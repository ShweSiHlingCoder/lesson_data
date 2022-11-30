<?php 
// isset() method
// associative array
$a = array("a" => "red", "b" => "green");
if (isset($a["a"])) {
    echo "Variable is set";
} else {
    echo "Variable is not set";
}

// array_key_exists() method

$array_key = array("a" => "red", "b" => "green");
if (array_key_exists("c", $array_key)) {
    echo "Variable is set";
} else {
    echo "Variable is not set";
}
// associative array
$a = array("a" => "red", "b" => "green");
var_dump(array_key_exists("a", $a)); //false