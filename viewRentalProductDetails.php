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
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">
    
</head>
<body >
<div>
	<?php include 'header.php';?>		
</div>
	<!-- <div>{
     background: linear-gradient(to bottom, #3399ff 18%, #ccffff 100%);
} -->

        <form action="viewRentalProductDetails.php" method="post" >
            <div class="row viewDiv " >
        <?php


        
                $rid = $_GET['rid'];   

                $showquery = "SELECT * from product_detail where rid = $rid";
                
                $showdata = mysqli_query($con,$showquery);

                $product = mysqli_fetch_array($showdata);

        
                
        ?>

		<div class="col-lg-5 col-md-5 col-sm-12">
                <input type="hidden" name="rid" value="<?php echo $product['rid'];?>" >
                <input type="hidden" name="pname" value="<?php echo $product['pname'];?>">
                <input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>">
	           <img src="Images/<?php echo $product['image'];?>" alt="image" class="img-fluid" width="450px"> 
		</div>

	   <div class="col-lg-6 col-md-6 col-sm-12 ">
            
		  <h2 ><?php echo $product['pname'];  ?></h2> 
		  <hr>
		  <h6>1 Day :<b style="color:brown">  &#8377;<?php echo $product['one_day'];?></b></h6>
		  <h6 >2 Day :<b style="color:brown">  &#8377;<?php echo $product['two_day'];?> </b></h6>
		  <h6>5 Day : <b style="color:brown" > &#8377;<?php echo $product['five_day'];?></b></h6>

		  <h6>Avalability : In stocks</h6>
		<h4>Deposite : <b style="color:brown" > &#8377;<?php echo $product['deposite'];?></b></h4>
            
                <!-- <div class="mt-3 ">
                    <input type="date" class="mb-2" name="date_from" value="From"  min="2021-02-01" max="2021-06-31"> 
                <br>
                    <input type="date" name="date_to" value="To" min="2021-02-01" max="2021-06-31">       
                </div> -->
                <div class="mt-3">
               <b>  <input type="radio" name="r1" value="one_day"> One Day 
                    <input type="radio" name="r1" value="two_day"> Two Day
                    <input type="radio" name="r1" value="five_day"> Five Day

                </b>
                <br>
                <h4 class="mt-3">Address:</h4> <textarea name="addr"  rows="4" class="form-control mt-3"></textarea> 

                </div>

        <?php
            if (isset($_SESSION['uname'])) {
                ?>
                <button type="submit" name="rent_btn" class="btn btn-primary btn-lg btn-flat mt-3">Take on Rent</button>
        <?php
            }
            else{
                ?>
            <a href="login.php"><input type='button' name='placeorder' value='Please Login ' class='btn btn-primary mt-3'></a>
        <?php
            }
        ?>
        
        
               


        <hr>
        
        <ul type="disc">
        <h4 class="mt-3">Specifications</h4>
        <hr>
            <table >
                <tr>
                    <th><li> Sensor </li> </th>
                    <td> <?php echo $product['sensor'];?></td>
                </tr>

                <tr>
                    <th><li> ISO  </li> </th>
                    <td> <?php echo $product['iso'];?></td> 
                </tr>
              
                <tr>
                    <th><li> Shutter Speed </li> </th>
                    <td> <?php echo $product['shutter'];?></td>
                </tr>
                <tr>
                    <th><li> HDMI Out </li> </th>
                    <td> <?php echo $product['sensor'];?></td>
                </tr>
                <tr>
                    <th><li> Connectivity  </li> </th>
                    <td> <?php echo $product['connectivity'];?></td>
                </tr>
                <tr>
                    <th><li> Lens Mount  </li> </th>
                    <td> <?php echo $product['lensmount'];?></td>
                </tr>
                <tr>
                   
                </tr>
            </table>
        </ul>
        
	</div>
</div>
    <?php
         
    ?>

    </form>
     <?php
         if(isset($_POST['rent_btn'])) 
         {
             $rid = $_POST['rid'];
             $uname = $_POST['uname'];
             $pname = $_POST['pname'];
              $r1 = $_POST['r1'];
             $addr = $_POST['addr'];

             $query = "SELECT * from rented_product where rid = '$rid' ";
             $query_run = mysqli_query($con,$query);

             if(mysqli_num_rows($query_run>0))
             {
                echo "<script>alert('Product already rented');</script>";
                echo "<script>location.href='rentalSection.php';</script>";
             }
             else
             {
                $query = "INSERT INTO rented_product values(' ','$rid','$uname','$pname','$r1','$addr')";

                $query_run = mysqli_query($con,$query);

                        if (query_run) {
                            echo "<script>alert('Product Rented Sucessfully')</script>";
                            echo "<script>location.href='rentalSection.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert('Error')</script>";
                            echo "<script>location.href='rentalSection.php';</script>";
                        }

             }

         }
    ?>
 </div>
    <?php include 'footer.php';?>   
   </body>
</body>
</html>