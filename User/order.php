<?php 
session_start();

//echo '<pre>';
//print_r($_SESSION);
//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'alkesh.info@gmail.com'; //Business Email


//extra code
include 'connection.php';

$Ad_id= $_SESSION["Ad_id"];
$Title = $_SESSION["Title"];
$Size = $_SESSION["Size"];
$Price= $_SESSION["Price"]; 
$ad_page = $_SESSION["ad_page"];
$user_id = $_SESSION["userid"];


$description = $_SESSION["description"];
$filename = $_SESSION["filename"];
$Agency_id = $_SESSION["Agency_id"];

$date = date('Y-m-d');
$pdate = $_SESSION['date'];


// echo "insert into orders(Ad_id,Title,Size,Price,ad_page,user_id, description, filename, Agency_id,order_date,papper_date) values('$Ad_id','$Title','$Size','$Price','$ad_page','$user_id','$description','$filename', '$Agency_id','$date','$pdate')";

// exit;

$exe = $con->query("insert into orders(Ad_id,Title,Size,Price,ad_page,user_id, description, filename, Agency_id,order_date,papper_date) values('$Ad_id','$Title','$Size','$Price','$ad_page','$user_id','$description','$filename', '$Agency_id','$date','$pdate')");

$order_id = $con->insert_id;


$apiKey = "rzp_test_pLl681e9OrLq4X";
$profile_data = $con->query("select * from customer where Id='$user_id'");
$profile = $profile_data->fetch_object();

?>

  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ad &#9829; Release</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php include'common/header.php';?>
<!-- 
    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post Ad</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Post Ad</span></p>
      </div>
    </div> -->

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-2 mb-5"></div>   
       
          <div class="col-md-12 col-lg-8 mb-5">
          
           

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="http://localhost/AdRelease1/user/success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo intval($_SESSION['Price']) * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo $order_id;?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Ad Release"
    data-description="Complete Advertise Solution"
    data-image="https://oibp1.000webhostapp.com/logo.PNG"
    data-prefill.name="<?php echo $profile->Fname.' '.$profile->Lname;?>"
    data-prefill.email="<?php echo $profile->Email;?>"
    data-prefill.contact="<?php echo $profile->Contact;?>"
    data-theme.color="#ff9902">
      
    </script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

         

          </div>

        
        </div>
      </div>
    </div>

    <?php include'common/footer.php';?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>






