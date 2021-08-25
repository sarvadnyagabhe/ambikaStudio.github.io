<?php
 //session_start();
 //if ($_SESSION['uname']) {
   //echo "Welcome ". $_SESSION['uname'];
 //}
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ambika Studio</title>
	      <link rel="stylesheet" href="CSS/bootstrap.min.css">
	      <link rel="stylesheet" type="text/css" href="External_css/styles.css">
        <style>
    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    </style>
       
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Ambika Studio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="camera.php">Camera</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="lens.php">Lens</a>
        
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="rentalSection.php">Rent Products</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="bookPhotoshoot.php">Book Photoshoot</a>
        
         
        </div>
      </li>
               <!--  <li class="nav-item ">
                    <a class="nav-link" href="about.php">About us </a>
                </li> -->
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact us </a>
                </li>
    </ul>
    

      <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">
              <?php 
                if (isset($_SESSION['uname'])) {
                     echo " Welcome ". $_SESSION['uname' ];
                  }
                

              ?>
              </a>
            </li>
         
            <li>
              <?php 
                if (isset($_SESSION['uname'])) 
                {
              ?>
                <a  class='nav-link' href ='viewCartDemo.php'> Cart</a>
                  <?php
                }
                  ?>
              </li>


            <li class="nav-item">
              <?php 
                if (isset($_SESSION['uname'])) 
                {
              ?>
                <a class='nav-link' href ='logout.php'> Logout</a>
                  <?php
                }
                  ?>
              </li>
        
                
              <li class="nav-item  ">
                 <?php 
                if (!isset($_SESSION['uname'])) 
                {
              ?>
                <a class="nav-link" href="login.php">Login</a>
                  <?php
                }
                  ?>  
              </li>

              <li class="nav-item  ">
                 <?php 
                if (!isset($_SESSION['uname'])) 
                {
              ?>
                <a class="nav-link" href="signup.php">Sign-up</a>
                  <?php
                }
                  ?>  
                </li>
                
                    
                
               

                 <!-- <li class="nav-item  ">
                    <a class="nav-link" href="Logout.php">Logout</a>
                </li> 
                       -->      


            </ul>
            </div>
</nav>
      
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>

