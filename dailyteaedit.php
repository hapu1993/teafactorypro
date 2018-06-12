<!DOCTYPE html>
<html>
<head>
  <?php

ob_start();
  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
body {
    padding-top:10px;

}
fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    align: center;
    
}
legend {
   color: #678;
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:maroon;
    font-size: 112%;
}
.content {
      width: 930px;
      align-content: center;
      margin: auto;
      padding: 10px;
      border:2px solid #0d160e;
      background-image:url("Leaf-Free-Wallpapers.jpg");
      min-height: 550px;
      background-attachment: fixed;
    }
    .btn-lg{
      background-color: #3aa00b;

    }
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 100px;
    align-content: center;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 100px;
}
.btn-group button {
    background-color: #4CAF50; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    width: 100%; /* Set a width if needed */
    display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}
</style>
</head>
<div class="content" align="center">
<div class="img"><img src="tea heading latest.jpg" class="img-responsive center-block" alt="Logo1" style="height: 180px"></div>

<nav class="navbar navbar-default" style="background-color: #11ee11 ;border:2px solid #0d160e; margin-top:10px">
  

    <div class="navbar-header">
      
      <a class="navbar-brand" href="#myPage"><font style="color: #000000"><b>MTC</b> Management Information System:<b>Admin</b></font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="logout.php">Back to login page</a></li>
        
       
      </ul>
    </div>
  
</nav>
<body>
<div align="center">
  <?php
  include('connection.php');
  $id=$_GET['id'];
  $sql1="SELECT * FROM dailytea WHERE day_ref_no='$id'";
  $result1=mysqli_query($con,$sql1);
  $row1=mysqli_fetch_array($result1);

  $sql2="SELECT * FROM customer WHERE customer_id='".$row1['customer_id']."'";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_array($result2);
  ?>
  <h4>හඳුනාගැනීමේ අංකය:<?php echo $row2['customer_id'];?></h4 >
  <h4>සැපයුම්කරු:<?php echo $row2['customer_name'];?></h4>
  <h4>දිනය:<?php echo $row1['date'];?></h4>
  <h4>පෙර අගය:<?php echo $row1['weight'];?></h4>


  <h3>නව අගය ඇතුලත් කරන්න</h3>
  <form class="form-inline" method="POST" action="">
  
  <div class="form-group mx-sm-3 mb-2">

    <label for="new_value" class="sr-only">New Value</label>
    <input type="text" class="form-control" name='new_value' placeholder="නව අගය">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name='submit'>Update</button>
</form>
<?php
if(isset($_POST['submit'])){
  
$sql3="UPDATE dailytea SET weight='".$_POST['new_value']."' WHERE day_ref_no='".$id."'";

$result3=mysqli_query($con,$sql3);
echo '<script language="javascript">';
  echo 'alert(Are you Sure)';  //not showing an alert box.
  echo '</script>';

if ($result3){
  echo "සාර්ථකව යාවත්කාලීන කරන ලදී";

}
else {
  echo "errrrrrrrrrrrrror";
}



}









?>


</body>
</html> 
