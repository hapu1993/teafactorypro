<?php

include('connection.php');
mysqli_select_db($con,'teafactory');


require ('fpdf181/fpdf.php');
$pdf=new FPDF();
$sql="SELECT * FROM final order by customer_id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	if (!($row['printed']=='1')){
		//month naming
$month=$row['month'];

























		//
$pdf->AddPage();
$sql5="UPDATE final SET printed='1'";
$result5=mysqli_query($con,$sql5);
$customer_id=$row['customer_id'];
$customer_name=$row['customer_name'];
$sql25="SELECT * FROM customer where customer_id='".$row['customer_id']."'";
$result25=mysqli_query($con,$sql25);
$row25=mysqli_fetch_array($result25);
$sql1="SELECT * FROM unitprice where month='".$month."'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$unitprice=$row1['price'];
$total_weight=$row['total_weight'];
$outstanding=$row['Outstanding_from_lastmonth'];
$advance=$row['advance'];
$fertilizer=$row['fertilizer'];
$tea_leaves=$row['tea_leaves'];
$transport=$row['transport'];
$other=$row['other'];
$total_deduction=$row['total_deduction'];
$rest_amount=$row['rest_amount'];
$total=$row['total'];
$final_sum=($total_weight*$unitprice);
$address=$row25['customer_address'];
$pdf->SetFont('Times','b','12');
if ($month==01){
  $month='January';
}
elseif ($month==02){
  $month='February';
}
elseif ($month==03){
  $month='March';
}
elseif ($month==04){
  $month='April';
}
elseif ($month==05){
  $month='May';
}
elseif ($month==06){
  $month='June';
}
elseif ($month==07){
  $month='July';
}
elseif ($month==08){
  $month='Augest';
}
elseif ($month==09){
  $month='September';
}
elseif ($month==10){
  $month='October';
}
elseif ($month==11){
  $month='November';
}
elseif ($month==12){
  $month='December';
}





$pdf->image('teabilldec.png',5,8,205);
if ($outstanding>=0){

$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$month,"1",1,"L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$address,"1","1","L");
$pdf->Cell(50,6,"			".$unitprice,"1","","R");
$pdf->Cell(80,6,"".$total_weight,"1","","R");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","R");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$outstanding,"1","1","R");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$advance,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$fertilizer,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$tea_leaves,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$transport,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$other,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total_deduction,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->SetFont('Times','b','20');
$pdf->Cell(30,6,$rest_amount,"1","","R");
$pdf->SetFont('Times','b','12');
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total,"1","","R");
$pdf->Cell(0,6,$total,"1","1","R");

$pdf->Cell(0,40,"","",1,"C");
//second bill
$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$month,"1",1,"L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$address,"1","1","L");
$pdf->Cell(50,6,"".$unitprice,"1","","R");
$pdf->Cell(80,6,"".$total_weight,"1","","R");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","R");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$outstanding,"1","1","R");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$advance,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$fertilizer,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$tea_leaves,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$transport,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$other,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total_deduction,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->SetFont('Times','b','20');
$pdf->Cell(30,6,$rest_amount,"1","","R");
$pdf->SetFont('Times','b','12');
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total,"1","","R");
$pdf->Cell(0,6,$total,"1","1","R");
}
else{
	$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$month,"1",1,"L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$address,"1","1","L");
$pdf->Cell(50,6,"".$unitprice,"1","","R");
$pdf->Cell(80,6,"".$total_weight,"1","","R");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","R");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$outstanding,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$advance,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$fertilizer,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$tea_leaves,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$transport,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$other,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total_deduction,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->SetFont('Times','b','20');
$pdf->Cell(30,6,$rest_amount,"1","","R");
$pdf->SetFont('Times','b','12');
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total,"1","","R");
$pdf->Cell(0,6,$total,"1","1","R");

$pdf->Cell(0,40,"","",1,"C");
//second bill
$pdf->Cell(0,25,"",1,1,"C");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(50,7,$customer_id,"1","","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$month,"1",1,"L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$customer_name,"1","1","L");
$pdf->Cell(50,7,"","1","","C");
$pdf->Cell(0,7,$address,"1","1","L");
$pdf->Cell(50,6,"".$unitprice,"1","","R");
$pdf->Cell(80,6,"".$total_weight,"1","","R");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,$final_sum,"1","1","R");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,"","1","","C");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$outstanding,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$advance,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$fertilizer,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$tea_leaves,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$transport,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$other,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total_deduction,"1","","R");
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->SetFont('Times','b','20');
$pdf->Cell(30,6,$rest_amount,"1","","R");
$pdf->SetFont('Times','b','12');
$pdf->Cell(0,6,"","1","1","C");
$pdf->Cell(130,6,"","1","","C");
$pdf->Cell(30,6,$total,"1","","R");
$pdf->Cell(0,6,$total,"1","1","R");

}



}

}


$pdf->Output();














?>