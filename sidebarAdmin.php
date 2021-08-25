<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ambika Studio</title>
  
    <!--bootstrap CSS!-->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  
       <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


  <link rel="stylesheet" type="text/css" href="plugins/datatables-scroller/css/scroller.bootstrap4.min.css">




    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="CSS/styles.css"> -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!--External CSS!-->
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
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>
  </nav>

   <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
  
    <a href="adminSide.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" >Admin Side</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    

       <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> 
 -->
      <!-- Sidebar Menu -->
      <nav class=" mt-2 ">

        <ul class="nav nav-navbar nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <li class="nav-item menu-open">

            <a href="adminSide.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            <li class="nav-item">
            <a href="addRentalProduct.php" class="nav-link">
              <p>
               Add Rental Poduct  
              </p>
            </a>
          </li>
                     <li class="nav-item">
            <a href="addRentalProductDetails.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Add Rental Product Details
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="addHomeImages.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Add Home Page Product
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="addCamera.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Add Camera
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="addCameraDetails.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Add Camera Details
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="addLens.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Add Lens
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="addLensDetails.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Add Lens Details
              </p>
            </a>
          </li>


          
           <li class="nav-item">
            <a href="viewRentalProduct.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Update Rental Product
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewCamera.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Update Camera Product
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewLens.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               Update Lens Product
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="viewOrder.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               View Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="viewBookingPhotoshoot.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               View Photo Shoot Booking
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="viewRentedProduct.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               View Rented Product
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewUser.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <p>
               View User
              </p>
            </a>
          </li>
            
         
      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    
    <!-- /.sidebar -->

</div>
</div>

  </aside>
</div>
 <!--JS!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
