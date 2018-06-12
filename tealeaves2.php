<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE tea_leaves(customer_id VARCHAR(7) NOT NULL,date DATE NOT NULL,price INT(5) NOT NULL)";
$result=mysqli_query($con,$sql);
if ($result){
	echo "tea leaves table created";
}
else {
	echo "Can't Create tea leaves table";
	}
?>

