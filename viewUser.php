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
    	<thead class="table-secondary table-success">
    		<tr>  		
    			<th>uid</th>
    			<th>Full Name:</th>
    			<th>Mobile No.:</th>
    			<th>Email Id:</th>
    			<th>Username:</th>
    			<th>Password:</th>
    		</tr>
    	</thead>

    	<tbody>
    		<?php
    		$res = mysqli_query($con,"select * from user_db");
    		while ($row = mysqli_fetch_array($res)) {
    			?>
    			<tr>
    				<td><?php echo $row["uid"]; ?></td>
    				<td><?php echo $row["fname"]; ?></td>
    				<td><?php echo $row["mobno"]; ?></td>
    				<td><?php echo $row["email"]; ?></td>
    				<td><?php echo $row["uname"]; ?></td>
    				<td><?php echo $row["psw"]; ?></td>

    			</tr>
    			<?php
    		}
    		?>
    	</tbody>
    </table>
   
    </div>
     </div>
    <?php include 'footer.php';?>   
   </body>
</body>
</html>