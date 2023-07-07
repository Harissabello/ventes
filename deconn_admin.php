<?php
  
session_start();
  
session_destroy();
  
header('location:connex_admin.php');
  
?>