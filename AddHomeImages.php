<?php 
    require 'dbconfig/config.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Ambika Studio</title>
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">
</head>
<body>
    <div>
    
    <?php include 'sidebarAdmin.php' ?>
    </div>
<div class="content-wrapper">
    <section>
    <div class="signupclass">
        <h2 class="text-center">Add Home Page Product</h2>
   

  
       <form action="addHomeImages.php" method="post">
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Image:</b></label>
               
                <input type="file" name="image" id="customFile" />
            </div>
             <div class="form-group">
                <label><b>Price:</b></label>
                <input type="text" class="form-control" name="price">
            </div>
             <div class="form-group">
                <label><b>Discount:</b></label>
                <input type="text" class="form-control" name="discount">
            </div>

            <button type="submit" name="add-btn" class="btn btn-success ">Add Data</button>
            
        </form>

        <?php
            if(isset($_POST['add-btn']))
            {
 
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                
                

                $query= "select * From rental_product where image= '$image'";
                $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                         echo '<script>alert("Product already exist.")</script>'; 
                    }
                    
                    else
                    {
                        $query = "insert into home_images values('','$name','$image', '$price', '$discount')" ;
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script>alert("Data Added Succefully.")</script>' ;
                        }
                        else
                        {
                            echo '<script>alert("Error.")</script>' ;
                        }
                    }
                }

           ?>
    </div>
</section>
</div>
 </div>
    <?php include 'footer.php';?>   
   </div>
</body>
</html>