<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
</head>

	<div class="about-bottom">
	<div class="col-md-6 pd_about_bottom_left">
		<div class="grid-single-page-agileits">
		<img src="img/banner1.jpg" alt="" class="img-responsive" /> </div>
		</div>
	</div>
	<div class="col-md-6 pd_about_bottom_right">
		<div class="abt-pd">
			<div class="header-pd">
				<h2>Student Registration Form</h2>
				<h4>Enter the Following Details</h4>

				<!-- <?php
					if(!empty($error)){
						echo 'There were error(s) on your form..';
					}
				?> -->

				<form action="reg.php" method="post" class="mod2">
					<div class="col-md-6 col-xs-6 pd-left-mk">
						<ul>
							<li class="text">Registration Number :  </li>
							<li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input name="Reg_Number" type="text"   style="text-transform: uppercase;"></li>
							<!-- <div class="error">
                                <?php if(isset($reg_error)){?>
                                 <p><?php echo $reg_error?></p>
                                <?php } ?>
                            </div> -->
							<li class="text">First Name :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input  name="First_Name" type="text" value=""  style="text-transform: capitalize;"/></li>
							<li class="text">Last Name  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="Last_Name" type="text"  style="text-transform: capitalize;"></li>
							<li class="text">Gender  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="Gender" type="text"  style="text-transform: capitalize;"></li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-6 pd-right-mk">
						<ul>
							<li class="text">mobile no  :  </li>
							<li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i><input name="Contact_Number" type="text" ></li>
							<!-- <div class="error">
                                <?php if(isset($mobi_error)){?>
                                 <p><?php echo $mobi_error?></p>
                                <?php } ?>
                            </div> -->
							<li class="text">E-mail Address  :  </li>
							<li class="agileits-main"><i class="fa fa-envelope" aria-hidden="true"></i><input name="Email" type="email" ></li>
							<li class="text">Password  :  </li>
							<li class="agileits-main"><i class="fa fa-key" aria-hidden="true"></i><input type="password" name="Password" ></li>
							<!-- <div class="error">
                                <?php if(isset($pass_error)){?>
                                 <p><?php echo $pass_error?></p>
                                <?php } ?> -->
							<li class="text">Confirm Password  :  </li>
							<li class="agileits-main"><i class="fa fa-key" aria-hidden="true"></i><input type="password" name="Confirm_Password" ></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="agile-submit">
						<input type="submit" value="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
</body>
</html>