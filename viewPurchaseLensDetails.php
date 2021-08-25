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
  
    <!--bootstrap CSS!-->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="CSS/styles.css"> -->

    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">

    <!--JS!-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
</head>
<body>
<div>
	<?php include 'header.php';?>		
</div>
	
        <form action="addToCart.php" method="post">
            <div class="row viewDiv ">
        <?php

        
                $lid = $_GET['lid'];   

                $showquery = "select * from purchased_lens_detail where lid = $lid";
                
                $showdata = mysqli_query($con,$showquery);

                $product = mysqli_fetch_array($showdata);

    
                
                ?>

		<div class="col-lg-5 col-md-5 col-sm-12">
             <input type="hidden" name="lid" value="<?php echo $product['lid'];?>">

             <input type="hidden" name="image" value="<?php echo $product['image'];?>"/>
	           <img src="purchase_product/<?php echo $product['image'];?>" alt="image" class="img-fluid" width="450px"> 
		</div>

	   <div class="col-lg-6 col-md-6 col-sm-12 ">
        <input type="hidden" name="pname" value="<?php echo $product['pname'];?>">
		  <h2 ><?php echo $product['pname'];  ?></h2> 
		  <hr>
		  
		  <h6>Avalability : In stocks</h6>

		  <input type="hidden" name="price" value="<?php echo $product['price'];?>">


             <h3>Price :<b style="color:brown"><span>&#8377;</span><?php echo $product['price'];?></b><span style="font-size:20px">(<?php echo $product['discount'];?>)%</span> </h3>

             <h4>Quantity : <input type="text" name="quantity"></h4> 

           <button type="submit" name="addcart" class="btn btn-primary btn-lg btn-flat mt-3">Add To Cart </button>
                  
     
               


        <hr>
        
        <ul type="disc">
        <h4 class="mt-3">Specifications</h4>
        <hr>
            <table >
                <tr>
                    <th><li> Brand  </li> </th>
                    <td> <?php echo $product['brand'];?></td>
                </tr>

                <tr>
                    <th><li> Name  </li> </th>
                    <td> <?php echo $product['pname'];?></td> 
                </tr>
                <tr>
                    <th><li> Price </li> </th>
                    <td> <?php echo $product['price'];?></td>
                </tr>

              
                <tr>
                    <th><li>Model  </li> </th>
                    <td> <?php echo $product['model'];?></td>
                </tr>
                <tr>
                    <th><li>Color </li> </th>
                    <td> <?php echo $product['color'];?></td>
                </tr>
                <tr>
                    <th><li>Prime </li> </th>
                    <td> <?php echo $product['prime'];?></td>
                </tr>
                <tr>
                    <th><li>Lens Type </li> </th>
                    <td> <?php echo $product['lenstype'];?></td>
                </tr>
                <tr>
                   
                </tr>
            </table>
        </ul>
        
	</div>
    <?php
         
    ?>
    </form>
     
</div>
 </div>
    <?php include 'footer.php';?>   
   </div>
</body>
</html>