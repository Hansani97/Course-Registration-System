<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Search Course Details</title>
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
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;assets/img/3433515.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;background-color: #001a33;height: auto;margin-top: -20px;margin-left: -20px;margin-bottom: -20px;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="Admin Dashboard.php" style="margin: auto;">
                    <div class="sidebar-brand-text mx-3" style="margin: auto;margin-top: 20px;padding: auto;"><img data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" src="assets/img/logo.png" style="width: 50px;height: 65px;">
                        <hr class="sidebar-divider my-0"><span data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" style="font-size: 15px;font-family: Nunito, sans-serif;">Admin<br>Dashboard<br></span>
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
                        <h3 class="text-dark mb-1"><strong><span style="text-decoration: underline;">SEARCH&nbsp; COURSES</span></strong><br></h3>
                    </div>
                    <div class="row" style="height: auto;">
                        <div class="col-12 col-lg-12 offset-lg-3" style="height: 80px;margin: auto;">
                            <div class="p-5" style="height: 250px;margin: auto;margin-right: -45px;margin-top: 10px;margin-left: -37px;">
                                <form method="POST" class="user">
                                    <div class="form-group row" style="margin: auto;margin-top: -50px;margin-left: -10px;">
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0" style="max-width: auto;">
                                            <div class="dropdown">
                                                <select name="year" id="year" onchange="this.form.submit()" ;>
                                                    <div class="dropdown-menu" role="menu">
                                                        <option hidden>Academic Year</option>
                                                        <option value="1" <?php if (isset($_POST["year"])) {
                                                                                if ($_POST["year"] == 1) {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>First Year</option>
                                                        <option value="2" <?php if (isset($_POST["year"])) {
                                                                                if ($_POST["year"] == 2) {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>Second Year</option>
                                                        <option value="3" <?php if (isset($_POST["year"]) == 3) {
                                                                                if ($_POST["year"] == 3) {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>Third Year</option>
                                                        <option value="4" <?php if (isset($_POST["year"]) == 4) {
                                                                                if ($_POST["year"] == 4) {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>Fourth Year</option>
                                                    </div>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0" style="max-width: auto;">
                                            <div class="dropdown">
                                                <select name="semester" id="semester" onchange="this.form.submit()" ;>
                                                    <div class="dropdown-menu" role="menu">
                                                        <option hidden>Semester</option>
                                                        <option value="1" <?php if (isset($_POST["semester"])) {
                                                                                if ($_POST["semester"] == 1) {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>First Semester</option>
                                                        <option value="2" <?php if (isset($_POST["semester"])) {
                                                                                if ($_POST["semester"] == 2) {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>Second Semester</option>
                                                    </div>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0" style="max-width: auto;">
                                            <div class="dropdown">
                                                <select name="department" id="department" class="demoInputBox" onchange="this.form.submit()" ;>
                                                    <div class="dropdown-menu" role="menu">
                                                        <option hidden>Department</option>
                                                        <option value="ict" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'ict') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>ICT</option>
                                                        <option value="bst" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'bst') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>BST</option>
                                                        <option value="ent" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'ent') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>ENT</option>
                                                        <option value="bpt" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'bpt') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>BPT</option>
                                                        <option value="eet" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'eet') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>EET</option>
                                                        <option value="fdt" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'fdt') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>FDT</option>
                                                        <option value="mtt" <?php if (isset($_POST["department"])) {
                                                                                if ($_POST["department"] == 'mtt') {
                                                                                    echo "selected";
                                                                                }
                                                                            } ?>>MTT</option>
                                                    </div>
                                                </select>
                                            </div>
                                        </div>
                                        <hr style="width: 1024px;">
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" style="filter: sepia(0%);background-color: #d9d9d9;margin: auto;padding: auto;">
                        <?php require_once 'conection.php'; ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Course Code</th>
                                    <th>Status</th>
                                    <th>Credits</th>
                                    <th>Year</th>
                                    <th>Department</th>
                                    <th>Semester</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Year = isset($_POST["year"]) ? $_POST["year"] : null;
                                $Semester = isset($_POST["semester"]) ? $_POST["semester"] : null;
                                $Department = isset($_POST["department"]) ? $_POST["department"] : null;

                                if ($Year != "" /*|| $Semester != "" || $Department != ""*/) {
                                    $query = "SELECT * FROM courses WHERE Year = '$Year' AND Semester = '$Semester' AND Department = '$Department'";
                                    $data = mysqli_query($connect, $query) or die('error');
                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $Course_ID = $row['ID'];
                                            $Course_Title = $row['Course_Title'];
                                            $Course_Code = $row['Course_Code'];
                                            $Status = $row['Status'];
                                            $Credit = $row['Credit'];
                                            $Year = $row['Year'];
                                            $Semester = $row['Semester'];
                                            $Department = $row['Department'];
                                            $checked = false;
                                            if ($Status == "C") {
                                                $checked = true;
                                            }
                                ?>
                                            <tr>

                                                <td><?php echo $Course_Title; ?></td>
                                                <td><?php echo $Course_Code; ?></td>
                                                <td><?php echo $Status; ?></td>
                                                <td><?php echo $Credit; ?></td>
                                                <td><?php echo $Year; ?></td>
                                                <td><?php echo $Department; ?></td>
                                                <td><?php echo $Semester; ?></td>

                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td>Records Not Found!</td>
                                        </tr>
                                <?php
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <footer class="bg-white sticky-footer" style="margin: auto;height: auto;width: auto;">
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