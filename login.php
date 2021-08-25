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
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  
    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
</head>

<body>
    <div >
        <?php include 'header.php'; ?>    
    </div>
    
    <div class="login " >
        <h2 class="text-center">Login</h2>
     <center> <img src="Images/signup.png" width="150px"  /></center>

    <form action="login.php" method="post" onsubmit="return validate()">
        <i class="fas fa-user ml-2"></i>
        <label class="loginlabel"><b>Username:</b></label>
        <input type="text" class="logininput" placeholder="Enter username" name="uname" id="uname">
        <span id="unamespan" class="text-danger font-wight-bold"></span>
        <br>
        <i class="fas fa-key ml-2"></i>
        <label class="loginlabel"><b>Password:</b></label>
        <input type="password" class="logininput" placeholder="Enter password" name="psw" id="psw">
        <span id="pswspan" class="text-danger font-wight-bold"></span>
        <br>
        <center>
        <button type="submit" name="login" class="btn btn-success login-btn btn-lg">Login</button>
        <a href="signup.php"><button type="button" class="btn btn-primary login-btn btn-lg">Signup</button></a>
        </center>

    </form>

        <?php
         
            require 'dbconfig/config.php';

            if(isset($_POST['login']))
            {
                $uname=$_POST["uname"];
                $psw=$_POST["psw"];


                $query = "select uname from user_db where uname='$uname' AND psw='$psw'";
                
                $query_run = mysqli_query($con,$query);
               
                
                if(mysqli_num_rows($query_run)>0)
                {
                    
                    $_SESSION['uname'] = $uname;
                    echo '<script>location.href="index.php"</script>';
                    die;
                }
               
            
                $query = "select uname from admin_db where uname='$uname' AND psw='$psw'";
                
                $query_run = mysqli_query($con,$query);


                if(mysqli_num_rows($query_run)>0)
                {
                    $_SESSION["uname"] = $uname;
                   echo '<script>location.href="adminSide.php"</script>';
                    die;
                }
                else
                {
                    //echo '<script>alert("Invalid credentials")</script>' ;
                }


            }
        ?>
   </div>

<script type="text/javascript">
function validate()
{
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
if(psw==""){ 
    document.getElementById('pswspan').innerHTML="*please fill the Password field";
return false;
}
if((psw.length <=5) ||(psw.length >15) ){ 
    document.getElementById('pswspan').innerHTML="*Password must be between 6 and 15 char";
return false;
}
}
</script>
</body>
<div style="margin:400px 2px 3px 5px">
    <?php include 'footer.php';?>
    </div>
</html>

