<?php session_start();

?>


<!DOCTYPE html>
 <html>
 <head>
 <title>Artworks</title>
 
</head>
<body>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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
  border-radius: 0px;
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
</style>

<?php 

include("includes/head.php"); ?>

<div class="page__section">
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        </li>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
</div>
  </div>
  
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="soldbutton" style="width:100%;height: 50px; text-align:center;border-radius:0px;cursor: none;"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="soldbutton" style="width:100%;height: 50px; text-align:center;border-radius:0px;cursor: none;"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>

        <div class="myDiv" style="text-align:center;margin-top:50px">
              <form action="searchart.php" method="POST" style="padding-bottom: 60px;">

              <input style="width: 40%;min-width:200px;font-family: 'Sans-serif';background-color:white;color:black;" class="search" type="text" id="Search" name="Search" placeholder="What are you looking for?">



                  <select id="Category" name="Category" style="width: 200px;">
<?php

    $query3 = "SELECT * FROM category";
    $result3 = mysqli_query($conn, $query3);


?>

                  <option value="">Category</option>
                 <?php while($row3 = mysqli_fetch_array($result3)):; ?>
                  <option value="<?php echo $row3['CAT_NAME']; ?>"><?php echo $row3['CAT_NAME']; ?></option>
                  <?php endwhile; ?>
                  </select>

                 <input class="myBtn" type="submit" name="submit" value="Search" style="font-family: 'Sans-serif'; background-color:#fd3e50;">
                  </form>
                  </div>
                  <div class="image-gallery">
    <?php
    
$limit = 14;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

    $query_category1="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_status,art_work.art_category, art_work.USER_ID
            FROM art_work,user
            where art_work.user_id = user.user_id  ORDER BY ART_ID DESC LIMIT $start, $limit";
            
            $result1 = $conn->query("SELECT count(ART_ID) AS ART_ID FROM art_work WHERE ART_STATUS = 'Available'");
            $userCount = $result1->fetch_all(MYSQLI_ASSOC);
            $total = $userCount[0]['ART_ID'];
            $pages = ceil($total / $limit);

            $Previous = $page - 1;
            $Next = $page + 1;
            
            $Previous = ($page == 1) ? 1 : $page - 1;
            $Next = ($page == $pages) ? $pages : $page + 1;
            
            
            $result_category1 = mysqli_query($conn,$query_category1);
            if(mysqli_num_rows($result_category1) <=0)
            {
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="Center">No Artworks Available </h1>';
            }
            else{
            while($row1 = mysqli_fetch_array($result_category1))
            {
            if($row1['art_status'] == 'Available' || $row1['art_status'] == 'AVAILABLE'){
                
            
              $price = number_format($row1['art_price']);
                echo '<div class="image-box" >
                <a href=info_art.php?id='.$row1['art_id'].' style="color:white;"><img src="pictures/arts/'.$row1['art_imagepath'].'" alt="img.jpg" /></a>
                <div class="overlay">
                  <div class="details">
                    <h3 class="title">
                      <a href=info_art.php?id='.$row1['art_id'].' style="color:white;">'.$row1['art_title'].'</a>
                    </h3>
                    <span class="category">
                      <a href="artist_info.php?id='.$row1['USER_ID'].'" style="color:lightgray">'.$row1['user_fname'].' '.$row1['user_mname'].' '.$row1['user_lname'].'</a><br>
                      <a href="#" style="color:grey">Php '.$price.'</a><br><br>


                    <form action="code.php" method="POST">
                    
                    <input type="hidden" name="art_image" value="pictures/arts/'.$row1['art_imagepath'].'">
                    <input type="hidden" name="art_artist" value="'.$row1['user_fname'].' '.$row1['user_lname'].'">
                    <input type="hidden" name="user_id" value="'. $user .'">
                    <input type="hidden" name="art_id" value="'.$row1['art_id'].'">
                    <input type="hidden" name="art_title" value="'.$row1['art_title'].'">
                    <input type="hidden" name="art_price" value="'.$row1['art_price'].'">
                    <input type="hidden" name="art_quantity" value="1">

                      <input  class="btn3" type="submit" name="addcartbtn" value="Add To Cart">
                    </form>
                    </span>
                  </div>
                </div>
              </div>';
            }
            }
}

