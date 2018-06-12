<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE factory(factory_id INT(5) NOT NULL PRIMARY KEY,factory_name VARCHAR(25) NOT NULL,password VARCHAR(200) NOT NULL,factory_address VARCHAR(50) NOT NULL,telephone_number VARCHAR(10) NOT NULL)";
$result=mysqli_query($con,$sql);
if ($result){
	echo "Factory table created";
}
else {
	echo "Can't Create Factory table";
	}
?>

