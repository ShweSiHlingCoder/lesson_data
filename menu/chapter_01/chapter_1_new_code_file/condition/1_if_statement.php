<?php
$num = 10;
if ($num > 0) { 
 echo "Positive number";
} else { 
 echo "Negative number";
}

echo "<br>";

$website = "google";
if ($website == "google") {
 //echo "Google";
 header("Location: welcome.php");
} else {
 //echo "not Google";
 header("Location: not.php");
}
?>