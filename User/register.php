<?php 
session_start();
include 'connection.php';

if(isset($_POST["submit"]))
{
  $fname  = $_POST["fname"];
  $lname  = $_POST["lname"];
  $email  = $_POST["email"];
  $contact  = $_POST["contact"];
  $dob    = $_POST["dob"];
  $gender   = $_POST["gender"];
  $location    = $_POST["location"];
  $address    = $_POST["address"];
  $password      = $_POST["password"];
    $cpassword      = $_POST["cpassword"];
  $req      = date('Y-m-d');
 
  if($password == $cpassword)
  {
     $con->query("insert into customer(Fname,Lname,Gender,Dob,Email,Contact,Address,Password,  Request_date) values('$fname','$lname','$gender','$dob','$email','$contact','$address','$password','$req')");
     $_SESSION['email'] = "$email";
    header('location:login.php');
  }
  else
  {
  echo "<script>alert('password are not matched');</script>";
  }
}

?>


  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ad Release &#9829; Register</title>
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
        <h2 class="mb-0">Register</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Register</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">


          <div class="col-md-12 col-lg-2 mb-5"></div>   
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form class="p-5 bg-white" method="post" novalidate>
              
             
  
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">First Name</label>
                  <input type="text" id="fullname" name="fname" class="form-control" placeholder="First Name" required pattern="[A-Za-z]+"   title="Only Character can Support"> 
                </div>
                 <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="lastname">Last Name </label>
                  <input type="text" id="fullna
                  me" name="lname" class="form-control" placeholder="Last Name " required pattern="[A-Za-z]+">
                </div>
              </div>


               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Email</label>
                  <input type="text" id="fullname" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Contact</label>
                  <input type="text" id="fullname" name="contact" class="form-control" placeholder="Enter Your Contact" required>
                </div>
              </div>

               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Date Of Birth</label>
                  <input type="Date" id="fullname" name="dob" class="form-control"  placeholder="First Name" required max="2003-01-01">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12"><h3>Gender</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1">
                    <input type="radio" id="option-job-type-1" value="Male" name="gender"> Male
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-2">
                    <input type="radio" id="option-job-type-2" value="Female" name="gender"> Female
                  </label>
                </div>

              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" class="form-control" name="location" placeholder="Enter Your Location">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Address</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="address" class="form-control" id="" cols="30" rows="5" placeholder="Enter Your Address" required></textarea>
                </div>
                  <br><br><br><br><br><br>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Password </label>
 <input type="password" id="fullname" name="password" class="form-control" placeholder="Enter Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
  <p style="font-size: 12px;">&#160;&#160;&#160; Password Must Be 8 Character one  number and one uppercase and lowercase letter</p>
                </div>
                <br> <br> 
                <br> <br> 
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Confirm Password </label>
                  <input type="password" id="fullname" name="cpassword" class="form-control" placeholder="Enter Confirm Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <br/>
                  <input type="submit" id="fullname" name="submit" class="btn btn-primary  py-2 px-5"  placeholder="First Name">
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