<?php
require_once("conection.php");
session_start();

$name = "";
$regi_num = "";
$year = "";
$semester = "";
$department = "";

if (isset($_POST['year'])) {
    $year = $_POST['year'];
}
if (isset($_POST['semester'])) {
    $semester = $_POST['semester'];
}
if (isset($_POST['department'])) {
    $department = $_POST['department'];
}

if (isset($_SESSION["user"]["id"])) {
    $name = $_SESSION["user"]["first_name"] . " " . $_SESSION["user"]["last_name"];
    $regi_num = $_SESSION["user"]["id"];

    $query = "SELECT * FROM student_course1 WHERE Reg_num = '{$regi_num}' ";
    $result = mysqli_query($connect, $query);
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update Details</title>
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
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="Student%20Dashboard.php" style="margin: auto;">
                    <div class="sidebar-brand-text mx-3" style="margin: auto;margin-top: 20px;padding: auto;"><img data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" src="assets/img/logo.png" style="width: 50px;height: 65px;">
                        <hr class="sidebar-divider my-0"><span data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" style="font-size: 15px;font-family: Nunito, sans-serif;">Student<br>Dashboard<br></span>
                    </div>
                </a>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="height: 800px;">
            <div data-aos="fade-up" id="content" style="height: auto;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation"><a class="nav-link active" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php"><i class="fa fa-sign-out shadow" style="color: rgb(172,173,180);"></i><span style="color: rgb(172,173,180);">Logout</span></a></li>
                        </ul>
                    </div>
                </nav>
                <div>
                    <div>
                        <div class="container-fluid" data-aos="fade-up">
                            <div>
                                <h3 class="text-dark mb-1"><strong><span style="text-decoration: underline;">UPDATE&nbsp; DETAILS</span></strong><br></h3>
                            </div>
                            <div class="row" style="height: auto;">
                                <div class="col-12 col-lg-12 offset-lg-3" style="height: auto;margin: auto;">
                                    <div class="p-5" style="height: auto;margin: auto;margin-right: -45px;margin-top: 10px;margin-left: -37px;">
                                        <form class="user" method="POST" action="Update%20Details(Student).php">
                                            <div class="form-group row" style="margin: auto;">
                                                <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0" style="height: 60px;">
                                                    <select name="year" id="year" onchange="this.form.submit()">
                                                        <div class="dropdown-menu" role="menu">
                                                            <option hidden value="">Academic Year</option>
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
                                                <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0" style="height: 60px;">
                                                    <select name="semester" id="semester" onchange="this.form.submit()">
                                                        <div class="dropdown-menu" role="menu">
                                                            <option hidden value="">Semester</option>
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
                                                <div class="col-sm-6 col-lg-3" style="height: 60px;">
                                                    <select name="department" id="department" class="demoInputBox" onchange='this.form.submit()'>
                                                        <div class="dropdown-menu" role="menu">
                                                            <option hidden value="">Department</option>
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
                                                <div>
                                                    <hr style="width: 1024px;">
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-5 mb-3 mb-sm-0" id="exampl">
                                                    <input class="form-control form-control-user" type="text" id="Name with Initials" placeholder="Name with Initials" name="Name with Initials" value="<?php echo $name ?>" readonly>
                                                </div>
                                                <div class="col-sm-6 col-lg-5" id="exampl1">
                                                    <input class="form-control form-control-user" type="text" id="Registration Number" placeholder="Registration Number" name="Registration Number" value="<?php echo $regi_num ?>" readonly>
                                                </div>
                                                <div class="col-sm-6 col-lg-5 mb-3 mb-sm-0" id="exampl2" style="margin-top: 10px; height: 50px;"><input class="form-control form-control-user" type="text" id="Index Number" placeholder="Index Number" name="Index Number"></div>
                                            </div>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" id="pdf-gen" style="filter: sepia(0%);background-color: #d9d9d9;margin: auto;padding: auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course Title</th>
                                        <th>Course Code</th>
                                        <th>Status</th>
                                        <th>Credits</th>
                                        <th>Semester</th>
                                        <th>Year</th>
                                        <th>Selected</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if ($result) {
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($rew = mysqli_fetch_assoc($result)) {
                                                $cosquery = "SELECT * FROM courses WHERE Course_code = '{$rew['Course_code']}' AND Year = '{$year}' AND Semester = '{$semester}' AND Department = '{$department}'";
                                                $cosresult = mysqli_query($connect, $cosquery);

                                                if ($cosresult) {
                                                    while ($td = mysqli_fetch_assoc($cosresult)) { ?>
                                                        <tr>
                                                            <td><?php echo $td['Course_Title'] ?></td>
                                                            <td><?php echo $td['Course_Code'] ?></td>
                                                            <td><?php echo $td['Status'] ?></td>
                                                            <td><?php echo $td['Credit'] ?></td>
                                                            <td><?php echo $td['Semester'] ?></td>
                                                            <td><?php echo $td['Year'] ?></td>
                                                            <td>
                                                                <input type="checkbox" name="courses[]" onclick="del('<?php echo ($td['Course_Code']); ?>',<?php echo ($td['ID']); ?>)" value="<?php echo ($td['Course_Code']); ?>" <?php if ($td['Status'] == "C") {
                                                                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                                                                    }; ?> id="course-check-<?php echo ($td['ID']); ?>">
                                                            </td>
                                                        </tr>
                                    <?php }
                                                } else {
                                                    print_r(mysqli_error($connect));
                                                }
                                            }
                                        }
                                    } else {
                                        print_r(mysqli_error($connect));
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col text-center" style="margin-top: 70px;"><button class="btn btn-primary text-white border rounded btn-user" type="button" style="width: 150px;margin: auto;margin-top: 10px;font-size: 20px;margin-left: 0px;background-color: rgb(0,130,140);" onclick="CallPrint()">Submit</button></div>
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

<script>
    var stid = '<?php echo $_SESSION['user']['id']; ?>';

    function del(coursecode, id) {
        if (document.querySelector('#course-check-' + id).checked) {
            $.post('ajax/delcourse.php', {
                coursecode: coursecode,
                stid: stid,
                status: "true",
            }, function(data) {
                if (data == "sucsess") {
                    alert("Successfully Added");
                } else {
                    alert(data, "true");
                }
            })

        } else {
            if (confirm("Are You Sure?")) {
                $.post('ajax/delcourse.php', {
                    coursecode: coursecode,
                    stid: stid,
                    status: "false",
                }, function(data) {
                    if (data == "sucsess") {
                        alert("Remove Course");
                    } else {
                        alert(data, "SAd");
                    }
                })
            } else {
                document.querySelector('#course-check-' + id).checked = "checked";
            }
        }
    }
</script>
<script>
    $(function($) {

    });


    function CallPrint() {
        var prtContent = document.getElementById("pdf-gen");
        var prtConten = document.getElementById("exampl");
        var prtConten1 = document.getElementById("exampl1");
        var prtConten2 = document.getElementById("exampl2");
        var WinPrint = window.open('', '', 'left=20,top=0,width=900,height=1024,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtConten.innerHTML + "<br><br>");
        WinPrint.document.write(prtConten1.innerHTML + "<br><br>");
        WinPrint.document.write(prtConten2.innerHTML + "<br>");
        WinPrint.document.write('<br><br>');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>

</html>