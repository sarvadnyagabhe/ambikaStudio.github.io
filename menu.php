     
    <?php
    session_start();

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

         <title>Ambika Studio</title>
         <link rel="stylesheet" href="CSS/bootstrap.min.css">
       
        <!--External CSS!-->
        <link href="External_css/styles.css" rel="stylesheet" />

        <!--JS!-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class=" main-header navbar navbar-expand-lg navbar-dark bg-dark  ">
            <a class="navbar-brand" href="index.php">
                 Ambika Studio
             </a> 

             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Home </a>
                </li> 



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="camera.php">Camera</a>
                       <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="lens.php">Lens</a>
                           
                    </div>
                
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="rentalSection.php">Rent Products</a>
                        <a class="dropdown-item" href="bookPhotoshoot.php">Book Photoshoot</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About us </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Contact us </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item  ">
                    <a class="nav-link" href="viewCartDemo.php">Cart</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign-up</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="Logout.php">Logout</a>
                </li>
                            


            </ul>
    </div>
    </nav>
       
        
    </body>
    </html>            




