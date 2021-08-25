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
        <h2 class="text-center">Add Camera Details</h2>
   

  
       <form action="addCameraDetails.php" method="post">
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
                <label><b>Sensor:</b></label>
                <input type="text" class="form-control" name="sensor">
            </div>
            <div class="form-group">
                <label><b>ISO:</b></label>
                <input type="text" class="form-control" name="iso">
            </div>
            <div class="form-group">
                <label><b>Shutter Speed:</b></label>
                <input type="text" class="form-control" name="shutter">
            </div>
            <div class="form-group">
                <label><b>Continuous Shooting:</b></label>
                <input type="text" class="form-control" name="cntshooting">
            </div>
            <div class="form-group">
                <label><b> Connectivity:</b></label>
                <input type="text" class="form-control" name="connectivity">
            </div>
            <div class="form-group">
                <label><b> Lens Mount:</b></label>
                <input type="text" class="form-control" name="lensmount">
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
                
                $sensor = $_POST['sensor'];
                $iso = $_POST['iso'];
                $shutter = $_POST['shutter'];
                $cntshooting = $_POST['cntshooting'];
                $connectivity = $_POST['connectivity'];
                $lensmount = $_POST['lensmount'];
                

                $query= "select * From purchased_camera_detail where image= '$image'";
                $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                         echo '<script>alert("Product already exist.")</script>'; 
                    }
                    
                    else
                    {
                     $query = "INSERT INTO purchased_camera_detail VALUES('','$image',
                        '$pname','$price','$discount','$sensor','$iso','$shutter','$cntshooting',
                        '$connectivity','$lensmount')" ;
                        
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script>alert("Data Added Succefully.")</script>' ;
                             echo '<script>location.href="addCameraDetails.php"</script>';
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