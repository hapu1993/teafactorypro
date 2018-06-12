<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE advance(customer_id VARCHAR(7) NOT NULL,date DATE NOT NULL,price INT(5) NOT NULL)";
$result=mysqli_query($con,$sql);
if ($result){
	echo "advance table created";
}
else {
	echo "Can't Create advances table";
	}
?>

