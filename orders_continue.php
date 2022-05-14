<?php
session_start();
    include("account.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
*{
  font-family: "source sans pro", sans-serif;
}
body{
    background-image: url(pictures/facethumb.jpg);
    background-size: cover;
}

button {
  background-color: #fd3e50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
        .whiteborder{
            border-radius: 8px;
            background-color: #f2f2f2;
            box-shadow: 1px 1px 5px 0px #fff;
            padding: 50px;
            position: relative;
            top:50px;
            width: 900px;
            height: 400px;
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

<div class="page__section" >
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb" style="height: 54px;">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group" style="margin-top:17px;margin-left:15px">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="artworks.php" class="breadcrumb__point r-link">My Account</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="" class="breadcrumb__point r-link">My Order</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>


       <?php
       $tran_id = $_GET['id'];
$query_category="SELECT buy_transaction.transaction_id,buy_transaction.delivery_date,buy_transaction.ordered_no,buy_transaction.ordered_date,buy_transaction.total_price,buy_transaction.shipping_status,user.user_email,buy_transaction.courier_name
                         FROM art_work,user,buy_transaction
                        where buy_transaction.art_id = art_work.art_id AND buy_transaction.user_id = user.user_id AND
                            buy_transaction.transaction_id = '$tran_id'";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
                        $id = $row['transaction_id'];
                        $ordered_date = $row['ordered_date'];
                        $shipping_date = $row['delivery_date'];
                        $courier_name = $row['courier_name'];
                        $shipping_status = $row['shipping_status'];
                        if($shipping_status == 'Processing'){


      echo '
      <button style="width: 100px;min-width:50px;margin-left:30px;margin-top:30px"><a class="" href="orders(planb).php" style="text-decoration:none;color: inherit;">Go Back</a></button>

      <div class="whiteborder" style="margin-left:auto;margin-right:auto;display:block;margin-bottom:200px">
        <h3> Dear '.$courier_name.',</h3>

         <p>
            Your Order # '.$id.' has been placed on '.$ordered_date.' via Cash on Delivery if it is a Painting or Gcash if it is a Digital Art.
            <br><br>

            Note:<br><br>
            In the event that the information you provided is incomplete, a validation may be sent through phone call or SMS as part of Murad Khaal Gallery\'s order verification requirement. Please be kind enough to respond if you receive either a call from (02)795 8900 or an SMS from sender Murad Khaal Gallery. If you do not receive any communication from us your order will automatically be processed.<br><br>
            Order validations will be conducted between 8am and 9pm, from Monday to Sunday. Failure to respond to either the call or the SMS will result in order cancellation/s.<br><br>
            After your order is validated, we will send you another SMS confirming the shipping of your order.
        </p>
        </div>
        ';
    }
    else{

         echo '
      <a href = "orders(planb).php"> Go Back </a>
      <div class="whiteborder">
        <h3> Dear '.$courier_name.',</h3>

         <p>
            Your Order # '.$id.' has been Delivered on '.$shipping_date.'.
            <br><br>

           <br><br>
            If you have any complaints regarding the item you bought, Please contact the owner of this item by visiting <a href="artist.php"> Artist page </a>. Thank you and have a good day!
        </p>
        </div>
        ';




    }
         }
       ?>
</body>
</html>