<?php
session_start();
ob_start();
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
  
 <br>
 <br>
          <div class="form-group">
            <h2>අත්තිකාරම්/පොහොර/තේ කොළ/ප්‍රවාහන ගාස්තු අය කරන කාලය ඇතුලත් කරන්න</h2>
            <br>
            <br>
             <select name="day1" value="day1">
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>

          <select name="month1" value="month1">
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
<select name="year1" value="year1">
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  </select>
<h2>සිට</h2>
</div>
 <div class="form-group">
             <select name="day2" value="day2">
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>

          <select name="month2" value="month2">
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
<select name="year2" value="year2">
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  </select>
<h2>දක්වා</h2>
</div>
<h2>දෛනික දළු කිලෝ එකතුව සැලකිය යුතු මාසය</h2>
<select name="month3" value="month3">
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
         <br>
         <br> 
          <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg" background-color="#3aa00b" name="submit"><font style="color: #040504">ගණනය</font></button>
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
    $sql25="SELECT * FROM unitprice WHERE month='".$month3."' && year='".$year1."'";
    $result25=mysqli_query($con,$sql25);
    $row25=mysqli_fetch_array($result25);
        if (!($row25['price']=='')){
          //transport calculations
         

                $tran="SELECT * FROM transportrate where year='".$year1."' and month='".$month3."'";

                $tranres=mysqli_query($con,$tran);
                $rowtran=mysqli_fetch_array($tranres);

                $tran1="SELECT * FROM transportlist";
                $tranres1=mysqli_query($con,$tran1);
                //remove
                  


                  //delete
                  $sqldel="DELETE FROM transport WHERE month='".$month3."' and year='".$year1."'";
                  $resdel=mysqli_query($con,$sqldel);



                  //

                //
                while($rowtran1=mysqli_fetch_array($tranres1)){
                  
                  $resulttrantea = mysqli_query($con,"SELECT SUM(weight) AS value_sum3 FROM dailytea where customer_id='".$rowtran1['customer_id']."' and MONTH(date)='".$month3."' and YEAR(date)='".$year1."'");
                  $rowtrantea = mysqli_fetch_assoc($resulttrantea);
                  $tot=$rowtran['price']*$rowtrantea['value_sum3'];
                  $resultcheck = mysqli_query($con,"SELECT * FROM transport where customer_id='".$rowtran1['customer_id']."' and month='".$month3."' and year='".$year1."'");

                  $rowcheck=mysqli_fetch_array($resultcheck);
                  if(mysqli_num_rows($resultcheck)==0){
                  $tran2="INSERT INTO transport(customer_id,month,year,price) VALUES ('".$rowtran1['customer_id']."','$month3','$year1','$tot')";
                  $tranres=mysqli_query($con,$tran2);
                  }
                  else{
                    $sqlup="UPDATE transport SET price='$tot' WHERE customer_id='".$rowtran1['customer_id']."' and month='$month3' and year='$year1'";
                    $resultup=mysqli_query($con,$sqlup);
                  }
                }











                //
            $result=mysqli_query($con,"SELECT * from customer order by customer_id");
            while($arr=mysqli_fetch_assoc($result)){
    
                $customer_id=$arr['customer_id'];
                $customer_name=$arr['customer_name'];
                $_SESSION['customer_id']=$customer_id;
                $_SESSION['year1']=$year1;
                $_SESSION['month1']=$month1;
                $_SESSION['date1']=$day1;
                $_SESSION['year2']=$year2;
                $_SESSION['month2']=$month2;
                $_SESSION['date2']=$day2;
                $_SESSION['customer_name']=$customer_name;
                $_SESSION['customer_address']=$arr['customer_address'];
                $date1="$year1/$month1/$day1";
                $date2="$year2/$month2/$day2";


                $result1 = mysqli_query($con,"SELECT SUM(price) AS value_sum FROM advance where customer_id='".$customer_id."' and date>='".$date1."' and date<='".$date2."'");
                $result2 = mysqli_query($con,"SELECT SUM(price) AS value_sum1 FROM fertilizer where customer_id='".$customer_id."' and date>='".$date1."' and date<='".$date2."'");
                $result3 = mysqli_query($con,"SELECT SUM(price) AS value_sum2 FROM tea_leaves where customer_id='".$customer_id."' and date>='".$date1."' and date<='".$date2."'");
                $result4 = mysqli_query($con,"SELECT SUM(weight) AS value_sum3 FROM dailytea where customer_id='".$customer_id."' and MONTH(date)='".$month3."' and YEAR(date)='".$year1."'");
                $result5=mysqli_query($con,"SELECT price from outstanding WHERE customer_id='".$customer_id."' and month='".($month3)."' and year='".($year1)."'");
                $result7 = mysqli_query($con,"SELECT SUM(price) AS value_sum4 FROM transport where customer_id='".$customer_id."' and month='".$month3."' and year='".$year1."'");
                $result8 = mysqli_query($con,"SELECT SUM(price) AS value_sum5 FROM other where customer_id='".$customer_id."' and date>='".$date1."' and date<='".$date2."'");

  
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
//calculations
                $result6=mysqli_query($con,"SELECT price from unitprice WHERE month='".$month3."' and year='".$year1."'");
                $row5= mysqli_fetch_assoc($result6);
                $unitprice= $row5['price'];


                $final_sum4=((-$outstanding)+($sum2+$sum1+$sum+$transport+$other));
                $final_sum=($sum3*$unitprice);
                $final_sum2=(($sum3*$unitprice)-((-$outstanding)+($sum2+$sum1+$sum+$transport+$other)));
 

//checking he didnt give tea and everything
                if (($outstanding==0) and ($final_sum4==0) and ($final_sum2==0)){
                        /*echo $customer_name;
                        echo "<br>";*/
                }
                
                else{
  $sql30="SELECT * FROM final where month='".$month3."' and year='".$year1."' and customer_id='".$customer_id."'";
                        $result30=mysqli_query($con,$sql30);
  
                        $row30=mysqli_fetch_array($result30);
                        if (!(mysqli_num_rows($result30)==0)){
                            if($row30['month']='".$month3."' && $row30['year']='".$year1."' && $row30['customer_id']='".$customer_id."'){
                              $sql35="UPDATE final SET total_weight='".$sum3."',Outstanding_from_lastmonth='".$outstanding."',advance
                              ='".$sum."',fertilizer='".$sum1."',tea_leaves='".$sum2."',transport='".$transport."',other='".$other."',total_deduction='".$final_sum4."',rest_amount='".$final_sum2."',total='".$final_sum."',printed='0' where month='".$month3."' and year='".$year1."' and customer_id='".$customer_id."'";
                              $result35=mysqli_query($con,$sql35);
                              if ($result35){
                                echo "successs";
                                echo $sum3;
                              }
                              else {
                                echo "error";
                              }
                              if ($final_sum2<0){
                                      if ($month3=='12'){

                                        $sql20="UPDATE outstanding SET price='".$final_sum2."' WHERE month='01' and year='".$year2."' customer_id='".$customer_id."'";
                                        $result20=mysqli_query($con,$sql20);
                                      }
                                        else{
                                          $sql20="UPDATE outstanding SET price='".$final_sum2."' WHERE month='".($month3+1)."' and year='".$year2."' customer_id='".$customer_id."'";
                                        $result20=mysqli_query($con,$sql20);
                                        }
                                }
                                else{
                                   if ($month3=='12'){
                                  $sql40="DELETE FROM outstanding month='01' and customer_id='".$customer_id."' and year='".$year2."'";
                                }
                                else{
                                $sql40="DELETE FROM outstanding month=($month3+1) and customer_id='".$customer_id."' and year='".$year2."'";
                              }
                            }
                              }
                            else {
                                $sql10="INSERT INTO final(customer_id,customer_name,month,year,total_weight,Outstanding_from_lastmonth,advance,fertilizer,tea_leaves,transport,other,total_deduction,rest_amount,total) VALUES ('".$customer_id."','".$customer_name."','".$month3."','".$year1."','".$sum3."','".$outstanding."','".$sum."','".$sum1."','".$sum2."','".$transport."','".$other."','".$final_sum4."','".$final_sum2."','".$final_sum."')";

                                $result10=mysqli_query($con,$sql10);
                                  
                                  
//outstanding add to the next month
                                if ($final_sum2<0){
                                      if($month3=='12'){
                                        $sql20="INSERT INTO outstanding(customer_id,month,year,price)VALUES('".$customer_id."','01','".$year2."','".$final_sum2."')";
                                        $result20=mysqli_query($con,$sql20);
                                      }
                                      else{
                                          $sql20="INSERT INTO outstanding(customer_id,month,year,price)VALUES('".$customer_id."','".($month3+1)."','".$year2."','".$final_sum2."')";
                                        $result20=mysqli_query($con,$sql20);
                                      }
                                }

                            }
                            }//num row ekee else eka
                            else{
                               $sql10="INSERT INTO final(customer_id,customer_name,month,year,total_weight,Outstanding_from_lastmonth,advance,fertilizer,tea_leaves,transport,other,total_deduction,rest_amount,total) VALUES ('".$customer_id."','".$customer_name."','".$month3."','".$year1."','".$sum3."','".$outstanding."','".$sum."','".$sum1."','".$sum2."','".$transport."','".$other."','".$final_sum4."','".$final_sum2."','".$final_sum."')";

                                $result10=mysqli_query($con,$sql10);
                                  
                                  
//outstanding add to the next month
                                if ($final_sum2<0){
                                        if($month3=='12'){
                                        $sql20="INSERT INTO outstanding(customer_id,month,year,price)VALUES('".$customer_id."','01','".$year2."','".$final_sum2."')";
                                        $result20=mysqli_query($con,$sql20);
                                      }
                                      else{
                                          $sql20="INSERT INTO outstanding(customer_id,month,year,price)VALUES('".$customer_id."','".($month3+1)."','".$year2."','".$final_sum2."')";
                                        $result20=mysqli_query($con,$sql20);
                                      }
                                }
                            }
                    }









// udama while eke
            }
                        
            header('location: printall2.php');
//unit price eke if eke else eka
                        }
        else{
            echo "<h2>මෙම මස සඳහා දළු කිලෝවක මිල ඇතුලත් කර නොමැත.</h2>";
            echo "<br>";
            echo "<br>";
            echo "<a href='unitprice1.php'><h2>මෙතැනින් ඇතුලත් කරන්න</h2></a>";
        }





//










//isset eke
}








?>


    </div>    
  </div>

  



</div>

</body>
</html>


























?>