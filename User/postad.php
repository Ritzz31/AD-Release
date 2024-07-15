<?php 
  session_start();
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Post Ad</title>
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
        <h2 class="mb-0">Search Post</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Post Ad</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">


          <div class="col-md-12 col-lg-2 mb-5"></div>   
       
          <div class="col-md-12 col-lg-8 mb-5" style="position: relative;bottom: 60px;">
          
            
          
            <form class="p-5 bg-white" action="subpost.php" method="post">

               <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Post Size</label>

                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="size" id="size" class="form-control" required="">
                            <option value="">--Select Size-- </option>
                          
                        <option value="1">1x1</option>
                        <option value="2">2x2</option>
                        <option value="3">3x3</option>
                        <option value="4">4x4</option>
                        <option value="5">5x5</option>
                          </select>
                        </div>
                      </div>
                      <br>
                  <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Page</label>

                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="page" id="page" class="form-control">
                        <option>--Select Page--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                          </select>
                        </div>
                      </div>
                      <br>
                   
      
              

                       
                  <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">News Type</label>

                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="newstype" id="" class="form-control">
                            <option value="">--News Type--</option>
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                            <option value="both">Both</option>
                          </select>
                        </div>
                      </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <br/>
                  <input type="submit" id="fullname" value="Search" name="submit" class="btn btn-primary  py-2 px-5"  placeholder="First Name">
                </div>
              </div>

              </div>

              


               
             

  
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