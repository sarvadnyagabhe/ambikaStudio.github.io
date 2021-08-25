    
<?php
    session_start();
  
    
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $product = array($pname,$price,$quantity);


    $_SESSION[$pname] = $product;

    header('location:viewCartDemo.php'); 
     //print_r($product);
?>
 




























<!-- <?php
//session_start();

// if ($_SERVER["REQUEST_METHOD"]=="POST") 
// {
//     if (isset($_POST['addtocart'])) 
//     {
//         if (isset($_SESSION['cart'])) 
//         {
               
//         }
//         else
//         {
//             $_SESSION['cart'][0] = array('pname'=>$_POST['pname'],'price'=>$_POST['price'],'quantity'=>1);
//             print_r($_SESSION['cart']);

       //}
    //}    
//}
?> -->


















