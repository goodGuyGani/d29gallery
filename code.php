<?php

session_start();


include('includes/connection.php');
include("functions.php");


if(isset($_POST['sendbtn'])){


  $user = $_POST['userid'];
  $user2 = $_POST['userid2'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $number = $_POST['number'];
  $budget = $_POST['budget'];
  $description = $_POST['description'];
  $size = $_POST['size'];
  $date = $_POST['date'];
  
  if($user == $user2){
    $_SESSION['status'] = "You Cant Send Request To Yourself";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }else{
  

  
    $query = "INSERT INTO commission_request (USER_ID, USER2_ID, COM_EMAIL, COM_NAME, COM_CONTACT, COM_BUDGET, COM_DESCRIPTION, COM_SIZE, COM_FINISHDATE, COM_STATUS) VALUES
            ('$user', $user2, '$email', '$name', '$number', '$budget', '$description', '$size', '$date', 'Unchecked')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    $_SESSION['success'] = "Commision Request Sent";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else{
    $_SESSION['status'] = "Commision Request Not Sent";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }
}

if(isset($_POST['messagebtn'])){


  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $description = $_POST['desc'];
 
  

  
    $query = "INSERT INTO message (MESSAGE_NAME, MESSAGE_EMAIL, MESSAGE_CONTACT, MESSAGE_DESC) VALUES
            ('$name', '$email', '$number', '$description')";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    $_SESSION['success'] = "Message Sent";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else{
    $_SESSION['status'] = "Message Not Sent";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  
}
  
if(isset($_POST['accept_btn'])){

  $id = $_POST['update_id'];
  
    $query = "UPDATE commission_request SET COM_STATUS='Accepted' WHERE COM_ID = '$id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    $_SESSION['success'] = "Commision Request Accepted";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else{
    $_SESSION['status'] = "Commision Request Not Accepted";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }
  
  
if(isset($_POST['decline_btn'])){

  $id = $_POST['update_id'];
  
    $query = "UPDATE commission_request SET COM_STATUS='Declined' WHERE COM_ID = '$id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    $_SESSION['success'] = "Commision Request Declined";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else{
    $_SESSION['status'] = "Commision Request Not Declined";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }





  

?>