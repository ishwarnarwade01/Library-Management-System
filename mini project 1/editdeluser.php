<?php
include "config.php";

if(isset($_POST['update'])){
    $user_id = $_GET['id'];
    $first_name = $_POST['firstname'];
    $last_name  = $_POST['lastname'];
    $class  = $_POST['class'];
    $div = $_POST['division'];
    $rollno = $_POST['rollno'];
    $address=$_POST['address'];
    $gender =$_POST['gender'];
    $contact =$_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $book=$_POST['book'];

    $sql = "UPDATE students SET firstname ='$first_name',lastname='$last_name',class='$class',division='$div',rollno='$rollno',address='$address',gender='$gender',contact='$contact',email='$email',password='$password',book='$book' Where id='$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        header("Location: editusers.php");
        //echo "Record Updated Successfully";
        
    }
    else{
        echo "Error:".$sql."<br>" . $conn->error;
    }

}

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id='$user_id'";
    $result=$conn->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $id=$row['id'];
            $first_name = $row['firstname'];
            $last_name=$row['lastname'];
            $class=$row['class'];
            $div=$row['division'];
            $rollno=$row['rollno'];
            $address=$row['address'];
            $gender=$row['gender'];
            $contact=$row['contact'];
            $email=$row['email'];
            $password=$row['password'];
            $book=$row['book'];
        }
        ?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>GIGJ Library</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
      <!--slider-->
   
      <!--Slider-->
    <div class="p-3 bg-secondary text-white">
      <!--Nav bar-->
      <ul class="nav justify-content-end">
        <li class="nav-item">
        <div class="row g-3 align-items-center">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              Browse
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#">Subject</a></li>
              <li><a class="dropdown-item" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#">Author</a></li>
              <li><a class="dropdown-item" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#">Title</a></li>
            </ul>
          </div>
          </div></li><li class="nav-item">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" style="background: lightblue;">Search</button>
            </form>
          </li>
        
  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#" style="color: white;">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#" style="color: white;">About us</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center justify-content-end p-3 link-light text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="glyphicon glyphicon-user"></span>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#">profile</a></li>
                    <li><a class="dropdown-item" href="index.html">Logout</a></li>
                </ul>
            </div>
        </li>
      </ul>
    </div>
    <!-- Example Code -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="width: 1450px; height: 400px;">
            <img src="3.jpg" class="d-block w-100" alt="image">
          </div>
          <div class="carousel-item active" style="width: 1450px; height: 400px;">
            <img src="2.jpg" class="d-block w-100" alt="image">
          </div>
          <div class="carousel-item active" style="width: 1450px; height: 400px;">
            <img src="3.jpg" class="d-block w-100" alt="image">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div><br>
    <!-- End Example Code -->
    <center>
    <form action = "" method="POST">
        <fieldset>
                <legend><center>Personal Information</center></legend>
                ID:<br>
                <input type="text" name="user_id" value="<?php echo $id;?>">
                <br>
                First Name : <br>
                <input type="text" name= "firstname" value="<?php echo $first_name;?>">
                <br>
                Last Name: <br>
                <input type="text" name="lastname" value = "<?php echo $last_name;?>">
                <br>
                Class: <br>
                <input type="text" name="class" value = "<?php echo $class;?>">
                <br>
                Division: <br>
                <input type="text" name="division" value = "<?php echo $div;?>">
                <br>
                Roll No: <br>
                <input type="text" name="rollno" value = "<?php echo $rollno;?>">
                <br>
                Address: <br>
                <input type="text" name="address" value = "<?php echo $address;?>">
                <br>
                Gender: <br>
                <input type="radio" name="gender" value="Male" <?php if($gender=='Male'){echo "checked";}?> > Male
                <input type="radio" name="gender" value="Female" <?php if($gender=='Female'){echo "checked";}?>> Female
                Contact: <br>
                <input type="text" name="contact" value = "<?php echo $contact;?>">
                <br>
                EMail: <br>
                <input type="email" name="email" value = "<?php echo $email;?>">
                <br>
                Password: <br>
                <input type="password" name="password" value = "<?php echo $password;?>">
                <br>
                Book: <br>
                <input type="text" name="book" value = "<?php echo $book;?>">
                <br>
                <br><br><br>

                <input type="submit" name="update" value="update"> 
            </fieldset>
        </form>
    </center>
<!--footer-->
      <footer class="bg-secondary text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">GIGJ Library</h5>
              <p>
                   This is an online college library. It is used for the college level purpose as it is a college library.The students are able to manage their library account over this website.
              </p>
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">My Account</h5>
      
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">Home</a>
                </li>
                <li>
                  <a href="index.html" class="text-white">Signout</a>
                </li>
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">Books</a>
                </li>
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">Feedback</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-0">Customer care</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">Contact Us</a>
                </li>
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">Privacy Policy</a>
                </li>
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">About us</a>
                </li>
                <li>
                  <a href="file:///C:/Users/PANCHAL%20GOVIND/Desktop/mini%20project/adminhome.html#!" class="text-white">Term of Use</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">@GIGJLibrary</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html> <?php 
    } else{
        header("Location: editusers.php");
    }
    $conn->close();
}
?>