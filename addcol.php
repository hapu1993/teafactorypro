<?php
include('connection.php');




$sql="ALTER TABLE `dailytea` ADD `day_ref_no` INT NOT NULL AUTO_INCREMENT PRIMARY KEY";

$result=mysqli_query($con,$sql);


if ($result){
	echo "success";
}
else {
	echo "error";
}











?>