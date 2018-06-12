<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE transport(customer_id VARCHAR(7) NOT NULL,month VARCHAR(30),year VARCHAR(4),price INT(10))";

$result=mysqli_query($con,$sql);

if ($result){
	echo "transport table created";
}
else {
	echo "cant create transport table";
}