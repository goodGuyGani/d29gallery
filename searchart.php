<?php session_start();
header("Cache-Control: max-age=300, must-revalidate"); 
?>

<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<?php
include("includes/connection.php");
include("includes/head.php");
?>
    <style>
      *{
  font-family: "source sans pro", sans-serif;
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

       .image-gallery {
  width: 100%;
  max-width: 950px;
  margin: 0 auto;
  padding: 50px 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-auto-rows: 250px;
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

</head>
<body>

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
          <a class="breadcrumb__point r-link">Search</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </nav>
  </div>

<div class="myDiv" style="text-align:center;margin-top:50px">
              <form action="searchart.php" method="POST" style="padding-bottom: 60px;">

              <input style="width: 40%;min-width:200px;font-family: 'Sans-serif';background-color:white;color:black;" class="search" type="text" id="Search" name="Search" placeholder="What are you looking for?">



                  <select id="Category" name="Category" style="width: 200px;">

                  <option value="">Category</option>
                 <option value="Digital Art">Digital Art</option>
                 <option value="Painting">Painting</option>
                 <option value="Drawing">Drawing</option>
                 <option value="Photography">Photography</option>
                  </select>

                 <input class="myBtn" type="submit" name="submit" value="Search" style="font-family: 'Sans-serif'; background-color:#fd3e50;">
                  </form>
                  </div>
                  <div class="image-gallery">

<!--<a class ="back" href="artworks.php"> &#10096;&#10096; Go Back </a> -->

<?php
$search = trim($_POST['Search']);

$category = $_POST['Category'];
//$price = $_POST['Price'];


if($category == ''){
    $query_category="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_category, art_work.USER_ID
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND (art_work.art_title LIKE '%$search%') GROUP BY art_work.art_id ORDER BY art_work.art_title DESC
                            ";
}else{
$query_category="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_category, art_work.USER_ID
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND (art_category = '$category') AND (art_work.art_title LIKE '%$search%') GROUP BY art_work.art_id ORDER BY art_work.art_title DESC
                            ";
}
            $result_category = mysqli_query($conn,$query_category);
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<h1 align="Center" style="margin-top:130px">No Results found </h1>';
        }
        else{
            while($row = mysqli_fetch_array($result_category))
{
  $row['art_price'] = number_format($row['art_price']);
                echo '<div class="image-box" >
                <img src="pictures/arts/'.$row['art_imagepath'].'" alt="img.jpg" />
                <div class="overlay">
                  <div class="details">
                    <h3 class="title">
                      <a href=info_art.php?id='.$row['art_id'].' style="color:white;">'.$row['art_title'].'</a>
                    </h3>
                    <span class="category">
                      <a href="artist_info.php?id='.$row['USER_ID'].'" style="color:lightgray">'.$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname'].'</a><br>
                      <a href="#" style="color:grey">Php '.$row['art_price'].'</a>
                    </span>
                  </div>
                </div>
              </div>';
            }
        }
        ?>
    </div>
    
<?php include('includes/footer.php');?>
    

</body>
</html>