?>
</div>
<nav aria-label="Page navigation example" class="justify-content-center">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="artworks.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="artworks.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="artworks.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>

<div class="footer">
            <div class="container">
                <div class="row">
                   
                <div class="col-md-6 col-lg-3">
                        <div class="footer-about">
                            <h3>About Us</h3>
                            <p>
                                Muradkhaal Gallery's mission is to provide a promotional platform for different artists to share their masterpieces and an easier way to buy artwork online.
                            </p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h3>Get In Touch</h3>
                            <p><i class="fa fa-book"></i>700 San Jose Rd, Zamboanga</p>
                            <p><i class="fa fa-phone"></i>+092 044 05899</p>
                            <p><i class="fa fa-envelope"></i>muradkhaal@gmail.com</p>
                            <p><i class="far fa-clock"></i>Mon - Fri, 9AM - 10PM</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="footer-links">
                            <h3>Useful Links</h3>
                            <a href="artworks.php">All Artworks</a>
                            <a href="artworks(sold).php">Sold Artworks</a>
                            <a href="artist.php">Artist</a>
                            <a href="about_us.php">About</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                        
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-project">
                            <h3>Latest Sold Projects</h3>
                            
                     
                            <?php

    $query_category1="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_status,art_work.art_category
            FROM art_work,user
            where art_work.user_id = user.user_id AND art_work.art_status = 'sold' ORDER BY art_work.art_title ASC LIMIT 6";
            $result_category1 = mysqli_query($conn,$query_category1);
            if(mysqli_num_rows($result_category1) <=0)
            {
          
            }
            else{
            while($row1 = mysqli_fetch_array($result_category1))
            {
                echo '<a href=info_art.php?id='.$row1['art_id'].' style="color:white;"><img style="height:100px" src="pictures/arts/'.$row1['art_imagepath'].'" alt="Image"></a>';
            }
}
?>
                        </div>
                    </div>

                </div>
            </div>
            
           <!-- Newswletter -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        
                    <div class="col-md-6">
                            <div class="copy-text">
                                <p>&copy; <a href="#">KHANA Developer</a>. All Rights Reserved</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="copy-menu">
                                <a href="about_us.php">About</a>
                                <a href="guide.php">Guide</a>
                                <a href="contact.php">Contact</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


<style>

  


.footer .copyright .copy-menu {
    position: relative;
    font-size: 0;
    text-align: right;
}

.footer .copyright .copy-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .3);
    color: #999999;
    font-size: 16px;
    font-weight: 400;
}

.footer .copyright .copy-menu a:hover {
    color: #0085ff;
}

.footer .copyright .copy-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

.footer .copyright {
    position: relative;
    padding: 25px 0;
    background: #000000;
}

.footer .copyright .copy-text p {
    margin: 0;
    font-size: 16px;
    font-weight: 400;
    color: #999999;
}

.footer .copyright .copy-text p a {
    color: #0085ff;
    text-decoration: none;
}

.footer .copyright .copy-text p a:hover {
    color: #ff008c;
}

  .footer .footer-project {
    float: left;
    font-size: 0;
}

.footer .footer-project a {
    padding: 0 8px 8px 0;
    display: block;
    width: 33.33%;
    float: left;
}

.footer .footer-project a img {
  width: 100%;
  height: 30%;
  object-fit: cover;
}

.footer .footer-links a {
    margin-bottom: 6px;
    padding-left: 15px;
    color: #999999;
    display: block;
}

.footer .footer-links a:last-child {
    margin: 0;
}

.footer .footer-links a:hover {
    color: #0085ff;
}

