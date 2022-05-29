<?php include("includes/connection.php");

session_start();
if(!isset($_SESSION['USER_ID'])){
    header("Location: login_form.php");
}



?>
<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    
    <link rel="shortcut icon" type="image/png" href="pictures/mgLogo.png"/>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script>
document.getElementById("navlink");
  function showMenu(){
    navlink.style.visibility = "visible";
  }
  function hideMenu(){
    navlink.style.visibility = "hidden";
  }
</script>
<style>
    *{
  font-family: "source sans pro", sans-serif;
}
.header{

}
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5% 7%;
}
.logo{
    color: white;
    font-family: 'Sanchez';
    font-style: italic;
    font-weight: 400;
    font-size: 24px;
    line-height: 31px;
    text-align: right;
    width: 195px;
    height: 58px;
    text-decoration: none;
}
.navlinks{
    flex: 1;
    text-align: center;
}
.navlinks ul li{
    display: inline-block;
    padding: 8px 12px;
    list-style: none;
    position: relative;

}
.navlinks ul li a{
    text-decoration: none;
    color: white;
    font-size: 15px;
}
.navlinks ul li a::after{
    content: '';
    background: #fd3e50;
    width: 0%;
    height: 2px;
    transition: 0.8s;
    margin: auto;
    display: block;
}
.navlinks ul li a:hover::after{
    width: 100%;
}
.btn{
    position: relative;
    left: 20.5%;
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 21px;
    text-align: right;
    border: 2px;
    color: white;
    text-decoration: none;
    border: 2px solid;
    border-radius: 5px;
    border-color: #fd3e50;
    padding: 8px 23px;
    transition: transform .4;
}
.btn:hover{
    background-color: #fd3e50;
}
.Content{
    color: white;
    top: 50%;
    left: 50%;
    width: 90%;
    position: absolute;
    text-align: center;
    transform: translate(-50%,-50%);
}
.Content h1{
    font-size: 35px;
}
.Content p{
    font-size: 14px;
    color: white;
    margin: 12px 0px 40px;
}
.btn1{
    position: relative;
    color: white;
    border: 1px solid;
    border-color: #fd3e50;
    border-radius: 5px;
    text-decoration: none;
    padding: 10px 30px;
    font-size: 16px;
    background: #fd3e50;
    display: inline-block;
    cursor: pointer;

}
.btn1:hover{
    border: 1px solid;
    border-color: #fd3e50;
    background: transparent;
    transition: 1s;
}
.social{
    flex: 1;
    position: relative;
    top: 400px;
    text-align: right;
    right: 7%;
}
.social a{
    padding: 10px;
}
 /* Dropdown Button */
 .dropbtn {
  background-color: transparent;
  left: 1165px;
    top: 67px;
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 21px;
    text-align: right;
    border: 2px;
    color: white;
    text-decoration: none;
    border: 2px solid;
    border-radius: 5px;
    border-color: #fd3e50;
    padding: 8px 23px;
    transition: transform .4;
}

