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
<h2 class="text-left">Rental Product</h2>
    <div class="container-fluid">
    <div class="row">
    
    <?php

        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con,'ambikastudio');

        $query = "SELECT `rid`, `image`, `name`, `one_day`, `two_day`, `five_day` FROM `rental_product` order by rid ASC ";

        $queryfire = mysqli_query($con, $query);

        $num = mysqli_num_rows($queryfire);

        if($num>0)
        {
            while($product = mysqli_fetch_array($queryfire))
            {
                
                ?>

            <div class="col-lg-3 col-md-4 col-sm-12">
                <form>
                    <div class="card ">
                        <h5>Rental Product Id: <?php echo $product['rid'];  ?></h5>
                        <img src="Images/<?php echo $product['image'];?>" alt="image" class="img-fluid">

                        <div class="card-body text-center">
                            <h5><?php echo $product['name'];  ?></h5>

                            <h6> 1 Day : &#8377; <?php echo $product['one_day']; ?></h6>
                            <h6> 2 Day : &#8377; <?php echo $product['two_day']; ?></h6>
                            <h6> 3 Day : &#8377; <?php echo $product['five_day']; ?></h6>

                            
                            <a href="updateRentalProduct.php?rid=<?php echo $product['rid'];?>"> <input type="button" class="btn btn-success" name="update_btn" value="Update" data-toggle="tooltip" title="Update"></a>

                            <a href="deleteRentalProduct.php?rid=<?php echo $product['rid'];?>"><input type="button" class="btn btn-success" name="delete_btn" value="Delete" data-toggle="tooltip" title="Delete"></a>

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
 </div>
    <?php include 'footer.php';?>   
   </body>
</body>
</html>