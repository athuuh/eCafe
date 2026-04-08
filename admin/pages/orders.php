<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/theme.css" />
	<title>Admin page</title>
</head>


<?php

$conn=mysqli_connect("localhost","root","","ecafe");
$data=mysqli_query($conn,"select * from orders");
?>

<body class=" bg-surface">
	<main>
		<div class="app-topstrip z-40 sticky top-0 py-[15px] px-6 bg-[linear-gradient(90deg,_#0f0533_0%,_#1b0a5c_100%)]">
			<div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
    <div class="md:flex hidden items-center gap-5">
        <a href="">
            <img src="../assets/images/logos/logo-wrappixel.svg" width="147" alt="logo-wrappixel" />
        </a>
    </div>
    <div class="flex flex-col md:flex-row items-center gap-4 justify-center">
        <h4 class="text-sm font-normal text-white uppercase font-semibold bg-[linear-gradient(90deg,_#FFFFFF_0%,_#8D70F8_100%)] [-webkit-background-clip:text] [background-clip:text] [-webkit-text-fill-color:transparent]">Checkout Pro Version</h4>
    </div>
</div>
		</div>
		<!--start the project-->
    <div id="main-wrapper" class=" flex p-5 xl:pr-0">
			<aside id="application-sidebar-brand"
				class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed xl:top-[90px] xl:left-auto top-0 left-0 with-vertical h-screen z-[999] shrink-0  w-[270px] shadow-md xl:rounded-md rounded-none bg-white left-sidebar   transition-all duration-300">
			
			<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
 	
<!-- ---------------------------------- -->
<div class="p-4">
  
  


</div>
<div class="scroll-sidebar" data-simplebar="">
  <nav class=" w-full flex flex-col sidebar-nav px-4 mt-5">
    <ul id="sidebarnav" class="text-gray-600 text-sm">
      <li class="text-xs font-bold pb-[5px]">
        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
        <span class="text-xs text-gray-400 font-semibold">HOME</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base  flex items-center relative  rounded-md text-gray-500  w-full"
          href="admin.php">
          <i class="ti ti-layout-dashboard ps-2  text-2xl"></i> <span>Dashboard</span>
        </a>
      </li>

      

      <li class="text-xs font-bold mb-4 mt-6">
        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
        <span class="text-xs text-gray-400 font-semibold">UI COMPONENTS</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="addproduct.php">
          <i class="ti ti-article ps-2 text-2xl"></i> <span>Add product</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="viewproduct.php">
          <i class="ti ti-alert-circle ps-2 text-2xl"></i> <span>View product</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="neworders.php">
          <i class="ti ti-cards ps-2 text-2xl"></i> <span>New orders</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="orders.php">
          <i class="ti ti-file-description ps-2 text-2xl"></i> <span>Orders</span>
        </a>
      </li>
 <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="../../login/login.php">
          <i class="ti ti-file-description ps-2 text-2xl"></i> <span>Logout</span>
        </a>
      </li>
     

			</aside>
			<div class=" w-full page-wrapper xl:px-6 px-0">

				<!-- Main Content -->
				<main class="h-full  max-w-full">
					<div class="container full-container p-0 flex flex-col gap-6">
						<!--  Header Start -->
						
							

<!-- ========== HEADER ========== -->

    

  <!-- ========== END HEADER ========== -->
						</header>
						<!--  Header End -->
						
						
							<div class="col-span-2">
								<div class="card h-full">
									<div class="card-body">
										<h4 class="text-gray-500 text-lg font-semibold mb-5">Products</h4>
										<div class="relative overflow-x-auto">
											<!-- table -->
											<table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
												<thead>
													<tr class="text-sm">
														<th scope="col" class="p-4 font-semibold">User</th>
														<th scope="col" class="p-4 font-semibold">Phone</th>
														<th scope="col" class="p-4 font-semibold">Address</th>
														<th scope="col" class="p-4 font-semibold">Product</th>
                                                        <th scope="col" class="p-4 font-semibold">Image</th>
														<th scope="col" class="p-4 font-semibold">Date</th>
														<th scope="col" class="p-4 font-semibold">Total</th>
                                                        <th scope="col" class="p-4 font-semibold">Status</th>
                                                        
														
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
														<td class="p-4 text-sm">
															<div class="flex gap-6 items-center">
																
																<div class="flex flex-col gap-1 text-gray-500">
																	<h3 class=" font-bold"><?php echo $ures['name'];?></h3>
																</div>
															</div>
														</td>
                                                        <td class="p-4">
															<h3 class="font-medium"><?php echo $ures['phoneno'];?></h3>
														</td>
                                                        <td class="p-4">
															<h3 class="font-medium"><?php echo $res['address'];?></h3>
														</td>
														<td class="p-4">
															<h3 class="font-medium"><?php echo $pres['pname'];?></h3>
														</td>
														<td class="p-4">
															<h3 class="font-medium text-teal-500"><img src="<?php echo $pres['image'];?>" width="70px"></h3>
														</td>
                            <td class="p-4">
															<h3 class="font-medium text-teal-500"><?php echo $res['date'];?></h3>
														</td>
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
						
						
					</div>


				</main>
				<!-- Main Content End -->

			</div>
		</div>
		<!--end of project-->
	</main>


	
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="../assets/libs/@preline/dropdown/index.js"></script>
<script src="../assets/libs/@preline/overlay/index.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>

<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="../../assets/libs/preline/dist/preline.js"></script>

	<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
	<script src="../assets/js/dashboard.js"></script>
</body>

</html>