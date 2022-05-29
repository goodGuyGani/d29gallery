<?php session_start();
if(!isset($_SESSION['USER_ID'])){
    header("Location: login_form.php");
}

?>
<!DOCTYPE html>
 <html>
 <head>
   <title>Edit Artwork</title>

<?php 
include("account.php");
 ?>
</head>
 <body>
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

/* hide arrows
 Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none !important;
  margin: 0 !important;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield !important;
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
          <a href="myartworks_available.php" class="breadcrumb__point r-link">My Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a class="breadcrumb__point r-link">Edit Artwork</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>




<?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="soldbutton" style="width:100%; text-align:center;border-radius:0px;cursor: none;height:30px"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="soldbutton" style="width:100%; text-align:center;border-radius:0px;cursor: none; height:30px"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>








<h1 style="margin-top: 30px;margin-left:30px">Edit Artwork</h1>
<p style="margin-left:30px">Edit your artwork's information.</p>


        <div class="container" style="margin-left: 50px;margin-right:50px">
<?php
$art_id = $_GET['id'];

$sql = "SELECT art_media,art_title,art_imagepath,art_width,art_height,art_thickness,art_date,art_description,art_price,art_stock,art_extra, art_status FROM art_work WHERE art_id = '$art_id'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $art_title = $row['art_title'];
    $art_imagepath = $row['art_imagepath'];
    $art_width = $row['art_width'];
    $art_height = $row['art_height'];
    $art_thickness = $row['art_thickness'];
    $art_description = $row['art_description'];
    $art_price = $row['art_price'];
    $art_stock = $row['art_stock'];
    $art_media = $row['art_media'];
    $art_extra = $row['art_extra'];
    $art_status = $row['art_status'];
}
?>


<p class="fsize-title" style="text-align: center;"> Artwork Image: </p>
<?php if(!empty($message)) { echo "<p>{$message}</p>"; }
echo '<img class="img" src = "pictures/arts/'.$art_imagepath.'" style="margin-left: auto;margin-right:auto;display:block;height:500px;width;500px">';
echo ' <form action="edit_artwork(action).php?id='.$art_id.'" enctype="multipart/form-data" method="post">'; ?>
<br><br>



<div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="title" style="font-size: 12px;font-weight: bold;color:black">Title</span>
      <input class="field__input" type="text" id="Fname" required name="title" placeholder="Enter Artwork Title" value="<?php echo $art_title; ?>"/>
    </label>

    <label class="field">
    <span class="field__label" for="price" style="font-size: 12px;font-weight: bold;color:black">Price</span>
    <input class="field__input" type="number" min="0" id="Street" required name="price" placeholder="Enter Artwork Price" value="<?php echo $art_price; ?>"/>
  </label>

  <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Category</span>
    <?php $art_category = $_GET['category'];
$_SESSION['art_category'] = $art_category;
       echo ''. $art_category;
?></label>

</label>
  <label class="field">
    <span class="field__label" for="stock" style="font-size: 12px;font-weight: bold;color:black">Artwork Stock</span>
    <input class="field__input" placeholder="Artwork Stock"  type="text" required name="stock" value="<?php echo $art_stock; ?>">
  </label>

  <label class="field">
      <span class="field__label" for="title" style="font-size: 12px;font-weight: bold;color:black">Tags</span>
      <input class="field__input" type="text"  id="media" name="media" value="<?php echo $art_media; ?>" />
    </label>
    
    <?php
    if($art_extra == 'None'){
    echo'
    <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Specification<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:82%;bottom:-20px"></i></span>
    <select id="area" name="extra" class="field__input">
                    <option value="None">None</option>
                    <option value="Available On Hand">Available On Hand</option>
                    <option value="Made To Order">Made To Order</option>
                    <option value="Rush Sale">Rush Sale</option>
              </select>
  </label>';
  } else if($art_extra == 'Available On Hand'){
      echo'
    <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Specification<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:82%;bottom:-20px"></i></span>
    <select id="area" name="extra" class="field__input">
                    <option value="Available On Hand">Available On Hand</option>
                    <option value="Made To Order">Made To Order</option>
                    <option value="Rush Sale">Rush Sale</option>
                    <option value="None">None</option>
              </select>
  </label>';
  } else if($art_extra == 'Made To Order'){
      echo'
    <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Specification<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:82%;bottom:-20px"></i></span>
    <select id="area" name="extra" class="field__input">
                    <option value="Made To Order">Made To Order</option>
                    <option value="Rush Sale">Rush Sale</option>
                    <option value="Available On Hand">Available On Hand</option>
                    <option value="None">None</option>
              </select>
  </label>';
  } else if($art_extra == 'Rush Sale'){
      echo'
    <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Specification<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:82%;bottom:-20px"></i></span>
    <select id="area" name="extra" class="field__input">
                    <option value="Rush Sale">Rush Sale</option>
                    <option value="Available On Hand">Available On Hand</option>
                    <option value="Made To Order">Made To Order</option>
                    <option value="None">None</option>
              </select>
  </label>';
  } else{
      
  }
  ?>
  
  <?php
    
    if($art_status == 'Available' || $art_status == 'AVAILABLE'){
        echo '
        <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Status<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:88%;bottom:-20px"></i></span>
    <select id="area" name="art_status" class="field__input">
                    <option value="" disabled>Select Status</option>
                    <option value="Available">Available</option>
                    <option value="Sold">Sold</option>
              </select>
  </label>
        ';
    } else if($art_status == 'Sold' || $art_status == 'SOLD'){
        echo '
        <label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Status<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:88%;bottom:-20px"></i></span>
    <select id="area" name="art_status" class="field__input">
                    <option value="" disabled>Select Status</option>
                    <option value="Sold">Sold</option>
                    <option value="Available">Available</option>
              </select>
  </label>
        ';
    }
    
    ?>

    <label class="fields fields--3">
    <label class="field">
      <span class="field__label" for="height" style="font-size: 12px;font-weight: bold;color:black">Height</span>
      <input class="field__input" type="text" type="text" id="Lname" required name="height" value="<?php echo $art_height; ?>"/>
    </label>
    <label class="field">
      <span class="field__label" for="width" style="font-size: 12px;font-weight: bold;color:black">Width</span>
      <input class="field__input" type="text" id="Mname" required name="width" value="<?php echo $art_width; ?>"/>
    </label>
    
    
    
    <?php
    if($art_thickness == 'Pixels'){
    echo '<label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Dimension<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:56%;bottom:-20px"></i></span>
    <select id="area" name="thickness" class="field__input">
                    <option value="" disabled>Select Dimension</option>
                    <option value="Pixels">Pixels</option>
                    <option value="Inches">Inches</option>
              </select>
  </label></div>';
    } else if($art_thickness == 'Inches'){
    echo '<label class="field">
    <span class="field__label" for="category" style="font-size: 12px;font-weight: bold;color:black">Dimension<i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:56%;bottom:-20px"></i></span>
    <select id="area" name="thickness" class="field__input">
                    <option value="" disabled>Select Dimension</option>
                    <option value="Inches">Inches</option>
                    <option value="Pixels">Pixels</option>               
              </select>
  </label></div>';
    }
    ?>

    <div class="fields fields--2" style="margin-top: 15px;">
    

  </div>
  
  <label class="field">
    <span class="field__label" for="contact" style="font-size: 12px;font-weight: bold;color:black">Artwork Information</span>
    <textarea class="field__input" type="text" type="text" style="height: 200px;overflow: auto;" required name="description"  placeholder="<?php echo $art_description; ?>" value="<?php echo $art_description; ?>";></textarea>
  </label>


<?php
$today = getdate();
$day = $today['weekday'];
$month = $today['mon'];
$day1 = $today['mday'];
$year =$today['year'];
$cc= $year.'-'.$month.'-'.$day1;
$_SESSION['current_date'] = $cc;
?>




    <input class="button" style="margin-bottom: 30px;margin-top:15px" type="submit" name="submit" value="&#10004; Save">
                </form>
        </form>
    </p>
</body>
</html>



