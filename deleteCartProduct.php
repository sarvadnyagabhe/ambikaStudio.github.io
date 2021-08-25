 <?php
require 'dbconfig/config.php';

$proid = $_GET['proid'];

$deletequery = "DELETE from add_to_cart where proid='$proid'";

$query = mysqli_query($con,$deletequery);

header('location:index.php');
?>