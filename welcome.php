<!DOCTYPE html>
<html lang="en">
<head>
  <title>MTC Customer page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
      height: 1200px;
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
.table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
.th, td {
    padding: 5px;
    text-align: left;
}

  </style>
  <?php
include ('connection.php');
mysqli_select_db($con,'teafactory');

session_start();
$customer_name=$_SESSION['customer_name'];
$customer_id=$_SESSION['customer_id'];
$customer_address=$_SESSION['customer_address'];
$mobile_no=$_SESSION['mobile_no'];

$month='';
$year='';


?>

</head>
<body data-spy="scroll">
  <div class="content">
<div class="img"><img src="tea heading latest.jpg" class="img-responsive center-block" alt="Logo1" style="height: 180px"></div>

<nav class="navbar navbar-default" style="background-color: #11ee11 ;border:2px solid #0d160e; margin-top:10px">
  

    <div class="navbar-header">
      
      <a class="navbar-brand" href="#myPage"><font style="color: #000000"><b>MTC</b> Management Information System - hello <?php echo $customer_name ; ?></font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="aboutsystem.php">Change Password</a></li>
       <li><a href="aboutsystem.php">Help</a></li>
        <li><a href="aboutsystem.php">About System</a></li>
       <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  
</nav>


  
<div class="container-fluid text-center">    
  
   <marquee direction = 'up'><h3 align='center'>මාවිටවත්ත තේ දළු එකතු කිරීමේ මධ්‍යස්ථානය.<br>ඔබේ රන් තේ දල්ලට හොඳම මිල අපෙන්</h3></marquee>
   	

    <?php






echo "<h2 align='center'>".$customer_name."</h2>";

echo "<table style='width:75%' align='center'>";
  echo "<tr>";
    echo "<th>Name:</th>";
    echo "<td>".$customer_name."</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>Customer ID:</th>";
    echo "<td>".$customer_id."</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>Customer_address:</th>";
    echo "<td>".$customer_address."</td>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>Mobile No:</th>";
    echo "<td>".$mobile_no."</td>";
  echo "</tr>";
  echo "</table>";
  echo "<h2 align='center'>මාසය සහ වසර ඇතුලත් කරන්න:</h2>";
  ?>
  <form class="form-inline" action="" method="POST">
   	<select name="month" value="month">
	<option value="01">ජනවාරි</option>
	<option value="02">පෙබරවාරි</option>
	<option value="03">මාර්තු</option>
	<option value="04">අප්‍රේල්</option>
	<option value="05">මැයි</option>
	<option value="06">ජුනි</option>
	<option value="07">ජූලි</option>
	<option value="08">අගෝස්තු</option>
	<option value="09">සැප්තැම්බර්</option>
	<option value="10">ඔක්තොබර්</option>
	<option value="11">නොවැම්බර්</option>
	<option value="12">දෙසැම්බර්</option>

</select>
<select name="year" value="year">
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	</select>
	<button type="submit" class="btn btn-primary btn-lg" background-color="#3aa00b" name="submit"><font style
="color: #040504">Submit</font></button>
</form>
<br>
<br>
<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
extract($_POST);
if(isset($submit)){
$sql1="SELECT * FROM unitprice where month='".$month."' and year='".$year."'" ;
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$unitprice=$row1['price'];
$sql2="SELECT * FROM final where month='".$month."' and year='".$year."' and customer_id='".$customer_id."'";
$result2=mysqli_query($con,$sql2);

$row2=mysqli_fetch_array($result2);

$total_weight=$row2['total_weight'];
$advance=$row2['advance'];
$fertilizer=$row2['fertilizer'];
$tea_leaves=$row2['tea_leaves'];
$transport=$row2['transport'];
$other=$row2['other'];
$total_deduction=$row2['total_deduction'];
$outstanding=$row2['Outstanding_from_lastmonth'];
$rest_amount=$row2['rest_amount'];
$total=$row2['total'];

if ($customer_id==""){
  echo "<h2><b>වැරදි හඳුනාගැනීමේ අංකයකි</b></h2>";
}

else {
  if ($unitprice==""){
  echo "<h2>".$year." හි ".$month." මාසික බිල නිකුත් කර නොමැත.</h2>";
  echo "<br>";

    }
  else{

  echo "<h2 align='center'>".$customer_name." මහතාගේ/මහත්මියගේ ".$month." මාසයෙහි මාසික බිල</h2>";
 

echo "<table style='width:75%' align='center'>";
echo "<tr>";
      echo "<th>මුලු තේ දළු කිලෝ ".$total_weight." ක් ".$unitprice." බැගින් මුලු මුදල:</th>";
      echo "<td></td>";
      echo "<td>".$total."</td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>පසුගිය මාසයෙන් ඉදිරියට ගෙන ආ ශේෂය</th>";
     
      echo "<td></td>";
      echo "<td></td>";
    
   
      
    
  echo "</tr>";
  echo "<tr>";
      echo "<th>පසුගිය මාසයෙන් ඉදිරියට ගෙන ආ හිඟ ශේෂය</th>";
      
      echo "<td>".$outstanding."</td>";
      echo "<td></td>";
    
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු අත්තිකාරම්</th>";
      echo "<td>".$advance."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු පොහොර</th>";
      echo "<td>".$fertilizer."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු තේ කොළ</th>";
      echo "<td>".$tea_leaves."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>ප්‍රවාහන කුලිය</th>";
      echo "<td>".$transport."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>අඩු කිරීම් වල මුලු එකතුව</th>";
      echo "<td>".$total_deduction."</td>";
      echo "<td></td>";
  echo "</tr>";
if ($rest_amount<0){
  echo "<tr>";
      echo "<th>ඉදිරියට ගෙන යන හිඟ මුදල<br>
      ඉදිරියට ගෙන යන ශේෂය<br>
      ඉතිරි මුදල</th>";
      
      echo "<td style='background-color:#f7624f'>".$rest_amount."</td>";
      echo "<td></td>";
  echo "</tr>";
}
  else {
    echo "<tr>";
      echo "<th>ඉදිරියට ගෙන යන හිඟ මුදල<br>
      ඉදිරියට ගෙන යන ශේෂය<br>
      ඉතිරි මුදල</th>";
      
      echo "<td style='background-color: #d9f904'>".$rest_amount."</td>";
      echo "<td></td>";
  echo "</tr>";
  }
  echo "<tr>";
      echo "<th>මුලු මුදල</th>";
      echo "<td>".$total."</td>";
      echo "<td>".$total."</td>";
  echo "</tr>";
  
  
  echo "</table>";

echo "<h2>මෙම මස ශේෂය: රු".$rest_amount."</h2>";
        
}



echo "<br>";
echo "<br>";






}
}
else{
  echo "";
}



?>
</div>
</div>

</div>

</body>
</html>






