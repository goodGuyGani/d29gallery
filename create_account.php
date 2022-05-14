<?php include("includes/connection.php");


if (isset($_SESSION['errors']))
{
    header('Location: home.php');
}



include("functions.php");
if(isset($_POST['submit'])){
$upload_errors = array(

    UPLOAD_ERR_OK               => "No errors.",
    UPLOAD_ERR_INI_SIZE     => "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE  => "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL        => "Partial upload.",
  UPLOAD_ERR_NO_FILE        => "No file.",
  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
  UPLOAD_ERR_EXTENSION  => "File upload stopped by extension."
);

if(isset($_POST['submit'])) {
    // process the form data
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $target_file = basename($_FILES['file_upload']['name']);
    $upload_dir = "pictures/profile";

    // You will probably want to first use file_exists() to make sure
    // there isn't already a file by the same name.

    // move_uploaded_file will return false if $tmp_file is not a valid upload file
    // or if it cannot be moved for any other reason
    if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
        $message = "File uploaded successfully.";
    } else {
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
    }

}

//age
$username = $_POST['username'];
$password = $_POST['password'];
$USER_FNAME= $_POST['Fname'];
$USER_LNAME= $_POST['Lname'];
$USER_GENDER= $_POST['gender'];
$USER_BDAY= $_POST['bday'];
$USER_CONTACT= $_POST['contact'];
$USER_EMAIL= $_POST['email'];
$USER_MUNICIPAL= $_POST['municipal'];
$USER_PROVINCE= $_POST['province'];
$USER_ZIPCODE= $_POST['zipcode'];
$USER_BRGY= $_POST['Brgy'];
$USER_STREET= $_POST['Street'];
$USER_HOUSE_NUMBER= $_POST['House_num'];
$user_type = $_POST['type'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username= '" . $username . "' ") or die("Failed to query database ".mysqli_error($conn));

$count = mysqli_fetch_row($query);

if ($count>0) {
  echo "<script type=\"text/javascript\">window.alert('Username Already Exists!');window.location.href = 'create_account.php';</script>";
}
else{
$sql="INSERT INTO user (username,password,USER_FNAME,USER_LNAME,USER_GENDER,USER_BDAY,USER_CONTACT,USER_MUNICIPAL,USER_PROVINCE,USER_ZIPCODE,USER_BRGY,USER_STREET,USER_HOUSE_NUMBER,USER_IMAGEPATH,USER_TYPE,USER_EMAIL) VALUES ('$username','$password','$USER_FNAME','$USER_LNAME','$USER_GENDER',
 '$USER_BDAY', '$USER_CONTACT', '$USER_MUNICIPAL',
'$USER_PROVINCE','$USER_ZIPCODE','$USER_BRGY','$USER_STREET',
'$USER_HOUSE_NUMBER','$target_file','$user_type','$USER_EMAIL')" ;

if (mysqli_query($conn, $sql)) {
    echo "<script type=\"text/javascript\">window.alert('You have successfully created an account! Click OK to Login now!');window.location.href = 'login_form.php';</script>";


} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}

}
?>

<html>
  <head>
  <title>Sign Up</title>
  <link rel="shortcut icon" type="image/png" href="pictures/mgLogo.png"/>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

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
            $query_category="SELECT user_fname,user_mname,user_lname FROM user WHERE user_id = '$id'";
            $result_category = mysqli_query($conn,$query_category);

            while($row=mysqli_fetch_array($result_category)){
              //<a href= "pictures/arts/'.$row[0].'">
              echo
                 '<div class="dropdown"  style="position:relative; left: 15%">
                    <button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                         <a href="profile.php">Account Profile</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div></div>';
            }


}
else{
include("portal.php");

}
?>

<i class="fa fa-bars" onclick="showMenu()"></i>

        <!--<a href="login_form.php" class="btn">Log In/Sign up</a>-->
    </nav>
  
<script type="text/javascript">  
function matchpass(){  

var bday=document.f1.bday.value;  
var gender=document.f1.gender.value;

if (bday==null || bday==""){  
  alert("Please Enter Your Birthdate");  
  return false;  
}else if(gender==null || gender==""){  
  alert("Please Choose Your Gender");  
  return false;  
}else if(document.getElementById("file_upload").files.length == 0 ){  
  alert("Please Upload Your Profile Picture");  
  return false;  
  }



var name=document.f1.username.value;  
var password=document.f1.password.value;

if (name==null || name==""){  
  alert("Username Can't Be Blank");  
  return false;  
}else if(password.length<9){  
  alert("Password Must Be At Least 9 Characters Long.");  
  return false;  
  } 


var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.cpassword.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("Password Must Be Same!");  
return false;  
}  
}  


</script>




  <form class="signup-form" name="f1" action = "create_account.php"enctype="multipart/form-data" method="POST" 
  onsubmit="return matchpass()">


  

<!-- form header -->
<div class="form-header">
  <h1>Create Account</h1>
</div>

  


