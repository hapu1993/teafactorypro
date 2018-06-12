<?php
include ('connection.php');
$sql="INSERT INTO admin(name,password) VALUES ('admin',md5('admin123'))";
$result=mysqli_query($con,$sql);
if ($result){
	echo "successfully inserted";

}
else {
	echo "cant inserted";
}





?>