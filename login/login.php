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

    <title>Login Form </title>
  </head>
  <?php
  session_start();
  $conn=mysqli_connect("localhost","root","","ecafe");
  if(isset($_POST['login']))
  {
    $n=$_POST['fname'];
    $w=$_POST['password'];
    $query=mysqli_query($conn,"select * from register where name='$n' and password='$w'");
    $res=mysqli_fetch_array($query);
    if($res['rights']=='user')
    {
      $_SESSION['id']=$res['id'];
      header("location:../user/user.php");
    }
    else if($res['rights']=='admin')
      {
      header("location:../admin/pages/admin.php");
    }
    else{
      echo"<script>alert('login failed');</script>";
    }

  }
  ?>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_3.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Cafe de BCM</strong></h3>
          
            <form action="#" method="post">
              <div class="form-group first">
                <label for="fname">Name</label>
                <input type="text" class="form-control" name="fname"  pattern="[A-Za-z\s]+" title="Enter a valid name" required>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                
              </div>

              <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary">

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