<!-- form body -->
<div class="form-body">

  <!-- Firstname and Lastname -->
  <div class="horizontal-group">
    <div class="form-group left">
      <label for="firstname" class="label-title">Firstname</label>
      <input type="text" class="form-input" type="text"  placeholder= " Enter Firstname"  type="text" id="Fname" required name="Fname" />
    </div>
    <div class="form-group right">
      <label for="lastname" class="label-title">Lastname</label>
      <input type="text" class="form-input" id="Lname" required name="Lname" placeholder= " Enter Lastname" />
    </div>
  </div>

  <div class="horizontal-group">
    <div class="form-group left">
      <label for="firstname" class="label-title">Username</label>
      <input class="form-input" type="text" id ="username"  placeholder= " Enter Username" required name="username" />
    </div>
    <div class="form-group right">
      <label for="lastname" class="label-title">Email</label>
      <input type="email" class="form-input" id="email" required name="email" placeholder="Enter Email">
    </div>
  </div>

  <!--
  <div class="form-group">
    <label for="email" class="label-title">Email*</label>
    <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">
  </div>-->

  <!-- Passwrod and confirm password -->
  <div class="horizontal-group">
    <div class="form-group left">
      <label for="password" class="label-title">Password</label>
      <input type="password" class="form-input" id="password"  placeholder= " Enter Password"  required name="password">
    </div>
    <div class="form-group right">
      <label for="confirm-password" class="label-title">Confirm Password *</label>
      <input type="password" class="form-input" id="cpassword"  placeholder= " Enter Password"  required name="cpassword">
    </div>
  </div>

  <div class="horizontal-group">
    <div class="form-group left">
      <label for="firstname" class="label-title">Contact Number</label>
      <input type="text" class="form-input" id="contact" required name="contact" placeholder="Enter Number" />
    </div>
    <div class="form-group right">
      <label for="lastname" class="label-title">Birthdate</label>
      <input type="date" class="form-input" id="bday" name="bday"/>
    </div>
  </div>


  <div class="horizontal-group">
    <div class="form-group left">
      <label for="firstname" class="label-title">House Number</label>
      <input type="text" class="form-input" id="House_num" name="House_num" placeholder="Enter House Number" />
    </div>
    <div class="form-group right">
    <label for="firstname" class="label-title">Street</label>
      <input type="text" class="form-input" id="Street" name="Street" placeholder="Enter Street" />
    </div>
  </div>

  <div class="horizontal-group">
    <div class="form-group left">
      <label for="firstname" class="label-title">Barangay</label>
      <input type="text" class="form-input" id="Brgy" name="Brgy" placeholder="Enter Barangay" />
    </div>
    <div class="form-group right">
    <label for="firstname" class="label-title">City</label>
      <input type="text" class="form-input" id="municipal" name="municipal" placeholder="Enter City" />
    </div>
  </div>

  <div class="horizontal-group">
    <div class="form-group left">
      <label for="firstname" class="label-title">Province</label>
      <input type="text" class="form-input" id="province" name="province" placeholder="Enter Province" />
    </div>
    <div class="form-group right">
    <label for="firstname" class="label-title">Zipcode</label>
      <input type="text" class="form-input" id="zipcode" name="zipcode" placeholder="Enter Zipcode" />
    </div>
  </div>
  
  
  <div class="form-group">
  <label class="label-title">What are you?</label>
      <select class="form-input" name="type" >
        <option value="Artist">Artist</option>
        <option value="Customer">Customer</option>
      </select>
        </div>

  <div class="horizontal-group">
    <div class="form-group left">
    <label for="choose-file" class="label-title">Upload Profile Picture</label><br><br>
    <input type="file" id="file_upload"  name="file_upload">


    
    </div>
    <div class="form-group right">
      <label for="lastname" class="label-title">Gender:</label>
      <div class="input-group">
        <label for="male"><input type="radio" name="gender" value="Male" id="male"> Male</label>
        <label for="female"><input type="radio" name="gender" value="Female" id="female"> Female</label>
      </div>
    </div>
  </div><br>

        </div>
  



 








  <!-- Bio -->


<!-- form-footer -->
<div class="form-footer">
  <span></span>
  <button type="submit" name="submit" class="btn2">Create</button>
</div>

</form>

<div style="height: 40px;"></div>

<!-- Script for range input label -->
<script>
var rangeLabel = document.getElementById("range-label");
var experience = document.getElementById("experience");

function change() {
rangeLabel.innerText = experience.value + "K";
}
</script>







  <style>



/*---------------------------------------*/
/* Register Form */
/*---------------------------------------*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
*{
  font-family: "source sans pro", sans-serif;
}
.header{
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(8, 9, 12, 0.8),rgba(8, 9, 12, 0.8)),url(pictures/background.jpg);
    background-size: cover;
    background-position: center;
    position: relative;
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

.signup-form {
  font-family: "Roboto", sans-serif;
  width:650px;
  margin-top: 5px;
  margin-left: auto;
  margin-right: auto;
  display: block;
  background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
  border-radius: 10px;
}

/*---------------------------------------*/
/* Form Header */
/*---------------------------------------*/
.form-header  {
  background-color: #EFF0F1;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.form-header h1 {
  font-size: 30px;
  text-align:center;
  color:#666;
  padding:20px 0;
  border-bottom:1px solid #cccccc;
}

