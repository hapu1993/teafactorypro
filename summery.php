<?php
include ('connection.php');
$sum1='0';
$sum='0';
$sum2='0';
$sql="SELECT rest_amount FROM final where month='04' order by customer_id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
if($row['rest_amount']>0){
$sum=$row['rest_amount']+$sum;


}



}

echo "total paymeny: ".$sum;
echo "<br>";
$sql1="SELECT rest_amount FROM final where month='04' order by customer_id";
$result1=mysqli_query($con,$sql1);
while($row1=mysqli_fetch_array($result1)){
if($row1['rest_amount']<0){
$sum1=$row1['rest_amount']+$sum1;


}



}
echo "total outstanding: ".$sum1;
echo "<br>";
$sql2="SELECT total_weight FROM final where month='04' order by customer_id";

$result2=mysqli_query($con,$sql2);
while($row2=mysqli_fetch_array($result2)){
$sum2=$row2['total_weight']+$sum2;

}
echo "total weight: ".$sum2;

$sql1="SELECT SUM(price) as totalfin FROM outstanding where month='05' order by customer_id";
$resultfin=mysqli_query($con,$sql1);
$rowfin=mysqli_fetch_array($resultfin);
echo $rowfin['totalfin'];
?>