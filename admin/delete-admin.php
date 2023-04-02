<?php 
  //Include constants.php
  include('../config/constants.php');

  //1.get the id of admin to be deleted
   echo $id=$_GET['id'];

  //2create sql query to delete admin
  $sql="DELETE FROM tbl_admin WHERE id=$id";

  //execute the query
  $res=mysqli_query($conn,$sql);

  //check whether the query executed successfully or not
   if($res==true)
   {
    //Query Executed Successfully and Admin Deleted
    //echo "Admin Deleted";
    //create session variable to display message
    $_SESSION['delete']="<div class='success'>Admin Deleted Successfully.</div>";
    //Redirect to Manage Admin Page
    header('location:'.SITEURL.'admin/manage-admin.php');
   }
   else
   {
    //Failed to Delete Admin
    //echo "Failed to Delete Admin";
    $_SESSION['delete']="<div class='error'>Failed to Delete Admin.Try Again Later.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');

   }

  //3.Redirect to manager admin page with message(success/error)





?>