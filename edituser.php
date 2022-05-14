<?php session_start();
include("admin.php");
?>
<?php
$user_id = $_GET['id'];
$_SESSION['edit_id'] = $user_id;
 include("includes/connection.php");
$query_category1="SELECT username,password,user_fname,user_mname,user_lname,user_gender,user_age,user_bday,user_contact,user_municipal,user_province,user_zipcode,user_brgy,user_street,user_house_number,user_email FROM user
where user_id = $user_id";

$result_category1 = mysqli_query($conn,$query_category1);
 while($row1 = mysqli_fetch_array($result_category1)){
    $username = $row1['username'];
    $password = $row1['password'];
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
<!DOCTYPE html>

 <html>
 <head>
</head>
<style type="text/css">

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
 <body background="pictures/home.png">
 <script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete your Account?  (WARNING ALL YOUR DATA IN THE WEBSITE WILL BE DELETED INCLUDING YOUR ORDERS)'))
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
          <a href="home.php" class="breadcrumb__point r-link">Admin</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="artworks.php" class="breadcrumb__point r-link">Edit User</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>


  <div class="container">
  <h1>Profile</h1>
  <p>Edit or delete your account details.</p>
  <form class="form" action = "action_profile.php"enctype="multipart/form-data" method="POST" >
  <p class="fsize-title" style="text-align: center;"> Profile picture: </p>
            <p class="fsize-img" style="text-align: center;">

<?php
$query_category="SELECT user_imagepath FROM user WHERE user_id = $user_id";
$result_category = mysqli_query($conn,$query_category);
while($row=mysqli_fetch_row($result_category))
{

    echo ' <img class="img" style="height:200px;width:200px;border-radius:30px;object-fit: cover;" src="pictures/profile/'.$row[0].'" ';
    } ?>
    <br><br><br>
          <input type="file" name="file_upload" style="margin-left: 60px;"/>
  <hr />
  
    
  <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="username" style="font-size: 12px;font-weight: bold;color:black">Username</span>
      <input class="field__input" type="text" required name="username" value="<?php echo $username; ?>" />
    </label>
    
  <label class="field">
    <span class="field__label" for="password" style="font-size: 12px;font-weight: bold;color:black">Password</span>
    <input class="field__input" type="text" required name="password" value="<?php echo $password; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="Fname" style="font-size: 12px;font-weight: bold;color:black">First Name</span>
    <input class="field__input" type="text" id="Fname" required name="Fname" value="<?php echo $fname; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="Lname" style="font-size: 12px;font-weight: bold;color:black">Last Name</span>
    <input class="field__input" type="text" id="Lname" required name="Lname" value="<?php echo $lname; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="contact" style="font-size: 12px;font-weight: bold;color:black">Mobile Number</span>
    <input class="field__input" type="text" id="contact" required name="contact" value="0<?php echo $contact; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="email" style="font-size: 12px;font-weight: bold;color:black">Email Address</span>
    <input class="field__input" type="text" id="contact" required name="email" value="<?php echo $email; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="email" style="font-size: 12px;font-weight: bold;color:black">Birthday</span>
    <input class="field__input" type="text" id="contact" required name="bday" value="<?php echo $bday; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="municipal" style="font-size: 12px;font-weight: bold;color:black">City</span>
    <input class="field__input" type="text" id="municipal" name="municipal" value="<?php echo $municipal; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="province" style="font-size: 12px;font-weight: bold;color:black">Province</span>
    <input class="field__input" type="text" id="province" name="province" value="<?php echo $province; ?>"/>
  </label>
  <label class="field">
    <span class="field__label" for="Street" style="font-size: 12px;font-weight: bold;color:black">Street</span>
    <input class="field__input" type="text" id="Street" name="Street" value="<?php echo $street; ?>"/>
  </label>
  <label class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode" style="font-size: 12px;font-weight: bold;color:black">Zip code</span>
      <input class="field__input" type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode; ?>"/>
    </label>
    <label class="field">
      <span class="field__label" for="Brgy" style="font-size: 12px;font-weight: bold;color:black">Barangay</span>
      <input class="field__input" type="text" id="Brgy" name="Brgy" value="<?php echo $brgy; ?>"/>
    </label>
    <label class="field">
      <span class="field__label" for="house_num" style="font-size: 12px;font-weight: bold;color:black">House Number</span>
      <input class="field__input" type="text" id="House_num" name="House_num" value="<?php echo $house; ?>">
      </input>
    </label>
    </div>
    <input class="button" type="submit" name="submit" style="margin-bottom:30px" value="Save">
  </form>

<!--
   <form action = "action_profile.php"enctype="multipart/form-data" method="POST">
<h2 class="headspace font infospace"> Account Information <hr class="hr" style="border-bottom: 4px solid #2d70d5;"> </h2>


<p class="fsize-title"> Profile picture: </p>
            <p class="fsize-img">
<?php
$query_category="SELECT user_imagepath FROM user WHERE user_id = $user_id";
$result_category = mysqli_query($conn,$query_category);
while($row=mysqli_fetch_row($result_category))
{

    echo ' <img class="img" src="pictures/profile/'.$row[0].'" height = 30%';
    } ?>
<table class="table" style="border-collapse: collapse; font: 12px YU Gothic UI;" border="1" cellspacing="5" cellpadding="5">
<tbody style="box-shadow: 1px 1.732px 10px 0px rgb( 45, 112, 213);"><tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
          <input type="file" name="file_upload" />
</td>
</tr>
</tbody></table><br>
 <p class="fsize-text">
                      Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" required name="username" value="<?php echo $username; ?>"><br><br>

                      Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" required name="password" value="<?php echo $password; ?>"><br><br>


        <h2  class="headspace2 font infospace"> Personal Information <hr class="hr" style="border-bottom: 4px solid #2d70d5;"> </h2>

            <div class="spacing">
            First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Fname" required name="Fname" value="<?php echo $fname; ?>"><br><br>

            Middle name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Mname" name="Mname" value="<?php echo $mname; ?>"><br><br>

            Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Lname" required name="Lname" value="<?php echo $lname; ?>"><br><br>

            Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="gender" required name="gender" value="<?php echo $gender; ?>"><br><br>

            Birthdate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="bday" name="bday" value="<?php echo $bday; ?>"><br><br>

            Contact Number:&nbsp;&nbsp;<input class="textbox" type="text" id="contact" required name="contact" value="0<?php echo $contact; ?>"><br><br>
            Email Address:&nbsp;&nbsp;<input class="textbox" type="text" id="contact" required name="email" value="<?php echo $email; ?>"><br><br>

            Municipal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="municipal" name="municipal" value="<?php echo $municipal; ?>"><br><br>

            Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="textbox" type="text" id="province" name="province" value="<?php echo $province; ?>"><br><br>
            Zipcode:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode; ?>"><br><br>
            Brgy:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Brgy" name="Brgy" value="<?php echo $brgy; ?>"><br><br>
            Street:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Street" name="Street" value="<?php echo $street; ?>"><br><br>
            House Number:&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="House_num" name="House_num" value="<?php echo $house; ?>">

             </div>
                <input class="inputbar" type="submit" name="submit" value="Save">


        </form>
    </p>-->


</form>
</body>
</html>

