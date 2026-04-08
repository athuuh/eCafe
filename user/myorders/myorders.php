<!doctype html>
<html lang="en">
  <head>
  	<title>Orders</title>
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
	$data=mysqli_query($conn,"select * from orders where user='$user'");

	?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">My Orders</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      
						      <th>product</th>
						      <th>Image</th>
						      <th>Total</th>
						      <th>Status</th>
						    </tr>
						  </thead>

						  <tbody>
					
						    <?php
                                                    if(isset($data)){
                                                    while($res=mysqli_fetch_array($data)){
                                                        $uid=$res['user'];
                                                        $pid=$res['product'];
                                                        $udata=mysqli_query($conn,"select * from register where id='$uid'");
                                                        $ures=mysqli_fetch_array($udata);
                                                        $pdata=mysqli_query($conn,"select * from admin where pid='$pid'");
                                                        $pres=mysqli_fetch_array($pdata);
                                                    

                                                    ?>
													<tr>
														
														<td class="p-4">
															<h3 class="font-medium"><?php echo $pres['pname'];?></h3>
														</td>
														<td class="p-4">
															<h3 class="font-medium text-teal-500"><img src="<?php echo $pres['image'];?>" width="70px"></h3>
														
                            <td class="p-4">
															<h3 class="font-medium text-teal-500"><?php echo $res['total'];?></h3>
                            </td>
                            <td class="p-4">
															<h3 class="font-medium text-teal-500"><?php echo $res['status'];?></h3>
                            </td>
                            
														<!-- <td class="p-4">
															<span
																class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-teal-400 text-teal-500">Available</span>
														</td> -->
													</tr>
													<?php
                          }
                        }
                          ?>

												</tbody>
											</table>
										</div>
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

