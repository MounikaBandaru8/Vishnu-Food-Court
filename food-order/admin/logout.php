<?php
//include constants.php for siteurl
include('../config/constants.php');
//1.Destroy the session 
   session_destroy();//unset $_SESSION['user']

//2.Redirect to login Page
header('location:'.SITEURL.'admin/login.php');


?>