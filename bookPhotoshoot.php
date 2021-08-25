<?php
session_start();
require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ambika Studio</title>
    
    <!--External CSS!-->
    <link href="External_css/styles.css" rel="stylesheet" />
     <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
</head>
<body >

    <div>
        <?php include'header.php' ?>
    </div>


    <section>
        <div class="photoshootForm"  >
            <h2 class="text-center mt-3" style="font-family: 'Style Script', cursive; font-size: 55px">Book Date For Photoshoot</h2>
            <hr style="border: 1px solid">
            <img src="Images/photoshoot.jpg" width="100%" height="300px">
            <hr style="border: 1px solid">

            <form action="bookPhotoshoot.php" method="post" onsubmit="return validate()">

                <div class="form-group">
                   <i class="fa fa-address-book-o" aria-hidden="true" ></i>
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span id="fnamespan" class="text-danger font-wight-bold"></span>
                </div>
                <div class="form-group">
                     <i class="fa fa-mobile" aria-hidden="true" style="font-size:25px"></i>                   
                    <label>Mobile No.:</label>
                    <input type="text" class="form-control" id="mobno" name="mobno">
                    <span id="mobnospan" class="text-danger font-wight-bold"></span>
                </div>
                <div class="form-group">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <label>Email Id:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <span id="emailspan" class="text-danger font-wight-bold"></span>
                </div>
                <div class="form-group">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <label>Function Name:</label>
                    <input type="text" class="form-control" id="funname" name="funname">
                    <span id="funnamespan" class="text-danger font-wight-bold"></span>
                </div>
                <div class="form-group">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <label>From:</label>
                    <input type="date" class="form-control" id="date_from" name="date_from" min="2021-03-01"  max="2021-06-31">
                    <span id="date_fromspan" class="text-danger font-wight-bold"></span>
                </div>
                <div class="form-group">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <label>To:</label>
                    <input type="date" class="form-control" id="date_to" name="date_to">
                    <span id="date_tospan" class="text-danger font-wight-bold"></span>
                </div>
                <div class="form-group">
                    <i class="fa fa-map-marker" aria-hidden="true" style="font-size:19px"></i>
                    <label>Location:</label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>
                <?php
                if (isset($_SESSION['uname'])) {
                    ?>
               <center> <button type="submit" name="add-btn" class="btn btn-success mb-3">Submit</button>
                <?php
                }
                else{
                ?>
                   <center> <a href="login.php"><input type='button' name='placeorder' value='Please Login ' class='btn btn-primary'></a></center>
                <?php 
            
                    }
                ?>
            </form>

            <?php
            if(isset($_POST['add-btn']))
            {

                $fname = $_POST['fname'];
                $mobno = $_POST['mobno'];
                $email = $_POST['email'];
                $funname = $_POST['funname'];
                $date_from = $_POST['date_from'];
                $date_to = $_POST['date_to'];
                $location = $_POST['location'];
                

                $query= "select * From booking_photoshoot where date_from = '$date_from'";
                $query_run = mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script>alert("Date is booked.")</script>'; 

                }

                else
                {

                    $query = "insert into booking_photoshoot values('', '$fname', '$mobno', '$email', '$funname', '$date_from','$date_to','$location')" ;

                    $query_run = mysqli_query($con,$query);

                    if($query_run)
                    {
                        echo '<script>alert("Successfully Added...")</script>' ;
                    }
                    else
                    {
                        echo '<script>alert("Error.")</script>' ;
                    }
                }   

            }  


            
            
            ?> 
        </div>

    </section>
 <!-- <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->


    <script type="text/javascript">

        function validate()
        {
        //validation for full name
        var fname = document.getElementById('fname').value;
        if (fname=="") 
        {
            document.getElementById('fnamespan').innerHTML="*Enter Your Full Name";
            return false;
        }
        if(!isNaN(fname))
        { 
            document.getElementById('fnamespan').innerHTML="*Full Name must be in character";
            return false;
        }

        //Validation for mobile no
        var mobno = document.getElementById('mobno').value;

        if(mobno==""){
            document.getElementById('mobnospan').innerHTML="*Please fill the Mobile field";
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
            document.getElementById('emailspan').innerHTML="*Please fill the Email field";
            return false; 
        }


        //validation for function name
        var funname = document.getElementById('funname').value;
        if (funname=="") 
        {
            document.getElementById('funnamespan').innerHTML="*Enter the Function Name";
            return false;
        }
        if(!isNaN(funname))
        { 
            document.getElementById('funnamespan').innerHTML="*Full Name must be in character";
            return false;
        } 

        //validation for date
        var date_from = document.getElementById('date_from').value;
        if (date_from=="") 
        {
            document.getElementById('date_fromspan').innerHTML="*Enter the Date";
            return false;
        }
        
        var date_to = document.getElementById('date_to').value;
        if (date_to=="") 
        {
            document.getElementById('date_tospan').innerHTML="*Enter the Date";
            return false;
        }
}

</script>

<footer class="bg-dark text-center text-white">@ambikastudio</footer>
</body>
</html>
