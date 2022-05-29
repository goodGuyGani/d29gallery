<?php
session_start();
include("includes/connection.php");
if(isset($_POST['submit'])){
  include("smsAPIContr.php");
    
  
  
  $user_id = $_POST['user_id'];
  $order_stat = $_POST['order_status'];
  $order_dat = $_POST['delivery_date'];
  $order_id = $_SESSION['aaaa'];
  
  $email = $_POST['email'];
  $address = $_POST['address'];
  
  
  
  $headers = "From: no-reply@d29gallery.com\r\n";
  $headers .= "Reply-To: no-reply@d29gallery.com\r\n";
  $headers .= "Return-Path: no-reply@d29gallery.com\r\n";
  $headers .= "CC: '.$email.'\r\n";
  $headers .= "BCC: '.$email.'\r\n";
  
  
  
  

  
  
  if($order_stat == 'Shipping'){
      if(mysqli_query($conn,"UPDATE orders SET ORDER_STATUS = '$order_stat', delivery_date = '$order_dat' WHERE ORDER_ID = '$order_id' ")){
      $query2 = "UPDATE art_work SET ART_STATE='Shipped' WHERE USER_ID2='$user_id' AND ART_STATE='Sent'";
      $query_run2 = mysqli_query($conn, $query2);
      
      
      
      $msg = "Please be advised that your Order #$order_id is now being shipped to $address, and will arrive at $order_dat. If you have any inquiries regarding your order please contact no-reply@d29gallery.com.";

      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,70);

      // send email
      mail($email,"Your Order Is Now Being Shipped",$msg, $headers);
      
      
      
    $_SESSION['success'] = "Your Order is Updated";
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  } else{
      $_SESSION['status'] = "Your Order is NOT Updated"; 
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  } else if($order_stat == 'Pending'){
      
      if(mysqli_query($conn,"UPDATE orders SET ORDER_STATUS = '$order_stat', delivery_date = '$order_dat' WHERE ORDER_ID = '$order_id' ")){
      
      $_SESSION['success'] = "Your Order is Updated";
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  } else{
      $_SESSION['status'] = "Your Order is NOT Updated"; 
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
      
  } else if($order_stat == 'Cancelled'){
      
    if(mysqli_query($conn,"UPDATE orders SET ORDER_STATUS = '$order_stat', delivery_date = '$order_dat' WHERE ORDER_ID = '$order_id' ")){
      
    $_SESSION['success'] = "Your Order is Updated";
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  } else{
      $_SESSION['status'] = "Your Order is NOT Updated"; 
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
      
  } else if($order_stat == 'Delivered'){
      
      if(mysqli_query($conn,"UPDATE orders SET ORDER_STATUS = '$order_stat', delivery_date = '$order_dat' WHERE ORDER_ID = '$order_id' ")){
      $query2 = "UPDATE art_work SET ART_STATE='Done' WHERE USER_ID2='$user_id' AND ART_STATE='Shipped'";
      $query_run2 = mysqli_query($conn, $query2);
      
      $msg = "Please be advised that your Order #$order_id is now delivered to $address, and have arrived at $order_dat. If you have any inquiries regarding your order please contact no-reply@d29gallery.com.";

      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,70);

      // send email
      mail($email,"Your Order Is Now Delivered",$msg, $headers);
      
      
      
      $_SESSION['success'] = "Your Order is Updated";
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
  } else{
      $_SESSION['status'] = "Your Order is NOT Updated"; 
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
      
  }
  else{
      
  }

}
?>