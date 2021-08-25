
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

        		$pid = $_GET['pid'];	

        		$showquery = "select * from purchase_camera_product where pid = $pid";
        		
        		$showdata = mysqli_query($con,$showquery);

        		$arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['update-btn']))
            {
 				$pidupdate = $_GET['pid'];
                $image = $_POST['image'];
               
                $pname = $_POST['pname'];

               $query = "update purchase_camera_product set pid=$pid,image='$image',pname='$pname' where pid=$pidupdate ";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {	
                        	
                            echo '<script>alert("Data Updated Succefully.")</script>';
                            echo '<script>location.href="viewCamera.php"</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error while Updating.")</script>' ;
                        }
            }
              

               
        ?>
         <div class="form-group">
                <label><b>Rentalproduct ID:</b></label>
                <input type="text" class="form-control" name="pid" autocomplete="off" value="<?php echo $arrdata['pid']; ?>">
            </div>
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="pname" autocomplete="off" value="<?php echo $arrdata['pname']; ?>">
            </div>
            <div class="form-group">
                <label><b>Image:</b></label>
                <img src="Purchase_Product/<?php echo $arrdata['image'];?>" width="150px" alt="image" class="img-fluid">
                <input type="file" name="image" id="customFile"  />
               <!-- <input type="hidden" name="oimage" value="<?php echo $arrdata['image'];?>">  -->
               
            </div>
             

            <button type="submit" name="update-btn" class="btn btn-success">Update Data</button>
            
        </form>

        
    </div>
</section>
</div>
</body>
</html>