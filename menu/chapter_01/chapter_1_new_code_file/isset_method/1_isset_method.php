<?php
$var = "";
$var = null;
if (isset($var)) {
 echo "Variable is set";
} else {
 echo "Variable is not set";
}

$a = 20;
$a = null;
var_dump(isset($a)); // true // false
?>