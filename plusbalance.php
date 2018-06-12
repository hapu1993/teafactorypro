<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MTC Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 10px;
      border-radius: 0;
      background-color: #129914;

    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    
    
    
    .img1{
      height: 100px;
      width: 100%;
    }
    
    

    .content {
      width: 930px;
      align-content: center;
      margin: auto;
      padding: 10px;
      border:2px solid #0d160e;
      background-image:url("Leaf-Free-Wallpapers.jpg");
      height: 750px;
    }
    .img{
       border:2px solid #2a302a;
    }



 
.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;

}

.example1 {
 height: 30px;  
 overflow: hidden;
 position: relative;
}
.example1 h3 {
 font-size: 2em;
 color: #020202;
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 30px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);  
 transform:translateX(100%);
 /* Apply animation to this element */  
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 30s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%);     
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }


  


  .navbar-nav.nav > li { position: static }
.navbar navbar-default{
  background-color: #2ed32e;

}
.container {
  background-color: #30a530;
}
progid:DXImageTransform.Microsoft.gradient(startColorstr='#00589F', endColorstr='#0073CF', GradientType=0);
  background: -webkit-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: -moz-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: -ms-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: -o-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  background: linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
  color: white;
}

div.well{
  height: 250px;
} 

.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 250px; left: 0; bottom: 0; right: 0;
}

.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 50%;
  min-width: 200px;
  max-width: 400px;
  padding: 40px;
}

 #logo-container{
  margin: auto;
  margin-bottom: 50px;
  width:200px;
  height:30px;
  background-image:url();
}


  </style>

</head>
<body data-spy="scroll">
  <div class="content">
<div class="img"><img src="tea heading latest.jpg" class="img-responsive center-block" alt="Logo1" style="height: 180px"></div>

<nav class="navbar navbar-default" style="background-color: #11ee11 ;border:2px solid #0d160e; margin-top:10px">
  

    <div class="navbar-header">
      
      <a class="navbar-brand" href="#myPage"><font style="color: #000000"><b>MTC</b> Management Information System</font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="registerform.php">Register to the System</a></li>
        <li><a href="#myPage">About System</a></li>
       
      </ul>
    </div>
  
</nav>


  
<div class="container-fluid text-center">    
  
   <?php
include ('connection.php');
mysqli_select_db($con,'teafactory'); 

$sum=$_SESSION['value_sum'];
$sum1=$_SESSION['value_sum1'];
$sum2=$_SESSION['value_sum2'];
$sum3=$_SESSION['value_sum3'];
$outstanding=$_SESSION['outstanding'];
$month=$_SESSION['month'];
$unitprice=$_SESSION['unitprice'];
$customer_id=$_SESSION['customer_id'];
$year=$_SESSION['year2'];
$sql1="SELECT * FROM outstanding WHERE customer_id='".$customer_id."' and month='".($month+1)."' and year='".$year."'";

	$result1=mysqli_query($con,$sql1);
	$arr1=mysqli_fetch_array($result1);

if ((((($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum)))))>0 && !($customer_id==$arr1['customer_id']) && !(($month+1)==$arr1['month']) && !($year==$arr1['year'])){
$sql="INSERT INTO outstanding(customer_id,month,year,price) VALUES ('".$customer_id."','".($month+1)."','".$year."','".((($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum))))."')";
	$result=mysqli_query($con,$sql);
	//months

	if ($month==01){
  $month='ජනවාරි';
}
elseif ($month==02){
  $month='පෙබරවාරි';
}
elseif ($month==03){
  $month='මාර්තු';
}
elseif ($month==04){
  $month='අප්‍රේල්';
}
elseif ($month==05){
  $month='මැයි';
}
elseif ($month==06){
  $month='ජුනි';
}
elseif ($month==07){
  $month='ජූලි';
}
elseif ($month==08){
  $month='අගෝස්තු';
}
elseif ($month==09){
  $month='සැප්තැම්බර්';
}
elseif ($month==10){
  $month='ඔක්තොබර්';
}
elseif ($month==11){
  $month='නොවැම්බර්';
}
elseif ($month==12){
  $month='දෙසැම්බර්';
}




//

	if ($result){
		echo "<h2>".$year." වසරෙහි ".$month." මාසය සඳහා වූ ශේෂය සාර්ථකව ඉදිරියට ගෙන යන ලදී</h2>" ;
		echo "<a href='pdfview1.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>මුද්‍රණය</font></button></a>";
echo "<br>";
echo "<br>";

echo "<a href='calculate.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ආපසු</font></button></a>";

	}
	else {
		echo "cant submit the data to the outstanding table";
	}
}
	elseif (((($sum3*$unitprice)+$outstanding)-($sum2+$sum1+$sum+$transport+$other))>0 && !($customer_id==$arr1['customer_id']) && !(($month+1)==$arr1['month']) && !($year==$arr1['year'])){
			$sql="INSERT INTO outstanding(customer_id,month,year,price) VALUES ('".$customer_id."','".($month+1)."','".$year."','".((($sum3*$unitprice)+$outstanding)-($sum2+$sum1+$sum+$transport+$other))."')";
	$result=mysqli_query($con,$sql);
	//months


	if ($month==01){
  $month='ජනවාරි';
}
elseif ($month==02){
  $month='පෙබරවාරි';
}
elseif ($month==03){
  $month='මාර්තු';
}
elseif ($month==04){
  $month='අප්‍රේල්';
}
elseif ($month==05){
  $month='මැයි';
}
elseif ($month==06){
  $month='ජුනි';
}
elseif ($month==07){
  $month='ජූලි';
}
elseif ($month==08){
  $month='අගෝස්තු';
}
elseif ($month==09){
  $month='සැප්තැම්බර්';
}
elseif ($month==10){
  $month='ඔක්තොබර්';
}
elseif ($month==11){
  $month='නොවැම්බර්';
}
elseif ($month==12){
  $month='දෙසැම්බර්';
}
	
	if ($result){
		echo "<h2>".$year." වසරෙහි ".$month." මාසය සඳහා වූ ශේෂය සාර්ථකව ඉදිරියට ගෙන යන ලදී</h2>" ;

		echo "<a href='pdfview1.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>මුද්‍රණය</font></button></a>";
echo "<br>";
echo "<br>";

echo "<a href='calculate.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ආපසු</font></button></a>";

	}
	else {
		echo "cant submit data to the outstanding table";
	}
}

else {
	echo "<h2>එක් වරක් ".$year." හි ".$month." මාසය සඳහා ශේෂය ඇතුලත් කර ඇත</h2>";

	echo "<a href='pdfview1.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>මුද්‍රණය</font></button></a>";
echo "<br>";
echo "<br>";

echo "<a href='calculate.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ආපසු</font></button></a>";
}

?>

  



</div>

</body>
</html>












