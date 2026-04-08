<?php
session_start();
$user=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","ecafe");
$pid=$_GET['pid'];
$query=mysqli_query($conn,"select * from cart where productid='$pid' and user='$user'");
$res=mysqli_fetch_array($query);
if($res){
    $cid=$res['cartid'];
    $qn=$res['quantity']+1;
    $data=mysqli_query($conn,"update cart set quantity='$qn' where cartid='$cid'");
}else{
    $qn=1;
    $data=mysqli_query($conn,"insert into cart(user,productid,quantity)values('$user','$pid','$qn')");
}
if($data)
    {
        header("location:../cart/cart.php");
    //   echo"<script>alert('Product Added');</script>";
    }
?>