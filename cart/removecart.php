<?php
session_start();
$user=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","ecafe");
$pid=$_GET['pid'];
$query=mysqli_query($conn,"select * from cart where cartid='$pid'");
$res=mysqli_fetch_array($query);
if($res){    
    $data=mysqli_query($conn,"delete from cart where cartid='$pid'");
}
if($data)
    {
        header("location:../cart/cart.php");
    //   echo"<script>alert('Product Removed');</script>";
    }
?>