<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>PHP FORLOOP</title>
</head>

<body>
 <?php 
 //for loop
 //for syntax:
  for ($i = 0; $i <= 10; $i++) {
   echo "The number is: $i <br>";
  }
 
  
 
  ?>


 <hr>
 <?php
 // indexed array
 $cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Audi", "Ferrari", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

 echo count($cars);
 echo "<br>"; //17
 // for loop
 for ($i = 0; $i < count($cars); $i++) {
  echo $cars[$i] . "<br>";
 }
 ?>
</body>

</html>