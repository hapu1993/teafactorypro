<?php

include('connection.php');
$customer_id=$_GET['id'];
$sql="DELETE FROM transportlist WHERE customer_id='".$customer_id."'";
$result=mysqli_query($con,$sql);
if($result){
	header('location: transportlist.php');
}
else {
	echo "error";
}










?>