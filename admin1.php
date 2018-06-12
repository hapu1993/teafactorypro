<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
$sql="CREATE TABLE admin(name VARCHAR(10),password VARCHAR(200))";
$result=mysqli_query($con,$sql);
if ($result){
  echo "success";
}
else {
  echo "Cant create";
}











?>