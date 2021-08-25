
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
        <h2 class="text-center">Update Rental Product</h2>
   

  
       <form action="" method="post">
       	<?php

        		$rid = $_GET['rid'];	

        		$showquery = "select * from rental_product where rid = $rid";
        		
        		$showdata = mysqli_query($con,$showquery);

        		$arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['update-btn']))
            {
 				$ridupdate = $_GET['rid'];
                $image = $_POST['image'];
               
                $name = $_POST['name'];
                $one_day = $_POST['one_day'];
                $two_day = $_POST['two_day'];
                $five_day = $_POST['five_day'];
      
                        $query = "update rental_product set rid=$rid,image='$image',name='$name',one_day='$one_day',two_day='$two_day', five_day='$five_day' where rid=$ridupdate ";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {	
                        	
                            echo '<script>alert("Data Updated Succefully.")</script>';
                            echo '<script>location.href="viewRentalProduct.php"</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error while Updating.")</script>' ;
                        }
            }
              

               
        ?>
         <div class="form-group">
                <label><b>Rentalproduct ID:</b></label>
                <input type="text" class="form-control" name="rid" autocomplete="off" value="<?php echo $arrdata['rid']; ?>">
            </div>
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $arrdata['name']; ?>">
            </div>
            <div class="form-group">
                <label><b>Image:</b></label>
                <img src="Images/<?php echo $arrdata['image'];?>" width="150px" alt="image" class="img-fluid">
                <input type="file" name="image" id="customFile"  />
               <!-- <input type="hidden" name="oimage" value="<?php echo $arrdata['image'];?>">  -->
               
            </div>
             <div class="form-group">
                <label><b>One Day(Rent):</b></label>
                <input type="text" class="form-control" name="one_day" value="<?php echo $arrdata['one_day']; ?>">
            </div>
             <div class="form-group">
                <label><b>Two Day:</b></label>
                <input type="text" class="form-control" name="two_day" value="<?php echo $arrdata['two_day']; ?>">
            </div>
             <div class="form-group">
                <label><b>Five Day:</b></label>
                <input type="text" class="form-control" name="five_day" value="<?php echo $arrdata['five_day']; ?>">
            </div>

            <button type="submit" name="update-btn" class="btn btn-success">Update Data</button>
            
        </form>

        
    </div>
</section>
</div>
</body>
</html>