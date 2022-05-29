<?php include("includes/connection.php");

session_start();
if(!isset($_SESSION['USER_ID'])){
    header("Location: login_form.php");
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Commission Request</title>
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
.dropdown-content a {background-color: rgba(0, 0, 0, 0.5); width: 200px;}

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


.r-list{
--uirListPaddingLeft: var(--rListPaddingLeft, 0);
--uirListMarginTop: var(--rListMarginTop, 0);
--uirListMarginBottom: var(--rListMarginBottom, 0);
--uirListListStyle: var(--rListListStyle, none);

padding-left: var(--uirListPaddingLeft) !important;
margin-top: var(--uirListMarginTop) !important;
margin-bottom: var(--uirListMarginBottom) !important;
list-style: var(--uirListListStyle) !important;
}

.r-link{
--uirLinkDisplay: var(--rLinkDisplay, inline-flex);
--uirLinkTextColor: var(--rLinkTextColor);
--uirLinkTextDecoration: var(--rLinkTextDecoration, none);
display: var(--uirLinkDisplay) !important;
color: var(--uirLinkTextColor) !important;
text-decoration: var(--uirLinkTextDecoration) !important;
}

/*
=====
COMPONENT
=====
*/

.breadcrumb{
margin-bottom:0;
border-radius: 0rem;
background-color:#e9ecef;
--uiBreadcrumbDividerColor: var(--breadcrumbDividerColor, inherit);
--uiBreadcrumbDividerSize: var(--breadcrumbDividerSize, 1rem);
--uiBreadcrumbIndent:  var(--breadcrumbIndent, .75rem);
}

.breadcrumb__list{
display: flex;
flex-wrap: wrap;
gap: var(--uiBreadcrumbIndent);
}

.breadcrumb__group{
display: inline-flex;
align-items: center;
}

.breadcrumb__divider{
margin-left: var(--uiBreadcrumbIndent);
font-size: var(--uiBreadcrumbDividerSize);
}

/*
=====
SKIN
=====
*/



.breadcrumb__divider{
color: var(--uiBreadcrumbDividerColor);
}

span.breadcrumb__point{
color: var(--uiBreadcrumbTextColorActive);
}

/*
=====
SETTINGS
=====
*/


.breadcrumb_type2{
--breadcrumbDividerSize: 20px;
}

.breadcrumb_type3{
--breadcrumbDividerSize: 18px;
}

.breadcrumb_type4{
--breadcrumbDividerSize: 14px;
}

.breadcrumb_type5{
--breadcrumbDividerSize: 20px;
}

.breadcrumb_type6{
--breadcrumbDividerSize: 14px;
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
  

  <h3 class="heading"><span style="color:#fd3e50;font-weight:bold">My Commission Request</span></h3>
  
  
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
  <a href="my_request.php">All</a>
  <a href="my_request_unchecked.php">Unchecked</a>
  <a href="my_request_accepted.php">Accepted</a>
  


</div>



<?php
$user_id = $_SESSION['USER_ID'];
$query_category1="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_width,art_work.art_height,art_work.art_media,art_work.art_category,user.user_contact,art_work.art_thickness,buy_transaction.transaction_id,buy_transaction.delivery_date,buy_transaction.ordered_no,buy_transaction.ordered_date,buy_transaction.total_price,buy_transaction.shipping_status,user.user_email
                         FROM art_work,user,buy_transaction
                        where buy_transaction.art_id = art_work.art_id AND buy_transaction.user_id = user.user_id AND
                            buy_transaction.user_id = '$user_id'";
        $result_category1 = mysqli_query($conn,$query_category1);
         while($row1=mysqli_fetch_array($result_category1)){
            $today = date("Y-m-d");
            $del = $today;
            if($row1['delivery_date'] == $del){
                $sqll= "UPDATE buy_transaction SET shipping_status = 'Delivered' WHERE user_id = '$user_id'";
             $result = mysqli_query($conn, $sqll);
            }
else{

}


         }


?>

<?php
// query displaying orders from a customer

$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$query_category="SELECT * FROM commission_request WHERE commission_request.USER_ID = '$user_id' ORDER BY COM_ID DESC LIMIT $start, $limit";

$result1 = $conn->query("SELECT count(COM_ID) AS COM_ID FROM commission_request WHERE commission_request.USER_ID = '$user_id' AND commission_request.COM_STATUS = 'Unchecked' OR commission_request.COM_STATUS = 'Accepted'");
            $userCount = $result1->fetch_all(MYSQLI_ASSOC);
            $total = $userCount[0]['COM_ID'];
            $pages = ceil($total / $limit);

            $Previous = $page - 1;
            $Next = $page + 1;
            
            $Previous = ($page == 1) ? 1 : $page - 1;
            $Next = ($page == $pages) ? $pages : $page + 1;



        $result_category = mysqli_query($conn,$query_category);
        if(mysqli_num_rows($result_category) <=0)
        {
            echo '<h1 align="Center" style="margin-top:300px;margin-bottom:300px;color:white">No Request</h1>';
        }
        else{
        while($row=mysqli_fetch_array($result_category)){



if($row['COM_STATUS'] == 'Unchecked'){
    $row['COM_BUDGET'] = number_format($row['COM_BUDGET']);
            echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Request # '.$row['COM_ID'].'<br>
                <div style="background-color: crimson;color:white;border-radius:30px;padding:5px;text-align:center">'.$row['COM_STATUS'].'</div></li>
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
                
                <h1 class="item" style="margin-top:20px">From: '.$row['COM_NAME'].'</h1>
                <h3 class="delivery">Email: '.$row['COM_EMAIL'].'</h3>
                <h3 class="delivery">Contact Number: 0'.$row['COM_CONTACT'].'</h3>
                <h3 class="delivery">Ideal Finish Date: '.$row['COM_FINISHDATE'].'</h3>
                <h3 class="delivery">Budget: Php '.$row['COM_BUDGET'].'</h3>
                <h3 class="delivery">Size: '.$row['COM_SIZE'].'</h3>
                <h3 class="delivery">Payment: Cash On Delivery/GCASH</h3>
                <h3 class="delivery">Status: '.$row['COM_STATUS'].'</h3>
                <br>
                <h3 class="delivery">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['COM_DESCRIPTION'].'</h3>
                <br>
                <form action="code.php" method="POST">
                
                <input type="hidden" value="'.$row['COM_ID'].'" name="update_id">
                
                <button type="submit" name="accept_btn" class="soldbutton" style="width:80%;font-size:14px;height:50px">Accept</button><br>
                </form>
                
                <form action="code.php" method="POST">
                
                <input type="hidden" value="'.$row['COM_ID'].'" name="update_id">
                
                <button type="submit" name="decline_btn" class="soldbutton" style="width:80%;font-size:14px;height:50px">Decline</button>
                <br>
                
                </form>
                
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

else if($row['COM_STATUS'] == 'Accepted'){
    $row['COM_BUDGET'] = number_format($row['COM_BUDGET']);
  echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Request # '.$row['COM_ID'].'<br>
                <div style="background-color: #29a32f;color:white;border-radius:30px;padding:5px;text-align:center">'.$row['COM_STATUS'].'</div></li>
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
                
                <h1 class="item" style="margin-top:20px">From: '.$row['COM_NAME'].'</h1>
                <h3 class="delivery">Email: '.$row['COM_EMAIL'].'</h3>
                <h3 class="delivery">Contact Number: 0'.$row['COM_CONTACT'].'</h3>
                <h3 class="delivery">Ideal Finish Date: '.$row['COM_FINISHDATE'].'</h3>
                <h3 class="delivery">Budget: Php '.$row['COM_BUDGET'].'</h3>
                <h3 class="delivery">Size: '.$row['COM_SIZE'].'</h3>
                <h3 class="delivery">Payment: Cash On Delivery/GCASH</h3>
                <h3 class="delivery">Status: '.$row['COM_STATUS'].'</h3>
                <br>
                <h3 class="delivery">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['COM_DESCRIPTION'].'</h3>
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


} else{
    
}
}
}
?>

<div class="pagination" style="">
  <a href="my_request.php?page=<?= $Previous; ?>">&laquo;</a>
  
  <?php for($i = 1; $i <= $pages; $i++) : ?>
  <a href="my_request.php?page=<?= $i; ?>"><?= $i; ?></a>
  <?php endfor; ?>
  
  <a href="my_request.php?page=<?= $Next; ?>">&raquo;</a>


</div>

<div style="height:100px"></div>

<style>

</style>

</body>
</html>
