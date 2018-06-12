<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE unitprice(year VARCHAR(4) NOT NULL,month VARCHAR(20) NOT NULL,price INT(5) NOT NULL)";

$result=mysqli_query($con,$sql);

if ($result){
	echo "unitprice table created";
}
else {
	echo "error";
}
?>

