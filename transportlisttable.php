<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
$sql="CREATE table transportlist(customer_id VARCHAR(7),customer_name VARCHAR(150))";



$result=mysqli_query($con,$sql);
if($result){
	echo "table created";
}
else {
	echo "error";
}







?>