/*---------------------------------------*/
/* Form Body */
/*---------------------------------------*/
.form-body {
  padding:10px 40px;
  color:#666;
}

.form-group{
  margin-bottom:20px;
}

.form-body .label-title {
  color:black;
  font-size: 17px;
  font-weight: bold;
}

.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 34px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}



.horizontal-group .left{
  float:left;
  width:49%;
}

.horizontal-group .right{
  float:right;
  width:49%;
}

input[type="file"] {
  outline: none;
  cursor:pointer;
  font-size: 17px;
}

#range-label {
  width:15%;
  padding:5px;
  background-color: #1BBA93;
  color:white;
  border-radius: 5px;
  font-size: 17px;
  position: relative;
  top:-8px;
}


::-webkit-input-placeholder  {
  color:#d9d9d9;
}

/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.signup-form .form-footer  {
  background-color: #EFF0F1;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding:10px 40px;
  text-align: right;
  border-top: 1px solid #cccccc;
  clear:both;
}

.form-footer span {
  float:left;
  margin-top: 10px;
  color:#999;  
  font-style: italic;
  font-weight: thin;
}

.btn2 {
   display:inline-block;
   padding:10px 20px;
   background-color: #fd3e50;
   font-size:17px;
   border:none;
   border-radius:5px;
   color:#bcf5e7;
   cursor:pointer;
}

.btn2:hover {
  background-color: crimson;
  color:white;
}



  </style>

  <!--<button style="width: 100px;min-width:50px;margin-left:30px;margin-top:30px;position:absolute;left:20px;top:-10px"><a class="" href="login_form.php" style="text-decoration:none;color: inherit;">Go Back</a></button>

  <form action = "create_account2.php"enctype="multipart/form-data" method="POST" style="background-color: rgba(0, 0, 0, 0.5);min-width: 300px;max-width:30%;height: 1370px;margin: auto;">
<div style="text-align: center;padding-top: 30px;"><strong style="text-align: center;color:white">Sign Up Here</strong></div>
  

  <div class="container">
  

    <label for="username" style="color:lightgrey">Username</label>
    <input class="userbar" type="text" id ="username"  placeholder= " Enter Username" required name="username" >

    <label for="password" style="color:lightgrey">Password</label>
    <input class="passwdbar" type="password" id="password"  placeholder= " Enter Password"  required name="password">

    <label for="type" style="color:lightgrey;" >I am an</label>
    <select class="select" name="type" style="height: 40px;width:100%;margin-top:5px;margin-bottom:5px">
      <option value="Artist" selected>Artist</option>
      <option value="Customer">Customer</option>
    </select><br>

    <label for="Fname" style="color:lightgrey">First Name</label>
    <input class="userbar" type="text"  placeholder= " Enter Firstname"  type="text" id="Fname" required name="Fname">

    <label for="Lname" style="color:lightgrey">Last Name</label>
    <input class="userbar" type="text" id="Lname" required name="Lname" placeholder= " Enter Lastname" >

    <label name="gender" style="color:lightgrey;">Gender</label>
    <select class="select" name="gender" style="height: 40px;width:100%;margin-top:5px;margin-bottom:5px">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select><br>

    <label for="bday" style="color:lightgrey">Birthdate</label>
    <input class="userbar" type="text" id="bday" name="bday" placeholder="Enter Birthdate">

    <label for="contact" style="color:lightgrey">Contact Number</label>
    <input class="userbar" type="text" id="contact" required name="contact" placeholder="Enter Number">

    <label for="email" style="color:lightgrey">Email Address</label>
    <input class="userbar" type="text" id="email" required name="email" placeholder="Enter Email">

    <label for="House_num" style="color:lightgrey">House Number</label>
    <input class="userbar" type="text" id="House_num" name="House_num" placeholder="Enter House Number">

    <label for="Street" style="color:lightgrey">Street</label>
    <input class="userbar" type="text" id="Street" name="Street" placeholder="Enter Street">

    <label for="Brgy" style="color:lightgrey">Brgy</label>
    <input class="userbar" type="text" id="Brgy" name="Brgy" placeholder="Enter Barangay">

    <label for="municipal" style="color:lightgrey">City</label>
    <input class="userbar" type="text" id="municipal" name="municipal" placeholder="Enter City">

    <label for="province" style="color:lightgrey">Province</label>
    <input class="userbar" type="text" id="province" name="province" placeholder="Enter Province">

    <label for="zipcode" style="color:lightgrey">Zipcode</label>
    <input class="userbar" type="text" id="zipcode" name="zipcode" placeholder="Enter Zipcode">

    <label for="file_upload" style="color:lightgrey;">Profile Image</label><br>
    <input type="file" id="file_upload"  name="file_upload" style="margin-top: 5px;">
    

		<button class="loginbar" type="submit" name="submit" value="&#10093;&#10093; Create">Sign Up</button>
		<div style="text-align: center;color:white">
    
			</div>	
  </div>-->



  </body>
</html>