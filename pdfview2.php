<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
session_start();
include ('connection.php');
mysqli_select_db($con,'teafactory');
$customer_id=$_SESSION['customer_id'];
$customer_name=$_SESSION['customer_name'];
$customer_address=$_SESSION['customer_address'];

$sum=$_SESSION['value_sum']; //advance
$sum1=$_SESSION['value_sum1']; //fertilizer
$sum2=$_SESSION['value_sum2']; //tealeaves
$sum3=$_SESSION['value_sum3']; //dailytea
$outstanding=$_SESSION['outstanding']; //outstanding
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
   
if ($month3==01){
  $month3='January';
}
elseif ($month3==02){
  $month3='February';
}
elseif ($month3==03){
  $month3='March';
}
elseif ($month3==04){
  $month3='April';
}
elseif ($month3==05){
  $month3='May';
}
elseif ($month3==06){
  $month='June';
}
elseif ($month3==07){
  $month3='July';
}
elseif ($month3==08){
  $month3='Augest';
}
elseif ($month3==09){
  $month3='September';
}
elseif ($month3==10){
  $month3='October';
}
elseif ($month3==11){
  $month3='November';
}
elseif ($month3==12){
  $month3='December';
}
 require ('fpdf181/fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetFont('Times');
if ($outstanding>=0){
$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"Customer ID","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","C");
$pdf->Cell(50,7,"Month","1","","C");
$pdf->Cell(0,7,$month3,"1",1,"C");
$pdf->Cell(50,7,"Customer name","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","C");
$pdf->Cell(50,7,"Address","1","","C");
$pdf->Cell(0,7,$customer_address,"1","1","C");
$pdf->Cell(50,6,"1 Kg Price ".$unitprice,"1","","C");
$pdf->Cell(80,6,"Total Kg ".$sum3,"1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(+)","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$outstanding,"1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(-)","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Advance","1","","C");
$pdf->Cell(30,6,$sum,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Fertilizer","1","","C");
$pdf->Cell(30,6,$sum1,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Tea Leaves","1","","C");
$pdf->Cell(30,6,$sum2,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Transport","1","","C");
$pdf->Cell(30,6,$transport,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Other","1","","C");
$pdf->Cell(30,6,$other,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Total Deduction","1","","C");
$pdf->Cell(30,6,$final_sum3,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Rest Amount","1","","C");
$pdf->Cell(30,6,$final_sum1,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Final Amount","1","","C");
$pdf->Cell(30,6,$final_sum5,"1","","C");
$pdf->Cell(0,6,$final_sum5,"1","1","C");

$pdf->Cell(0,40,"","",1,"C");
//second bill
$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"Customer ID","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","C");
$pdf->Cell(50,7,"Month","1","","C");
$pdf->Cell(0,7,$month3,"1",1,"C");
$pdf->Cell(50,7,"Customer name","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","C");
$pdf->Cell(50,7,"Address","1","","C");
$pdf->Cell(0,7,$customer_address,"1","1","C");
$pdf->Cell(50,6,"1 Kg Price ".$unitprice,"1","","C");
$pdf->Cell(80,6,"Total Kg ".$sum3,"1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(+)","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$outstanding,"1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(-)","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Advance","1","","C");
$pdf->Cell(30,6,$sum,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Fertilizer","1","","C");
$pdf->Cell(30,6,$sum1,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Tea Leaves","1","","C");
$pdf->Cell(30,6,$sum2,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Transport","1","","C");
$pdf->Cell(30,6,$transport,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Other","1","","C");
$pdf->Cell(30,6,$other,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Total Deduction","1","","C");
$pdf->Cell(30,6,$final_sum3,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Rest Amont","1","","C");
$pdf->Cell(30,6,$final_sum1,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Total","1","","C");
$pdf->Cell(30,6,$final_sum5,"1","","C");
$pdf->Cell(0,6,$final_sum5,"1","1","C");
}
else{
	$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"Customer ID","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","C");
$pdf->Cell(50,7,"Month","1","","C");
$pdf->Cell(0,7,$month3,"1",1,"C");
$pdf->Cell(50,7,"Customer name","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","C");
$pdf->Cell(50,7,"Address","1","","C");
$pdf->Cell(0,7,$customer_address,"1","1","C");
$pdf->Cell(50,6,"1 Kg Price ".$unitprice,"1","","C");
$pdf->Cell(80,6,"Total Kg ".$sum3,"1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(+)","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(-)","1","","C");
$pdf->Cell(30,6,$outstanding,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Advace","1","","C");
$pdf->Cell(30,6,$sum,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Fertilizer","1","","C");
$pdf->Cell(30,6,$sum1,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Tea Leaves","1","","C");
$pdf->Cell(30,6,$sum2,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Transport","1","","C");
$pdf->Cell(30,6,$transport,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Other","1","","C");
$pdf->Cell(30,6,$other,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Total Deduction","1","","C");
$pdf->Cell(30,6,$final_sum4,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Rest Amount","1","","C");
$pdf->Cell(30,6,$final_sum2,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Final Amount","1","","C");
$pdf->Cell(30,6,$final_sum,"1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","C");

$pdf->Cell(0,40,"","",1,"C");
//second bill
$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"Customer ID","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","C");
$pdf->Cell(50,7,"Month","1","","C");
$pdf->Cell(0,7,$month3,"1",1,"C");
$pdf->Cell(50,7,"Customer name","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","C");
$pdf->Cell(50,7,"Address","1","","C");
$pdf->Cell(0,7,$customer_address,"1","1","C");
$pdf->Cell(50,6,"1 Kg Price ".$unitprice,"1","","C");
$pdf->Cell(80,6,"Total Kg ".$sum3,"1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(+)","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Outstanding from last month(-)","1","","C");
$pdf->Cell(30,6,$outstanding,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Advance","1","","C");
$pdf->Cell(30,6,$sum,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Fertilizer","1","","C");
$pdf->Cell(30,6,$sum1,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Tea Leaves","1","","C");
$pdf->Cell(30,6,$sum2,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Transport","1","","C");
$pdf->Cell(30,6,$transport,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Other","1","","C");
$pdf->Cell(30,6,$other,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Total Deduction","1","","C");
$pdf->Cell(30,6,$final_sum4,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Rest Amount","1","","C");
$pdf->Cell(30,6,$final_sum2,"1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"Total","1","","C");
$pdf->Cell(30,6,$final_sum,"1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","C");

}




$pdf->Output();



?>