
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
        <h2 class="text-center">Update Lens Product</h2>
   

  
       <form action="" method="post">
       	<?php

        		$lid = $_GET['lid'];	

        		$showquery = "select * from purchase_lens_product where lid = $lid";
        		
        		$showdata = mysqli_query($con,$showquery);

        		$arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['update-btn']))
            {
 				$lidupdate = $_GET['lid'];
                $image = $_POST['image'];
               
                $name = $_POST['name'];

               $query = "update purchase_lens_product set lid=$lid,image='$image',name='$name' where lid=$lidupdate ";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {	
                        	
                            echo '<script>alert("Data Updated Succefully.")</script>';
                            echo '<script>location.href="viewLens.php"</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error while Updating.")</script>' ;
                        }
            }
              

               
        ?>
         <div class="form-group">
                <label><b>product ID:</b></label>
                <input type="text" class="form-control" name="lid" autocomplete="off" value="<?php echo $arrdata['lid']; ?>">
            </div>
            <div class="form-group">
                <label><b>Name:</b></label>
                <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $arrdata['name']; ?>">
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