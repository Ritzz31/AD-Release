<?php 
session_start();
include 'connection.php';
$id = $_SESSION["userid"];
$result = $con->query("select * from orders where user_id='$id'");

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your &mdash; Order </title>
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

    <!-- <div class="unit-5 overlay" style="background-image: url('images/100.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Order History</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Order</span></p>
      </div>
    </div> -->

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
              <h1 style="color: black" align="center">Order History</h1>
             <table class="table table-bordered" style="margin-top: 30px;">
             <tr style="background-color: DodgerBlue; color: white">
              <th>OrderId</th>
               <th>AdId</th>
               <th>Title</th>
               <th>Size</th>
               <th>Price</th>
               <th>Page Number</th>
             </tr>
             <?php while($row = $result->fetch_object()) {?>
             <tr>
               <td><?php echo $row->order_id; ?></td>
               <td><?php echo $row->Ad_id; ?></td>
               <td><?php echo $row->Title; ?></td>
               <td><?php echo $row->Size; ?></td>
               <td><?php echo $row->Price; ?></td>
                <td><?php echo $row->ad_page; ?></td>
              
             </tr>
             <?php }?>

           </table>
          
           
          </div>
    
           
          </div>
        </div>
      </div>
    </div>

   


    

    

    

    

    

    <?php include 'common/footer.php'?>
 
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