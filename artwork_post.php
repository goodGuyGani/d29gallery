<?php session_start();?>
<!DOCTYPE html>
 <html>
 <head>
   <title>Add Artwork</title>
</head>

<?php 
include("account.php");
 ?>

<style>

*{
  font-family: "source sans pro", sans-serif;
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

@import url("https://rsms.me/inter/inter.css");

:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  box-sizing: border-box;
}

@supports (font-variation-settings: normal) {
  html {
    font-family: "Inter var", sans-serif;
  }
}

body {
  margin: 0;
  
}

h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  font-family: 'Sanchez';
  padding: 20px;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.6rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
  color: darkslategray;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}

</style>
<body>

<div class="page__section" >
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb" style="height: 54px;">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group" style="margin-top:17px;margin-left:15px">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="profile.php" class="breadcrumb__point r-link">My Account</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="myartworks_available" class="breadcrumb__point r-link">My Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a class="breadcrumb__point r-link">Add Artwork</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>

  <div class="container" style="margin-left: 50px;margin-right:50px">
  <h1>Add Artwork</h1>
  <?php
                if(!empty($message)) {
                echo "<p>{$message}</p>";
                }
              ?>
  <p>Edit your artwork's information.</p>
  <form class="form" action="action_artwork.php" enctype="multipart/form-data" method="post" >
  <p class="fsize-title" style="text-align: center;"> Artwork Image: </p>
    <br><br><br>
          <input type="file" required name="file_upload" style="margin-left: 43%;margin-right:auto;display:block"/>
  <hr />
  
    
  <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="title" style="font-size: 12px;font-weight: bold;color:black">Title</span>
      <input class="field__input" type="text" id="Fname" required name="title" placeholder="Enter Artwork Title"/>
    </label>
    
  <label class="field">
    <span class="field__label" for="price" style="font-size: 12px;font-weight: bold;color:black">Price</span>
    <input class="field__input" type="number" step="1000" min="0" id="Street" required name="price" placeholder="Enter Artwork Price"/>
  </label>
  <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Category</span>
    <?php $art_category = $_GET['art_category'];
            $_SESSION['art_category'] = $art_category;
                    echo ' '. $art_category;
            ?>
    <input class="field__input" type="hidden" id=""/>
  </label>
  <label class="field">
    <span class="field__label" for="stock" style="font-size: 12px;font-weight: bold;color:black">Artwork Stock</span>
    <input class="field__input" type="number" min="1" id="bday" value="1" required name="stock" placeholder="Artwork Stock"/>
  </label>

  <label class="field">
    <span class="field__label" for="media" style="font-size: 12px;font-weight: bold;color:black">Tags</span>
    <input class="field__input" type="text" id="media" required name="media" placeholder="Artwork Tags"/>
  </label>
  
  <label class="fields fields--3">
    <label class="field">
      <span class="field__label" for="height" style="font-size: 12px;font-weight: bold;color:black">Height</span>
      <input class="field__input" type="text" type="text" id="Lname" required name="height" />
    </label>
    <label class="field">
      <span class="field__label" for="width" style="font-size: 12px;font-weight: bold;color:black">Width</span>
      <input class="field__input" type="text" id="Mname" required name="width" />
    </label>
    <label class="field">
      <span class="field__label" for="house_num" style="font-size: 12px;font-weight: bold;color:black">Thickness</span>
      <input class="field__input" type="text" type="text" id="gender" required name="thickness">
      </input>
    </label>
    
    </div>
    <div class="" >
    <label class="field" >
    <span class="field__label" for="contact" style="font-size: 12px;font-weight: bold;color:black">Artwork Information</span>
    <textarea class="field__input" type="text" type="text" id="bday" required name="description" cols="50" rows="10" placeholder="Enter Artwork Information"></textarea>
  </label></div>
  <?php
  $today = getdate();
  $day = $today['weekday'];
  $month = $today['mon'];
  $day1 = $today['mday'];
  $year =$today['year'];
   $cc= $year.'-'.$month.'-'.$day1;
  $_SESSION['current_date'] = $cc;
  ?>
    <input class="button" type="submit" name="submit" value="Post" style="margin-bottom:30px">
  </form>
  




