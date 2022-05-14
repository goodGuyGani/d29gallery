<?php
session_start();
$user_id = $_GET['id'];
include("includes/connection.php");
  $sql = "DELETE FROM rating WHERE rating_id = '$user_id'";
  if(mysqli_query($conn,$sql)){
    include("functions.php");
    $_SESSION['status'] = "Your Data is Deleted";
    $_SESSION['status_code'] = "success";
    redirect_to("admin/admin_rating1.php");
  }
  else{
    $_SESSION['status'] = "Your Data is NOT DELETED";       
    $_SESSION['status_code'] = "error";
    redirect_to("admin/admin_rating1.php");
  }
  ?>