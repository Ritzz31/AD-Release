`<?php 
  session_start();

  include 'connection.php';

  if(isset($_POST['submit']))
  {
        
    $date = $_POST["date"];

    $order_result = $con->query("select * from orders where papper_date = '$date' ");
    $order_count_exist = $order_result->num_rows;

    if($order_count_exist != 0)
    {
        echo "<script>alert('Slot Not Available..');</script>";
    }
    else
    {
          $_SESSION["description"] = trim($con->real_escape_string($_POST["description"]));
          $_SESSION["date"] = $date;
          $filename = $_FILES["image"]["name"];
          $tmp = $_FILES["image"]["tmp_name"];
          $path = "upload/$filename";
          move_uploaded_file($tmp, $path);
          $_SESSION["filename"] = $filename;
          header('location:order.php');
    }


      

  }
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

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post Ad</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Post Ad</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">


          <div class="col-md-12 col-lg-2 mb-5"></div>   
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form class="p-5 bg-white" action="" method="post" enctype="multipart/form-data">



               <div class="col-md-12 mb-3 mb-md-0">

                  <label class="font-weight-bold" for="message">Post Date</label> 
                  <input type="date" name="date" id="date" cols="30" rows="5" class="form-control" placeholder="" required  min="<?php echo date("Y-m-d",mktime(0,0,0,date('m'),date('d')+1,date('Y'))); ?>">
                </div>
                <br/>

                <div class="col-md-12 mb-3 mb-md-0">

                  <label class="font-weight-bold" for="message">Post Image</label> 
                  <input type="file" name="image" id="image" cols="30" rows="5" class="form-control" placeholder="" required>
                </div>
      
              
                      <br>
                 
                    <div class="col-md-12 mb-3 mb-md-0">

                  <label class="font-weight-bold" for="message">Description</label> 
                  <textarea name="description" id="des" cols="30" rows="5" class="form-control" placeholder="Add Description" required></textarea>
                </div>
      
              


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <br/>
                  <input type="submit" id="fullname" value="Next" name="submit" class="btn btn-primary  py-2 px-5"  placeholder="">
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