<?php
include ('connection.php');
$sql="CREATE DATABASE teafactory";
$result=mysqli_query($con,$sql);
if ($result){
	echo "Database Created";
}

else {
	echo "Can't Create Database";
}
?>