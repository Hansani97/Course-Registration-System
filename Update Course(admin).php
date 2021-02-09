<?php
$valueTosearch = "";
if (isset($_POST['valueTosearch'])) {
    $valueTosearch = $_POST['valueTosearch'];
}
$query = "SELECT * FROM `courses` WHERE CONCAT (`Course_Code`, `Status`,`Year`, `Semester`, `Department`) LIKE '%{$valueTosearch}%'";
$search_result = filterTable($query);



function filterTable($query)
{
    $connect = mysqli_connect('localhost', 'root', '', 'cms');
    $filter_result = mysqli_query($connect, $query);
    return $filter_result;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update Courses</title>
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
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="Admin%20Dashboard.php" style="margin: auto;">
                    <div class="sidebar-brand-text mx-3" style="margin: auto;margin-top: 20px;padding: auto;"><img data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" src="assets/img/logo.png" style="width: 50px;height: 65px;">
                        <hr class="sidebar-divider my-0"><span data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" style="font-size: 15px;font-family: Nunito, sans-serif;">Admin<br>Dashboard<br></span>
                    </div>
                </a>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="height: 800px;">
            <div id="content" style="height: auto;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation"><a class="nav-link active" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" href="Home_Page/index.php"><i class="fa fa-sign-out shadow" style="color: rgb(172,173,180);"></i><span style="color: rgb(172,173,180);">Logout</span></a></li>
                        </ul>
                    </div>
                </nav>

                <?php require_once 'process.php'; ?>

                <?php
                if (isset($_SESSION['message'])) : ?>

                    <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif; ?>
                <div class="container-fluid" data-aos="fade-up">
                    <div>
                        <h3 class="text-dark mb-1"><strong><span style="text-decoration: underline;">UPDATE&nbsp; COURSES</span></strong><br></h3>
                    </div>
                    <div class="row" style="height: auto;">
                        <div class="col-12 col-lg-12 offset-lg-3" style="height: auto;margin: auto;padding: auto;">
                            <div class="p-5" style="height: auto;margin: auto;margin-right: -45px;margin-top: 10px;margin-left: -37px;width: auto;padding: auto;">
                                <form class="user" style="margin: auto;padding: auto;width: auto;height: auto;" method="POST">
                                    <div class="form-group row" style="margin: auto;margin-top: -50px;margin-left: -10px;padding: auto;width: auto;height: auto;">
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Course ID" placeholder="Course ID" name="ID" style="width: auto;margin-top: 10px;" value="<?php echo $ID ?>"></div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Course Title" placeholder="Course Title" name="Course_Title" style="width: auto;margin-top: 10px;" value="<?php echo $Course_Title ?>"></div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Course Code" placeholder="Course Code" name="Course_Code" style="width: auto;margin-top: 10px;" value="<?php echo $Course_Code ?>"></div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Status" placeholder="Status" name="Status" style="width: auto;margin-top: 10px;" value="<?php echo $Status ?>"></div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Credit" placeholder="Credit" name="Credit" style="width: auto;margin-top: 10px;" value="<?php echo $Credit ?>"></div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="Year" placeholder="Year" name="Year" style="width: auto;margin-top: 10px;" value="<?php echo $Year ?>"></div>
                                        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0" style="height: 60px;"><input class="form-control form-control-user" type="text" id="Semester" placeholder="Semester" name="Semester" style="width: auto;margin-top: 10px;" value="<?php echo $Semester ?>"></div>
                                        <div class="col-sm-6 col-lg-3"><input class="form-control form-control-user" type="text" id="Department" placeholder="Department" name="Department" style="width: auto;margin-top: 10px;" value="<?php echo $Department ?>"></div>
                                        <div class="col-sm-6 col-lg-4 col-xl-4 offset-lg-0 text-left mb-3 mb-sm-0">
                                            <?php
                                            if (isset($_GET['edit'])) { ?>
                                                <button class="btn btn-primary text-white btn-user" type="submit" style="width: 150px;margin: auto;margin-top: 10px;font-size: 15px;margin-left: 0px;padding: auto;height: 50px;" name="update">Edit</button>
                                            <?php    } else { ?>
                                                <button class="btn btn-primary text-white btn-user" type="submit" style="width: 150px;margin: auto;margin-top: 10px;font-size: 15px;margin-left: 0px;padding: auto;height: 50px;" name="save">Save</button>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                        <hr style="width: 911px;">
                                    </div>
                                    <div class="form-group row" style="height: auto;width: auto;margin-right: 0px;margin-bottom: 0px;margin-left: 0px;">
                                        <form style="height: auto;width: auto;" method="GET" action="Update%20Course(admin).php">
                                            <div class="input-group" style="margin: auto;width: auto;height: auto;"><input class="bg-light border-dark shadow-sm form-control border-0 small" type="text" placeholder="Search for ..." name="valueTosearch">
                                                <div class="input-group-append"><button class="btn btn-primary py-0" type="submit" name="search"><i class="fas fa-search"></i></button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" data-aos="fade-up" style="background-color: #d9d9d9;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Status</th>
                                <th>Credit</th>
                                <th>Year</th>
                                <th>Semester</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($search_result)) { ?>
                                <tr>
                                    <td><?php echo $row['ID'] ?></td>
                                    <td><?php echo $row['Course_Title'] ?></td>
                                    <td><?php echo $row['Course_Code'] ?></td>
                                    <td><?php echo $row['Status'] ?></td>
                                    <td><?php echo $row['Credit'] ?></td>
                                    <td><?php echo $row['Year'] ?></td>
                                    <td><?php echo $row['Semester'] ?></td>
                                    <td><?php echo $row['Department'] ?></td>
                                    <td>
                                        <button style="width: 70px;height: 30px;border-radius: 20px;border: none;outline: none;background-color:#97aadc ;"><a href="Update%20Course(admin).php?edit=<?php echo $row['ID']; ?>" class="btb btn-warning" style="width: 70px;height: 30px;outline: none;background-color:#97aadc ;">Update</a></button>

                                        <button style="width: 70px;height: 30px;border-radius: 20px;border: none;outline: none;background-color:#e37a80 ;"> <a href="Update%20Course(admin).php?delete=<?php echo $row['ID']; ?>" class="btb btn-danger" style="width: 70px;height: 30px;outline: none;background-color:#e37a80 ;">Delete</a></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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