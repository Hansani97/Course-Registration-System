<!DOCTYPE html>
<html style="filter: blur(0px);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - login</title>
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" type="text/css" href="css/loginerror.css">
    <script src="js/jquery-1.7.min.js"></script>
	<script src="js/tms-0.4.1.js"></script>
</head>

<body class="bg-gradient-primary" style="filter: blur(0px);background-color: #001a33;background-position: center;background-size: cover;background-repeat: no-repeat;background-image: url(&quot;assets1/img/3955269.jpg&quot;);">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-dark js-scroll-trigger" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="home-page.php" style="font-family: Arizonia, cursive;width: 40px;height: 40px;background-image: url(&quot;assets1/img/icons8_home_24px.png&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 10px;"></a></div>
    </nav>
    <div class="container" style="margin-top: 0px;">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card border rounded shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" data-aos="zoom-out" data-aos-duration="300" data-aos-delay="100" style="background-image: url(&quot;assets1/img/3094352.jpg&quot;);background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Login</h4>
                                    </div>
                                    <form class="user" id="form" action="login-process.php" method="POST" onsubmit="return validated()">
                                        <div class="form-group">
                                        	<p style="color: black;">Reg_Number</p>
                                        	<input class="form-control form-control-user" type="text" id="Reg_Number_error" aria-describedby="Help" placeholder="aaa/0000/0000/000" name="Reg_Number" autocomplete="off" style="text-transform: uppercase;">
                                        	<div class="error">
                                        	<?php if(isset($reg_error)){?>
                                        		<p><?php echo $reg_error?></p>
                                        	<?php } ?></div>
                                        </div>
                                        <div class="form-group">
                                        	<p style="color: black;">Password</p>
                                        	<input class="form-control form-control-user" type="password" id="pass_error" placeholder="Password" name="Password" autocomplete="off">
                                        	<div class="error">
                                        	<?php if(isset($pass_error)){?>
                                        		<p><?php echo $pass_error?></p>
                                        	<?php } ?>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small"></div>
                                        </div>
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit">Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                                    <div class="text-center"><a class="small" href="st_registration1.php">Create an Account!</a></div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets1/js/jquery.min.js"></script>
    <script src="assets1/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets1/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets1/js/theme.js"></script>
</body>

</html>