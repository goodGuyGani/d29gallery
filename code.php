<?php

session_start();


include('includes/connection.php');
include("functions.php");


if(isset($_POST['emptycartbtn'])){
    
    if(!isset($_SESSION['USER_ID'])){
    redirect_to("login_form.php");
    }
    
    $id = $_POST['user_id'];
    
    
    $query = "DELETE FROM cart WHERE USER_ID='$id' ";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
        $query2 = "UPDATE art_work SET ART_STATE=NULL, USER_ID2=NULL WHERE USER_ID2='$id' AND ART_STATE='Cart'";
        $query_run2 = mysqli_query($conn, $query2);
        //echo "Saved";
        $_SESSION['success'] = "Your Cart Is Now Empty";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        $_SESSION['status'] = "Your Cart Is Not Been Emptied";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }


if(isset($_POST['cancel_btn'])){

  $id = $_POST['update_id'];
  
    $query = "UPDATE orders SET ORDER_STATUS='Cancelled' WHERE ORDER_ID = '$id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    //echo "Saved";
    $_SESSION['success'] = "Order Request Cancelled";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  else{
    $_SESSION['status'] = "Order Request Not Cancelled";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }


if(isset($_POST['orderbtn'])){
    
    if(!isset($_SESSION['USER_ID'])){
    redirect_to("login_form.php");
    }


    
    $user = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    
    $area = $_POST['area'];
    $zipcode = $_POST['zipcode'];
    $brgy = $_POST['brgy'];
    $street = $_POST['street'];
    $city = $_POST['municipal'];
    $house_num = $_POST['house_num'];
    
    $address =  $house_num.', '.$brgy.', '.$street.', '.$city.', '.$area.', Philippines';
    
    $artworks = $_POST['products'];
    $amount = $_POST['grand_total'];
    $payment = $_POST['payment'];
    
    $mysqltime = date('Y-m-d H:i:s');
    
    $date = date('Y-m-d',strtotime("+5 days"));
    
    
    $query = "INSERT INTO orders (USER_ID, ORDER_NAME, ORDER_EMAIL, ORDER_PHONE, ORDER_ADDRESS, ORDER_PRODUCTS, ORDER_AMOUNT, ORDER_PAYMENT, ORDER_STATUS, ORDER_DATE, DELIVERY_DATE) VALUES
            ('$user', '$name', '$email', '$phone', '$address', 
            '$artworks', '$amount', '$payment', 'Pending','$mysqltime', '$date')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
        $query1 = "UPDATE art_work SET ART_STATUS='Sold',art_stock = art_stock - 1, ART_STATE='Sent' WHERE USER_ID2 = '$user' ";
        $query_run1 = mysqli_query($conn, $query1);
        
        $query = "DELETE FROM cart WHERE USER_ID='$user' ";
        $query_run = mysqli_query($conn, $query);
        //echo "Saved";
        $_SESSION['success'] = "Order Sent";
        header('Location:  orders.php');
    }
    else{
        $_SESSION['status'] = "Order Not Sent";
        header('Location: orders.php');
        }
        
    }



if(isset($_POST['addcartbtn'])){
    
    if(!isset($_SESSION['USER_ID'])){
    redirect_to("login_form.php");
    }
    
    $id = $_SESSION['USER_ID'];
    $query_category="SELECT user_fname,user_mname,user_lname,USER_TYPE FROM user WHERE user_id = '$id'";
            $result_category = mysqli_query($conn,$query_category);


    
    $user = $_POST['user_id'];
    $artwork = $_POST['art_id'];
    $title = $_POST['art_title'];
    $artist = $_POST['art_artist'];
    $price = $_POST['art_price'];
    $quantity = $_POST['art_quantity'];
    $image = $_POST['art_image'];
    
    
    $query1 = "SELECT * FROM cart WHERE USER_ID = '$user' AND ART_ID = '$artwork'";
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1) > 0) {
        $_SESSION['status'] = "Already Added To the Cart!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else if($_SESSION['user_type'] == "Artist" || $_SESSION['user_type'] == "Admin"){
        $_SESSION['status'] = "Only Customers Can Buy!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
    $query = "INSERT INTO cart (USER_ID, ART_ID, TITLE, ARTIST, PRICE, QUANTITY, IMAGE) VALUES
            ('$user', '$artwork', '$title', '$artist', '$price', '$quantity', '$image')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
        $query1 = "UPDATE art_work SET ART_STATE='Cart' WHERE ART_ID = '$artwork' ";
        $query_run1 = mysqli_query($conn, $query1);
        
        $query = "UPDATE art_work SET USER_ID2='$user' WHERE ART_ID = '$artwork' ";
        $query_run = mysqli_query($conn, $query);
        //echo "Saved";
        $_SESSION['success'] = "Added to cart";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        $_SESSION['status'] = "Not added to cart";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }
}




if(isset($_POST['removecartbtn'])){
    
    if(!isset($_SESSION['USER_ID'])){
    redirect_to("login_form.php");
    }
    $user = $_POST['user_id'];
    $id = $_POST['cart_id'];
    $art = $_POST['art_id'];
    
    
    $query = "DELETE FROM cart WHERE CART_ID='$id' ";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
        $query2 = "UPDATE art_work SET ART_STATE=NULL, USER_ID2=NULL WHERE ART_ID='$art' ";
        $query_run2 = mysqli_query($conn, $query2);
        //echo "Saved";
        $_SESSION['success'] = "Item Removed From Cart";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        $_SESSION['status'] = "Not Removed From cart";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }



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