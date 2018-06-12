<?php
include('connection.php');

$customer_id=$_GET['id'];

$sql1="SELECT * FROM customer where customer_id='".$customer_id."'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$customer_name=$row1['customer_name'];
echo $customer_name;
$sql="INSERT INTO transportlist(customer_id,customer_name) VALUES ('".$customer_id."','".$customer_name."')";
$result=mysqli_query($con,$sql);
header('location:transportlist.php');

?>