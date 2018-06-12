<?php
extract($_POST);
include ("connection.php");
mysqli_select_db($con,"teafactory");
$pass=md5($password);

$sql="INSERT INTO customer(customer_id,customer_name,password,customer_address,mobile_no) VALUES('$customer_id','$customer_name','$pass','$customer_address','$mobile_no')";
$result=mysqli_query($con,$sql);
if ($result){
	include ('success.php');
}
else{
echo "Can't Insert Data into the Customer Table";
}
?>


