<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form with input group</title>
</head>
<body>
    <h1>Html form with input group</h1>
    <form action="" method="POST">
        Name : <input type="text" name="name" id=""><br><br>
        Email : <input type="text" name="email" id=""><br><br>
        Phone : <input type="number" name="phone" id=""><br><br>
        Password : <input type="password" name="password" id=""><br><br>
        Gender : <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        Check box 1 : <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> <br> <br>
        Check box 2 : <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"> <br> <br>
        <input type="submit" name="submit" value="Add Your Data">

    </form>

    <?php
        if(isset($_GET['submit'])){
            echo $GET['name'];
            echo $GET['email'];
            echo $GET['phone'];
            echo $GET['password'];
            echo $GET['gender'];
            echo $GET['vehicle1'];
            echo $GET['vehicle2'];
            

        }

    ?>
</body>
</html>