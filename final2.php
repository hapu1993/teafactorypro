<?php
include('connection.php');
mysqli_select_db($con,'teafactory');

$sql="CREATE TABLE final(ref_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,customer_id VARCHAR(7),customer_name VARCHAR(100),month VARCHAR(10),year VARCHAR(5),total_weight CHAR(6),Outstanding_from_lastmonth CHAR(10),advance CHAR(10),fertilizer CHAR(10),tea_leaves CHAR(10),transport CHAR(10),other CHAR(10),total_deduction CHAR(10),rest_amount CHAR(10),total CHAR(10),printed CHAR(5))";
$result=mysqli_query($con,$sql);

if ($result){
	echo "success";
}
else {
	echo "error";
}