<?php
 
 include "config.php";

   if(isset($_POST['submit'])){
       
       $first_name = $_POST['firstname'];
       $last_name  = $_POST['lastname'];
       $gender =$_POST['gender'];
       $address=$_POST['address'];
       $email = $_POST['email'];
       $password = $_POST['password'];
      
   $sql = "INSERT INTO students(firstname,lastname,gender,address,email,password) VALUES ('$first_name','$last_name','$gender','$address','$email','$password')";
  
   $result = $conn->query($sql);

     if($result == 1){
        header("Location: adminlogin.php");
       echo "New record created successfully";}

     else{
       echo "Error:".$sql . "<br>" . $conn->error;
         }
      $conn->close();
         }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Library Management System signup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="container-fluid vh-100" style="margin-top:300px">
            <div class="" style="margin-top:200px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Create Account</h3>
                        </div>
                        <div class="p-4">
                            <form action="adminsignup.php" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="enter first name" name="firstname">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="enter last name" name="lastname">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>&nbsp;&nbsp;&nbsp;
                                    <input type="radio"  name="gender" value="Male"> Male&nbsp;&nbsp;
                                    <input type="radio"  name="gender" value="Female"> Female
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="enter address" name="address">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input type="email" class="form-control" placeholder="a@gmail.com" name="email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" placeholder="password" required>
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit" value="submit"><span></span> Sign up</button>
                                </div>
                                <p class="text-center mt-3">Already have an account?
                                <span class="text-primary"><a href="adminlogin.php">Log in</a></span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>