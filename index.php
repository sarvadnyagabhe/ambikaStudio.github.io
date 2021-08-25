  
  
 <!--   <?php 
  session_start();  
?>  --> 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambika Studio</title>
  
    <!--bootstrap CSS!-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">

    <!-- <script src="js/bootstrap.min.js"></script> -->
</head>

<body>
   
        <div >
          <?php include 'header.php' ?>
        </div>
        <!-- <nav class=" main-header navbar navbar-expand-lg navbar-dark ">
            <h6><?php 
if ($_SESSION['uname']) {
  echo "Welcome ". $_SESSION['uname' ]; 
echo "<a href ='logout.php'> Logout</a>";

}

?>
      


  </h6>    
        </nav>
         -->
            <div >
                <img src="Images/cover.jpg" width="100%" height="80%" alt="coverimg">
            </div>
        </div>  
<hr>
<h2 class="text-center" style="font-family: 'MonteCarlo', cursive;font-weight: bold; font-size: 48px">New Additions </h2>
 <div class="container-fluid">
    <div class="row">

    <?php

        $con = mysqli_connect('localhost','root');
        mysqli_select_db($con,'ambikastudio');

        $query = "SELECT  `name`, `image`, `price`, `discount` FROM `home_images` order by hid ASC ";

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
                        <h5 class="card-title text-center"><?php 
                        echo $product['name'];  ?> </h5>
                        
                        <div class="card-body">
                            <img src="Images/<?php 
                        echo $product['image'];   ?>" alt="image" class="img-fluid">

                        <h6 style="color: brown" class="text-center"> &#8377; <?php echo $product['price']; ?>
                        <span>(<?php echo $product['discount'] ?>% off) </span> </h6>

                      
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

    <hr>


<section>
    
    <div>
        <h2 class="text-center" style="font-family: 'MonteCarlo', cursive;font-weight: bold; font-size: 48px">Our Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <img src="images/rental.jpg" alt="card image">
                    <div class="card-body">
                        <h4 class="card-title text-center">Take Products On Rent</h4>
                    </div>
                    
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <img src="images/photshoot.jpg" alt="card image" class="book_img">
                    <div class="card-body">
                        <h4 class="card-title text-center">Book Date For Photoshoot</h4>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>








 <!--main content products   

    <div class="container">
        <div class="row">
               <div class="col-md-12">
                   <center>
                  <h3>Products</h3> 
                   </center>
                </div>
           </div>


        <div class="row">
            <div class="col-md-4">
                <h4>Nikon D3500</h4>
                <img src="Images/product1.jpg" width="100%" id="image">
                <p class="list-price">List Price: 30000</p>
                 <p class="list-price">Discount Price:28000</p>
                <button type="button" class="btn btn-success">Details</button>
            </div>
             <div class="col-md-4">
                 <h4>Nikon D5600</h4>
                <img src="Images/product2.jpg" width="100%" id="image">
                <p class="list-price">List Price: 35000</p>
                 <p class="list-price">Discount Price:32000</p>
                <button type="button" class="btn btn-success">Details</button>
            </div>
             <div class="col-md-4">
                 <h4>Nikon D780</h4>
                <img src="Images/product3.jpg" width="100%" id="image">
                 <p class="list-price">List Price: 35000</p>
                  <p class="list-price">Discount Price:33000</p>
                <button type="button" class="btn btn-success">Details</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h4>Canon EOS 5D</h4>
                <img src="Images/product4.jpg" width="100%" id="image">
                <p class="list-price">List Price: 60000</p>
                 <p class="list-price">Discount Price:57000</p>
                <button type="button" class="btn btn-success">Details</button>
            </div>
            <div class="col-md-4">
                <h4>Canon EOS 1200D</h4>
                <img src="Images/product5.jpg" width="100%" id="image">
                 <p class="list-price">List Price: 24000</p>
                  <p class="list-price">Discount Price:21500</p>
                <button type="button" class="btn btn-success">Details</button>
            </div>
            <div class="col-md-4">
                <h4>Canon EOS 1300D</h4>
                <img src="Images/product6.jpg" width="100%" id="image">
                 <p class="list-price">List Price: 31000</p>
                  <p class="list-price">Discount Price:29000</p>
                <button type="button" class="btn btn-success">Details</button>
            </div>
        </div>
        </div>
    </div> !-->

 </div>
    <?php include 'footer.php';?>   
   </div>
</body>
</html>