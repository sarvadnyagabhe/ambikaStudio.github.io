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
    <body>
        <div>
         <?php include 'header.php';?>		
     
     <?php


     $pid = $_GET['pid'];   
     $showquery = "select * from purchased_camera_detail where pid = '$pid' ";

     $showdata = mysqli_query($con,$showquery);

     $product = mysqli_fetch_array($showdata);
     ?>

     <form action="addToCart.php" method="POST">
        <div class="row viewDiv">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <input type="hidden" name="pid" value=" <?php echo $product['pid']; ?>"/>
                
                <input type="hidden" name="image" value="<?php echo $product['image'];?>" />

                <img src="purchase_product/<?php echo $product['image']; ?>" alt="image" class="img-fluid" name="image" width="450px"/>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <input type="hidden" name="pname" value="<?php echo $product['pname']; ?>"/>
                <h2 ><?php echo $product['pname'];  ?></h2> 

                <hr>

                <h6>Avalability : In stocks</h6>

                <input type="hidden" name="price" value="<?php echo $product['price']; ?>"/>

                <h3>Price :<b style="color:brown"><span>&#8377;</span><?php echo $product['price']; ?></b><span style="font-size:20px">(<?php echo $product['discount']; ?>)%</span></h3>


                <h4>Quantity :<input type="text" name="quantity"></h4>      

                <input type="submit" name="addtocart" value="Add To Cart" class="btn btn-primary btn-lg btn-flat mt-3">

             
                
                


                <hr>

                <ul type="disc">
                    <h4 class="mt-3">Specifications</h4>
                    <hr>
                    <table >
                        <tr>
                            <th><li> Sensor  </li> </th>
                            <td><?php echo $product['sensor'];?></td>
                        </tr>

                        <tr>
                            <th><li> ISO  </li> </th>
                            <td> <?php echo $product['iso'];?></td> 
                        </tr>

                        <tr>
                            <th><li> Shutter Speed   </li> </th>
                            <td> <?php echo $product['shutter'];?></td>
                        </tr> 
                        <tr>
                            <th><li> Continuous Shooting </li> </th>
                            <td> <?php echo $product['cntshooting'];?></td>
                        </tr>
                        <tr>
                            <th><li> Connectivity </li> </th>
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
    </form> 

       



   
</div>
 </div>
    <?php include 'footer.php';?>   
   </body>
            </body>
            </html>