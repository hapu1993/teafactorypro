<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE dailytea(customer_id VARCHAR(7) NOT NULL,date DATE NOT NULL,weight INT(5) NOT NULL)";
$result=mysqli_query($con,$sql);

if ($result){
	echo "dailytea created";
}
else {
	echo "error";
}
?>