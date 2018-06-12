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
      height: 1400px;
      background-attachment: fixed;
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
 
    <form class="form-inline" action="" method="POST"> 
  <div class="form-group">
    <label for="customer_id" style="font-size:25px">හඳුනාගැනීමේ අංකය:</label>
    <input type="text" class="form-control" name="username" autofocus="auto" required="required">
  </div>
 <br>
 <br>
          <div class="form-group">
            

<h2>දළු බිල ලබා ගැනීමට අවශ්‍ය වසර සහ මාසය ඇතුලත් කරන්න</h2>
<select name="year" value="year">
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
  <option value="2027">2027</option>

</select>
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
</div>
         <br>
         <br> 
          <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg" background-color="#3aa00b" name="submit"><font style
="color: #040504">ගණනය</font></button>
           </div>
        </form>
        <br>
        <a href='admin.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ආපසු</font></button></a>
        <?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
extract($_POST);

if (isset($submit)){
  $result=mysqli_query($con,"SELECT * from customer WHERE customer_id='".$username."'");
  $arr=mysqli_fetch_assoc($result);
  $customer_id=$arr['customer_id'];
  $customer_name=$arr['customer_name'];
  $_SESSION['customer_name']=$customer_name;
  $_SESSION['customer_address']=$arr['customer_address'];
  $month1=$month+1;
  $_SESSION['month']=$month;
  $_SESSION['customer_id']=$customer_id;
  $date1="$year-$month-20";
  $date2="$year-$month1-20";
  $result1 = mysqli_query($con,"SELECT SUM(price) AS value_sum FROM advance where customer_id='".$username."' and date>='".$date1."' and date<='".$date2."'");
  $result2 = mysqli_query($con,"SELECT SUM(price) AS value_sum1 FROM fertilizer where customer_id='".$username."' and date>='".$date1."' and date<='".$date2."'");
  $result3 = mysqli_query($con,"SELECT SUM(price) AS value_sum2 FROM tea_leaves where customer_id='".$username."' and date>='".$date1."' and date<='".$date2."'");
  $result4 = mysqli_query($con,"SELECT SUM(weight) AS value_sum3 FROM dailytea where customer_id='".$username."' and MONTH(date)='".$month."'");
  $result5=mysqli_query($con,"SELECT price from outstanding WHERE month='".($month)."' and customer_id='".$username."'");
  $result7 = mysqli_query($con,"SELECT SUM(price) AS value_sum4 FROM transport where customer_id='".$username."' and date>='".$date1."' and date<='".$date2."'");
   $result8 = mysqli_query($con,"SELECT SUM(price) AS value_sum5 FROM other where customer_id='".$username."' and date>='".$date1."' and date<='".$date2."'");

  
  $row = mysqli_fetch_assoc($result1);
  $row1 = mysqli_fetch_assoc($result2);
  $row2 = mysqli_fetch_assoc($result3);
  $row3 = mysqli_fetch_assoc($result4);
   $row4= mysqli_fetch_assoc($result5);
   $row6= mysqli_fetch_assoc($result7);
   $row7= mysqli_fetch_assoc($result8);
   
$sum = $row['value_sum'];
$sum1 = $row1['value_sum1']; 
$sum2 = $row2['value_sum2'];
$sum3 = $row3['value_sum3'];
$outstanding = $row4['price'];
$transport=$row6['value_sum4'];
$other=$row7['value_sum5'];

$_SESSION['value_sum']=$sum;
$_SESSION['value_sum1']=$sum1;
$_SESSION['value_sum2']=$sum2;
$_SESSION['value_sum3']=$sum3;
$_SESSION['outstanding']=$outstanding;
    
    $_SESSION['transport']=$transport;
    $_SESSION['other']=$other;
    

$result6=mysqli_query($con,"SELECT price from unitprice WHERE month='".$month."' and year='".$year."'");
$row5= mysqli_fetch_assoc($result6);
$unitprice= $row5['price'];

$_SESSION['unitprice']=$unitprice;
if ($month==01){
  $month3='ජනවාරි';
}
elseif ($month==02){
  $month3='පෙබරවාරි';
}
elseif ($month==03){
  $month3='මාර්තු';
}
elseif ($month==04){
  $month3='අප්‍රේල්';
}
elseif ($month==05){
  $month3='මැයි';
}
elseif ($month==06){
  $month='ජුනි';
}
elseif ($month==07){
  $month3='ජූලි';
}
elseif ($month==08){
  $month3='අගෝස්තු';
}
elseif ($month==09){
  $month3='සැප්තැම්බර්';
}
elseif ($month==10){
  $month3='ඔක්තොබර්';
}
elseif ($month==11){
  $month3='නොවැම්බර්';
}
elseif ($month==12){
  $month3='දෙසැම්බර්';
}
echo "<h2>අත්තිකාරම්/පොහොර/ප්‍රවාහන ගාස්තු ".$date1." සිට ".$date2." දක්වා සළකා ඇති අතර ".$month." මසයෙහි දෛනික දළු කිලෝ එකතුව සළකා ඇත</h2>";
if ($customer_id==""){
  echo "<h2><b>වැරදි හඳුනාගැනීමේ අංකයකි</b></h2>";
}

else {
  if ($unitprice==""){
  echo "<h2>".$year." හි ".$month." මාසය සඳහා දළු කිලෝවක මිල ඇතුලත් කර නොමැත.</h2>";
  echo "<br>";
  echo "<a href='unitprice1.php'><h3>මෙතැනින් ඇතුලත් කරන්න</h3></a>";
    }
  else{

  echo "<h2 align='center'>".$customer_name." මහතාගේ/මහත්මියගේ ".$month." මාසයෙහි මාසික බිල</h2>";
   if ($outstanding>0){
echo "<table style='width:75%' align='center'>";
echo "<tr>";
      echo "<th>මුලු තේ දළු කිලෝ ".$sum3." ක් ".$unitprice." බැගින් මුලු මුදල:</th>";
      echo "<td></td>";
      echo "<td>".$sum3*$unitprice."</td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>පසුගිය මාසයෙන් ඉදිරියට ගෙන ආ ශේෂය</th>";
     
      echo "<td></td>";
      echo "<td>".$outstanding."</td>";
    
   
      
    
  echo "</tr>";
  echo "<tr>";
      echo "<th>පසුගිය මාසයෙන් ඉදිරියට ගෙන ආ හිඟ ශේෂය</th>";
      
      echo "<td></td>";
      echo "<td></td>";
    
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු අත්තිකාරම්</th>";
      echo "<td>".$sum."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු පොහොර</th>";
      echo "<td>".$sum1."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු තේ කොළ</th>";
      echo "<td>".$sum2."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>ප්‍රවාහන කුලිය</th>";
      echo "<td>".$tranport."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>වෙනත්</th>";
      echo "<td>".$other."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>අඩු කිරීම් වල මුලු එකතුව</th>";
      echo "<td>".($sum2+$sum1+$sum+$transport+$other)."</td>";
      echo "<td></td>";
  echo "</tr>";
if (((($sum3*$unitprice)+$outstanding)-($sum2+$sum1+$sum+$transport+$other))<0){
  echo "<tr>";
      echo "<th>ඉදිරියට ගෙන යන හිඟ මුදල<br>
      ඉදිරියට ගෙන යන ශේෂය<br>
      ඉතිරි මුදල</th>";
      echo "<td style='background-color:#f7624f'>".((($sum3*$unitprice)+$outstanding)-($sum2+$sum1+$sum+$transport+$other))."</td>";
      echo "<td></td>";
  echo "</tr>";
}
else {
  echo "<tr>";
      echo "<th>ඉදිරියට ගෙන යන හිඟ මුදල<br>
      ඉදිරියට ගෙන යන ශේෂය<br>
      ඉතිරි මුදල</th>";
      echo "<td style='background-color: #d9f904'>".((($sum3*$unitprice)+$outstanding)-($transport+$sum2+$sum1+$sum+$other))."</td>";
      echo "<td></td>";
  echo "</tr>";
  }
  echo "<tr>";
      echo "<th>මුලු මුදල</th>";
      echo "<td>".(($sum3*$unitprice)+$outstanding)."</td>";
      echo "<td>".(($sum3*$unitprice)+$outstanding)."</td>";
  echo "</tr>";
  
  
  echo "</table>";
  echo "<h2>මෙම මස ශේෂය: රු".((($sum3*$unitprice)+$outstanding)-($sum2+$sum1+$sum+$transport+$other))."</h2>";
  echo "<a href='pdfview3.php'><button type='button' name='paid' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ගෙව්වා</font></button></a>";

  //add the outstanding to the database

  
}
else {

echo "<table style='width:75%' align='center'>";
echo "<tr>";
      echo "<th>මුලු තේ දළු කිලෝ ".$sum3." ක් ".$unitprice." බැගින් මුලු මුදල:</th>";
      echo "<td></td>";
      echo "<td>".$sum3*$unitprice."</td>";
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
      echo "<td>".$sum."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු පොහොර</th>";
      echo "<td>".$sum1."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>මුලු තේ කොළ</th>";
      echo "<td>".$sum2."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>ප්‍රවාහන කුලිය</th>";
      echo "<td>".$transport."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>වෙනත්</th>";
      echo "<td>".$other."</td>";
      echo "<td></td>";
  echo "</tr>";
  echo "<tr>";
      echo "<th>අඩු කිරීම් වල මුලු එකතුව</th>";
      echo "<td>".((-$outstanding)+($sum2+$sum1+$sum+$transport+$other))."</td>";
      echo "<td></td>";
  echo "</tr>";
if ((($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)))<0){
  echo "<tr>";
      echo "<th>ඉදිරියට ගෙන යන හිඟ මුදල<br>
      ඉදිරියට ගෙන යන ශේෂය<br>
      ඉතිරි මුදල</th>";
      
      echo "<td style='background-color:#f7624f'>".(($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)))."</td>";
      echo "<td></td>";
  echo "</tr>";
  $outstandingnew=(($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)));
  $sql="INSERT INTO outstanding('customer_id','month','year','price') VALUES ($customer_id,$month1,$year,$outstandingnew)";
}
  else {
    echo "<tr>";
      echo "<th>ඉදිරියට ගෙන යන හිඟ මුදල<br>
      ඉදිරියට ගෙන යන ශේෂය<br>
      ඉතිරි මුදල</th>";
      
      echo "<td style='background-color: #d9f904'>".(($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)))."</td>";
      echo "<td></td>";
  echo "</tr>";
  }
  echo "<tr>";
      echo "<th>මුලු මුදල</th>";
      echo "<td>".($sum3*$unitprice)."</td>";
      echo "<td>".($sum3*$unitprice)."</td>";
  echo "</tr>";
  
  
  echo "</table>";

echo "<h2>මෙම මස ශේෂය: රු".(($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)))."</h2>";
        
}

echo "<a href='pdfview3.php'><button type='button' name='paid' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ගෙව්වා</font></button></a>";

echo "<br>";
echo "<br>";




}

}

}







?>


    </div>    
  </div>

  



</div>

</body>
</html>
