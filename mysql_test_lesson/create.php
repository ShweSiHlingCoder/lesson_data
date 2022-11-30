<?php 
include("config.php");
// user create
if(isset($_POST['create'])){
  $firstname = mysqli_real_escape_string($link, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
  if(mysqli_query($link, $sql)){
    header("Location: index.php");
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}


?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h1>User Create <span><a href="index.php" class="btn btn-primary">Back</a></span> </h1>
     </div>
     <div class="card-body">
      <form action="<?php $_PHP_SELF ?>" method="POST">
       <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstname" placeholder="Enter Your First Name">
       </div>
       <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name">
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>

       <div class="mb-3">
        <input type="submit" class="btn btn-secondary" name="create" value="User Create">
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>