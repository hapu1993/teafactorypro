<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
extract ($_POST);
$admin="admin";
$adminpass="adminpassword123";
if (isset($submit)){
		$sql="SELECT * FROM customer WHERE customer_id='".$username."' and password='".md5($password)."'";
		$result=mysqli_query($con,$sql);
		
			$arr=mysqli_fetch_array($result);
			if ($arr['nic_no']==$username && $arr['password']==md5($password)){ 
			$sql1="SELECT SUM(price) FROM advance WHERE customer_id='".$username."'";
			$sql2="SELECT SUM(price) FROM fertilizer WHERE customer_id='".$username."'";
			$sql3="SELECT SUM(price) FROM tea_leaves WHERE customer_id='".$username."'";
			$sql4="SELECT SUM(weight) FROM dailytea WHERE customer_id='".$username."'";
			$result4=mysqli_query($con,$sql4);
			$result1=mysqli_query($con,$sql1);
	
			$result2=mysqli_query($con,$sql2);
			$result3=mysqli_query($con,$sql3);
	
			$arr1=mysqli_fetch_array($result1);
			$arr2=mysqli_fetch_array($result2);
			$arr3=mysqli_fetch_array($result3);
			$arr4=mysqli_fetch_array($result4);
			session_start();
			$_SESSION['sum1']=$arr2['SUM(price)'];
			$_SESSION['sum2']=$arr3['SUM(price)'];
			$_SESSION['sum']=$arr1['SUM(price)'];
			$_SESSION['sum3']=$arr4['SUM(weight)'];
			$_SESSION['customer_name']=$arr['customer_name'];
			$_SESSION['customer_id']=$arr['customer_id'];
			$_SESSION['customer_address']=$arr['customer_address'];
			$_SESSION['mobile_no']=$arr['mobile_no'];
			header("location: welcome.php");
			}
			else {
				echo "<div class='alert alert-info'>";
    echo "<center><strong>Info!</strong>Wrong UserName or Password... . </center>";
  echo "</div>";
				header("location: index.php");
			}
	}
	
?>
	
