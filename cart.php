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

if(!isset($_SESSION['USER_ID'])){
    header("Location: login_form.php");
}
?>

<!DOCTYPE html>

 <html>
 <head>
   <title>My Cart</title>
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
    height: 100%;
    background-image: linear-gradient(rgba(8, 9, 12, 0.8),rgba(8, 9, 12, 0.8)),url(pictures/background.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    position: relative;
    background-repeat: no-repeat;
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
body{
				display: flex;
  			flex-direction: column;
				align-items: center;
  			justify-content: center;
  			background-image: linear-gradient(rgba(8, 9, 12, 0.8),rgba(8, 9, 12, 0.8)),url(pictures/background.jpg);
  			background-size: cover;
  			
			}
      /* Bordered form */
}
.btn3{
    background-color:#fd3e50;
    line-height: 21px;
    border: 2px;
    color: white;
    text-decoration: none;
    border: 2px solid;
    border-radius: 5px;
    border-color: #fd3e50;
    padding: 8px 23px;
    transition: transform .4;
}

.btn3:hover{
    background-color: #white;
    
}

.soldbutton{
          border-radius: 8px;
           color: white;
           font-size: 15px;
           font-weight: bold;
           text-align: center;
           border: none;
           box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
           background-color: crimson;
           padding: 15px;
           width: 100%;
           height: 70px;
        }
        

.CartContainer{
    margin-left:auto;
    margin-right:auto;
    display:block;
	width: 70%;
	height: 90%;
	background-color: #ffffff;
    box-shadow: 0px 10px 20px #1687d933;
}

