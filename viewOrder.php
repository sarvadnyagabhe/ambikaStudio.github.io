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
       <th scope="col">Order Id</th>
      <th scope="col">Product name</th>
       <th scope="col">User Name</th>
     
      <th scope="col">Full Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Email Id</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">ZIP Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php 

        $query = mysqli_query($con,"SELECT * FROM ordered_product ");
        while ($row = mysqli_fetch_array($query)) {
        
        ?>
        <tr>
         <!-- <?php   
         foreach($_SESSION as $products) 
                {

            foreach($products as $key => $value) 
                        {
                            if($key == 0) 
                            {
                                echo "<input type='hidden' name= 'name$key' value='".$value."'>";
                                echo "<td>".$value."</td>";

                            }
                        }
                    }
            ?> -->
            <td><?php echo $row['orderid']; ?></td>
            <td><?php echo $row['pname']; ?></td>
            <td><?php echo $row['uname']; ?></td>
            
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mobno']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['zip']; ?></td>

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
