<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
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

<style type="text/css">



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


.container {
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



  <h1 style="margin-left: 30px;">Profile</h1>
  <p style="margin-left: 30px;">Edit or delete your account details.</p>
  <form class="form" action = "action_profile2.php"enctype="multipart/form-data" method="POST" >
  <p class="fsize-title" style="text-align: center;"> Profile picture: </p>
            <p class="fsize-img" style="text-align: center;">

<?php
$query_category="SELECT user_imagepath FROM user WHERE user_id = $user_id";
$result_category = mysqli_query($conn,$query_category);
while($row=mysqli_fetch_row($result_category))
{

    echo ' <img class="img" style="height:200px;width:200px;border-radius:30px;object-fit: cover;" src="../pictures/profile/'.$row[0].'" ';
    } ?>
    <br><br><br>
          <input type="file" name="file_upload" style="margin-left: 60px;"/>
  <hr />
  
    <div style="margin-left: 30px;margin-right:30px;">
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
    <input class="button" type="submit" name="submit" style="margin-bottom:30px;width:200px;margin-left:auto;margin-right:auto;display:block" value="Save">
  </form>
  </div>

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>  

