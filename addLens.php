<?php 
    require 'dbconfig/config.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ambika Studio</title>
</head>
<body>
    <div>
    
    <?php include 'sidebarAdmin.php' ?>
    </div>
<div class="content-wrapper">
    <section>
    <div class="signupclass">
        <h2 class="text-center">Add Lens</h2>
   

  
       <form action="addLens.php" method="post">
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Image:</b></label>
               
                <input type="file" name="image" id="customFile" />
          

            <button type="submit" name="add-btn" class="btn btn-success mt-3">Add Product</button>
            
        </form>

        <?php
            if(isset($_POST['add-btn']))
            {
 
                $name = $_POST['name'];
                $image = $_POST['image'];
                
                

                $query= "select * From purchase_lens_product where image= '$image'";
                $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                         echo '<script>alert("Product already exist.")</script>'; 
                    }
                    
                    else
                    {
                        $query = "insert into purchase_lens_product values(' ','$image','$name')" ;
                        $query_run = mysqli_query($con,$query);
                        

                        if($query_run)
                        {
                            echo '<script>alert("Data Added Succefully.")</script>' ;
                            echo '<script>location.href="addLens.php"</script>';
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