<?php
$conn=mysqli_connect("localhost","root","","ecafe");
$id=$_GET['id'];
$data=mysqli_query($conn,"delete from admin where pid='$id'");
if($data){
    echo "<script>alert('Product Deleted');window.location.href='viewproduct.php';</script>";
}