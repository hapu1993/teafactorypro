<?php
include('connection.php');

$sql="CREATE table transportrate(year INT(4),month VARCHAR(50),price VARCHAR(20))";
$result=mysqli_query($con,$sql);
if($result){
	echo "created";
}
else{
	echo "error";
}











?>