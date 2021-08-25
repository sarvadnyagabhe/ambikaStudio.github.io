<?php
require 'dbconfig/config.php';

 session_start();

 session_unset();

 session_destroy();

// header("location:index.php");
  echo '<script>location.href="login.php"</script>';
  
?>