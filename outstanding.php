<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE outstanding(customer_id VARCHAR(7) NOT NULL,month INT(5) NOT NULL,year INT(4),price VARCHAR(5))";

$result=mysqli_query($con,$sql);

if ($result){
	echo "outstanding table created";
}
else {
	echo "error";
}
?>