.footer .footer-links a::before {
    position: absolute;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    left: 0;
}

.footer .footer-contact p {
    margin-bottom: 10px;
    font-size: 16px;
    color: #999999;
}

.footer .footer-contact i {
    margin-right: 10px;
    font-size: 16px;
    color: #999999;
}

.footer .footer-contact a:last-child i {
    margin: 0;
}

.footer .footer-contact a:hover i {
    color: #0085ff;
}

  .footer .footer-social {
    position: relative;
    margin-top: 20px;
}

.footer .footer-social a {
    text-align: center;
    color: #999999;
    font-size: 14px;
    border: 1px solid #999999;
    display: inline-block;
    width: 35px;
    height: 35px;
    padding: 6px 0;
    border-radius: 35px;
}


.footer .footer-social a:hover {
    color: #ffffff;
    background: #0085ff;
    border-color: #0085ff;
}

.footer {
    position: relative;
    padding-top: 45px;
    background: #121518;
}

.footer .footer-about,
.footer .footer-contact,
.footer .footer-links,
.footer .footer-project {
    position: relative;
    margin-bottom: 45px;
    color: #999999;
}

.footer .footer-about h3,
.footer .footer-contact h3,
.footer .footer-links h3,
.footer .footer-project h3 {
    position: relative;
    margin-bottom: 20px;
    padding-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
    color: #eeeeee;
}

.footer .footer-about h3::after,
.footer .footer-contact h3::after,
.footer .footer-links h3::after,
.footer .footer-project h3::after {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    left: 0;
    bottom: 0;
    background: #eeeeee;
}

@media (max-width: 767.98px) {
    .footer .copyright .copy-text,
    .footer .copyright .copy-menu {
        text-align: center;
    }
    
    .footer .copyright .copy-text p {
        margin-bottom: 5px;
    }
    
}

body {
  margin: 0;
  padding: 0;
  position: relative;
  background-color: #fafafa;
  font-family: "source sans pro", sans-serif;
}

.image-gallery {
  width: 100%;
  max-width: 1350px;
  margin: 0 auto;
  padding: 50px 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-auto-rows: 350px;
  grid-auto-flow: dense;
  grid-gap: 20px;
}

.image-gallery .image-box {
  position: relative;
  background-color: #d7d7d8;
  overflow: hidden;
}

.image-gallery .image-box:nth-child(7n + 1) {
  grid-column: span 2;
  grid-row: span 2;
}

.image-gallery .image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.5s ease;
}

.image-gallery .image-box:hover img {
  transform: scale(1.1);
}

.image-gallery .image-box .overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: all 0.5s ease;
  z-index: 1;
}

.image-gallery .image-box:hover .overlay {
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  opacity: 1;
}

.image-gallery .image-box .details {
  text-align: center;
}

.image-gallery .image-box .details .title {
  margin-bottom: 8px;
  font-size: 24px;
  font-weight: 600;
  position: relative;
  top: -5px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.image-gallery .image-box .details .category {
  font-size: 18px;
  font-weight: 400;
  position: relative;
  bottom: -5px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.image-gallery .image-box:hover .details .title {
  top: 0px;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s 0.2s ease;
}

.image-gallery .image-box:hover .details .category {
  bottom: 0;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s 0.2s ease;
}

.image-gallery .image-box .details .title a,
.image-gallery .image-box .details .category a {
  color: #222222;
  text-decoration: none;
}

/* Let's make it responsive */
@media (max-width: 768px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 250px;
  }

  .image-gallery .image-box:nth-child(7n + 1) {
    grid-column: unset;
    grid-row: unset;
  }
  .myBtn{
    width: 300px;
  }
}
select {
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          border: 1px solid black;
          background-color: white;

          width: 250px;
          height: 40px;
        }

       input{
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
           border: 1px solid rgb(33,33,33);
          font-weight: bold;
          background-color: #234;     
          color: white;
          width: 150px;
          height: 40px;
       }
</style>

<!--</body>-->