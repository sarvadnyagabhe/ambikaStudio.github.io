 <?php
require 'dbconfig/config.php';

$pid = $_GET['pid'];

$deletequery = "delete from purchase_camera_product where pid='$pid'";

$query = mysqli_query($con,$deletequery);

header('location:viewCamera.php');
?>


