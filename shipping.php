<?php session_start();
include("functions.php");
    
if(!isset($_SESSION['USER_ID'])){
    redirect_to("login_form.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shipping</title>
    <?php
    
    $user_id = $_SESSION['USER_ID'];
    $art_id = $_SESSION['art_id'];
include("includes/head.php");
include("includes/connection.php");
$query_category11="SELECT art_work.user_id
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND
                            art_id = '$art_id'";
        $result_category11 = mysqli_query($conn,$query_category11);

        while($row11=mysqli_fetch_array($result_category11)){
          if($user_id == $row11['user_id']){
            echo "<script type=\"text/javascript\">window.alert('You cant buy your own ArtWork');window.location.href = 'info_art.php?id=$art_id';</script>";
          }
          else{

          }
}
?>

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

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  box-sizing: border-box;
}

@supports (font-variation-settings: normal) {
  html {
    font-family: "Inter var", sans-serif;
  }
}

body {
  margin: 0;
  
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

 




  <div class="container">


     <form  action = "order-summary.php" method="POST" ><br><br><br><br>
     <h1>Shipping</h1>
  <p>Please enter your shipping details.</p>
  <hr />
    <!--Values from Database -->

    <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="firstname" style="font-size: 12px;font-weight: bold;color:black">Full Name</span>
      <input class="field__input" type="text" placeholder="John Doe"  id ="" required name="name" 
      value="<?php echo $fname; ?> <?php echo $lname; ?>"/>
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
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">Area</span>
    <select id="area" name="area" class="field__input">
                    <option value="luzon">Luzon</option>
                    <option value="visayas">Visayas</option>
                    <option value="mindanao">Mindanao</option>
              </select>
  </label>
  
  <label class="field">
    <span class="field__label" for="country" style="font-size: 12px;font-weight: bold;color:black">Mobile Number</span>
    <input class="field__input" type="text" id="" required name="contact" placeholder="09123456789" 
    value="0<?php echo $contact; ?>"/>
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

    <?php
            if($_SESSION['cat'] == 'Sculpture'){
            echo '<p class="fsize" >Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="" required name="items"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Max Amount:  '.$_SESSION['art_stock'].' <br><br><br>  </p>';
            }

            ?>
          <input class = "button" style="width:200px;margin-left:auto;margin-right:auto;display:block;margin-bottom:50px;" type="submit" name="next" value="Next">

  </div>

           

  </form>

    </div>
<!--</body>-->
</html>