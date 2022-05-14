<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Artwork Info</title>
    <meta charset="UTF-8">
    <?php
include("includes/head.php");

  ?>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

  
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 70%;
  max-width: 80%;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}


*{
  font-family: "source sans pro", sans-serif;
}
  
.border{
  margin-top: 10px;
          width:100%;
          height: 800px;
        float: left;
        border: 10px solid none;
        background-color: white;

    }

        .img{
            width:700px;
            height: 600px;
            
            object-fit: cover;
        }

        .head-title{
          font-size: 45px;
          color: #2d70d5;
          
          font-variant: small-caps;
          left: 750px;
          top: 10px;
        }

        .artist{
          font-size: 20px;
          color: #333333;
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
        .contact{
           border-radius: 8px;
           border: none;
           box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
           background-color: #aa1313;
           color: white;
           text-align: center;
           font-size: 15px;
           font-weight: bold;
           padding: 12px 10px 8px 10px;
           
           top: 233px;
           right: 195px;
           width: 100px;
           height: 50px;
        }

        .hr{

            width: 100%;
        }

        .about{
          font-size: 17px;
          color: #333333;
          height: 35px;
          font-weight: bold;
        }

        .desc{
          font-size: 14px;
          text-align: justify;
          text-indent: 50px;
          color: #333333;
          width:100%;
          height: 240px;
          

        }
        .rate1{
          font-size: 60px;
          color: #333333;
          margin-left: auto;
          margin-right: auto;
          display: block;
        }

         .rate{
          font-size: 25px;
          color: #333333;
        }

        #rate {
           border-radius: 10px;
           box-shadow: 1px 1px 5px 0px rgb( 55, 52, 52 );
          border: 3px solid #fd3e50;
          background-color: white;
          text-align: right;
          font-size: 15px;
          width: 40px;
          height: 40px;
        }
        #ratebtn{
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          background-color:#fd3e50;
          border:1px;
          font-size: 15px;
          font-weight: bold;
          width: 80px;
          height: 35px;
        }
        #comment{
          font-size: 14px;
          color: black;
          margin-bottom: -100px;
        }
        #post-comment{
          font-size: 14px;
          font-size: 100%;
          color: black;
        }
        #commentbtn{
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          background-color:#fd3e50;
          border:1px;
          font-size: 15px;
          font-weight: bold;
          position: relative;
          left: 1060px;
          top: 0px;
          width: 80px;
          height: 35px;
          margin-bottom: 50px

        }
        .deletecomment{
          cursor: pointer;
          border-radius: 8px;
          border: 1px solid none;
         background-color: #ee1127;
          font-size: 15px;
          color: white;
          position:relative;
          top: 0px;
          left: 680px;
          padding: 7px;

        }
.checked {
  color: orange;
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

        </style>




<div class="page__section" >
    <nav  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        </li>
        <li class="breadcrumb__group">
          <a href="artworks.php" class="breadcrumb__point r-link">Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
        <li class="breadcrumb__group">
          <a class="breadcrumb__point r-link">Artwork Info</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </nav>
  </div>
  
  
  
<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0); 
$user_id = $_SESSION['USER_ID'];
$art_id = $_GET['id'];
$_SESSION['art_id'] = $art_id;

?>
<body style="margin-bottom: 20px;">
<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this comment?'))
    {
        return true;
    }
    else
        return false;
};
</script>

<form action="shipping.php" method="POST">
<?php
error_reporting(0);
$query_category1="SELECT ART_IMAGEPATH,art_category FROM art_work WHERE art_id = '$art_id'";
        $result_category1 = mysqli_query($conn,$query_category1);

        while($row=mysqli_fetch_array($result_category1)){

            //echo '<a href= "pictures/arts/'.$row['ART_IMAGEPATH'].'"> <img class="img" src="pictures/arts/'.$row['ART_IMAGEPATH'].'" ></a><br />';

            echo '<div class="container my-5">
                        <div class="row">
                          <div class="col-lg-6">
                            <img class="w-100 shadow" id="myImg" src="pictures/arts/'.$row['ART_IMAGEPATH'].'" height="100%" width="100%" style="object-fit: cover; max-height: 700px"/>
                        </div>
                        
                        <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                      </div>
                      <script>
                      // Get the modal
                      var modal = document.getElementById("myModal");

                      // Get the image and insert it inside the modal - use its "alt" text as a caption
                      var img = document.getElementById("myImg");
                      var modalImg = document.getElementById("img01");
                      var captionText = document.getElementById("caption");
                      img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                  }

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>';
        }





