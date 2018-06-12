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
 
    <form action="" id="loginForm" method="POST">   
  <div class="form-inline input-group col-md-offset-4 col-sm-6 col-md-3">
          <label><font size="5px">ප්‍රවාහන Rate</font></label>
            <input type="text" name="unitprice" placeholder="ප්‍රවාහන Rate" required="required">
            </div>
            <br>

            <div class="form-group input-group col-md-offset-4 col-sm-6 col-md-3">
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
</div>

            <div class="form-group input-group col-md-offset-4 col-sm-6 col-md-3">
          <button type="submit" class="btn btn-primary btn-lg" background-color="#3aa00b" name="unitpricebtn"><font style
="color: #040504">Submit</font></button>
           </div>
   </form>
        <?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
extract($_POST);

if (isset($unitpricebtn)){
  $sql="SELECT * FROM transportrate WHERE month='".$month."' and year='".$year."'";
$result1=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($result1);
if ($month==$arr['month'] && $year==$arr['year']){
  
    echo "<h2>එක් වතාවක් ".$year." හි  ".$month." මාසය සඳහා ප්‍රවාහන Rate ඇතුලත් කර ඇත. නව අගය යාවත්කාලීන කරන ලදී</h2>";
     $sql5="UPDATE transportrate SET price='".$unitprice."' WHERE month='".$month."' and year='".$year."'";
     $result5=mysqli_query($con,$sql5);
  }
  else {
	$sql1="INSERT INTO transportrate(price,month,year) VALUES ('".$unitprice."','".$month."','".$year."')";
  $result=mysqli_query($con,$sql1);
  	if ($result){
  		echo "<h2><b>සාර්ථකව ඇතුලත් කරන ලදී</b></h2>";
       echo "<a href='admin.php'><button type='submit' class='btn btn-primary btn-lg' background-color='#3aa00b'><font style
='color: #040504'>ආපසු</font></button></a>";
  }
  else{
  	echo "<h2><b>වැරදි ඇතුලත් කිරීමකි</b></h2>";
  }
  
  }
  
}

?>
    </div>    
  </div>

  



</div>

</body>
</html>



