
 <?php
	session_start();
	
	
    $pname = $_POST['name0'];
    $price = $_POST['name1'];
    $quantity = $_POST['name2'];
    $event = $_POST['event'];

    $product = array($pname,$price,$quantity);

    if($event == "Update")
    {
    	 $_SESSION[$pname] = $product;
    }
    else if ($event == "Delete") {
    	unset($_SESSION[$pname]);
    }
   //exit();
    header('location:viewCartDemo.php');
?>	