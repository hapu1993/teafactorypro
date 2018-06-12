<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
extract($_POST);
$pass=md5($password);
if (isset($factory)){
	




	$sql="INSERT INTO factory(factory_id,factory_name,password,factory_address,telephone_number) VALUES ('$factory_id','$factory_name','$pass','$factory_address','$telephone_no')";
	$result=mysqli_query($con,$sql);
	
	if ($result){
		echo "Data inserted in to the factory table";
	}
	else {
		echo "Can't Insert data into the factory table";
	}
}
else {
	echo "error1";
}


?>
