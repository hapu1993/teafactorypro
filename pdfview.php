<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
session_start();
$value_sum=$_SESSION['value_sum'];
$value_sum1=$_SESSION['value_sum1'];
$value_sum2=$_SESSION['value_sum2'];
$value_sum3=$_SESSION['value_sum3'];
$outstanding=$_SESSION['outstanding'];
$unitprice=$_SESSION['unitprice'];
$customer_name=$_SESSION['customer_name'];
$customer_id=$_SESSION['customer_id'];
$month=$_SESSION['month'];
$customer_address=$_SESSION['customer_address'];
require ('fpdf181/fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();
ini_set('memory_limit', '-1');
$pdf->image('logo 2.png',10,10,30);
$pdf->image('waterrmark.png',50,25,100);
$pdf->image('waterrmark.png',50,160,100);
$pdf->image('Untitled-2.png',8,4,200);
$pdf->image('Untitled-2.png',8,143,200);
$pdf->image('contact.png',120,26,83);
$pdf->image('contact.png',120,166,83);
//$pdf->image('copyright.png',55,130,100);
$pdf->image('signature.png',115,135,100);
$pdf->image('signature.png',115,275,100);
$pdf->image('date.png',50,135,100);
$pdf->image('date.png',50,275,100);
$pdf->image('supplier copy.png',150,150,60);
$pdf->image('copyright.png',55,270,100);
//sinhala word set
$pdf->image('customer id.png',11,43,50);
$pdf->image('Customer name.png',11,53,50);

$pdf->image('address.png',11,63,50);
//second bill
$pdf->image('customer id.png',11,183,50);
$pdf->image('Customer name.png',11,193,50);

$pdf->image('address.png',11,203,50);
$pdf->image('unit.png',11,63,120);
$pdf->image('kilo.png',59,63,120);
$pdf->image('price.png',100,63,120);


$pdf->image('unit.png',11,203,120);
$pdf->image('kilo.png',59,203,120);
$pdf->image('price.png',100,203,120);
//first
$pdf->image('balance.png',11,69,120);
$pdf->image('outstanding.png',11,75,120);
$pdf->image('advance.png',11,81,120);
$pdf->image('fertilizer.png',11,87,120);
$pdf->image('tealeaves.png',11,93,120);
$pdf->image('transport.png',11,99,120);
$pdf->image('deduction.png',11,105,120);
$pdf->image('totalbalance.png',11,112,125);
$pdf->image('total.png',11,118,125);


//second
$pdf->image('balance.png',11,209,120);
$pdf->image('outstanding.png',11,215,120);
$pdf->image('advance.png',11,221,120);
$pdf->image('fertilizer.png',11,227,120);
$pdf->image('tealeaves.png',11,233,120);
$pdf->image('transport.png',11,239,120);
$pdf->image('deduction.png',11,245,120);
$pdf->image('totalbalance.png',11,252,120);
$pdf->image('total.png',11,258,120);


//sinhala word end
$pdf->SetFont('Arial',"B","20");
$pdf->Cell(0,30,"",1,1,"C");

if ($outstanding>0){

$pdf->SetFont('Arial',"B","12");
$pdf->Cell(50,10,"","","","L");
$pdf->Cell(70,10,$customer_id,"","","L");
$pdf->Cell(30,10,"Month: ","","","L");
$pdf->Cell(0,10,$month,"1",1,"L");
$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_name,1,1,"L");

$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_address,1,1,"L");
$pdf->SetFont('Arial',"","12");
$pdf->Cell(48,6,$unitprice,1,"","R");
$pdf->Cell(82,6,$value_sum3,"1","","C");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,($value_sum3*$unitprice),1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,$outstanding,1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum1,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum2,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,($value_sum2+$value_sum1+$value_sum),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,(($outstanding+($value_sum3*$unitprice))-($value_sum2+$value_sum1+$value_sum)),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");


$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,($outstanding+($value_sum3*$unitprice)),1,"","R");
$pdf->Cell(0,6,($outstanding+($value_sum3*$unitprice)),1,1,"R");

}
else{
	


$pdf->SetFont('Arial',"B","12");
$pdf->Cell(50,10,"",1,"","L");
$pdf->Cell(70,10,$customer_id,"","","L");
$pdf->Cell(30,10,"Month: ","1","","L");
$pdf->Cell(0,10,$month,"1",1,"L");
$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_name,1,1,"L");

$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_address,1,1,"L");
$pdf->SetFont('Arial',"","12");
$pdf->Cell(48,6,$unitprice,1,"","R");
$pdf->Cell(82,6,$value_sum3,"1","","C");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,($value_sum3*$unitprice),1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$outstanding,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum1,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum2,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,((-$outstanding)+($value_sum2+$value_sum1+$value_sum)),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,(($value_sum3*$unitprice)-((-$outstanding)+($value_sum2+$value_sum1+$value_sum))),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");


$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,($value_sum3*$unitprice),1,"","R");
$pdf->Cell(0,6,($value_sum3*$unitprice),1,1,"R");

}
$pdf->Cell(0,20,"","",1,"C");
// customer part
$pdf->image('logo 1.png',10,150,30);
$pdf->SetFont('Arial',"B","20");
$pdf->Cell(0,30,"",1,1,"C");

if ($outstanding>0){

$pdf->SetFont('Arial',"B","12");
$pdf->Cell(50,10,"",1,"","L");
$pdf->Cell(70,10,$customer_id,"","","L");
$pdf->Cell(30,10,"Month: ","1","","L");
$pdf->Cell(0,10,$month,"1",1,"L");
$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_name,1,1,"L");

$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_address,1,1,"L");
$pdf->SetFont('Arial',"","12");
$pdf->Cell(48,6,$unitprice,1,"","R");
$pdf->Cell(82,6,$value_sum3,"1","","C");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,($value_sum3*$unitprice),1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,$outstanding,1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum1,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum2,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,($value_sum2+$value_sum1+$value_sum),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,(($outstanding+($value_sum3*$unitprice))-($value_sum2+$value_sum1+$value_sum)),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");


$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,($outstanding+($value_sum3*$unitprice)),1,"","R");
$pdf->Cell(0,6,($outstanding+($value_sum3*$unitprice)),1,1,"R");

}
else{
	


$pdf->SetFont('Arial',"B","12");
$pdf->Cell(50,10,"",1,"","L");
$pdf->Cell(70,10,$customer_id,"","","L");
$pdf->Cell(30,10,"Month: ","1","","L");
$pdf->Cell(0,10,$month,"1",1,"L");
$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_name,1,1,"L");

$pdf->Cell(50,10,"",1,0,"L");
$pdf->Cell(0,10,$customer_address,1,1,"L");
$pdf->SetFont('Arial',"","12");
$pdf->Cell(48,6,$unitprice,1,"","R");
$pdf->Cell(82,6,$value_sum3,"1","","C");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,($value_sum3*$unitprice),1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$outstanding,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum1,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,$value_sum2,1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,"",1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,((-$outstanding)+($value_sum2+$value_sum1+$value_sum)),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");

$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,(($value_sum3*$unitprice)-((-$outstanding)+($value_sum2+$value_sum1+$value_sum))),1,"","R");
$pdf->Cell(0,6,"",1,1,"R");


$pdf->Cell(130,6,"",1,"","L");
$pdf->Cell(32,6,($value_sum3*$unitprice),1,"","R");
$pdf->Cell(0,6,($value_sum3*$unitprice),1,1,"R");

}


$pdf->Output();



?>