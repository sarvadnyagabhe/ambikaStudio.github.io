<?php
session_start();
require 'dbconfig/config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ambika Studio</title>
  <!--External CSS!-->
    <link href="External_css/styles.css" rel="stylesheet" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <?php include 'header.php';?>
</div>
  

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="ml-3">
              <h2>Ambika Studio</h2>
              <p class="lead mb-5">23,Gulshan Tower,Rajapeth,Amaravati.<br>
                Mobile : 9557864532
              </p>
              <h4>Follow us on:</h4>
            <i class="fa fa-facebook-square" style="font-size:36px;color:#033c73"></i>
              <i class="fa fa-instagram" style="font-size:36px;color:red"></i>
              <i class="fa fa-linkedin-square" style="font-size:36px;color:blue"></i>
              <i class="fa fa-twitter-square" style="font-size:36px"></i>
            

            </div>
          </div>
          
          <div class="col-7">
          
            <form action="contact.php" method="post">
            <div class="form-group ">
              <i class="fa fa-address-book-o" aria-hidden="true" ></i>
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name="name" class="form-control" />
            </div>
            <div class="form-group">
               <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" name="email" class="form-control" />
            </div>
            <div class="form-group">
              <i class="fa fa-address-book-o" aria-hidden="true" ></i>
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" name="subject" class="form-control" />
            </div>
            <div class="form-group">
              <i class="fa fa-comment"></i>
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" name="message" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary" >Send message</button>
            </div>
          </div>
        </form>
                    <?php

                    if(isset($_POST['submit']))
                    {



                      $name = $_POST['name'];
                      $email = $_POST['email'];
                      $subject = $_POST['subject'];
                      $message = $_POST['message'];

                       $query = "INSERT into contact_us values(' ','$name','$email','$subject','$message')";

                      $query_run = mysqli_query($con,$query);

                      if($query_run)
                      {
                        echo "<script> alert('Feedback Submitted.') </script>";
                      }
                      else{
                        echo "<script> alert('Error.') </script>";
                      }
                    }
                    ?>
        
        </div>
      </div>

         
 </div>
    <?php include 'footer.php';?> 
   </body>  
   
</body>   
</html>