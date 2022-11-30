<?php
include("config.php");
// users record delete
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
if(mysqli_query($link, $sql)){
header("Location: index.php");
}else{
echo "Error deleting record: ".mysqli_error($link);
}
}