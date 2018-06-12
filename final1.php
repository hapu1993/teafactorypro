<?php
session_start();
include ('connection.php');
mysqli_select_db($con,'teafactory');
$customer_id=$_SESSION['customer_id'];
$customer_name=$_SESSION['customer_name'];
$customer_address=$_SESSION['customer_address'];

$sum=$_SESSION['value_sum'];
$sum1=$_SESSION['value_sum1'];
$sum2=$_SESSION['value_sum2'];
$sum3=$_SESSION['value_sum3'];
$outstanding=$_SESSION['outstanding'];
    $month3=$_SESSION['month'];
    $unitprice=$_SESSION['unitprice'];
    $customer_name=$_SESSION['customer_name'];
    $transport=$_SESSION['transport'];
    $other=$_SESSION['other'];

    $final_sum=($sum3*$unitprice);
    $final_sum1=((($sum3*$unitprice)+$outstanding)-($sum2+$sum1+$sum+$transport+$other));
    $final_sum5=(($sum3*$unitprice)+$outstanding);
    $final_sum2=(($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)));
    $final_sum3=($sum2+$sum1+$sum+$transport+$other);
    $final_sum4=((-$outstanding)+($sum2+$sum1+$sum+$transport+$other));
   
if ($outstanding<0){
 $sql="INSERT INTO final(customer_id,customer_name,total_weight,Outstanding_from_lastmonth,advance,fertilizer,tea_leaves,transport,other,total_deduction,rest_amount,total) VALUES ('".$customer_id."','".$customer_name."','".$sum3."','".$outstanding."','".$sum."','".$sum1."','".$sum2."','".$transport."','".$other."','".$final_sum4."','".$final_sum2."','".$final_sum."')";


 $result=mysqli_query($con,$sql);


 if ($result){
 	echo "successfully Inserted outstanding - Value"; 
 }
 else {
 	echo "Cant Inserted Final table outstanding - Value";
 }
}
else {
	$sql="INSERT INTO final(customer_id,customer_name,total_weight,Outstanding_from_lastmonth,advance,fertilizer,tea_leaves,transport,other,total_deduction,rest_amount,total) VALUES ('".$customer_id."','".$customer_name."','".$sum3."','".$outstanding."','".$sum."','".$sum1."','".$sum2."','".$transport."','".$other."','".$final_sum3."','".$final_sum1."','".$final_sum5."')";


 $result=mysqli_query($con,$sql);


 if ($result){
 	echo "successfully Inserted outstanding + Value";
 	header('location: pdfview1.php'); 
 }
 else {
 	echo "Cant Inserted Final table outstanding + Value";
 }

}

















?>