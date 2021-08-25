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
    
   <link href="External_css/cartOrderForm.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div>
        <?php include'header.php' ?>
    </div>

    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="CartOrderForm.php" method="POST">

        <div class="row">
          <div class="col-50">
            
            
<h3>Your Item:</h3>
             <?php 
  
                
            
         foreach($_SESSION as $products) 
            {
                if (is_array($products) || is_object($products)) 
                  {
            foreach($products as $key => $value) 
                        {
                            if($key == 0) 
                            {
                                echo "<input type='hidden' name= 'pname' value='".$value."'>";
                                echo "<h3>".$value."</h3>";

                            }
                        }
                    }
            }

        
         

            ?>
            <hr>
            <h3>Billing Address</h3>
             <?php 
                if (isset($_SESSION['uname'])) {
                    ?>

                    <input type="hidden" name="uname" value="<?php echo $_SESSION['uname'];?>">
                  <?php
                  }
              ?>

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="Sachin R. Tendulkar">
            
            <label for="city"><i class="fa fa-mobile"></i> Mobile No.</label>
            <input type="text" id="city" name="mobno" placeholder="8123456789">

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="sachin@example.com">
           
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="54,SRT Colony,Pune">
            
        

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Maha">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="400101">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Sachin Ramesh Tendulkar">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" class="btn btn-success" name="palceorder" value="Place Order">
      </form>
    </div>
  </div>
</div>
 
            <?php
            if(isset($_POST['palceorder']))
            {
                
                $pname=$_POST['pname'];
                $uname=$_POST['uname'];
                $fname = $_POST['fname'];
                $mobno = $_POST['mobno'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];
                $cardname = $_POST['cardname'];
                $cardnumber = $_POST['cardnumber'];
                $expmonth = $_POST['expmonth'];
                $expyear = $_POST['expyear'];
                $cvv = $_POST['cvv'];




                $query = "INSERT INTO ordered_product VALUES(' ', '$pname','$uname', '$fname', '$mobno', '$email', '$address', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv')" ;

                //echo $query;
                    $query_run = mysqli_query($con,$query);

                    if($query_run)
                    {
                        echo '<script>alert("Order Successfully Placed...")</script>' ;
                        echo '<script>location.href="index.php"</script>';
                    }
                    else
                    {
                        echo '<script>alert("Error.")</script>' ;
                    }
                }   

              


            
            
            ?> 
        

    
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
