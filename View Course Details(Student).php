<?php
session_start();
require_once('conection.php');
$reg_number = $_SESSION['user']['id'];
$ID = "";
$Course_Title = "";
$Course_Code = "";
$Status = "";
$Credit = "";
$Year = "";
$row = "";
$dep = explode('/', $reg_number);
$dep =  $dep[0];

$sql = "SELECT * FROM student_course1 WHERE Reg_num = '{$reg_number}'";
$result = mysqli_query($connect, $sql);

if ($result) {
    while ($ro = mysqli_fetch_assoc($result)) {
        $sql1 = "SELECT * FROM courses WHERE Course_Code = '{$ro['Course_code']}' AND Department LIKE '{$dep}'";
        $reult = mysqli_query($connect, $sql1);
        if ($reult) {
            while ($g = mysqli_fetch_assoc($reult)) {
                $ID = $g["ID"];
                $Course_Title = $g["Course_Title"];
                $Course_Code = $g["Course_Code"];
                $Status = $g["Status"];
                $Credit = $g["Credit"];
                $Year = $g["Year"];
                $row .= "<tr>";
                $row .= "<td>" . $Course_Title . "</td>";
                $row .= "<td>" . $Course_Code . "</td>";
                $row .= "<td>" . $Status . "</td>";
                $row .= "<td>" . $Credit . "</td>";
                $row .= "<td>" . $Year . "</td>";
                $row .= "</tr>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Course Details</title>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/CDN-JS-Search-1.css">
    <link rel="stylesheet" href="assets/css/CDN-JS-Search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;assets/img/3433515.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #001a33;height: auto;margin-top: -20px;margin-left: -20px;margin-bottom: -20px;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="Student%20Dashboard.php" style="margin: auto;">
                    <div class="sidebar-brand-text mx-3" style="margin: auto;margin-top: 20px;padding: auto;"><img data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" src="assets/img/logo.png" style="width: 50px;height: 65px;">
                        <hr class="sidebar-divider my-0"><span data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" style="font-size: 15px;font-family: Nunito, sans-serif;">Student<br>Dashboard<br></span>
                    </div>
                </a>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="height: 800px;">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation"><a class="nav-link active" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php"><i class="fa fa-sign-out shadow" style="color: rgb(172,173,180);"></i><span style="color: rgb(172,173,180);">Logout</span></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" data-aos="fade-up">
                    <div>
                        <h3 class="text-dark mb-1"><strong><span style="text-decoration: underline;">VIEW&nbsp; COURSE&nbsp; DETAILS</span></strong><br></h3>
                    </div>
                    <div class="row" style="height: auto;">
                        <div class="col-12 col-lg-12 offset-lg-3" style="height: auto;margin: auto;">
                            <div class="p-5" style="height: auto;margin: auto;margin-right: -45px;margin-left: -37px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" data-aos="fade-up" style="filter: sepia(0%);background-color: #d9d9d9;margin: auto;padding: auto;">
                    <?php
                    if (isset($reult)) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Course Code</th>
                                    <th>Status</th>
                                    <th>Credits</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo $row; ?>

                            </tbody>
                        </table>

                    <?php    }
                    ?>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="height: auto;width: auto;margin: auto;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © OCRS 2020</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="assets/js/CDN-JS-Search.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>