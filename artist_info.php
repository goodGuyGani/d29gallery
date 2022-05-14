<?php 
include("includes/connection.php");
session_start();
if(!isset($_SESSION['USER_ID'])){
    header("Location: login_form.php");
}

$my_id = $_SESSION['USER_ID'];
 ?>
<!DOCTYPE html>
<html>
 <head>
     <title>Artists Info</title>
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<?php include("includes/head.php"); ?>

  <style>
       .photo1 {
        position: relative;
        left: 80px;
        top: 45px;
        width: 207px;
        height : 270px;
        box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
     }

      .backgd{
       border-radius: 8px;
        border: 1px solid none;
        background-color: white;
        padding: 0px 10px 10px 0px;
        margin-left: 120px;
        position: relative;
        top: 175px;
        width:1010px;
        height: 350px;
    }

   .info-title{
        color:#2d70d5;
        font-variant: small-caps;
        font-size: 25px;
        position: relative;
        top: -205px;
        left: 420px;
        text-decoration: none;

    }
    .info-content{
        position: relative;
        font-size: 25px;
        font-family:  "Yu Gothic UI Light";
        top: -115px;
        left: 785px;
    }

        .headspace{
        
        font-variant: small-caps;
        color: rgb(0, 0, 3);
        font-size: 30px;
        left: 80px;
        top: 110px;

    }
    .headspace2{
        
        font-variant: small-caps;
        color: rgb(0, 0, 3);
        font-size: 30px;
        margin-left: 80px;
        margin-top: 100px;

    }
    .hr{
        position: relative;
        border: 1px solid #2d70d5;
        top: -15px;
        width: 1100px;
        left: 0px;
    }
     .photo {
        position: relative ;
        width: 270px;
       height : 260px;
       margin: 0  0px 0 0px;

        }

       .desc-title{
        color:#2d70d5;
        font-variant: small-caps;
        font-size: 29px;
        position: inherit;
        top: 0px;
        left: 5px;
        text-decoration: none;
    }

    .desc-content{
        position: relative;
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";
        top: 0px;

    }
    .desc-content2{
        position: relative;
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";

        top: -20px;
    }

     .pic-table{
            border: 3px solid white;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            background-color: #fafafa;
            border-collapse: collapse;
            float: left;
            margin: 0px 50px 50px 0px;
        }
        .space{
          margin-top: 200px;
          position: relative;
          left:130px;
        }

        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Josefin Sans', sans-serif;
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

body{
   background-color: #f3f3f3;
}

.wrapper{
  
  width: 100%;
  height: 460px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
}

