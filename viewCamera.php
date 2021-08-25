<?php
    require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ambika Studio</title>
  

    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/stylesheet.css">
    

    

</head>
<body>
<div>
    <?php include 'sidebarAdmin.php';?>     
</div>
<div class="content-wrapper">
<h2 class="text-left">Camera Product</h2>
    <div class="container-fluid">
    <div class="row">
    
    <?php

        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con,'ambikastudio');

        $query = "SELECT `pid`, `image`, `pname` FROM `purchase_camera_product`";

        $queryfire = mysqli_query($con, $query);

        $num = mysqli_num_rows($queryfire);

        if($num>0)
        {
            while($product = mysqli_fetch_array($queryfire))
            {
                
                ?>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <form>
                    <div class="card ">
                        <h5>Product Id: <?php echo $product['pid'];  ?></h5>
                        <img src="Purchase_Product/<?php echo $product['image'];?>" alt="image" class="img-fluid">

                        <div class="card-body text-center">
                            <h5><?php echo $product['pname'];  ?></h5>

                            <a href="updateCameraProduct.php?pid=<?php echo $product['pid'];?>"> <input type="button" class="btn btn-success" name="update_btn" value="Update" data-toggle="tooltip" title="Update"></a>

                            <a href="deleteCameraProduct.php?pid=<?php echo $product['pid'];?>"><input type="button" class="btn btn-success" name="delete_btn" value="Delete" data-toggle="tooltip" title="Delete"></a>

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
</div>
<footer class="bg-dark text-center text-white">@ambikastudio</footer>
</body>
</html>