<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Registration Form</title>
  </head>
  <?php
  $conn=mysqli_connect("localhost","root","","ecafe");
  if(isset($_POST['Register']))
  {
    $u=$_POST['fname'];
    $e=$_POST['email'];
    $p=$_POST['lname'];
    $w=$_POST['password'];
    $data=mysqli_query($conn,"insert into register(name,email,phoneno,password)values('$u','$e','$p','$w')");
    if($data)
    {
      echo"<script>alert('Registration success');window.location.href='../login/login.php';</script>";
    }
    else{
      echo"<script>alert('Registration failed');</script>";
    }
  }
  ?>

  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_3.jpg');"></div>
    <div class="contents order-2 order-md-3">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register</h3>
            
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control"  name="fname" pattern="[A-Za-z\s]+" title="Enter a valid name" required>
                  </div>    
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input type="tel" pattern="[0-9]{10}" minlength="10" maxlength="10" class="form-control"  name="lname" required>
                  </div>    
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password" required>
                  </div>
                </div>
                
              </div>
              
              

              <input type="submit" value="Register" name="Register" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>