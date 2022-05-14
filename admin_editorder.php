<?php session_start();?>
<!DOCTYPE html>

 <html>
 <head>
</head>

<?php
include("includes/connection.php");
include("admin.php");
  ?>
<style type="text/css">
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
 
 <div class="page__section" >
    <div  class="breadcrumb breadcrumb_type5" aria-label="Breadcrumb" style="height: 54px;">
      <ol class="breadcrumb__list r-list" style="color: #333;">
        <li class="breadcrumb__group" style="margin-top:17px;margin-left:15px">
          <a href="home.php" class="breadcrumb__point r-link">Home</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="" class="breadcrumb__point r-link">Admin</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a href="myartworks_available" class="breadcrumb__point r-link">My Artworks</a>
          <span class="breadcrumb__divider" aria-hidden="true">›</span>
          <li class="breadcrumb__group" style="margin-top:17px;margin-left:5px">
          <a class="breadcrumb__point r-link">Edit Order</a>
          <span class="breadcrumb__divider" aria-hidden="true"></span>
        </li>
        </li>
      </ol>
    </div>
  </div>









  <div class="container" style="margin-left: 50px;margin-right:50px">
  <h1>Edit Order</h1>
  <p>Edit the order information.</p>
  <hr>

 <form action="admin_editorderprocess.php" method="POST">
 <script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete your Account?  (WARNING ALL YOUR DATA IN THE WEBSITE WILL BE DELETED INCLUDING YOUR ORDERS)'))
    {
        return true;
    }
    else
        return false;
};
</script>
<?php
$transaction_id = $_GET['id'];
$_SESSION['aaaa'] = $transaction_id;
$query_category1="SELECT transaction_id,user_id,art_id,courier_name,courier_contact,delivery_date,shipping_status,ordered_date,ordered_no,total_price,shipping_area,shipping_municipal,shipping_province,shipping_zipcode,shipping_brgy,shipping_street,shipping_house_num FROM buy_transaction
where transaction_id = '$transaction_id'";

$result_category1 = mysqli_query($conn,$query_category1);
 while($row1 = mysqli_fetch_array($result_category1)){
    $id = $row1['transaction_id'];
    $user_id = $row1['user_id'];
    $art_id = $row1['art_id'];
    $courier_name = $row1['courier_name'];
    $courier_contact = $row1['courier_contact'];
    $ordered_date = $row1['ordered_date'];
    $delivery_date = $row1['delivery_date'];
    $ordered_no = $row1['ordered_no'];
    $total_price = $row1['total_price'];
      $shipping_area = $row1['shipping_area'];
      $shipping_municipal = $row1['shipping_municipal'];
      $shipping_province = $row1['shipping_province'];
      $shipping_zipcode = $row1['shipping_zipcode'];
      $shipping_brgy = $row1['shipping_brgy'];
      $shipping_street = $row1['shipping_street'];
      $shipping_house_num = $row1['shipping_house_num'];
      $shipping_status = $row1['shipping_status'];

      $total_price = number_format($total_price);
/*
      echo '
      <div class="fields fields--2">
      <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Transaction ID</span>
      '.$id.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">User ID</span>
      '.$user_id.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Art ID</span>
      ' .$art_id.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Courier Name</span>
      '.$courier_name.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Courier Contact</span>
      0'.$courier_contact.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Ordered Date</span>
      '.$ordered_date.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Shipping Address</span>
      '.$shipping_house_num.','.$shipping_street.' '.$shipping_brgy.', '.$shipping_municipal.', '.$shipping_province.'. '.$shipping_area.',Philippines
      <input class="field__input" type="text" />
    </label>

    <label class="field">
      <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Total Price</span>
      '.$total_price.'
      <input class="field__input" type="text" />
    </label>

    <label class="field">
    <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Delivery Date</span>
    <input class="field__input" type="text" id="delivery_date" required name="delivery_date" value="'.$delivery_date.'" placeholder="Enter Delivery Date"/>
  </label>


  <label class="field">
    <span class="field__label" for="" style="font-size: 12px;font-weight: bold;color:black">Shipping Status</span>
    <input class="field__input" type="text" required name="shipping_status" value="'.$shipping_status.'" placeholder="Enter Delivery Date"/>
  </label>

      </div>
      <input class="button" style="margin-top:30px" type="submit" name="submit" value="Save">

      </form>
      </div>
      ';*/




 echo '
        <div class="border">

            <label class="field">Transaction ID: '.$id.'</label>

            <label class="field">UserID:'.$user_id.'</label>

            <label class="field">Art ID: ' .$art_id.'</label>
            
            <label class="field">Courier Name: '.$courier_name.'</label>

            <label class="field">Courier Contact: 0'.$courier_contact.'</label>

            <label class="field">Ordered Date: '.$ordered_date.'</label>

            <label class="field">Total Price: '.$total_price.'</label>

            <label class="field">Shipping address: '.$shipping_house_num.','.$shipping_street.' '.$shipping_brgy.', '.$shipping_municipal.', '.$shipping_province.'. '.$shipping_area.',Philippines</label>

            


           <label class="field">Delivery Date:<input class="textbox" type="text" id="delivery_date" name="delivery_date" value="'.$delivery_date.'"></label>

           <label class="field">Shipping Status:<input class="textbox" type="text" id="zipcode" name="shipping_status" value="'.$shipping_status.'"></label>


             
                <input class="button" type="submit" name="submit" value="Save">
                </div>

        </form>
    </p>



    ';
  }
    ?>
</body>
</html>