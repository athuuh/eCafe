<!doctype html>
<html lang="en">
  <head>
  	<title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<?php
	session_start();
	$user=$_SESSION['id'];
	$conn=mysqli_connect("localhost","root","","ecafe");
	$data=mysqli_query($conn,"select * from cart where user='$user'");

	?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Cart</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>Image</th>
						    	<th>Product Name</th>
						    	<th>Price</th>
						      <th>Quantity</th>
						      <th>total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
							<?php
                          if(isset($data)){
                          while($res=mysqli_fetch_array($data)){ 
							$pid=$res['productid']; 
							$qt=mysqli_query($conn,"select * from admin where pid='$pid'");
							$qres=mysqli_fetch_array($qt);
							$total=$res['quantity']*$qres['price'];
                          ?>
						    <tr class="alert" role="alert">
						    	
						    	<td>
									<img src="uploads/<?php echo $qres['image'];?>" class="img">
						    	</td>

						      <td>
						      	<div class="email">
						      		<span><?php echo $qres['pname'];?> </span>
						      		<span><?php echo $qres['description'];?></span>
						      	</div>
						      </td>

						      <td>₹<?php echo $qres['price'];?></td>
							  <form action="updatecart.php">
						      <td class="quantity">
					        	<div class="input-group">
									<input type="hidden" name="cartid" value="<?php echo $res['cartid'];?>">
				             	<input type="number" name="quantity" onchange="this.form.submit()" class="quantity form-control input-number" value="<?php echo $res['quantity'];?>" min="1" max="100">
				          	</div>
				          </td>
						  </form>
						  
				          <td>₹<?php echo $total?></td>
						      <td>
						      	<a href="removecart.php?pid=<?php echo $res['cartid'];?>" >
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
						  </a>
							 
                            
				        	</td>
						    </tr>
						
						   <?php
                          }
                        }
                          ?>
						  </tbody>
						</table>
						<form action="payment.php">
						<div class="text-end">
						 <input type="submit" value="Checkout" name="cart" class="btn px-5 btn-primary">
					</div>
					</form>
					</div>
				</div>
			</div>
		</div>
			
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
 
	</body>
</html>

