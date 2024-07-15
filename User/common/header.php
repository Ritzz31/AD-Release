 
 <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div>
            <h1 class="mb-0"><a class="text-black h2 mb-0"><b>A</b>d <i><b>R</b>elease</i></a></h1>
            <?php if (isset($_SESSION['userid'])) {
              echo "<b>Welcome</b>, ".$_SESSION['Firstnameforsession'];
            } ?>

          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block" id="menu">
                <li class="active"><a href="index.php">Home</a></li>
          
                
                <li><a href="about.php">About</a></li>
               
              
                <?php 
                  if(isset($_SESSION["userid"]))
                  {
                    ?>

                    <li><a href="postad.php">Search Post</a></li>
                    <li><a href="addnew.php">Add Post</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <!-- <li><a href="myorders.php">My Orders</a></li> -->
                    <li><a href="logout.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Logout</span></a></li>
                    <?php
                  }
                  else
                  {
                    ?>
                     <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">
                    <span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Login</span></a></li>
                    <?php
                  }
                ?>


              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header> 