$query_category="SELECT art_work.art_id, art_work.art_title,art_work.art_price, user.user_id, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_width,art_work.art_height,art_work.art_media,art_work.art_category,user.user_contact,art_work.art_thickness,art_work.art_status,art_work.art_stock
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND
                            art_id = '$art_id'";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
          $_SESSION['art_stock'] = $row['art_stock'];
          $_SESSION['cat'] = $row['art_category'];
          /*
          <div class="col-lg-6">
            <div class="p-5 mt-4">
              <h1 class="display-4">H1 Heading</h1>
                <p class="lead">Crow's nest schooner ho scallywag hail-shot gabion salmagundi. Doubloon careen code of conduct lugsail hulk ye long clothes. </p>
                  <a href="#" class="btn btn-outline-dark">Read More</a>
              </div>
            </div>
          */

          echo '
          <div class="col-lg-6">
          <div class="p-5 mt-4">
            <h1 class="display-4">'. $row['art_title'].'</h1>
          ';

            echo '<!--<p class="head-title" style="color:#fd3e50">'. $row['art_title'].'</p>-->
            

                  <p class="artist">Artist: <a href="artist_info.php?id='.$row['user_id'].'" style="color: #333333;">'.$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname'].'</a><br>Category: '.$row['art_category'].'<br>Dimension: '.$row['art_width'].' x '.$row['art_height'].' x '.$row['art_thickness'].'<br></p>';
if($row['art_status'] == 'SOLD'){
   $row['art_price'] = number_format($row['art_price']);
    echo '<p class="soldbutton">'.$row['art_status'].' for<br> Php '.$row['art_price'].'</form>';
}
else if($row['art_status'] == 'AVAILABLE' && $row['art_stock'] == 0){
       echo '<p class="soldbutton"> SOLD OUT <br> Php. '.$row['art_price'].'</form>';
     }
else{
       $row['art_price'] = number_format($row['art_price']);
       echo '<input  class="buybutton" type="submit" name="buy" value="Buy for Php '.$row['art_price'].'"></form>';
     }

echo '

                 <hr class="hr"><p class="about">About this Artwork</p><p class="desc">'.$row['art_description']; 
echo '</div>
</div>';
           //rating

if(isset($_SESSION['USER_ID'])){
  $query = mysqli_query($conn, "SELECT user_id FROM rating WHERE user_id= '$user_id' AND art_id = '$art_id' ") or die("Failed to query database ".mysqli_error($conn));

$count = mysqli_fetch_row($query);



if ($count>0){

}

  else{
          echo' <div style="margin-left:35%;margin-right:25%"><p class="rate"><form action="rate_art.php" class="rate" method = "POST">Rate This Artwork:
                <select id = "rate" name="rate">
                          <option value="5" selected>5</option>
                          <option value="4">4</option>
                           <option value="3">3</option>
                            <option value="2">2</option>
                             <option value="1">1</option>
                          </select>
                <input id="ratebtn" type="submit" name="submit" value ="Submit">
                  </p></div></form>


'; }
}

$sql11 = "SELECT AVG(rating_value) FROM rating WHERE art_id = '$art_id'";
    $result_category21 = mysqli_query($conn,$sql11);
while($row21 = mysqli_fetch_array($result_category21)){
    if($row21['AVG(rating_value)'] == 5){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 4.5){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-half-o " style="color:orange"></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 4.0){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 3.5){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-half-o " style="color:orange"></span>
        <span class="fa fa-star" ></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 3.0){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 2.5){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-half-o " style="color:orange"></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 2.0){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 1.5){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-half-o " style="color:orange"></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        </div>
        ';
    }
    elseif($row21['AVG(rating_value)'] >= 1.0){
        echo '
        <div class="rate1">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        <span class="fa fa-star" ></span>
        </div>
        ';
    }
  //$row21['AVG(rating_value)'] = number_format($row21['AVG(rating_value)'], 1, '.', '');
           //echo '<h1 class="rate1">'.$row21['AVG(rating_value)'].' out of 5</h1></div>';

}
}








