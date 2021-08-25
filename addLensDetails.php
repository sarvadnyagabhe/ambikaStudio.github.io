<?php 
    require 'dbconfig/config.php';
    
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
        <h2 class="text-center">Add Lens Details</h2>
     <form action="addLensDetails.php" method="post">
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="pname" autocomplete="off">
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
            <div class="form-group">
                <label><b>brand:</b></label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="form-group">
                <label><b>name:</b></label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label><b>model:</b></label>
                <input type="text" class="form-control" name="model">
            </div>
            <div class="form-group">
                <label><b>color:</b></label>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="form-group">
                <label><b>prime:</b></label>
                <input type="text" class="form-control" name="prime">
            </div>
            <div class="form-group">
                <label><b>lenstype:</b></label>
                <input type="text" class="form-control" name="lenstype">
            </div>
            <button type="submit" name="add-btn" class="btn btn-success">Add Data</button>
            
        </form>

        <?php
            if(isset($_POST['add-btn']))
            {
 
                $pname = $_POST['pname'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $brand = $_POST['brand'];
                $name = $_POST['name'];
                $model = $_POST['model'];
                $color = $_POST['color'];
                $prime = $_POST['prime'];
                $lenstype = $_POST['lenstype'];
                

                $query= "select * From purchased_camera_detail where image= '$image'";
                $query_run = mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script>alert("Product already exist.")</script>'; 
                }
                    
                else
                {
                    $query = "INSERT INTO purchased_lens_detail VALUES('','$pname','$image','$price','$discount','$brand','$name','$model','$color',
                        '$prime','$lenstype')" ;
                        
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script>alert("Data Added Succefully.")</script>' ;
                             echo '<script>location.href="addLensDetails.php"</script>';
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