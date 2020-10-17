<?php 
   session_start();
   if( !isset($_SESSION['authen_id'] ) ){
      header('Location: ../../login.php');  
   }
?>