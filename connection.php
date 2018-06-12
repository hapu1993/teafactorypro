<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'teafactory');
if ($con){
	echo "";
}
else {
	echo "Can't Connect";
}
?>
