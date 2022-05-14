<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<?php
include("includes/connection.php");
include("admin.php");
?>
<style>
  *{
  font-family: "source sans pro", sans-serif;
}
body{
        background-image: url(pictures/oldcastle.jpg);
    background-size: cover;
    
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
    position: relative;
    top:-180px;
    left: 60px;
    width: 90%;
    height: 70px;
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
    color: #777;
    font-weight: bold;
    float: right;
    margin: -40px 0px 0px 0px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
     position: relative;
     top:-180px;
    left: 60px;
    width: 90%;
    height:285px;
    background-color: rgba(0, 0, 0, 0.5);
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

.align{
    position: relative;
    top: 150px;

}
.h1{
    font-size: 13px;
    
    position: relative;
    display: block;
    float: left;
    overflow: auto;
    margin: 0px 320px 0px 0px ;
}

.h2{
    font-size: 13px;
    
    position: relative;
    display: block;
    float: left;
    overflow: auto;
    margin: 0px 255px 0px 0px ;
}
.h3{
    font-size: 13px;
    
    position: relative;
    top: -18px;
    display: block;
    float: left;
    overflow: auto;
    margin: 0px 0px 0px 700px ;
}
.h4{
    font-size: 13px;
    
    position: relative;
    display: block;
    float: left;
    overflow: auto;
    margin: -40px 0px 0px 1010px ;
}
.picture{
    object-fit:cover;
    box-shadow: 1px 1.5px 8px 0px rgb(0, 0, 5);
    position: relative;
    top:30px;
    left: 30px;
    width: 200px;
    height: 228px;
}
.item{
    position: relative;
    top: -250px;
    left: 270px;
    
    font-size: 45px;
    color: #2d70d5;
}
.qty{
     position: relative;
    top: -285px;
    left: 270px;
    
    font-size: 14px;
    color: grey;
}
.delivery{
     position: relative;
    top: -210px;
    right: -275px;
    
    font-size: 15px;
    font-weight: bold;
}
.cancel{
     position: relative;
    top: -230px;
    right: -1000px;
    
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
 
<div class="page__section" >
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb" style="height: 54px;">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group" style="margin-top:17px;margin-left:15px">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="admin_artworks.php" class="breadcrumb__point r-link">Admin</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a class="breadcrumb__point r-link">My Orders</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>

  <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span>My Orders</span></h3>



  <?php
// query displaying orders from a customer
$query_category="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_width,art_work.art_height,art_work.art_media,art_work.art_category,user.user_contact,art_work.art_thickness,buy_transaction.transaction_id,buy_transaction.delivery_date,buy_transaction.ordered_no,buy_transaction.ordered_date,buy_transaction.total_price,buy_transaction.shipping_status,user.user_email
                         FROM art_work,user,buy_transaction
                        where buy_transaction.art_id = art_work.art_id AND buy_transaction.user_id = user.user_id";
        $result_category = mysqli_query($conn,$query_category);
        if(mysqli_num_rows($result_category) <=0)
        {
            echo '<h1 align="Center">No orders </h1>';
        }
        else{
        while($row=mysqli_fetch_array($result_category)){



if($row['shipping_status'] == 'Processing'){
  $row['total_price'] = number_format($row['total_price']);
            echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['transaction_id'].' </li>
                <li class="h1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</li>
                <li class="h1">Payment</li>

                <li class="h2">Placed on '.$row['ordered_date'].'</li>
                <li class="h2">Php '.$row['total_price'].'</li>
                <li class="h3">Cash On Delivery</li>

                <li class="h4"> '.$row['shipping_status'].'</li>
        </button>

        <div class="panel">
                <img class="picture" src="pictures/arts/'.$row['art_imagepath'].'"><br><br><br>
                <h1 class="item"> '.$row['art_title'].'</h1>

                <h3 class="delivery">Delivery between '.$row['ordered_date'].'-'.$row['delivery_date'].'</h3>

                <a class="cancel" href="cancel_order.php?id='.$row['transaction_id'].'&art_id=
                '.$row['art_id'].'&item_num='.$row['ordered_no'].'"onclick="return(YNconfirm());"> CANCEL ITEMS</a>
                 <br> <a class = "seemore" href="admin_editorder.php?id='.$row['transaction_id'].'"> MODIFY </a>



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
  $row['total_price'] = number_format($row['total_price']);
  echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['transaction_id'].' </li>
                <li class="h1">Total</li>
                <li class="h1">Payment</li>

                <li class="h2">Placed on '.$row['ordered_date'].'</li>
                <li class="h2">Php '.$row['total_price'].'</li>
                <li class="h3">Cash On Delivery</li>

                <li class="h4"> '.$row['shipping_status'].'</li>
        </button>

        <div class="panel">
                <img class="picture" src="pictures/arts/'.$row['art_imagepath'].'"><br><br><br>
                <h1 class="item"> '.$row['art_title'].'</h1>

                <h3 class="delivery">THIS ITEM HAS BEEN DELIVERED <br>date:'.$row['delivery_date'].'</h3>


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
}
}
?>


<!--
<?php
// query displaying orders from a customer
$query_category="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_width,art_work.art_height,art_work.art_media,art_work.art_category,user.user_contact,art_work.art_thickness,buy_transaction.transaction_id,buy_transaction.delivery_date,buy_transaction.ordered_no,buy_transaction.ordered_date,buy_transaction.total_price,buy_transaction.shipping_status,user.user_email
                         FROM art_work,user,buy_transaction
                        where buy_transaction.art_id = art_work.art_id AND buy_transaction.user_id = user.user_id";
        $result_category = mysqli_query($conn,$query_category);
        if(mysqli_num_rows($result_category) <=0)
        {
            echo '<h1 align="Center">No orders </h1>';
        }
        else{
        while($row=mysqli_fetch_array($result_category)){



if($row['shipping_status'] == 'Processing'){

            echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['transaction_id'].' </li>
                <li class="h1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</li>
                <li class="h1">Payment</li>

                <li class="h2">Placed on '.$row['ordered_date'].'</li>
                <li class="h2">Php '.$row['total_price'].'</li>
                <li class="h3">Cash On Delivery</li>

                <li class="h4"> '.$row['shipping_status'].'</li>
        </button>

        <div class="panel">
                <img class="picture" src="pictures/arts/'.$row['art_imagepath'].'"><br><br><br>
                <h1 class="item"> '.$row['art_title'].'</h1>
                <h2 class="qty">Qty. '.$row['ordered_no'].'</h2>

                <h3 class="delivery">Delivery between '.$row['ordered_date'].'-'.$row['delivery_date'].'</h3>

                <a class="cancel" href="cancel_order.php?id='.$row['transaction_id'].'&art_id=
                '.$row['art_id'].'&item_num='.$row['ordered_no'].'"onclick="return(YNconfirm());"> CANCEL ITEMS</a>
                 <br> <a class = "seemore" href="admin_editorder.php?id='.$row['transaction_id'].'"> MODIFY </a>



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
  echo '

    <div class="align">

        <button class="accordion">
                <li class="h1">Order # '.$row['transaction_id'].' </li>
                <li class="h1">Total</li>
                <li class="h1">Payment</li>

                <li class="h2">Placed on '.$row['ordered_date'].'</li>
                <li class="h2">Php '.$row['total_price'].'</li>
                <li class="h3">Cash On Delivery</li>

                <li class="h4"> '.$row['shipping_status'].'</li>
        </button>

        <div class="panel">
                <img class="picture" src="pictures/arts/'.$row['art_imagepath'].'"><br><br><br>
                <h1 class="item"> '.$row['art_title'].'</h1>
                <h2 class="qty">Qty. '.$row['ordered_no'].'</h2>

                <h3 class="delivery">THIS ITEM HAS BEEN DELIVERED <br>date:'.$row['delivery_date'].'</h3>


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
}
}
?>-->
</body>
</html>
