<?php 
    require 'dbconfig/config.php';
   // session_start();
?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ambika Studio</title>
  
    <!--bootstrap CSS!-->
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  
    <!--External CSS!-->
    <link rel="stylesheet" type="text/css" href="External_css/styles.css">
   

</head>
<body>
<div>
        <?php include 'header.php'; ?>    
    </div>

    <table class="table table-bordered ">
    	<form action="viewCart.php" action="POST">
    		<?php
            $showquery = "select * from add_to_cart";
    		$res = mysqli_query($con,$showquery);
    		while ($row = mysqli_fetch_array($res)) {
    			?>
    			<tr>
                    
    				<td><?php echo $row['proid']; ?></td>
                    <td><img src="Purchase_Product/<?php echo $row['image']; ?>" alt="image"   width="150px"/></td>
    				<td><?php echo $row['pname']; ?></td>
    				<td><b style="color:brown">  &#8377;<?php echo $row['price']; ?></b></td>
    				 <td><button type="submit" class="btn btn-success" name="delete" >Delete</button></a></td>
                    
    			</tr>
                
                <?php
    		}
    		?>

  
    </table>
            <button type="Submit" name="cart-submit" class="btn btn-success ml-3 mb-3">Make Order</button>
   
</div>
</form>
 <?php
            //Submit order code of php
            //delete code of produt from cart
            if (isset($_POST['delete'])) 
            {
               
            
                $pro_id = $_POST['pro_id'];
                    
                    $query = "SELECT * FROM add_to_cart where proid = $pid";
                     $query_run = mysqli_query($con,$query);

                     if(mysqli_num_rows($query_run>0))
                     {
                        $query = "delete from add_to_cart where pro_id = $pro_id";
                         $query_run = mysqli_query($con,$query);

                        echo "<script>location.href='index.php';</script>";
                     }

                     else{
                        
                       echo '<script> alert("Error"); </script>';
                     }
                  }  

               //  $deletequery = "delete from add_to_cart where pro_id = $pro_id";

               //  $query = mysqli_query($con,$deletequery);

               // echo "<script>location.href='viewCart.php';</script>";
            

            ?>
       
</body>
</html>