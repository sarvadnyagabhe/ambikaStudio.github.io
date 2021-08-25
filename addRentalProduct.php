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
        <h2 class="text-center">Add Rental Product</h2>
   

  
       <form action="addRentalProduct.php" method="post">
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label><b>Image:</b></label>
               
                <input type="file" name="image" id="customFile" />
            </div>
             <div class="form-group">
                <label><b>One Day(Rent):</b></label>
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

            <button type="submit" name="add-btn" class="btn btn-success">Add Data</button>
            
        </form>

        <?php
            if(isset($_POST['add-btn']))
            {
 
                $image = $_POST['image'];
                $name = $_POST['name'];
                $one_day = $_POST['one_day'];
                $two_day = $_POST['two_day'];
                $five_day = $_POST['five_day'];
                

                $query= "select * From rental_product where image= '$image'";
                $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                         echo '<script>alert("Product already exist.")</script>'; 
                    }
                    
                    else
                    {
                        $query = "insert into rental_product values('', '$image','$name', '$one_day', '$two_day', '$five_day')" ;
                       

                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                             $_SESSION['name']=$name;
                            echo '<script>alert("Data Added Succefully.")</script>' ;

                        }
                        else
                        {
                            echo '<script>alert("Error.")</script>' ;
                        }
                    }
                }

            if(isset($_POST['update-btn']))
            {
 
                $image = $_POST['image'];
                $name = $_POST['name'];
                $one_day = $_POST['one_day'];
                $two_day = $_POST['two_day'];
                $five_day = $_POST['five_day'];

            

                
                       $query="UPDATE rental_product SET 'image'=['$image'],`name`=['$name'],`one_day`=['$one_day'],`two_day`=['$two_day'],`five_day`=['$five_day'] where 'image'='$image'"; 
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
            
        ?>
    </div>
</section>
</div>
 </div>
    <?php include 'footer.php';?>   
   </div>
</body>
</html>