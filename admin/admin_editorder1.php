<?php
include('includes/connection.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<style type="text/css">
@import url("https://rsms.me/inter/inter.css");
*{
   
}
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


.container {
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
 









  <div class="container" style="margin-left: 50px;margin-right:50px;width:1000px">
  
  
  <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
      echo '<h2 class="bg-info text-white text-center"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
      echo '<h2 class="bg-info text-white text-center"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
    }
    ?>

 <form action="admin_editorderprocess1.php" method="POST">
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
$order_id = $_GET['id'];
$_SESSION['aaaa'] = $order_id;
$query_category1="SELECT * FROM orders,user WHERE ORDER_ID = '$order_id' AND user.USER_ID = orders.USER_ID";

$result_category1 = mysqli_query($conn,$query_category1);
 while($row1 = mysqli_fetch_array($result_category1)){
    $id = $row1['ORDER_ID'];
    $user_id = $row1['USER_ID'];
    $artworks = $row1['ORDER_PRODUCTS'];
    $name = $row1['ORDER_NAME'];
    $contact = $row1['ORDER_PHONE'];
    $ordered_date = $row1['ORDER_DATE'];
    $delivery_date = $row1['DELIVERY_DATE'];
    $amount = $row1['ORDER_AMOUNT'];
    $address = $row1['ORDER_ADDRESS'];
    $order_status = $row1['ORDER_STATUS'];
    $email = $row1['ORDER_EMAIL'];

      $amount = number_format($amount);





 echo '
 
        <h1>Order #'.$id.'</h1>
        <p>Order Information.</p><button class="button" onclick="window.print()" style="position:relative;left:80%;width:20%">Print</button>
        <hr>
 
        <div class="border">

            <label class="field">Order ID: '.$id.'</label>

            <label class="field">User ID: '.$user_id.'</label>

            <label class="field">Artwork(s): <div style="font-weight:bold">' .$artworks.'</div></label>
            
            <label class="field">Courier Name: '.$name.'</label>
            
            <label class="field">Courier Email: '.$email.'</label>

            <label class="field">Courier Contact: '.$contact.'</label>

            <label class="field">Ordered Date: '.$ordered_date.'</label>

            <label class="field">Total Amount: Php '.$amount.'</label>

            <label class="field">Shipping address: '.$address.'</label>

            
           <input type="hidden" name="user_id" value="'.$user_id.'">
           <input type="hidden" name="email" value="'.$email.'">
           <input type="hidden" name="address" value="'.$address.'">

           <label class="field">Delivery Date:<input class="textbox" type="date" id="delivery_date" name="delivery_date" value="'.$delivery_date.'" style="border:none;"></label>

           <label class="field">Shipping Status: <i class="fa fa-chevron-down" aria-hidden="true" style="position:relative;left:98%;bottom:-20px"></i>
           ';
           if($order_status == 'Pending'){
               echo '
               <select id="order_status" name="order_status" class="field__input" style="color:black;background-color:white">
                    <option value="Pending" style="color:black">Pending</option>
                    <option value="Shipping">Shipping</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Cancelled">Cancelled</option>
              </select>
              </label>
        

             
                <input class="button" type="submit" name="submit" value="Save">
                </div>

        </form>
    </p>';
           } else if($order_status == 'Shipping'){
               echo '
               <select id="order_status" name="order_status" class="field__input" style="color:black;background-color:white">
                    <option value="Shipping">Shipping</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Pending" style="color:black">Pending</option>
                    <option value="Cancelled">Cancelled</option>
              </select>
              </label>
        

             
                <input class="button" type="submit" name="submit" value="Save">
                </div>

        </form>
    </p>';
           } else if($order_status == 'Delivered'){
               echo '
               <select id="order_status" name="order_status" class="field__input" style="color:black;background-color:white">
                    <option value="Delivered">Delivered</option>
                    <option value="Pending" style="color:black">Pending</option>
                    <option value="Shipping">Shipping</option>
                    <option value="Cancelled">Cancelled</option>
              </select>
              </label>
        

             
                <input class="button" type="submit" name="submit" value="Save">
                </div>

        </form>
    </p>';
           } else{
               echo '
               <select id="order_status" name="order_status" class="field__input" style="color:black;background-color:white">
                    <option value="Cancelled">Cancelled</option>
                    <option value="Pending" style="color:black">Pending</option>
                    <option value="Shipping">Shipping</option>
                    <option value="Delivered">Delivered</option>
              </select>
              </label>
        

             
                <input class="button" type="submit" name="submit" value="Save">
                </div>

        </form>
    </p>';
           }
           '



    ';
  }
    ?>
    
    
<?php
include('includes/scripts.php');
include('includes/footer.php');
?> 