.Header{
	margin: auto;
	width: 90%;
	height: 15%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.Heading{
	font-size: 20px;
	font-weight: 700;
	color: #2F3841;
}

.Action{
	font-size: 14px;
	font-weight: 600;
	color: #E44C4C;
	cursor: pointer;
	border-bottom: 1px solid #E44C4C;
}

.Cart-Items{
	margin: auto;
	width: 90%;
	height: 30%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.image-box{
	width: 15%;
	text-align: center;
}
.about{
	height: 100%;
	width: 24%;
}
.title{
    margin-bottom:20px;
	padding-top: 10px;
	line-height: 10px;
	font-size: 32px;
	font-weight: bold;
	color: #202020;
}
.subtitle{
    margin-top:20px
	line-height: 15px;
	font-size: 18px;
	font-weight: 600;
	color: #909090;
}

.counter{
	width: 15%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.btn{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background-color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 20px;
	font-weight: 900;
	color: #202020;
	cursor: pointer;
}
.count{
	font-size: 20px;
	font-weight: 600;
	color: #202020;
}

.prices{
	height: 100%;
	text-align: right;
}
.amount{
	padding-top: 20px;
	font-size: 26px;
	font-weight: 800;
	color: #202020;
}
.save{
	padding-top: 5px;
	font-size: 14px;
	font-weight: 600;
	color: #1687d9;
	cursor: pointer;
}
.remove{
	padding-top: 5px;
	font-size: 14px;
	font-weight: 600;
	color: #E44C4C;
	cursor: pointer;
}

.pad{
	margin-top: 5px;
}

hr{
	width: 66%;
	float: right;
	margin-right: 5%;
}
.checkout{
	float: right;
	margin-right: 5%;
	width: 28%;
}
.total{
	width: 100%;
	display: flex;
	justify-content: space-between;
}
.Subtotal{
	font-size: 22px;
	font-weight: 700;
	color: #202020;
}
.items{
	font-size: 16px;
	font-weight: 500;
	color: #909090;
	line-height: 10px;
}
.total-amount{
	font-size: 36px;
	font-weight: 900;
	color: #202020;
}
.button{
	margin-top: 10px;
	width: 100%;
	height: 40px;
	border: none;
	background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
	border-radius: 20px;
	cursor: pointer;
	font-size: 16px;
	font-weight: 600;
	color: #202020;
}

.heading {
font-weight:bold;
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

.btn3{
    background-color:#fd3e50;
    line-height: 21px;
    border: 2px;
    color: white;
    text-decoration: none;
    border: 2px solid;
    border-radius: 5px;
    border-color: #fd3e50;
    padding: 8px 23px;
    transition: transform .4;
}

.btn3:hover{
    background-color: #white;
    
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
                         <a href="sent_request.php">Sent Request</a>
                         <a href="myartworks_available.php">My Artworks</a>
                         <a href="myartworks_sold.php">My Sold Artworks</a>
                         <a href="orders.php">My Orders</a>
                         <a href="my_collection.php">My Collections</a>
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
                         <a href="my_collection.php">My Collections</a>
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
          <h1 style="color: #fd3e50;font-size:50px">My Cart</h1>
          
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
    
      </div>

      
    <?php
    $user_id = $_SESSION['USER_ID'];
    
    $query_category1="SELECT * FROM cart WHERE cart.USER_ID = '$user_id' ORDER BY ART_ID DESC";
            
            
            $result_category1 = mysqli_query($conn,$query_category1);
            if(mysqli_num_rows($result_category1) <=0)
            {
            echo '<h1 align="Center" style="margin-top:5%;margin-bottom:5%;color:white">Your Cart Is Empty</h1>';
            }
            else{
              
            while($row1 = mysqli_fetch_array($result_category1)){
                $price = number_format($row1['PRICE']);
                echo '
                <div class="CartContainer" style="padding-top:50px">
   	                <div class="Header">
   	                   	                    </div>
   	                    
   	                    
   	                <div class="Cart-Items" style="padding-bottom:50px">
   	   	                <div class="image-box">
   	   	  	                <img src="'.$row1['IMAGE'].'" style={{ height="120px" }} />
   	   	                </div>
   	   	                <div class="about">
   	   	  	                <h1 class="" style="">'.$row1['TITLE'].'</h1>
   	   	  	                <h3 class="subtitle" style="">'.$row1['ARTIST'].'</h3>
   	   	                </div>
   	   	                <div class="counter">
   	   	  	                <div class="count">Quantity: '.$row1['QUANTITY'].'</div>
   	   	                </div>
   	   	                <div class="prices">
   	   	  	                <div class="amount">Php '.$price.'</div>
   	   	  	                    
   	   	  	                    <form action="code.php" method="POST">
   	   	  	                    <input type="hidden" name="user_id" value="'.$row1['$user_id'].'">
   	   	  	                    <input type="hidden" name="cart_id" value="'.$row1['CART_ID'].'">
   	   	  	                    <input type="hidden" name="art_id" value="'.$row1['ART_ID'].'">
   	   	  	                    <input class="btn3" type="submit" name="removecartbtn" value="Remove">
   	   	  	                    </form>
   	   	  	                    
   	   	                    </div>
   	                    </div>
   	                    

   	 	                
   	 	                </div>
   	                    

   	                    
   	                    
   	                    
   	                    
                ';
            
            }
}

    

?>
  </div>
  <form action="code.php" method="POST" style="width:70%;margin-left:auto;margin-right:auto; display:block">
   	   	  	                    
   	   	  	                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
   	   	  	                    <input class="btn3" style="width:100%;border-radius:0px;font-weight:bold" type="submit" name="emptycartbtn" value="Click To Empty Cart">
   	   	  	                    </form>
  </div>
  
<?php

$result = mysqli_query($conn, "SELECT SUM(PRICE) AS value_sum FROM cart WHERE cart.USER_ID = '$user_id'"); 
$row = mysqli_fetch_assoc($result); 
$sum = number_format($row['value_sum']);




$sql = "SELECT COUNT(*) AS count from cart WHERE cart.USER_ID = '$user_id'";
            $result1 = $conn->query($sql);
            $data =  $result1->fetch_assoc();


?>
  <div class="checkout" style="margin-top:20px;margin-right:250px">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal" style="color:white">Sub-Total</div>
   	 		<div class="items"><?php echo $data['count']; ?> items</div>
   	 	</div>
   	 	<div class="total-amount" style="color:white">Php <?php echo $sum; ?></div>
   	 </div>
   	 <a href="checkout.php"><button class="button" style="margin-bottom:100px">Checkout</button></a></div>
   </div>
    </section>


  
  
  
  
  
  
  
  <!--<?php
    $user_id = $_SESSION['USER_ID'];
    
    $query_category1="SELECT * FROM cart WHERE cart.USER_ID = '$user_id' ORDER BY ART_ID DESC";
            
            
            $result_category1 = mysqli_query($conn,$query_category1);
            if(mysqli_num_rows($result_category1) <=0)
            {
            echo '<h1 align="Center">Your Cart Is Empty</h1>';
            }
            else{
            while($row1 = mysqli_fetch_array($result_category1)){
                $price = number_format($row1['PRICE']);
                echo '
                <div class="CartContainer" style="padding-top:50px">
   	                <div class="Header">
   	                    </div>
   	                    
   	                    
   	                <div class="Cart-Items" style="padding-bottom:50px">
   	   	                <div class="image-box">
   	   	  	                <img src="'.$row1['IMAGE'].'" style={{ height="120px" }} />
   	   	                </div>
   	   	                <div class="about">
   	   	  	                <h1 class="" style="">'.$row1['TITLE'].'</h1>
   	   	  	                <h3 class="subtitle" style="">250ml</h3>
   	   	                </div>
   	   	                <div class="counter">
   	   	  	                <div class="count">Quantity: '.$row1['QUANTITY'].'</div>
   	   	                </div>
   	   	                <div class="prices">
   	   	  	                <div class="amount">Php '.$price.'</div>
   	   	  	                
   	   	  	                
   	   	  	                <form action="code.php" method="POST">
   	   	  	                    
   	   	  	                    <input type="hidden" name="cart_id" value="'.$row1['CART_ID'].'">
   	   	  	                    <input class="remove" type="submit" name="removecartbtn" value="Remove">
   	   	  	                </form>
   	   	  	                
   	   	                    </div>
   	                    </div>
   	                    

   	 	                
   	 	                </div>
   	                    

   	                    
   	                    
   	                    
   	                    
                ';
            
            }
}

    

?>
  </div>
  </div>
  
  
  <div class="checkout" style="margin-top:20px;margin-right:250px">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal">Sub-Total</div>
   	 		<div class="items">2 items</div>
   	 	</div>
   	 	<div class="total-amount">$6.18</div>
   	 </div>
   	 <button class="button" style="margin-bottom:100px">Checkout</button></div>
   </div>-->
  
  


 <!--<div class="CartContainer" style="padding-top:50px">
   	   <div class="Header">
   	   	<h3 class="Heading">Shopping Cart</h3>
   	   	<h5 class="Action">Remove all</h5>
   	   </div>

   	   <div class="Cart-Items" style="padding-bottom:50px">
   	   	  <div class="image-box">
   	   	  	<img src="images/apple.png" style={{ height="120px" }} />
   	   	  </div>
   	   	  <div class="about">
   	   	  	<h1 class="title">Apple Juice</h1>
   	   	  	<h3 class="subtitle" style="">250ml</h3>
   	   	  </div>
   	   	  <div class="counter">
   	   	  	<div class="count">Quantity: 1</div>
   	   	  </div>
   	   	  <div class="prices">
   	   	  	<div class="amount">$2.99</div>
   	   	  	<div class="remove"><u>Remove</u></div>
   	   	  </div>
   	   </div>

   	   
   	 <div class="checkout" style="margin-top:20px">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal">Sub-Total</div>
   	 		<div class="items">2 items</div>
   	 	</div>
   	 	<div class="total-amount">$6.18</div>
   	 </div>
   	 <button class="button" style="margin-bottom:100px">Checkout</button></div>
   </div>-->





<!--</body>-->