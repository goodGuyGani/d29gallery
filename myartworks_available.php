<?php session_start();
if(!isset($_SESSION['USER_ID'])){
    header("Location: login_form.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>My Available Artworks</title>
  <?php
include("includes/connection.php");
include("account.php");
?>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");
*{
  font-family: "source sans pro", sans-serif;
}


        .addbtn{
            margin-left: auto;
            margin-right: auto;
            display: block;
            cursor: pointer;
            text-decoration:none;
            padding: 10px;
            border-radius: 12px;
            font-family: Georgia, 'Times New Roman', Times, serif;
           font-weight: bold;
           border: 1px solid;
           color: white;
           font-size: 20px;
           background-color: #43b353;
           width: 220px;
           height: 50px;
           z-index: 100;
        }

         .modifybtn{
            cursor: pointer;
            text-decoration:none;
            color:white;
            padding: 10px;
            border-radius: 12px;
           font-family: "Yu Gothic UI Light";
           font-weight: bold;
           border: 1px solid;
           color: white;
           font-size: 22px;
           background-color: #234;
           width: 140px;
           height: 30px;
           z-index: 100;
        }

        .deletebtn{
          border-radius: 8px;
           font-family: "Yu Gothic UI Light";
           font-weight: bold;
           color: white;
           font-size: 25px;
           background-color: #234;           
           padding: 10px;
           left: 10px;
           width: 100px;
           height: 35px;
           text-decoration: none;
        }

        

    .heading {
        font-family: Arial, Helvetica, sans-serif;
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

    </style>

</head>
<body>
<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this artwork?'))
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
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="artworks.php" class="breadcrumb__point r-link">My Account</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="" class="breadcrumb__point r-link">My Available Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>
  
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="soldbutton" style="width:100%; text-align:center;border-radius:0px;cursor: none;"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="soldbutton" style="width:100%; text-align:center;border-radius:0px;cursor: none;"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>



<h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span>My Available Artworks</span></h3>


<?php
$id = $_SESSION['USER_ID'];

  echo                '<a class="addbtn" href="artwork_post.php" style=""> &#10133;  Add an Artwork</a>';
            $query_category="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_category
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND user.user_id = '$id' AND art_work.art_status = 'Available' ORDER BY rand()";
            $result_category = mysqli_query($conn,$query_category);
            echo '<div class="image-gallery">';
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<h1 align="Center" style="margin-top:150px">No Available Artworks </h1>';
        }
        else{
            while($row = mysqli_fetch_array($result_category)){
                $row['art_price'] = number_format($row['art_price']);
                echo '<div class="image-box" >
            <img src="pictures/arts/'.$row['art_imagepath'].'" alt="img.jpg" />
            <div class="overlay">
              <div class="details">
                <h3 class="title">
                  <a href=info_art.php?id='.$row['art_id'].' style="color:white;">'.$row['art_title'].'</a>
                </h3>
                <span class="category">
                  <a href="#" style="color:lightgray">Php '.$row['art_price'].'</a>
                </span><br><br>
                <a class="modifybtn" href="edit_artwork.php?category='.$row['art_category'].'&id='.$row['art_id'].'"> &#128393; Modify </a>&nbsp;&nbsp;&nbsp;
                <a class="modifybtn" href =delete_artwork_action.php?delete='.$row['art_id'].'&pic='.$row['art_imagepath'].' onclick="return(YNconfirm());"> &#10006; Delete</a>
              </div>
            </div>
          </div>';




/*
                echo '

                    <div class="space" >
                            <table  class="pic-table">
                                <tr>
                                    <td>
                                        <a><img class="photo" src="pictures/arts/'.$row['art_imagepath'].'" ></a><br>'.

                                        '<a  href=info_art.php?id='.$row['art_id'].' class="desc-title"> '.$row['art_title'].' </a>

                                         <p class="desc-content">'.$row['art_category'].'</p>

                                         <p class="desc-content" style="float: right;">P'.$row['art_price'].'.00</p> <br>

                                         <p class="desc-content2">'.$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname'].'</p>

                                         <p>
                                                <a class="modifybtn" href="edit_artwork.php?category='.$row['art_category'].'&id='.$row['art_id'].'"> &#128393; Modify </a>



                                                <a class="deletebtn" href =delete_artwork_action.php?delete='.$row['art_id'].'&pic='.$row['art_imagepath'].' onclick="return(YNconfirm());"> &#10006; Delete</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>';*/

        }
    }
'</div>';
        ?>




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
}

</style>









<!--
    <div class="img">

        <?php
$id = $_SESSION['USER_ID'];
echo '<p><h1 class="head-available"> Available </h1>
                <h1 class="head-artworks">Artworks</p>';
  echo                '<a class="addbtn" href="select_art.php" style=""> &#10133;  Add an Artwork</a>';
            $query_category="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_category
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND user.user_id = '$id' AND art_work.art_status = 'Available' ORDER BY art_work.art_title ASC";
            $result_category = mysqli_query($conn,$query_category);
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<br><br><br><h1 align="Center">No Available Artworks </h1>';
        }
        else{
            while($row = mysqli_fetch_array($result_category)){



                echo '

                    <div class="space" >
                            <table  class="pic-table">
                                <tr>
                                    <td>
                                        <a><img class="photo" src="pictures/arts/'.$row['art_imagepath'].'" ></a><br>'.

                                        '<a  href=info_art.php?id='.$row['art_id'].' class="desc-title"> '.$row['art_title'].' </a>

                                         <p class="desc-content">'.$row['art_category'].'</p>

                                         <p class="desc-content" style="float: right;">P'.$row['art_price'].'.00</p> <br>

                                         <p class="desc-content2">'.$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname'].'</p>

                                         <p>
                                                <a class="modifybtn" href="edit_artwork.php?category='.$row['art_category'].'&id='.$row['art_id'].'"> &#128393; Modify </a>



                                                <a class="deletebtn" href =delete_artwork_action.php?delete='.$row['art_id'].'&pic='.$row['art_imagepath'].' onclick="return(YNconfirm());"> &#10006; Delete</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>';

        }
    }
'</div>';
        ?>-->




</body>
</html>
