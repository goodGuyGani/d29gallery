<?php $servername = "localhost";
$uname = "id18835340_root";
$password1 = "8}FA0=cIDlXs4XNw";
$dbname = "id18835340_online_art_gallery_database_final";

// Create connection
 $conn = mysqli_connect($servername, $uname, $password1, $dbname);
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>

<!DOCTYPE html>

 <html>
 <head>
   <title>Guide</title>
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
</head>
 <style type="text/css">
 
 @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

*{
  font-family: "source sans pro", sans-serif;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.header{
    width: 100%;
    min-height: 100%;
    background-image: linear-gradient(rgba(8, 9, 12, 0.8),rgba(8, 9, 12, 0.8)),url(pictures/background.jpg);
    background-attachment: fixed;
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
body{
				display: flex;
  			flex-direction: column;
				align-items: center;
  			justify-content: center;
  			background-image: linear-gradient(rgba(8, 9, 12, 0.8),rgba(8, 9, 12, 0.8)),url(pictures/background.jpg);
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

.about-content{
    width: auto;
    position: relative;
    text-align: center;
    background-size: auto;
    
}
.about-content h1{
    color: black;
    font-size: 25px;
    font-weight: 600;
    margin: 12px 0px 9px;
}
.container{
     width: 80%;
     display: block;
     margin: 0px auto;
     padding: 50px 0px;
}
.container .articles{
    
     width: 100%;
}
.imgs{
    float: right;
    width: 40%;
    padding-top: 20px;
}
.imgs img{
    width: 352px;
    height: 373px;
}
.container .articles h3{
    color: #000;
    font-size: 17px;
    font-style: 'Roboto';
    font-weight: bold;
    padding-top: 20px;
}
.container .articles p{
    font-weight: lighter;
    font-style: 'Roboto';
    color: #49494a;
    font-size: 17px;
    margin-top: 20px;
}

@media screen and (max-width: 800px) {
    .about-content{
        width: auto;
        position: relative;
        text-align: center;
        background-size: auto;
        padding: 2% 7%;
        top: 30px;
    }
    .about-content h1{
        color: black;
        font-size: 25px;
        font-weight: 600;
        margin: 12px 0px 9px;
    }
    .container .articles{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
    .imgs{
        float: none;
        width: 100%;
        margin-top: 50px;
    }
    .imgs img{
        width: 300px;
        height: 300px;
        display: block;
        margin: auto;
    }
}
        </style>
 <body>
     
     
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);


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
                 <a href="cart.php" style="color:#fd3e50;position:relative;left:15%;background-color:#fd3e50;color:white;padding:5px;border-radius:5px;text-decoration: none;"><i class="fas fa-shopping-cart"></i> <span style="">'.$row3.'</span></a>
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

 <!--<button style="width: 100px;min-width:50px;margin-left:30px;margin-top:30px;position:absolute;left:20px;top:-10px;"><a class="" href="home.php" style="text-decoration:none;color: inherit;">Go Back</a></button>-->


<section>
        <div class="about-content">
          <h1 style="color: #fd3e50">Customers Guide</h1>
      </div>

      <div class="container">
          <div class="articles">
            <h3 style="color:white">
               Buying art has never been so easy!
              </h3>
              <p style="color:gray">
                1. Browse <a style="color:#fd3e50;" href="home.php">Artworks</a> tab and find art you love. Place an order by clicking the it on the artwork page. Payment is in GCASH and Cash on Delivery mode only.<br>
                      2. The admin will ship the artwork to your address by courier within 7 days. Shipping is free.<br>
                      3. The artwork is delivered to your home or office.
              </p>   
              <h3 style="color:white">
               How much does shipping cost?
              </h3>
              <p style="color:gray">
                We proudly offer free shipping to any location. Free shipping is automatically applied – no minimum purchase, coupons or promotion codes are required.
              </p> 
              <h3 style="color:white">
               Do you ship internationally?
              </h3>
              <p style="color:gray">
                No. Our destination is only open inside the Philippines only.
              </p>
              <h3 style="color:white">
               How do you ship artwork?
              </h3>
              <p style="color:gray">
                All artwork is packaged in custom built art boxes to insure safe delivery. Admin send art via FedEx, UPS and other common carriers. All artwork is shipped fully insured. Please note, a signature is required for delivery.
              </p>
              <h3 style="color:white">
               What should I do if I receive a damaged piece of art?
              </h3>
              <p style="color:gray">
                All artwork are shipped by artists in custom built art boxes to insure safe delivery, so receiving damaged art is a rare occurrence. If you receive a damaged piece of art, contact us within 24 hours at <a style="color:#fd3e50;" href="contact.php">Contact Us</a>.
              </p>
              <h3 style="color:white">
               What is the return policy?
              </h3>
              <p style="color:gray">
                We offer a seven-day money-back guarantee so you can try out the artwork in your home.
              </p>
              <h3 style="color:white">
               What type of artwork do you exhibit?
              </h3>
              <p style="color:gray">
                Murad Khaal Gallery exhibits original artworks created by new and established artists from Zamboanga.
              </p>
              <h3 style="color:white">
               Where is Murad Khaal Gallery based?
              </h3>
              <p style="color:gray">
                Our main office is located in Zamboanga city, although we are primarily a virtual gallery.
              </p>
              <h3 style="color:white">
               How does you price artwork?
              </h3>
              <p style="color:gray">
                Artwork is priced using artist input and the expertise of our curators. When artists submit images of their work, they are asked to enter desired prices for each piece. That price is then compared to curator appraisal.
              </p>
              
          </div>
    </div>
    </section>
 



<!--</body>-->
</html>
