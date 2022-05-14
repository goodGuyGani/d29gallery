<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Category</title>

    <?php
include("includes/connection.php");
include("account.php");
?>

    <style type="text/css">
    *{
  font-family: "source sans pro", sans-serif;
}

      body{
        width: 100%;
    height: 1000px;
    background-image:linear-gradient(rgba(8, 9, 12, 0.8),rgba(0, 0, 0, 0.5)),url(pictures/violet.jpg);

    background-size: cover;
    background-position: center;
    position: relative;
      }

        .list:last-child{
            border-right: none;
        }

        .list {
          float: left;
          overflow: auto;
          right: 40px;

        }

        .list .link {

          display: block;
          color: white;
          font-size: 40px;
          margin:280px 125px 0px 10px;
          text-decoration: none;

         }

       .list .link:hover {
          background-color:crimson;
          float: left;
          overflow: auto;
          padding: 5px ;
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
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb" style="height: 54px;">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group" style="margin-top:17px;margin-left:15px">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="artworks.php" class="breadcrumb__point r-link">My Account</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="" class="breadcrumb__point r-link">My Sold Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>



    <ul class="border" style="margin-top:100px;margin-left:100px">
        <li class="list"><a class="link" style="color: white;" href="artwork_post.php?art_category=Painting">Painting</a></li>

     <li class="list"><a class="link" style="color: white;" href="artwork_post.php?art_category=Digital Art">Digital Art</a></li>

        <li class="list"><a class="link" style="color: white;" href="artwork_post.php?art_category=Drawing">Drawing</a></li>

        <li class="list"><a class="link" style="color: white;" href="artwork_post.php?art_category=Photography">Photography</a></li> </ul>
    </ul>
</body>
</html>