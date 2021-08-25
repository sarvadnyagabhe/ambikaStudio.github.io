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
        <h2 class="text-center">Add Rental Product Details</h2>
   

  
       <form action="addRentalProductDetails.php" method="post">
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="pname" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Image:</b></label>
               
                <input type="file" name="image" id="customFile" />
            </div>
             <div class="form-group">
                <label><b>One Day:</b></label>
                <input type="text" class="form-control" name="one_day">
            </div>
             <div class="form-group">
                <label><b>Two Day:</b></label>
                <input type="text" class="form-control" name="two_day">
            </div>
            <div class="form-group">
                <label><b>Five Day:</b></label>
                <input type="text" class="form-control" name="five_day">
            </div>
             <div class="form-group">
                <label><b>Deposite:</b></label>
                <input type="text" class="form-control" name="deposite">
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
                $one_day = $_POST['one_day'];
                $two_day = $_POST['two_day'];
                $five_day = $_POST['five_day'];
                $deposite = $_POST['deposite'];
                $sensor = $_POST['sensor'];
                $iso = $_POST['iso'];
                $shutter = $_POST['shutter'];
                $connectivity = $_POST['connectivity'];
                $lensmount = $_POST['lensmount'];
                

                $query= "select * From product_detail where image= '$image'";
                $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                         echo '<script>alert("Product already exist.")</script>'; 
                    }
                    
                    else
                    {
                     $query = "INSERT INTO product_detail VALUES('', '$image','$pname', '$one_day', '$two_day', '$five_day','$deposite','$sensor','$iso','$shutter','$connectivity','$lensmount')" ;
                        
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                            echo '<script>alert("Data Added Succefully.")</script>' ;
                             echo '<script>location.href="addRentalProductDetails.php"</script>';
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