.dropbtn:hover{
    background-color: #fd3e50;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: transparent;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a {background-color: rgba(0, 0, 0, 0.5); width: 180px;}

.dropdown-content a:hover {background-color: #fd3e50;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}



/*End of header */

.dpdown2 {
    position: inherit;

      left: 675px;
      color: #f2f2f2;
      font-size: 14.5px;
    display: inline-block;
    z-index: 100;
}

.dpdown-content2 {
    display: none;
    position: absolute;
    right: 725px;
    background-color: #fd3e50;
    font-size: 16px;
    min-width: 160px;
    z-index: 100;
}

.dpdown-content2 a {
    color: white;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content2 a:hover {background-color: darkslategray}

.dpdown2:hover .dpdown-content2 {
    display: block;
}

.dpdown2:hover{
   border-bottom: 1.5px solid #2d70d5;
}
nav .fa{
    display: none;
}

@media(max-width: 800px){
    .logo{
        color: white;
        font-family: 'Sanchez';
        font-style: italic;
        font-weight: 400;
        font-size: 16px;
        line-height: 31px;
        text-align: right;
        width: 100px;
        height: 58px;
        text-decoration: none;
    }
    .Content h1{
        font-size: 20px;
    } 
    .navlinks ul li{
        display: block;
    }
    .navlinks ul li a{
        text-decoration: none;
        font-weight: lighter;
        font-size: 14px;
    }
    .navlinks{
        visibility: hidden;
        position: absolute;
        background-color: #fd3e50;
        height: 100vh;
        width: 200px;
        top: 0;
        right: 0px;
        text-align: left;
        z-index: 2;
    }
    nav .fa{
        display: block;
        color: white;
        margin: 10px;
        font-size: 20px;
        cursor: pointer;
    }
    .btn{
        position: relative;
        text-align: left;
        left: 50px;
        top: 50px;
        padding: 5px 15px;
        border-color: #f2f2f2;

    }
    .navlinks ul{
        padding: 15px;
    }

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: relative;
    background-color: transparent;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-weight: lighter;
    font-size: 14px;
  }
.dropdown-content a {background-color: rgba(0, 0, 0, 0.5); width: 180px;}

.dropdown-content a:hover {background-color: #fd3e50;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

.dropbtn {
      background-color: transparent;
      left: 1165px;
      top: 67px;
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 21px;
      text-align: right;
      border: 2px;
      color: white;
      text-decoration: none;
      border: 2px solid;
      border-radius: 5px;
      border-color: #fd3e50;
      padding: 8px 10px;
      transition: transform .1;
  }
}
 *{
  font-family: "source sans pro", sans-serif;
}
    body{
        width: 100%;
    height: 100%;
    background-image: linear-gradient(rgba(8, 9, 12, 0.8),rgba(8, 9, 12, 0.8)),url(pictures/background.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    position: relative;
    background-repeat: no-repeat;
    
    }
.head-my {
font-size: 30px;          
color: rgb( 45, 112, 213 );
z-index: 19;
}
        .head-orders{
            font-size: 30px;           
          color: rgb( 00, 00, 00 );
          z-index: 19;
        }
        .hr{
            position: relative;
            border: 1px solid #2d70d5;
            top: 110px;
            width: 1130px;
            left: 0px;
        }
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    
    margin-left:auto;
    margin-right:auto;
    display:block;
    width: 90%;
    height: 80px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #fd3e50;
    color: white;
}

button.accordion:after {
    content: '\002B';
    font-size:30px;
    color: black;
    font-weight: bold;
    float: right;
    margin: -40px 0px 0px 0px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
     
    margin-left:auto;
    margin-right:auto;
    display:block;
    width: 90%;

    background-color: rgba(0, 0, 0, 0.5);
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

.align{
    
    top: 150px;

}
.h1{
    font-size: 13px;
    
    display: block;
    float: left;
    overflow: auto;
    margin: 0px 320px 0px 0px ;
}

.h2{
    font-size: 13px;
    display: block;
    float: left;
    overflow: auto;
    margin: 0px 255px 0px 0px ;
}
.h3{
    font-size: 13px;
    
    display: block;
    float: left;
    overflow: auto;
    margin: 0px 0px 0px 700px ;
}
.h4{
    font-size: 13px;
    
    display: block;
    float: left;
    overflow: auto;
    margin: -40px 0px 0px 1010px ;
}
.picture{
    object-fit:cover;
    box-shadow: 1px 1.5px 8px 0px rgb(0, 0, 5);
    width: 200px;
    height: 228px;
}
.item{

    
    font-size: 45px;
    color: #2d70d5;
}
.qty{

    
    font-size: 14px;
    color: grey;
}
.delivery{

    color:white;
    font-size: 15px;
    font-weight: bold;
}
.cancel{

    
    font-size: 15px;
    text-decoration: none;
    color: white;
    padding: 10px;

}
.cancel:hover{
    background-color:  #fd3e50;


}
.seemore{
     position: relative;
    top: -180px;
    right: -1000px;
    font-weight: bold;
    font-size: 16px;
    text-decoration: none;
    color: white;
    padding: 10px;
}
.seemore:hover{
    background-color:  #fd3e50;
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");

.heading {
    font-family: Arial, Helvetica, sans-serif;
text-align: center;
font-size: 50px;
color: #fff;
margin-bottom: 3rem;
text-transform: uppercase;
}

.heading span {
text-transform: uppercase;
color: black;
}

@media (max-width: 768px) {
.heading {
font-size: 12vw;
}
}



@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");

.heading {
    font-family: Arial, Helvetica, sans-serif;
text-align: center;
font-size: 50px;
color: #fff;
margin-bottom: 3rem;
text-transform: uppercase;
}

.heading span {
text-transform: uppercase;
color: black;
}

@media (max-width: 768px) {
.heading {
font-size: 12vw;
}
}

.buybutton{
          cursor: pointer;
          border-radius: 8px;
           color: white;
           font-size: 15px;
           font-weight: bold;
           text-align: center;
           border: none;
           box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
           background-color: #29a32f;
           width: 100%;
           height: 70px;
        }
        .soldbutton{
            cursor: pointer;
           margin-left:auto;
           margin-right:auto;
           display:block;
          border-radius: 8px;
           color: white;
           font-size: 25px;
           font-weight: bold;
           text-align: center;
           border: none;
           box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
           background-color: crimson;
           padding: 15px;
           width: 50%;
           height: 70px;
        }
        
.pagination {
        margin-top:20px;
        margin-left:5%;
  display: block;
}

.pagination a {
  background-color:white;
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  font-size: 22px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}




.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>

<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to cancel this order?'))
    {
        return true;
    }
    else
        return false;
};
</script>

<?php


    $user = $_SESSION['USER_ID'];

    $query3 = "SELECT * FROM cart WHERE USER_ID = '$user'";
      
    // Execute the query and store the result set
    $result3 = mysqli_query($conn, $query3);
      
    if ($result3)
    {
        // it return number of rows in the table.
        $row3 = mysqli_num_rows($result3);
        // close the result.
    }
    

?>

<section class="header" style="width: 100%">
<nav>
              <a class="logo" href="home.php">MURADKHAAL GALLERY</a>
              <div class="navlinks" id="navlink">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                  <ul style="font-weight:bold">
                      <li><a href="home.php">HOME</a></li>
                      <div class="dropdown">
                      <li><a href="#">GALLERY</a></li>
                      <div class="dropdown-content">
                          <a href="artworks.php">All Artworks</a>
                          <a href="artworks(sold).php">Sold Artworks</a>
                      </div>
                      </div>
                  
                  <li><a href="artist.php">ARTISTS</a></li>
                  
                  <li><a href="about_us.php">ABOUT</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
              

        <?php if(isset($_SESSION['USER_ID'])){
    $id = $_SESSION['USER_ID'];
            $query_category="SELECT user_fname,user_mname,user_lname,USER_TYPE FROM user WHERE user_id = '$id'";
            $result_category = mysqli_query($conn,$query_category);

            while($row=mysqli_fetch_array($result_category)){
              //<a href= "pictures/arts/'.$row[0].'">
              if($_SESSION['user_type'] == "Admin"){
                  echo
                 '<div class="dropdown"  style="position:relative; left: 15%">
                    <button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                         <a href="profile.php">Admin Dashboard</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div></div>';
            }
            elseif($_SESSION['user_type'] == "Artist"){
                echo
                 '
                 <a href="cart.php" style="color:#fd3e50;position:relative;left:15%"><i class="fas fa-shopping-cart"></i><span>('.$row3.')</span></a>
                 <div class="dropdown"  style="position:relative; left: 15%">
                    <button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                         <a href="my_request.php">Commission Request</a>
                         <a href="myartworks_available.php">My Artworks</a>
                         <a href="myartworks_sold.php">My Sold Artworks</a>
                         <a href="profile.php">Account Profile</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div></div>';
            }
            else{
                echo
                 '
                 <a href="cart.php" style="color:#fd3e50;position:relative;left:15%;background-color:#fd3e50;color:white;padding:5px;border-radius:5px;text-decoration:none"><i class="fas fa-shopping-cart"></i> <span style="">'.$row3.'</span></a>
                 <div class="dropdown"  style="position:relative; left: 15%">
                    <button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                         <a href="orders.php">My Orders</a>
                         <a href="sent_request.php">Sent Request</a>
                         <a href="profile.php">Account Profile</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div></div>';
            }
              }


}
else{
include("portal.php");

}
?>

<i class="fa fa-bars" onclick="showMenu()"></i>

        <!--<a href="login_form.php" class="btn">Log In/Sign up</a>-->
    </nav>


  <h3 class="heading" style="margin-top:1px;"><span style="color:#fd3e50;font-weight:bold">My Orders</span></h3>
  
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="soldbutton" style="width:90%; text-align:center;border-radius:0px;cursor: none;"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="soldbutton" style="width:90%; text-align:center;border-radius:0px;cursor: none;"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>


<div class="pagination" style="">
  <a href="orders.php">All</a>
  <a href="orders_pending.php">Pending</a>
  <a href="orders_shipping.php">Shipping</a>
  <a href="orders_delivered.php">Delivered</a>
  <a href="orders_cancelled.php">Cancelled</a>
  


</div>




<?php
// query displaying orders from a customer
$user_id = $_SESSION['USER_ID'];

$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$query_category="SELECT * FROM orders WHERE orders.USER_ID = '$user_id' AND orders.ORDER_STATUS = 'Pending' ORDER BY ORDER_ID DESC LIMIT $start, $limit";

    $result1 = $conn->query("SELECT count(ORDER_ID) AS ORDER_ID FROM orders WHERE orders.USER_ID = '$user_id' AND orders.ORDER_STATUS = 'Pending'");
            $userCount = $result1->fetch_all(MYSQLI_ASSOC);
            $total = $userCount[0]['ORDER_ID'];
            $pages = ceil($total / $limit);

            $Previous = $page - 1;
            $Next = $page + 1;
            
            $Previous = ($page == 1) ? 1 : $page - 1;
            $Next = ($page == $pages) ? $pages : $page + 1;


        $result_category = mysqli_query($conn,$query_category);
        if(mysqli_num_rows($result_category) <=0)
        {
            echo '<h1 align="Center" style="margin-top:300px;margin-bottom:300px;color:white">No Pending Orders</h1>';
        }
        else{
        while($row=mysqli_fetch_array($result_category)){



if($row['ORDER_STATUS'] == 'Pending'){
    $row['ORDER_AMOUNT'] = number_format($row['ORDER_AMOUNT']);
            echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['ORDER_ID'].'<br>
                <div style="background-color: crimson;color:white;border-radius:30px;padding:5px;text-align:center">'.$row['ORDER_STATUS'].'</div></li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h2"> </li>
                <li class="h2"> </li>
                <li class="h3"> </li>

                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                
        </button>

        <div class="panel" style="padding-left:30px">
                
                <h3 class="delivery" style="margin-top:20px">Name: '.$row['ORDER_NAME'].'</h3>
                <h3 class="delivery">Email: '.$row['ORDER_EMAIL'].'</h3>
                <h3 class="delivery">Contact Number: '.$row['ORDER_PHONE'].'</h3>
                <h3 class="delivery">Total Amount: Php '.$row['ORDER_AMOUNT'].'</h3>
                <h3 class="delivery">Order Placed: '.$row['ORDER_DATE'].'</h3>
                <h3 class="delivery">Delivery Date: '.$row['DELIVERY_DATE'].'</h3>
                <h3 class="delivery">Payment: '.$row['ORDER_PAYMENT'].'</h3>
                <h3 class="delivery">Status: '.$row['ORDER_STATUS'].'</h3>
                <h3 class="delivery">Address: '.$row['ORDER_ADDRESS'].'</h3>
                <br>
                <h3 class="delivery" style="font-size:30px">Artwork(s): '.$row['ORDER_PRODUCTS'].'</h3>
                <br>
                
                
                
                <a class = "delivery" style="text-decoration: none;color: white;" href="orders_continue.php?id='.$row['ORDER_ID'].'"><button type="submit" name="decline_btn" class="soldbutton" style="width:80%;font-size:14px;height:50px;margin-bottom:30px">
                See Info</button></a>

                

                
                <a style="text-decoration:none;color:white" href="cancel_order.php?id='.$row['ORDER_ID'].'"onclick="return(YNconfirm());"><button type="button" name="cancel_btn" class="soldbutton" style="width:80%;font-size:14px;height:50px" >CANCEL ITEMS</button></a>
                <br>
                

                
                
                <div style="height:30px"></div>

        </div>


    </div>
    

    
    

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
';
}

else if($row['ORDER_STATUS'] == 'Shipping'){
    $row['ORDER_AMOUNT'] = number_format($row['ORDER_AMOUNT']);
  echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['ORDER_ID'].'<br>
                <div style="color:white;background-color: #161f5e;white;border-radius:30px;padding:5px;text-align:center">Shipping</div></li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h2"> </li>
                <li class="h2"> </li>
                <li class="h3"> </li>

                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                
        </button>

        <div class="panel" style="padding-left:30px">
        
        <h1 class="item" style="margin-top:20px;font-size:30px">Your Order Will Be Arriving Soon</h1>
                
                <h3 class="delivery" style="margin-top:20px">Name: '.$row['ORDER_NAME'].'</h3>
                <h3 class="delivery">Email: '.$row['ORDER_EMAIL'].'</h3>
                <h3 class="delivery">Contact Number: '.$row['ORDER_PHONE'].'</h3>
                <h3 class="delivery">Total Amount: Php '.$row['ORDER_AMOUNT'].'</h3>
                <h3 class="delivery">Order Placed: '.$row['ORDER_DATE'].'</h3>
                <h3 class="delivery">Delivery Date: '.$row['DELIVERY_DATE'].'</h3>
                <h3 class="delivery">Payment: '.$row['ORDER_PAYMENT'].'</h3>
                <h3 class="delivery">Status: '.$row['ORDER_STATUS'].'</h3>
                <h3 class="delivery">Address: '.$row['ORDER_ADDRESS'].'</h3>
                <br>
                <h3 class="delivery" style="font-size:30px">Artwork(s): '.$row['ORDER_PRODUCTS'].'</h3>
                <br>
                <div style="height:30px"></div>
        </div>


    </div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
';


} 
else if($row['ORDER_STATUS'] == 'Delivered'){
    $row['ORDER_AMOUNT'] = number_format($row['ORDER_AMOUNT']);
  echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['ORDER_ID'].'<br>
                <div style="background-color: #29a32f;color:white;border-radius:30px;padding:5px;text-align:center">'.$row['ORDER_STATUS'].'</li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h2"> </li>
                <li class="h2"> </li>
                <li class="h3"> </li>

                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                
        </button>

        <div class="panel" style="padding-left:30px">
        
        <h1 class="item" style="margin-top:20px;font-size:30px">This Order Has Been Delivered</h1>
                
                <h3 class="delivery" style="margin-top:20px">Name: '.$row['ORDER_NAME'].'</h3>
                <h3 class="delivery">Email: '.$row['ORDER_EMAIL'].'</h3>
                <h3 class="delivery">Contact Number: '.$row['ORDER_PHONE'].'</h3>
                <h3 class="delivery">Total Amount: Php '.$row['ORDER_AMOUNT'].'</h3>
                <h3 class="delivery">Order Placed: '.$row['ORDER_DATE'].'</h3>
                <h3 class="delivery">Delivery Date: '.$row['DELIVERY_DATE'].'</h3>
                <h3 class="delivery">Payment: '.$row['ORDER_PAYMENT'].'</h3>
                <h3 class="delivery">Status: '.$row['ORDER_STATUS'].'</h3>
                <h3 class="delivery">Address: '.$row['ORDER_ADDRESS'].'</h3>
                <br>
                <h3 class="delivery" style="font-size:30px">Artwork(s): '.$row['ORDER_PRODUCTS'].'</h3>
                <br>
                <div style="height:30px"></div>

        </div>


    </div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
';


}
else if($row['ORDER_STATUS'] == 'Cancelled'){
    $row['ORDER_AMOUNT'] = number_format($row['ORDER_AMOUNT']);
  echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Request # '.$row['ORDER_ID'].'<br>
                <div style="background-color: #b22222;color:white;border-radius:30px;padding:5px;text-align:center">'.$row['ORDER_STATUS'].'</li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h1"> </li>
                <li class="h2"> </li>
                <li class="h2"> </li>
                <li class="h3"> </li>

                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                <li class="h4"> </li>
                
        </button>

        <div class="panel" style="padding-left:30px">
        
        <h1 class="item" style="margin-top:20px;font-size:30px">This Order Has Been Cancelled</h1>
                
                <h3 class="delivery" style="margin-top:20px">Name: '.$row['ORDER_NAME'].'</h3>
                <h3 class="delivery">Email: '.$row['ORDER_EMAIL'].'</h3>
                <h3 class="delivery">Contact Number: '.$row['ORDER_PHONE'].'</h3>
                <h3 class="delivery">Total Amount: Php '.$row['ORDER_AMOUNT'].'</h3>
                <h3 class="delivery">Order Placed: '.$row['ORDER_DATE'].'</h3>
                <h3 class="delivery">Delivery Date: '.$row['DELIVERY_DATE'].'</h3>
                <h3 class="delivery">Payment: '.$row['ORDER_PAYMENT'].'</h3>
                <h3 class="delivery">Status: '.$row['ORDER_STATUS'].'</h3>
                <h3 class="delivery">Address: '.$row['ORDER_ADDRESS'].'</h3>
                <br>
                <h3 class="delivery" style="font-size:30px">Artwork(s): '.$row['ORDER_PRODUCTS'].'</h3>
                <br>
                <div style="height:30px"></div>

        </div>


    </div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
';


}



else{
    
}
}
}
?>

<div class="pagination" style="">
  <a href="orders_pending.php?page=<?= $Previous; ?>">&laquo;</a>
  
  <?php for($i = 1; $i <= $pages; $i++) : ?>
  <a href="orders_pending.php?page=<?= $i; ?>"><?= $i; ?></a>
  <?php endfor; ?>
  
  <a href="orders_pending.php?page=<?= $Next; ?>">&raquo;</a>


</div>


<div style="height:200px"></div>

</body>
</html>
