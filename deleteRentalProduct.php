 <?php
require 'dbconfig/config.php';

$rid = $_GET['rid'];

$deletequery = "delete from rental_product where rid='$rid'";

$query = mysqli_query($con,$deletequery);

header('location:viewRentalProduct.php');
?>


