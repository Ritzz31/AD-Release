<?php

$con = new mysqli("localhost","root", "", "adrelease");
$errno =$con->connect_errno;
if($errno!=0)
{
	echo $con->connect_error;
	exit;
} 

$id = $_SESSION["userid"];
$result = $con->query("select * from company where Agency_id='$id'");
$row = $result->fetch_object();





?>

<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="dashboard.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Ad Release
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
								<?php echo "<b>$row->Owner_name</b>"; ?>
								</span>

								
							</a>

							
						</li>
					</ul>
				</div>
			</div>

			</div><!-- /.navbar-container -->
		</div>