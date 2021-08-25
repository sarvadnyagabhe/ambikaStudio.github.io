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
    <link rel="stylesheet" type="text/css" href="External_css/stylesheet.css">

    <!--JS!-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
</head>
<body>
<div>
    <?php include 'header.php';?>     
</div>
<h2 class="text-center">Buy Lens</h2>
    <div class="container-fluid">
    <div class="row">
    
    <?php

        
       

        $query = "SELECT `lid`, `image`, `name` FROM `purchase_lens_product` order by lid ASC";

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
                        echo $product['image'];   ?>" alt="image" class="img-fluid">

                        <div class="card-body text-center ">
                            <h5><?php echo $product['name'];  ?></h5>

                           

                            <a href="viewPurchaseLensDetails.php?lid=<?php echo $product['lid'];?>"><input type="button" class="btn btn-success" name="btn" value="View Details"></a>
                         
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
    <?php include 'footer.php';?>   
   </body>
</body>
</html>