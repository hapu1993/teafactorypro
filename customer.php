<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
$sql="CREATE TABLE customer(customer_id VARCHAR(7) PRIMARY KEY,customer_name VARCHAR(30) NOT NULL,password VARCHAR(200) NOT NULL,customer_address VARCHAR(50) NOT NULL,mobile_no VARCHAR(10) NOT NULL)";
$result=mysqli_query($con,$sql);
if ($result){
	echo "Customer table created";
}
else {
	echo "Can't create customer table";
}

?>
