<html>

<head>
 <title>PHP File Upload example</title>
</head>

<body>

 <form action="" enctype="multipart/form-data" method="post">
  Select image :
  <input type="file" name="file"><br />
  <input type="submit" value="Upload" name="Submit1"> <br />


 </form>
 <?php
if (isset($_POST['Submit1'])) {
     $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $filepath = "uploads/" . $_FILES["file"]["name"];

    if (move_uploaded_file($fileTmpName,$filepath)) {
        echo "<img src=".$filepath." height=200 width=300 />";
    } else {
        echo "Error !!";
    }
}
?>

</body>

</html>