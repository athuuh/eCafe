<?php
session_start();
$user=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","ecafe");
$pid=$_GET['cartid'];
$qn=$_GET['quantity'];
$query=mysqli_query($conn,"select * from cart where cartid='$pid'");
$res=mysqli_fetch_array($query);
if($res){    
    $data=mysqli_query($conn,"update cart set quantity='$qn' where cartid='$pid'");
}
if($data)
    {
        header("location:../cart/cart.php");
    //   echo"<script>alert('Product Added');</script>";
    }
?>