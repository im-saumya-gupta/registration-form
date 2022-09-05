<?php
include('connect.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];

    $sql="insert into `users` (name,password)
    values('$name','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo 'Record inserted successfully';
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
<body>
<div class="form-div container-fluid">
    <div class="heading  d-flex justify-content-center pt-5">
        <h3>Registration Form</h3>
    </div>
    <div class="form-conatiner d-flex justify-content-center mt-5">
        <form class="register-form p-5"action="" method="post">
            <div class="mb-3">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name">
              </div>
              <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="text" class="form-control" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-dark" name="submit">Register</button>
          </form>
    </div>
    <div class="show-record d-flex justify-content-center my-5">
    <button type="button"class="btn btn-dark"><a href="display.php" class="text-light" style="text-decoration: none;">
            Show Records</a>
        </button>
    </div>    
</div>  
</body>
</html>