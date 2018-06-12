
<html>
<head>
<title>Admin | Change Password</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
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
      min-height: 1250px;
      background-attachment: fixed;
    }
    .btn-lg{
      background-color: #3aa00b;

    }

</style>
</head>
<body>


 <div class="content">
<div class="img"><img src="tea heading latest.jpg" class="img-responsive center-block" alt="Logo1" style="height: 180px"></div>

<nav class="navbar navbar-default" style="background-color: #11ee11 ;border:2px solid #0d160e; margin-top:10px">
  

    <div class="navbar-header">
      
      <a class="navbar-brand" href="#myPage"><font style="color: #000000"><b>MTC</b> Management Information System:<b>Admin</b></font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="admin.php">Back to Admin page</a></li>
        <li><a href="#myPage">Help</a></li>
       <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  
</nav>

 <form class="form-horizontal" action="" method="post" id="contact_form" align='center'>
                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="current" placeholder="Current Password" class="form-control" type="password" required="required">
                                </div>
                            </div>
                        </div>


                                  
                                        <!-- Text input-->
                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input name="new" placeholder="New Password" class="form-control" type="password" required="required">
                                </div>
                            </div>
                        </div>
      					
      					<div class="form-group">

                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input name="confirm" placeholder="Confirm Password" class="form-control" type="password" required="required">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-info " style="width:35%" name="change">Change</button>
        </fieldset>
    </form>
      
<?php
include ('connection.php');
$sql="SELECT * FROM admin";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

extract($_POST);
if(isset($change)){
	
if ($row['password']==md5($current)){
	if($new==$confirm){
		$newwwwww=md5($new);
	$sql1="UPDATE admin SET password='".$newwwwww."'";
	$result1=mysqli_query($con,$sql1);
	if($result1){
		echo "<div class='alert alert-info'>";
    echo "<center><strong>Info!</strong>Successfully Changed Your Password</center>";
  echo "</div>";
	}
	else{
		echo "<div class='alert alert-info'>";
    echo "<center><strong>Info!</strong>Cant Update Something was wrong</center>";
  echo "</div>";
	}
	}
	else {
			echo "<div class='alert alert-info'>";
    echo "<center><strong>Info!</strong>Confomatin Password doesnt match</center>";
  echo "</div>";
		}
}else{
	echo "<div class='alert alert-info'>";
    echo "<center><strong>Info!</strong>Entered Current Password is Wrong Password</center>";
  echo "</div>";
	
}


}
else{
	echo "error";
}


?>
        



            

            
</div>


</body>


</html>



