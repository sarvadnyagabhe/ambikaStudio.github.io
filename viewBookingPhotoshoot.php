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
    	<thead class="table-success">
    		<tr>  		
    			<th>bid</th>
                <th>Username:</th>
    			<th>Full Name:</th>
    			<th>Mobile No.:</th>
    			<th>Email Id:</th>
    			<th>Function Name:</th>
    			<th>Date From:</th>
                <th>Date To:</th>
                <th>Location:</th>
    		</tr>
    	</thead>

    	<tbody>
    		<?php
    		$res = mysqli_query($con,"select * from booking_photoshoot");
    		while ($row = mysqli_fetch_array($res)) {
    			?>
    			<tr>
    				<td><?php echo $row["bid"]; ?></td>
                    <td><?php echo $row["uname"]; ?></td>
    				<td><?php echo $row["fname"]; ?></td>
    				<td><?php echo $row["mobno"]; ?></td>
    				<td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["funname"]; ?></td>
                    <td><?php echo $row["date_from"]; ?></td>
    				<td><?php echo $row["date_to"]; ?></td>
    				<td><?php echo $row["location"]; ?></td>
                    <td><input type="Button" class="btn btn-success" name="Edit" value="Edit"></td>
    			</tr>
    			<?php
    		}
    		?>

    	</tbody>
    </table>
</div>
 </div>
    <?php include 'footer.php';?>   
   </div>
</body>
</html>