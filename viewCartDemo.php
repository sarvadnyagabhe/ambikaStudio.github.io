<?php
session_start();
 require 'dbconfig/config.php';
?>
<!DOCTYPE html>

<head>
	 <title>Ambika Studio</title>
	<!--External CSS!-->
	<link rel="stylesheet" type="text/css" href="External_css/styles.css">

	

</head>
<body>
	<div>
		<?php include 'header.php'; ?>   
	</div>
	<div class="container " align="center">

		<h2 class="mt-2">My Cart</h2>
		<img src="Images/cart.jpg" width="100px">
		<hr>

		<table class="table table-bordered table-striped mt-3">
			<thead>
				<tr>
					<td>SR No</td>
					<td>Name</td>
					<td>Price</td>
					<td>Quantity</td>
					<td>Total Price</td>
					<td>Update</td>
					<td>Delete</td>
				</tr>
			</thead>
			<tbody>
				<?php
				
					
				
				foreach($_SESSION as $products) 
				{
				if (is_array($products) || is_object($products)) 
				{
						$sno = 1;
						$pri = 0; //price
						$qua = 0; //quantity
						echo "<tr>";
							echo "<td>".($sno++)."</td>";
						echo "<form action='editCart.php' method='POST'>";
				
						foreach($products as $key => $value) 
						{
							if($key == 2) 
							{
								echo "<td><input type='text' name= 'name$key' value='".$value."'> </td>";
								$qua = $value;

							}else if($key == 1) {
								echo "<input type='hidden' name= 'name$key' value='".$value."'>"; 
								echo "<td>".$value."</td>";
								$pri = $value;
							}else if($key == 0) {
								echo "<input type='hidden' name= 'name$key' value='".$value."'>";
								echo "<td>".$value."</td>";

							}

						}
				
						$bill = ($qua * $pri);
						echo "<td>".($bill)."</td>";
						echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
						echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";

						echo "</form>";
						echo "</tr>";

					}
				}						
					?>
					
				</tbody>
			</table>
		 
 		
   


		 <form action="CartOrderForm.php" method="POST">
		 	<!-- <input type="hidden" name="pid" value="<?php echo $product['pid']; ?>">
		 	<input type="hidden" name="pname" value="<?php echo $product['pname']; ?>"> -->
			<?php
				if (isset($_SESSION['uname'])) {
					?>
				<input type='submit' name='placeorder' value='Continue to checkout' class='btn btn-primary mb-3'>

			<?php
				}
				else{
					?>

					<a href="login.php"><input type='button' name='placeorder' value='Please Login First' class='btn btn-primary mb-3'></a>
			<?php
				}
			?>
			
		</form>
		
		

   </div>
    <?php include 'footer.php';?>	
   </body>

    
    
    </html>