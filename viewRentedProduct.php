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
	<?php include 'sidebarAdmin.php';?>
	</div>
<div class="content-wrapper">
<table class="table table-bordered table-striped">
  <thead class="table-primary">

    <tr>
      <th scope="col">Rented Id</th>
      <th scope="col">Rental Product Id</th> 
      <th scope="col">Username</th>
      <th scope="col">Product Name</th>
      <th scope="col">Rental Days</th>
      <th scope="col">Address</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php 

        $query = mysqli_query($con,"SELECT * FROM rented_product ");
        while ($row = mysqli_fetch_array($query)) {
        
        ?>
        <tr>
        
              
            <td><?php echo $row['rent_id']; ?></td>
            <td><?php echo $row['rid']; ?></td>
            <td><?php echo $row['uname']; ?></td>
            <td><?php echo $row['pname']; ?></td>
            <td><?php echo $row['days']; ?></td>
            <td><?php echo $row['addr']; ?></td>
            

        </tr>

    <?php
        }
        
     ?>
    </tr>
  </tbody>
</table>

</div>
 </div>
    <?php include 'footer.php';?> 
   </body>
</body>
</html>
