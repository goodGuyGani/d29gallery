<!DOCTYPE html>
<html>
<head>
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
  height: 100px;
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

</style>


</head>
<body>


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
                            <h3>Latest Sold Artworks</h3>
                            
                     
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
                echo '<a href=info_art.php?id='.$row1['art_id'].' style="color:white;"><img src="pictures/arts/'.$row1['art_imagepath'].'" alt="Image"></a>';
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

<!--</body>-->
</html>


