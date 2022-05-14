<?php include("includes/connection.php");
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
  </head>
  <body>

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
  </div>


<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

  body{
				padding-top: 80px;
				display: flex;
  			flex-direction: column;
				align-items: center;
  			justify-content: center;
  			background: url("https://wallpapercave.com/wp/wp7728987.jpg");
  			background-size: cover;
			}
      /* Bordered form */
form {
  border: black;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
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

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
        </style>
</section>
  </body>
</html>