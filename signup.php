<?php
    require 'dbconfig/config.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ambika Studio</title>
  
    <!--bootstrap CSS!-->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
     <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">
    
    
    
</head>
<body>
	<div>
	   <?php include 'header.php';?>
	</div>
	<section>
    <div class="signupclass mt-3">
        <h2 class="text-center">Sign up</h2>
   
    <center> <img src="Images/signup.png" width="150px"  /></center>
  
       <form action="signup.php" method="post" onsubmit="return validate()">
            <div class="form-group">
                <i class="fa fa-address-book-o" aria-hidden="true" ></i>

                <label><b>Full Name:</b></label>
                <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" >
                <span id="fnamespan" class="text-danger font-wight-bold"></span>
               
            </div>
            <div class="form-group">
                <i class="fa fa-mobile" aria-hidden="true" style="font-size:25px"></i>
                <label><b>Mobile No.:</b></label>
                <input type="text" class="form-control" id="mobno" name="mobno"  id="mobno">
                <span id="mobnospan" class="text-danger font-wight-bold"></span>
            </div>
            <div class="form-group">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <label><b>Email Id:</b></label>
                <input type="email" class="form-control" id="email" name="email">
                 <span id="emailspan" class="text-danger font-wight-bold"></span>
            </div>
             <div class="form-group">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                <label><b>User name:</b></label>
                <input type="text" class="form-control" id="uname" name="uname">
                 <span id="unamespan" class="text-danger font-wight-bold"></span>
            </div>
             <div class="form-group">
                <i class="fa fa-key" aria-hidden="true"></i>
                <label><b>Password:</b></label>
                <input type="Password" class="form-control" id="psw" name="psw">
                 <span id="pswspan" class="text-danger font-wight-bold"></span>
            </div>
            <div class="form-group">
                <i class="fa fa-key" aria-hidden="true"></i>
                <label><b>Conform Password:</b></label>
                <input type="Password" class="form-control" id="cpsw" name="cpsw">
                 <span id="cpswspan" class="text-danger font-wight-bold"></span>
            </div>
          
         
        <center>
        <!-- <button type="submit" name="login" class="btn btn-success">Login</button> -->

        <button  type="submit"  name="signup-btn" class="btn btn-success">Signup</button>
            </center>
        
        </form>

       <?php
            if(isset($_POST['signup-btn']))
            {
 
                $fname = $_POST['fname'];
                $mobno = $_POST['mobno'];
                $email = $_POST['email'];
                $uname = $_POST['uname'];
                $psw = $_POST['psw'];
                $cpsw = $_POST['cpsw'];

                if($psw==$cpsw)
                {
                    $query= "select * from user_db where uname= '$uname'";
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                         echo '<script>alert("User already Registered.Try another username")</script>' ; 
                    }
                    
                    else
                    {
                        $query = "INSERT INTO user_db values('','$fname','$mobno','$email','$uname','$psw')" ;

                        
                     

                       $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script>alert("User Successfully Registered..please login.")</script>' ;
                            echo '<script>location.href="login.php"</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error.")</script>' ;
                        }
                    }
                }
            }
        ?>
    </div>
<hr>
</section>

<script type="text/javascript">

function validate()
{

//validation for user full name
var fname= document.getElementById('fname').value;  
if(fname==""){
    document.getElementById('fnamespan').innerHTML="*please fill the Full Name field";
return false;
}
if((fname.length <=2) ||(fname.length >30) ){ 
    document.getElementById('fnamespan').innerHTML="*Full Name must be between 2 and 30 char";
return false;
}
if(!isNaN(fname)){ document.getElementById('fnamespan').innerHTML="*Full Name must be in character";
return false;
 
}

//Validation for mobile no
var mobno = document.getElementById('mobno').value;

if(mobno==""){
    document.getElementById('mobnospan').innerHTML="*please fill the Mobile field";
return false;
}

var regx = /^[7-9]\d{9}$/;
if (!regx.test(mobno)) {
    document.getElementById('mobnospan').innerHTML="*Mobile Number must be in between 70-99";
    return false;
}
if(isNaN(mobno)){
    document.getElementById('mobnospan').innerHTML="*Mobile Number must be in digit";
return false;
}
if(mobno.length!=10){
    document.getElementById('mobnospan').innerHTML="*Mobile Number must be of 10 digit";
return false;
}



//validation for email
var email= document.getElementById('email').value;

if(email==""){ 
    document.getElementById('emailspan').innerHTML="*please fill the Email field";
return false; 
}



//validation for username
var uname = document.getElementById('uname').value; 
if(uname==""){
    document.getElementById('unamespan').innerHTML="*please fill the username field";
return false;
}
if((uname.length <=2) ||(uname.length >25) ){ 
    document.getElementById('unamespan').innerHTML="*Username must be between 2 and 25 char";
return false;
}
if(!isNaN(uname)){ document.getElementById('unamespan').innerHTML="*Usernamemust be in character";
return false;
 
}

 
//validation for password
var psw= document.getElementById('psw').value;
var cpsw= document.getElementById('cpsw').value;
if(psw==""){ 
    document.getElementById('pswspan').innerHTML="*please fill the Password field";
return false;
}
if((psw.length <=5) ||(psw.length >15) ){ 
    document.getElementById('pswspan').innerHTML="*Password must be between 6 and 15 char";
return false;
}
if(psw!=cpsw){
document.getElementById('cpswspan').innerHTML="*Password and Confirm Password not matching";
return false;
}
}
</script>

    <div>
    <?php include 'footer.php';?>
    </div>
</body>
</html>