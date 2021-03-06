<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
</head>

<body class="bg-gradient-primary" style="background-image: url(&quot;assets/img/3433515.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;background-color: #001a33;">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-dark js-scroll-trigger" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php" style="font-family: Arizonia, cursive;width: 40px;height: 40px;background-image: url(&quot;assets/img/icons8_home_24px.png&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;margin-top: 10px;"></a></div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="margin-top: 0px;">
                <div class="card shadow-lg o-hidden border-0 my-5" data-aos="fade">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" data-aos="fade-up" style="background-image: url(&quot;assets/img/4957136.jpg&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div data-aos="fade-up" class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Login to Admin</h4>
                                    </div>
                                    <form action="admin-login-process.php" method="POST" class="user">
                                        <div class="form-group"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="Email"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="KeyID" placeholder="Key ID" name="Password"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small"></div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="Change%20Admin%20ID.php">Change Key ID</a></div>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"></div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>