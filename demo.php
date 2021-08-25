<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambika Studio</title>
  
    <!--bootstrap CSS!-->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
   
    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    
</head>
<body>
    <div>
    <?php include 'header.php';?>
    </div>
    <h2 class="text-center">Sign up</h2>
   

  
       <form action="#" method="post" onsubmit="return validate()">
             <div class="form-group">
                <label><b>Full Name:</b></label>
                <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" >
                <span id="username" class="text-danger font-wight-bold"></span>
                <!-- <label id="fnamelbl" style="color: red;visibility: hidden;">Invalid Username</label> -->
            </div>
            <div class="form-group">
                <label><b>Mobile No.:</b></label>
                <input type="text" class="form-control" name="mobno"  id="mobno">
                <span id="mobnospan" class="text-danger font-wight-bold"></span>

                <!-- <label id="mobnolbl" style="color:red; visibility:hidden;"></label>
            </div> -->
              <div class="form-group">
                <label><b>Email Id:</b></label>
                <input type="email" class="form-control" name="email">
            </div>
             <div class="form-group">
                <label><b>User name:</b></label>
                <input type="text" class="form-control" name="uname">
            </div>
             <div class="form-group">
                <label><b>Password:</b></label>
                <input type="Password" class="form-control" name="psw">
            </div>
            <div class="form-group">
                <label><b>Conform Password:</b></label>
                <input type="Password" class="form-control" name="cpsw">
            </div>
             
     
            <input  type="submit" value="Signup" name="signup-btn" class="btn btn-success">
        </form>

        <script type="text/javascript">
            function validate()
            {
            var uname = document.getElementById('fname').value;

            if(uname == "")
            {
                document.getElementById('username').innerHTML="Enter the unaem";
                return false;
            }
        }
        </script>

</body>
</html>