.wrapper .left{
  width: 35%;
  background: linear-gradient(to right,#fd3e50, crimson);
  padding: 30px 25px;
  text-align: center;
  color: #fff;
}

.wrapper .left img{
  object-fit: cover;
  height:350px;
  width: 90%;
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper .left h4{
  margin-bottom: 10px;
}

.wrapper .left p{
  font-size: 12px;
}

.wrapper .right{
  width: 65%;
  background: #fff;
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
}

.wrapper .social_media ul{
  display: flex;
}

.wrapper .social_media ul li{
  width: 45px;
  height: 45px;
  background: linear-gradient(to right,#fd3e50, crimson);
  margin-right: 10px;
  border-radius: 5px;
  text-align: center;
  line-height: 45px;
}

.wrapper .social_media ul li a{
  color :#fff;
  display: block;
  font-size: 18px;
}

.buybutton{
          cursor: pointer;
          border-radius: 8px;
           color: white;
           font-size: 15px;
           font-weight: bold;
           text-align: center;
           border: none;
           box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
           background-color: #29a32f;
           width: 100%;
           height: 70px;
        }
        .soldbutton{
            cursor: pointer;
           margin-left:auto;
           margin-right:auto;
           display:block;
          border-radius: 8px;
           color: white;
           font-size: 25px;
           font-weight: bold;
           text-align: center;
           border: none;
           box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
           background-color: crimson;
           padding: 15px;
           width: 50%;
           height: 70px;
        }
        
        
        [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */

input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}
  </style>
 </head>
<body>

<div class="page__section">
    <nav  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        </li>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Artists</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </nav>
  </div>
  
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="bg-danger text-white text-center"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="bg-danger text-white text-center"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>


<?php
    $user_id = $_GET['id'];

        $query_category="SELECT user_imagepath,user_fname, user_lname,user_mname, user_gender, user_house_number, user_street, user_brgy, user_province, user_contact, user_email FROM user WHERE user_id = '$user_id'";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
            echo 
                '<div class="wrapper">
                <div class="left">
                <a  href= "pictures/profile/'.$row['user_imagepath'].'"><img src="pictures/profile/'.$row['user_imagepath'].'" alt="user" width="100"></a>
                    <h4>'.$row['user_fname'].' '.$row['user_mname'].''.$row['user_lname'].'</h4>
                     <p>Artist</p>
                </div>
                <div class="right">
                    <div class="info">
                        <h3> '.$row['user_fname'].'\'s Information</h3>
                        <div class="info_data">
                             <div class="data">
                                <h4>Name</h4>
                                <p>'.$row['user_fname'].' '.$row['user_mname'].''.$row['user_lname'].'</p>
                             </div>
                             <div class="data">
                               <h4>Phone</h4>
                                <p>0'.$row['user_contact'].'</p>
                          </div>
                                <div class="data">
                                    <h4>Email</h4>
                                    <p>'.$row['user_email'].'</p>
                                </div>
                                <div class="data">
                                    <h4>Country</h4>
                                    <p>Philippines, '.$row['user_province'].'</p>
                                </div>
                        </div>
                    </div>
                    
                    <div style="height:45px"></div>
                    
                    <button class="soldbutton" data-toggle="modal" data-target="#addadminprofile">Commission Artwork</button>
                    
                    
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Commission Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
';
$userid = $_SESSION['USER_ID'];

$query_category1="SELECT username,password,user_fname,user_mname,user_lname,user_gender,user_age,user_bday,user_contact,user_municipal,user_province,user_zipcode,user_brgy,user_street,user_house_number,user_email FROM user
where user_id = $my_id";

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

echo'
        
            <input type="hidden" name="userid" value="' . $user_id . '">
            
            <input type="hidden" name="userid2" value="' . $my_id . '">
            
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" value="' . $email . '" required name="email" class="form-control" placeholder="Enter Email">
            </div>
            
            <div class="form-group">
                <label>Name</label>
                <input type="text" value="' . $fname . ' ' . $lname . '" required name="name" class="form-control" placeholder="Enter Name">
            </div>
            
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" value="0' . $contact . '" required name="number" class="form-control" placeholder="Enter Number">
            </div>

            <div class="form-group">
                <label>Budget(Php)</label>
                <input type="text" required name="budget" class="form-control" placeholder="Enter Budget">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea3">Description</label>
                <textarea class="form-control" required name="description" id="budget" rows="7"></textarea>
            </div>
            
            <div class="form-group">
                <label>Size</label>
                <input type="text" required name="size" class="form-control" placeholder="Enter Size">
            </div>
            
            <div class="form-group">
                <label>Ideal Finish Date</label><br>
                <input id="datePicker" type="date"  id="date" name="date" style="width:100%"/>
            </div>



            
        
        </div>
        <div class="modal-footer ">
            <button type="submit" name="sendbtn" class="soldbutton" style="width:100px;font-size:14px;height:50px">Save</button>
            <button type="button" class="soldbutton" data-dismiss="modal" style="width:100px;font-size:14px;height:50px">Cancel</button>
            
        </div>
      </form>

    </div>
  </div>
</div>


                    
                  
                  <!--<div class="projects">
                        <h3>Projects</h3>
                        <div class="projects_data">
                             <div class="data">
                                <h4>Recent</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                             </div>
                             <div class="data">
                               <h4>Most Viewed</h4>
                                <p>dolor sit amet.</p>
                          </div>
                        </div>
                    </div>-->
            ';


        }
        $query_category2="SELECT user_fname FROM user WHERE user_id = '$user_id'";
        $result_category2 = mysqli_query($conn, $query_category2);
        
        while ($row2=mysqli_fetch_array($result_category2)) {
                    echo '<h2 class="" style="margin-top:130px">&nbsp; &nbsp; &nbsp; '.$row2['user_fname'].'\'s Artworks <hr class="hr" style="border-bottom: 2px solid #fd3e50;width:100%"></h2></div></div>';
        }

$query_category1="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_status, art_work.art_category FROM art_work,user WHERE
 art_work.user_id = user.user_id AND
art_work.user_id = '$user_id' ORDER BY art_work.art_title ASC";
echo '<div class="image-gallery">';
        $result_category1 = mysqli_query($conn,$query_category1);
if(mysqli_num_rows($result_category1) <=0)
        {
            echo '<h1 align="center" style="margin-top:200px">No Artworks Available </h1>';
        }
        else{
        while($row1=mysqli_fetch_array($result_category1)){
            echo '<div class="image-box" >
            <img src="pictures/arts/'.$row1['art_imagepath'].'" alt="img.jpg" />
            <div class="overlay">
              <div class="details">
                <h3 class="title">
                  <a href=info_art.php?id='.$row1['art_id'].' style="color:white;">'.$row1['art_title'].'</a>
                </h3>
                <span class="category">
                  <a href="#" style="color:lightgray">'.$row1['user_fname'].' '.$row1['user_mname'].' '.$row1['user_lname'].'</a>
                </span>
              </div>
            </div>
          </div>';
       



/*
            echo ' <div class="space" >
                            <table  class="pic-table">
                                <tr>
                                    <td>
                                        <img class="photo" src="pictures/arts/'.$row1['art_imagepath'].'" > <br>'.

                                        '<a  href=info_art.php?id='.$row1['art_id'].' class="desc-title"> '.$row1['art_title'].' </a>

                                         <p class="desc-content">'.$row1['art_category'].'</p>

                                         <p class="desc-content" style="float: right;">P'.$row1['art_price'].'.00</p> <br>

                                         <p class="desc-content2">'.$row1['user_fname'].' '.$row1['user_mname'].' '.$row1['user_lname'].'</p>
                                    </td>
                                </tr>
                            </table>
                        </div>'; */
        }

}

      ?> </div>

<style>
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
  grid-column: span 1;
  grid-row: span 1;
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
}

</style>



<?php include("includes/footer.php"); ?>



  </body>
 </html>
