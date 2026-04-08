<?php
$conn=mysqli_connect("localhost","root","","ecafe");
$id=$_GET['id'];
$data=mysqli_query($conn,"update orders SET status='Shipped' where id='$id'");
if($data){
    echo "<script>alert('Item Shipped');window.location.href='neworders.php';</script>";
}