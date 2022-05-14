<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>
     <title>Artists</title>

    

 </head>
 <body>



 <?php include("includes/head.php"); 

include("includes/connection.php");?>
 <style>



@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");
*{
  font-family: "source sans pro", sans-serif;
}

html {
  font-size: 80%;
overflow-x: hidden;
}




body {
    
padding-bottom: 6.5rem;
}



.heading {
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



.btn i {
height: 4rem;
width: 4rem;
line-height: 4rem;
font-size: 1.7rem;
text-align: center;
background: #fff;
color: crimson;
border-radius: 50%;
margin-left: 1rem;
-webkit-transition: .2s linear;
transition: .2s linear;
}

.btn:hover i {
margin-left: 2rem;
}

.portfolio {

  padding-left: 30px;
  padding-right: 30px;
text-align: center;
}

.portfolio .box-container {
display: -ms-grid;
display: grid;
-ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
gap: 1.5rem;
margin-bottom: 2rem;
}

.portfolio .box-container .box {
height: 30rem;
overflow: hidden;
position: relative;
}

.portfolio .box-container .box:hover .content {
-webkit-transform: translateY(0%);
  transform: translateY(0%);
}

.portfolio .box-container .box img {
height: 100%;
width: 100%;
-o-object-fit: cover;
object-fit: cover;
}

.portfolio .box-container .box .content {
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
background: rgba(0, 0, 0, 0.5);
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-flow: column;
  flex-flow: column;
-webkit-box-align: center;
-ms-flex-align: center;
  align-items: center;
-webkit-box-pack: center;
-ms-flex-pack: center;
  justify-content: center;
padding: 2rem;
-webkit-transform: translateY(-100%);
  transform: translateY(-100%);
-webkit-transition: .2s linear;
transition: .2s linear;
}

.portfolio .box-container .box .content h3 {
font-size: 2.5rem;
color: #fff;
text-transform: uppercase;
font-weight: normal;
}

.portfolio .box-container .box .content p {
padding: 1rem 0;
font-size: 1.5rem;
line-height: 2;
color: #aaa;
}

.portfolio .box-container .box .content a {
font-size: 2rem;
color: crimson;
}

.portfolio .box-container .box .content a:hover {
color: #fff;
}

@media (max-width: 1200px) {
html {
font-size: 55%;
}
section {
padding: 3rem 2rem;
}
}

@media (max-width: 768px) {
.heading {
font-size: 12vw;
}
.navbar a i {
padding: 0;
}
.navbar a span {
display: none;
}
.navbar a:hover {
padding-bottom: 2rem;
}
.home {
text-align: center;
gap: 2rem;
}
.home .image img {
height: 30rem;
width: 30rem;
}
.home .content h3 {
font-size: 3rem;
}
.home .content span {
font-size: 2.5rem;
}
.contact .row form .inputBox input {
width: 100%;
margin-bottom: 1rem;
}
}

@media (max-width: 450px) {
html {
font-size: 50%;
}
}
/*# sourceMappingURL=style.css.map */
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

<div class="page__section" ">
    <nav  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb">
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
    </nav>
  </div>

<div class="portfolio" style="margin-left: 30px;margin-right:30px">

<h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px"> <span>Artists </span></h3>

<div class="box-container" >

    

 <!--
     <p class="name" align = "left">Name:
     <form action="searchartist.php" method="POST">
     <input class="searchbar" type="text" id="artistname" name="artistname">
     <input class="searchbtn" type="submit" name="search" value="Search">
     </p>
     </form> -->

    <?php
    
    $limit = 12;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    
    $query_category="SELECT user_imagepath, user_fname, user_lname,user_id FROM user where user_type = 'Artist' LIMIT $start, $limit";
    
    $result1 = $conn->query("SELECT count(user_id) AS user_id FROM user where user_type = 'Artist'");
    $userCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $userCount[0]['user_id'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
            
    $Previous = ($page == 1) ? 1 : $page - 1;
    $Next = ($page == $pages) ? $pages : $page + 1;
    
    
    
            $result_category = mysqli_query($conn,$query_category);
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="Center">No Artist Available </h1>';
        }
        else{
            while($row=mysqli_fetch_array($result_category)){

                  /* echo ' <div class="space">
                            <table class="pic-table">
                                <tr>
                                    <td>
                                        <a  href= "pictures/profile/'.$row['user_imagepath'].'"> <img class="photo" src="pictures/profile/'.$row['user_imagepath'].'"> </a>'.

                                        '<br><a class="desc-title" href="artist_info.php?id='.$row['user_id'].'">  '.$row['user_fname'].' '.$row['user_lname'].' </a> <br>

                                        <a class="desc-content2" href="artist_info.php?id='.$row['user_id'].'">  See More. . . </a>
                                    </td>
                                </tr>
                            </table>
                        </div>'; */

                  echo '<div class="box">
                  <a href="artist_info.php?id='.$row['user_id'].'"><img src="pictures/profile/'.$row['user_imagepath'].'" alt=""></a>
        <div class="content">
            <h3>  '.$row['user_fname'].' '.$row['user_lname'].' </h3>
            <a href="artist_info.php?id='.$row['user_id'].'">Read more</a>
        </div>
    </div>

';
            }
          }
      ?>
     
     </div>



    
</div>

<nav aria-label="Page navigation example" class="justify-content-center">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="artist.php?page=<?= $Previous; ?>">Previous</a></li>
    <?php for($i = 1; $i <= $pages; $i++) : ?>
      <li class="page-item"><a class="page-link" href="artist.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li class="page-item"><a class="page-link" href="artist.php?page=<?= $Next; ?>">Next</a></li>
  </ul>
</nav>


<!--</body>-->
 </html>
