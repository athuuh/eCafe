<!DOCTYPE html>
<html   lang="en" >

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
$pid=$_GET['id'];
$query=mysqli_query($conn,"select * from admin where pid='$pid'");
$res=mysqli_fetch_array($query);
  if(isset($_POST['submit']))
  {
    $pid=$_POST['pid'];
    $n=$_POST['pname'];
    $s=$_POST['stock'];
    $p=$_POST['price'];
    $d=$_POST['description'];
      $data=mysqli_query($conn,"update  admin SET pname='$n',stock='$s',price='$p',description='$d' where pid='$pid'");
    if($data)
    {
      echo"<script>alert('Product updated successfully');</script>";
    }
    else{
      echo"<script>alert('Product updated failed');</script>";
    }
  }
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
          <i class="ti ti-cards ps-2 text-2xl"></i> <span>New orders<span>
        </a>
      </li>
 <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="../../login/login.php">
          <i class="ti ti-file-description ps-2 text-2xl"></i> <span>Logout</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full"
          href="orders.php">
          <i class="ti ti-file-description ps-2 text-2xl"></i> <span>Orders</span>
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
                <div class="card">
                    <div class="card-body flex flex-col gap-6">
                        <h6 class="text-lg text-gray-500 font-semibold">Forms</h6>
                        <div class="card">
                            <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">Product id</label>
                                    <input type="text" name="pid" value="<?php echo $res['pid'];?>"
                                        class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                        placeholder="" >
                                </div>

                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">Product name</label>
                                    <input type="text" name="pname" value="<?php echo $res['pname'];?>"
                                        class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                        placeholder="" >
                                </div>
                              

                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">Stock</label>
                                    <input type="text" name="stock" value="<?php echo $res['stock'];?>"
                                        class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                        placeholder="" >
                                </div>

                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">Price</label>
                                    <input type="text" name="price" value="<?php echo $res['price'];?>"
                                        class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                        placeholder="" >
                                </div>

                                <div class="mb-6">
                                    <label for="input-label-with-helper-text"
                                        class="block text-sm mb-2 text-gray-400">Description</label>
                                    <input type="text" name="description" value="<?php echo $res['description'];?>"
                                        class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                        placeholder="" >
                                </div>

                                <div class="flex mb-4">
                                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-400 rounded-[4px] text-blue-600 focus:ring-blue-500 " id="hs-default-checkbox">
                                    <label for="hs-default-checkbox" class="text-sm text-gray-400 ms-3">Check me out</label>
                                  </div>
                                  <button class="btn text-base py-2.5 text-white font-medium w-fit hover:bg-blue-700" name="submit">Submit</button>
                                </form>
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


</body>

</html>