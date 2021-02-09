<?php
require_once('conection.php');

$year = "";
$semester = "";
$depar = "";
$row = "";
if (isset($_POST['find'])) {

    $year = $_POST['year'];
    $depar = $_POST['department'];

    $query = "SELECT DISTINCT(Reg_num) FROM student_course1 WHERE SUBSTRING(Course_code,5,1) = '{$year}' AND SUBSTRING(Reg_num,1,3) = '{$depar}'";
    $resu = mysqli_query($connect, $query);

    if ($resu) {
        while ($dd = mysqli_fetch_assoc($resu)) {
            $namequery = "SELECT First_Name,Last_Name FROM student_registration WHERE Reg_Number = '{$dd['Reg_num']}'";
            $resultname = mysqli_query($connect, $namequery);

            if ($resultname) {
                $na = mysqli_fetch_assoc($resultname);
                $row .= '<tr><td>' . $dd['Reg_num'] . '</td><td>' . $na['First_Name'] . ' ' . $na['Last_Name'] . '</td></tr>';
            }
        }
    } else {
        print_r(mysqli_error($connect));
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Course Registration</title>
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="279x357" href="assets/img/logo.png">
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
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;assets/img/3433515.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #001a33;height: auto;margin-top: -20px;margin-left: -20px;margin-bottom: -20px;min-height: 660px;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="Admin%20Dashboard.php" style="margin: auto;">
                    <div class="sidebar-brand-text mx-3" style="margin: auto;margin-top: 20px;padding: auto;"><img data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" src="assets/img/logo.png" style="width: 50px;height: 65px;">
                        <hr class="sidebar-divider my-0"><span data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" style="font-size: 15px;font-family: Nunito, sans-serif;">admin<br>dashboard<br></span>
                    </div>
                </a>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="height: auto;">
            <div id="content" style="height: auto;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation"><a class="nav-link active" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php"><i class="fa fa-sign-out shadow" style="color: rgb(172,173,180);"></i><span style="color: rgb(172,173,180);">Logout</span></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" data-aos="fade-up">
                    <div>
                        <h3 class="text-dark mb-1"><strong><span style="text-decoration: underline;">REGISTRATION&nbsp; DETAILS</span></strong><br></h3>
                    </div>
                    <div class="row" style="height: auto;">
                        <div class="col-12 col-lg-12 offset-lg-3" style="height: auto;margin: auto;">
                            <div class="p-5" style="height: auto;margin: auto;margin-right: -45px;margin-top: 10px;margin-left: -37px;">
                                <form class="user" method="POST" action="Registration%20Details(admin).php" name="form">
                                    <div class="form-group row" style="margin: auto;margin-top: -30px;margin-left: -10px;">
                                        <div class="col-sm-6 col-lg-3 col-xl-2 mb-3 mb-sm-0">
                                            <select name="year" id="year" style="width: 150px;margin: auto;margin-top: 10px;margin-left: 0px;">
                                                <div class="dropdown-menu" role="menu">
                                                    <option hidden value="">Academic Year</option>
                                                    <option value="1">First Year</option>
                                                    <option value="2">Second Year</option>
                                                    <option value="3">Third Year</option>
                                                    <option value="4">Fourth Year</option>
                                                </div>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-xl-2">
                                            <select name="department" id="department" class="demoInputBox" style="width: 150px;margin: auto;margin-top: 10px;margin-left: 0px;">
                                                <div class="dropdown-menu" role="menu">
                                                    <option hidden value="">Department</option>
                                                    <option value="ict">ICT</option>
                                                    <option value="bst">BST</option>
                                                    <option value="ent">ENT</option>
                                                </div>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xl-3 offset-lg-0 text-left mb-3 mb-sm-0"><button class="btn btn-primary btn-lg text-white btn-user" type="submit" style="width: 150px; margin: auto;margin-top: 10px;font-size: 15px;margin-left: 0px;" name="find">Find</button></div>
                                        <hr style="width: 911px;margin-top: 30px;">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <div class="table-responsive" style="background-color: #d9d9d9;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Registration Number</th>
                                            <th>Student Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $row ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--<div class="col">
                            <div class="row" style="height: auto;width: auto;">
                                <div class="col">
                                    <div class="card shadow border-left-warning py-2">
                                        <div class="card-body">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col mr-2">
                                                    <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Total</span></div>
                                                    <div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow border-left-info py-2">
                                        <div class="card-body">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col mr-2">
                                                    <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Completed</span></div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>65%</span></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-info progress-bar-animated" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"><span class="sr-only">65%</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
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