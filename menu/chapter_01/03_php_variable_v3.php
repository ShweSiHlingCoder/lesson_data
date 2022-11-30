<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <?php
 $inches = 20;
 $centimeters = $inches * 2.54;
 echo "Inches: $inches";
 echo "<br>";
 echo "Centimeters: round : ($centimeters)";
 echo round($centimeters);
 
 
 echo "<br>";

 var_dump(round(3.4));
 var_dump(round(3.5));
 ?>
</body>

</html>