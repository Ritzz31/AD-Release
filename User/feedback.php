<?php
include 'connection.php';
session_start();
if(isset($_POST["submit"]))
{
    $message  = trim($con->real_escape_string($_POST["message"]));
    $rate  = $_POST["rate"];
    $date = date('Y-m-d');
    $id =  $_SESSION["userid"];

  $exe = $con->query("insert into feedback(Customer_id,Message,Date,ratings) values('$id','$message','$date','$rate')");
  
  if($exe)
  {
    echo "<script>alert('Thank you for your valuable feedback');</script>";
  }
  else
  {
    echo "Something Went Wrong.";
  }
}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Feedback &mdash; Ad Release</title>
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

    <div class="unit-5 overlay" style="background-image: url('images/about/5.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Feedback</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Feedback</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="" method="post" class="p-5 bg-white">

              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

                 

                      <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                             <label class="font-weight-bold" for="fullname">Ratings</label>
        
                          
                          <select name="rate" id="size" class="form-control" required="">
                            <option value="">--Give Rating-- </option>
                          
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                          </select>
                        </div>
                      </div>



              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Send" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">602,Kaivanna Complex Nr.Central Mall, Panchvati,Ahmedabad-380006.</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+91 90166 47480</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">adrelese@alpha.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>

   


    

    

    

    

    

<?php include 'common/footer.php'; ?>
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