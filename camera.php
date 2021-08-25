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
    
    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/stylesheet.css">
  
</head>
<body>
    <div>
        <?php include 'header.php'; ?>   
    </div>

<h2 class="text-center">Buy Camera</h2>
    <div class="container-fluid">
    <div class="row">
    
    <?php

        
       

        $query = "SELECT `pid`, `image`, `pname` FROM `purchase_camera_product` order by pid ASC";

        $queryfire = mysqli_query($con, $query);

        $num = mysqli_num_rows($queryfire);

        if($num>0)
        {
            while($product = mysqli_fetch_array($queryfire))
            {
                
                ?>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                <form>
                    <div class="card ">
                        <img src="Purchase_Product/<?php 
                        echo $product['image']; ?>" alt="image" class="img-fluid"/>

                        <div class="card-body text-center ">
                            <h5><?php echo $product['pname']; ?></h5>

                             <input type="hidden" name="pid" value="<?php echo $product['pid']; ?>">
                             
                            <a href="viewPurchaseCameraDetails.php?pid=<?php echo $product['pid'];?>"><input type="button" class="btn btn-success" name="btn" value="View Details"></a>
                         
                        </div>
                    </div>
                </form>
            </div>


       
  
    <?php

            }
        }

    ?>

 
</div>
</div>

<div>
    <?php include 'footer.php';?>
    </div>
</body>
</html>