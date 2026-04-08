<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
  <?php
  session_start();
  $conn=mysqli_connect("localhost","root","","ecafe");
  $user=$_SESSION['id'];
  $data=mysqli_query($conn,"select * from register where id='$user'");
  $res=mysqli_fetch_array($data);
if(isset($_POST['submit']))
  {
    $u=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['phoneno'];
    $w=$_POST['password'];
    $data=mysqli_query($conn,"update register set name='$u',email='$e',phoneno='$p',password='$w' where id='$user'");
    if($data)
    {
      echo"<script>alert('Updation success');</script>";
    }
    else{
      echo"<script>alert('Updation failed');</script>";
    }
  }
  ?>
	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/registration-form-8.jpg" alt="">
			</div>
			<div class="form-inner">
				<form method="post" action="">
					
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" name="name" value="<?php echo $res['name'];?>" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="text" name="email" value="<?php echo $res['email'];?>" class="form-control" data-validation="email">
					</div>
					<div class="form-group">
						<label for="">Phone Number:</label>
						<input type="tel" pattern="[0-9]{10}" minlength="10" maxlength="10" name="phoneno" value="<?php echo $res['phoneno'];?>"  class="form-control" >
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" name="password" value="<?php echo $res['password'];?>"  class="form-control" data-validation="length" data-validation-length="min8">
					</div>
					<button type="submit" name="submit">Edit Profile</button>
					
				</form>
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>