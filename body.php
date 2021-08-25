 <div >
                <img src="Images/cover.jpg" width="100%" height="80%" alt="coverimg">
            </div>
        </div>  
<hr>
<h2 class="text-center">New Additions</h2>
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
        <h2 class="text-center">Our Services</h2>
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
