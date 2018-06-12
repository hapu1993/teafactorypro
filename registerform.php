<html>
<head>

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
      height: 1100px;
    }
</style>
</head>
<body>


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
<div class="container" background-color="#98ff8e">
	<div class="row">
        <div class="col-md-6">
           <marquee><p style="font-family: Impact; font-size: 18pt">මාවිටවත්ත තේ දළු එකතු කිරීමේ මධ්‍යස්තානය </p></marquee>

           
            <form action="customer1.php" enctype="multipart/form-data" method="post">
            <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>
                <h2 align="center">තේ දළු සපයන්නන් ලියපදිංචි කිරීම</h2>

            <div class="form-group">
            <label for="nic_no"><span class="req">* </span> Customer ID: </label>
                    <input required type="text" name="customer_id" id="customer_id" class="form-control phone" maxlength="10" onkeyup="validatephone(this);" placeholder="10 charactors"/> 
            </div>

            <div class="form-group"> 	 
                <label for="name"><span class="req">* </span> Full Name: </label>
                    <input class="form-control" type="text" name="customer_name" id = "txt" onkeyup = "Validate(this)" placeholder="Full Name" required /> 
                        <div id="errFirst"></div>    
            </div>

            <div class="form-group">

                


                <label for="password"><span class="req">* </span> Password: </label> 
                    <input class="form-control" type="password" name="password" id = "pass1" onkeyup = "Validate(this)" placeholder="Enter a password between 4 & 16 charactors" required />

                    <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password1" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
                        <div id="errLast"></div>


            </div>

            

        
      
            

            <div class="form-group">
                <label for="mobile_no"><span class="req">* </span> Mobile_no:  <small>Please enter a valid Phone Number</small> </label> 
                    <input class="form-control" type="text" name="mobile_no" id = "mobile_no" onkeyup = "Validate(this)" placeholder="Valid Mobile No" required />  
                        <div id="errLast"></div>
            </div>
            <div class="form-group">
                <label for="customer_address"><span class="req">* </span> Address:  <small>Please enter a valid Address</small> </label> 
                    <input class="form-control" type="text" name="customer_address" id = "mobile_no" onkeyup = "Validate(this)" placeholder="Valid Address" required />  
                        <div id="errLast"></div>
            </div>
                    
           



            

            <div class="form-group">
            
                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>

                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="https://www.police.lk/index.php/traffic-police" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
            </div>

            


            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
            </div>
                      <h5>You will receive an email to complete the registration and validation process. </h5>
                      <h5>Be sure to check your spam folders. </h5>
 

            </fieldset>
            </form><!-- ends register form -->
</div>

    </div>
        </div>
    </div>
        <script>
        var password = document.getElementById("pass1"),confirm_password = document.getElementById("pass2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>


</html>
