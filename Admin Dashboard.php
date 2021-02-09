<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="279x357" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arizonia">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;assets/img/3433515.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;background-color: #001a33;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="Home_Page\index.php">
                    <div class="sidebar-brand-text mx-3" style="margin: auto;margin-top: 20px;padding: auto;"><img data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" src="assets/img/logo.png" style="width: 50px;height: 65px;">
                        <hr class="sidebar-divider my-0"><span data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" style="font-size: 15px;font-family: Nunito, sans-serif;">OCRS<br></span>
                    </div>
                </a>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation"><a class="nav-link" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php"><i class="fa fa-sign-out" style="color: rgb(172,173,180);"></i><span style="color: rgb(172,173,180);">Logout</span></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" data-aos="zoom-out-right" data-aos-duration="300" data-aos-delay="100">Admin Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col" style="margin: auto;margin-top: 24px;">
                            <div class="card-group">
                                <div class="card text-center" data-aos="zoom-in" style="background-color: #ffffff;">
                                    <a href="Search%20Course%20Details%20(admin).php" style="margin: auto;">
                                        <div class="card shadow-lg border-left-primary py-2" data-bs-hover-animate="pulse" style="width: 181px;height: 106px;margin: auto;margin-top: 25px;">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters" style="margin: auto;">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span style="font-size: 15px;">search course Details</span></div>
                                                        <div class="text-dark font-weight-bold h5 mb-0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100">
                                        <p class="card-text"><br>"Quickly find more details about academic courses which registered to system!"<br></p>
                                    </div>
                                </div>
                                <div class="card text-center" data-aos="zoom-in" style="background-color: rgb(255,255,255);">
                                    <a href="Update%20Course(admin).php" style="margin: auto;">
                                        <div class="card shadow-lg border-left-success py-2" data-bs-hover-animate="pulse" style="width: 181px;height: 106px;margin: auto;margin-top: 25px;">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters" style="margin: auto;margin-top: 0px;">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1" style="font-size: 15px;"><span>update courses</span></div>
                                                        <div class="text-dark font-weight-bold h5 mb-0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body text-center" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100">
                                        <p class="card-text"><br>"You want to add, remove or modify the exist course details easily!"<br><br></p>
                                    </div>
                                </div>
                                <div class="card text-center" data-aos="zoom-in" style="background-color: rgb(255,255,255);">
                                    <a href="Registration%20Details(admin).php" style="margin: auto;">
                                        <div class="card shadow-lg border-left-info py-2" data-bs-hover-animate="pulse" style="width: 181px;margin: auto;margin-top: 25px;">
                                            <div class="card-body">
                                                <div class="row align-items-center no-gutters" style="margin: auto;">
                                                    <div class="col mr-2">
                                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span style="font-size: 15px;">filter Course details</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100">
                                        <p class="card-text"><br>"You want to do more oparation for course content without any problem!"<br><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="width: auto;height: auto;margin: auto;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © OCRS 2020</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>