//comment




        $sql = "SELECT user.user_fname, user.user_mname,user.user_lname,user.user_imagepath,comment.comment_date,comment.comment_content,user.user_imagepath,comment.user_id,comment.comment_id FROM comment,user,art_work
        WHERE comment.art_id = art_work.art_id AND comment.user_id = user.user_id AND comment.art_id = $art_id ORDER BY comment.comment_date ASC";
$result_category2 = mysqli_query($conn,$sql);
while($row2 = mysqli_fetch_array($result_category2)){

   echo '<div id ="comment">
                      <table  style="border:5px solid none;border-collapse: collapse;" cellspacing="3" cellpadding="">
                          <tr>
                              <td>
                                  <a href= "pictures/profile/'.$row2['user_imagepath'].' account.php" > <img src="pictures/profile/'.$row2['user_imagepath'].'" style= "border-radius: 80px;height: 130px; width: 130px;object-fit:cover" ></a>
                              </td>
                          </tr>
                      </table>

                      <table  style="border:5px solid none;border-collapse: collapse; position:relative; top:-130px;left:140px; margin-bottom: 10px;" cellspacing="3" cellpadding="">
                          <tr>
                              <td style="font-size: 18px; font-family:"Yu Gothic UI"; font-weight:bold; color:#f2f2f2;">
                                  '.$row2['user_fname'].' '.$row2['user_mname'].' '.$row2['user_lname'].'&nbsp;
                              </td>
                               <td style="font-size: 18px; font-family:"Yu Gothic UI"; font-weight:bold;color:#f2f2f2; ">on 
                                  '.$row2['comment_date'].'<br>
                              </td>
                              ';

                              if($_SESSION['USER_ID'] == $row2['user_id']){
                                $comment_id = $row2['comment_id'];
                              echo '
                              <td>
           <!--Delete Comment-->     <a class="deletecomment" href="delete_comment.php?comment_id='.$comment_id.'&art_id='.$art_id.'" onclick="return(YNconfirm());"> &#10006; Delete</a>
                              </td>

                              ';
                            }
                              echo '
                          </tr>
                      </table>

                       </table>
                       <table  cellspacing="3" cellpadding="" style="border-collapse: collapse; position:relative; top:-130px;left:140px; margin-bottom: 10px;border: 1px solid #fff" >

                          <tr>
                              <td style="border-radius:10px; background-color: #f2f2f2;padding:30px" width="1030px" height="90">
                                  '.$row2['comment_content'].'<br>
                              </td>
                          </tr>
                      </table>

                  </div>';
   }
     echo '<div id = "post-comment">
                        <form name="comment" method="post" action="comment_action.php?art_id='.$art_id.'" onSubmit="">
                           <table width="500" border="0" cellspacing="3" cellpadding="3" style="">';

                      if(isset($_SESSION['USER_ID'])){
                           echo'<tr>
                                    <td align="right" id="one">
                                    </td>
                                    <td>
                                       Comment:<br><textarea name="message" align="center" id="tmessageid" style="width:1150px;height:100px; border-radius:8px;border:1px solid #fd3e50;padding-left:10px;padding-right:10px"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" id="one">
                                    </td>
                                    <td>
                                        <input id="commentbtn"  type="submit" name="submit" id="commentbtn" value="Post">
                                    </td>
                                </tr>
                        </table>
                    </form>';
} 

            ?>





<!--</body>-->
</html>