<!--
         <p>
            <h1 class="headt1"> Post A</h1>
            <h1 class="headt2">n Artwork </h1> <hr class="hr">
         </p>

        <div class="body">
          <p class="fsize-title">Artwork Image:<br><br>
              <?php
                if(!empty($message)) {
                echo "<p>{$message}</p>";
                }
              ?>
          </p>

          <p class="fsize-img">
              <form class="table" action="action_artwork.php" enctype="multipart/form-data" method="post">
                    <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
                      <tbody>
                        <tr>
                          <td>
                            <input type="file" required name="file_upload" />
                          </td>
                        </tr>
                      </tbody>
                    </table>  <br><br>
          </p>

          <p class="fsize-text">

            Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Fname" required name="title"> <br><br>
            Width:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Mname" required name="width">  in.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Lname" required name="height">  in.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thickness: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="gender" required name="thickness">   in.<br><br>

            Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="bday" required name="description"><br><br>
            Category: <?php $art_category = $_GET['art_category'];
            $_SESSION['art_category'] = $art_category;
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $art_category;
            ?>
            <br><br>
            <?php

             if($art_category == "Painting"){
            echo 'Media: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">
                             <option value="Airbrush">Airbrush</option>
                             <option value="Enamel">Enamel</option>
                             <option value="Gouache">Gouache</option>
                             <option value="Acrylic">Acrylic</option>
                             <option value="Oil">Oil</option>
                             <option value="Spray Paint">Spray Paint</option>
                             <option value="Tempera">Tempera</option>
                             <option value="Watercolor">Watercolor</option>
                             <option value="Ink">Ink</option>
                             <option value="Gesso">Gesso</option>
                             </select><br><br>
                             Stock: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1<br><br>';
            }
            else if($art_category == "Sculpture"){
            echo 'Media: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">
                             <option value="Ceramic">Ceramic</option>
                             <option value="Clay">Clay</option>
                             <option value="Digital">Digital</option>
                             <option value="Fiberglass">Fiberglass</option>
                             <option value="Pottery">Pottery</option>
                             <option value="Fabric">Fabric</option>
                             <option value="Neon">Neon</option>
                             <option value="Glass">Glass</option>
                             <option value="Interactive">Interactive</option>
                             <option value="Latex">Latex</option>
                             <option value="Leather">Leather</option>
                              <option value="LED">LED</option>
                              <option value="Metal">Metal</option>
                              <option value="Mosaic">Mosaic</option>
                              <option value="Paint">Paint</option>
                              <option value="Paper">Paper</option>
                              <option value="Paper Mache">Paper Mache</option>
                              <option value="Plastic">Plastic</option>
                              <option value="Rubber">Rubber</option>
                              <option value="Stone">Stone</option>
                              <option value="Wax">Wax</option>
                              <option value="Wood">Wood</option>
                              <option value="Steel">Steel</option>
                              <option value="Bronze">Bronze</option>
                              <option value="Granite">Granite</option>
                              <option value="Marble">Marble</option>
                             </select><br><br>
                               Stock:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="bday" required name="stock"><br><br>';
            }
            if($art_category == "Drawing"){
            echo 'Media: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">

                             <option value="Ballpoint Pen">Ballpoint Pen</option>
                             <option value="Chalk">Chalk</option>
                             <option value="Charcoal">Charcoal</option>
                             <option value="Digital">Digital</option>
                             <option value="Graphite">Graphite</option>
                             <option value="Ink">Ink</option>
                             <option value="Marker">Marker</option>
                             <option value="Pastel">Pastel</option>
                             <option value="Pencil">Pencil</option>


                             </select><br><br>
                               Stock: 1<br><br>';
            }
            if($art_category == "Photography"){
            echo 'Media: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">

                             <option value="Polaroid">Polaroid</option>
                             <option value="Color">Color</option>
                             <option value="Digital">Digital</option>
                             <option value="C-type">C-type</option>
                             <option value="Black & White">Black & White</option>
                             <option value="Photogram">Photogram</option>
                             <option value="Platinum">Platinum</option>
                             <option value="Gelatin">Gelatin</option>
                             <option value="Manipulated">Manipulated</option>
                             </select><br><br>
                               Stock: 1<br><br>';
            }

                            $today = getdate();
                            $day = $today['weekday'];
                            $month = $today['mon'];
                            $day1 = $today['mday'];
                            $year =$today['year'];
                             $cc= $year.'-'.$month.'-'.$day1;
                            $_SESSION['current_date'] = $cc;
                            ?>

            Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Street" required name="price"><br><br>

                            <input class="inputbar" type="submit" name="submit" value="Post">

        </form>
    </p>-->
</body>
</html>


