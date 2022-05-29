<?php

session_start();
header("Cache-Control: max-age=300, must-revalidate"); 
include("functions.php");
    
if(!isset($_SESSION['USER_ID'])){
    redirect_to("login_form.php");
}

include('includes/connection.php');

$user_id = $_SESSION['USER_ID'];

$grand_total = 0;
$allItems = '';
$items = array();

$sql = "SELECT CONCAT(TITLE, '(',ARTIST,')') AS ItemQty, PRICE FROM cart WHERE USER_ID='$user_id'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()){
    $grand_total += $row['PRICE'];
    $items[] = $row['ItemQty'];
}
$allItems = implode(", ", $items);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Shipping</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    
<?php include('includes/head.php'); ?>

<style type="text/css">
    
    
*{
  font-family: "source sans pro", sans-serif;
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

@import url("https://rsms.me/inter/inter.css");

:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}






h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  font-family: 'Sanchez';
  padding: 20px;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.6rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
  color: darkslategray;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}



/* hide arrows
 Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none !important;
  margin: 0 !important;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield !important;
}

    </style>
</head>
<body>

<div class="page__section" ">
    <nav  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        </li>
        <li class="breadcrumb__group">
          <a href="artworks.php" class="breadcrumb__point r-link">Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Artwork Info</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Shipping</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </nav>
  </div>
  
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="soldbutton" style="width: 70%;height: 50px; text-align:center;border-radius:0px;cursor: none;margin-right:auto;margin-left:auto;display:block"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="soldbutton" style="width: 70%;height: 50px; text-align:center;border-radius:0px;cursor: none;margin-right:auto;margin-left:auto;display:block"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>
  
  
  
  
  
<?php
$user_id = $_SESSION['USER_ID'];
 include("includes/connection.php");
$query_category1="SELECT username,password,user_fname,user_mname,user_lname,user_gender,user_age,user_bday,user_contact,user_municipal,user_province,user_zipcode,user_brgy,user_street,user_house_number,user_email FROM user
where user_id = $user_id";

$result_category1 = mysqli_query($conn,$query_category1);
 while($row1 = mysqli_fetch_array($result_category1)){
    $fname = $row1['user_fname'];
    $mname = $row1['user_mname'];
    $lname = $row1['user_lname'];
    $gender = $row1['user_gender'];
    $age = $row1['user_age'];
    $bday = $row1['user_bday'];
    $contact = $row1['user_contact'];
    $municipal = $row1['user_municipal'];
    $province = $row1['user_province'];
    $zipcode = $row1['user_zipcode'];
    $brgy = $row1['user_brgy'];
    $street = $row1['user_street'];
    $house = $row1['user_house_number'];
    $email = $row1['user_email'];
    
    
 }


  ?>




  <div class="container" id="order">


     
     <h1>Shipping</h1>
  <p>Please enter your shipping details.</p>
  <hr />
  
  <form  action="code.php" method="POST">
  
  <div class="jumbotron p-3 mb-2 text-center">
            <h6 class="lead"><b>Artwork(s) : </b><?= $allItems; ?></h6>
            <h6 class="lead"><b>Delivery Charge: </b>Free</h6>
            <h5><b>Total Amount Payable: </b>Php <?= number_format($grand_total, 2) ?></h5>
            </div>
    <!--Values from Database -->
    
    <div style="height:50px"></div>
    
    
    <input type="hidden" name="products" value="<?= $allItems; ?>">
    <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
    <input type="hidden" name="user_id" value="<?= $user_id; ?>">

    <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="firstname" style="font-size: 12px;font-weight: bold;color:black">Full Name</span>
      <input class="field__input" type="text" placeholder="John Doe"  id ="" required name="name" 
      value="<?php echo $fname; ?> <?php echo $lname; ?>"/>
    </label>
    
    <label class="field">
      <span class="field__label" for="email" style="font-size: 12px;font-weight: bold;color:black">Email Address</span>
      <input class="field__input" type="email" placeholder="John Doe"  id ="" required name="email" 
      value="<?php echo $email; ?>"/>
    </label>

    <label class="field">
    <span class="field__label" for="address" style="font-size: 12px;font-weight: bold;color:black">Street</span>
    <input class="field__input" type="text" id="" required name="street" placeholder="Dr. Varerra St." 
    value="<?php echo $street; ?>"/>
  </label>

  <label class="field">
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">City</span>
    <input class="field__input" type="text" id="" required name="municipal" placeholder="Quezon City" 
    value="<?php echo $municipal; ?>"/>
  </label>

  <label class="field">
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">Province</span>
    <input class="field__input" type="text" id="" required name="province" placeholder="Ilocos Norte" 
    value="<?php echo $province; ?>"/>
  </label>

  <label class="field">
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">Area<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:90%;bottom:-20px"></i></span>
    <select id="area" name="area" class="field__input">
                    <option value="" disabled>Select Region</option>
                    <option value="Luzon">Luzon</option>
                    <option value="Visayas">Visayas</option>
                    <option value="Mindanao">Mindanao</option>
              </select>
  </label>
  
  <label class="field">
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">Mobile Number</span>
    <input class="field__input" type="number" id="" required name="contact" placeholder="09123456789" 
    value="0<?php echo $contact; ?>"/>
  </label>
  
  <label class="field">
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">Payment<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:86%;bottom:-20px"></i></span>
    <select id="area" name="payment" class="field__input">
                    <option value="" disabled>Select Payment</option>
                    <option value="Cash On Delivery">Cash On Delivery</option>
                    <option value="GCASH">GCASH (Pay First)</option>
              </select>
  </label>

  <label class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode" style="font-size: 12px;font-weight: bold;color:black">Zip code</span>
      <input class="field__input" type="text" id="" name="zipcode" placeholder="7000" value="<?php echo $zipcode; ?>"/>
    </label>
    <label class="field">
      <span class="field__label" for="city" style="font-size: 12px;font-weight: bold;color:black">Barangay</span>
      <input class="field__input" type="text" id="" required name="brgy"  placeholder="Tetuan" 
      value="<?php echo $brgy; ?>"/>
    </label>
    <label class="field">
      <span class="field__label" for="state" style="font-size: 12px;font-weight: bold;color:black">House Number</span>
      <input class="field__input" type="text" id="" required name="house_num"  placeholder="429" 
      value="<?php echo $house; ?>">
      </input>
    </label>
    </div>
    

          <input class = "button" style="width:200px;margin-left:auto;margin-right:auto;display:block;margin-bottom:50px;" type="submit" name="orderbtn" value="Next">

  </div>

           

  </form>
  


    </div>
<!--</body>-->
</html>