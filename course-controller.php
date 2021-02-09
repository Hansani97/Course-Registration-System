<?php
require_once('conection.php');
require_once('functions.php');

?>
 <?php
    $courses = isset($_POST["courses"]) ? $_POST["courses"] : null;

    if (empty($courses)) {

        //        setErrorMessage("Please select courses");
        header("location:Course Registration(Student).php");
        return;
    }

    if (isset($_POST['register'])) {
        $userId = $_POST['Registration_Number'];
        $registered = false;
        $regCourses = $_POST['courses'];
        $index_num = $_POST['Index_Number'];
        $regCourse = "";

        foreach ($regCourses as $regCourse) {
            $in_ch = mysqli_query($connect, "insert into student_course1(Reg_num, Course_code,index_num) values ('$userId','$regCourse',$index_num)");
            if ($in_ch == 1) {
                $registered = true;
            } else {
                $registered = false;
            }
        }

        if ($registered) {
            header("location: Student Dashboard.php");
            echo "<script>alert('Successfully registered to the selected courses.')</script> ";
        } else {
            print_r(mysqli_error($connect));
        }


        return $registered;
    }


    /*$sql = "INSERT INTO student (Name,Reg_Number) VALUES ('{$name}','{$regno}')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script>alert('registration success')</script> ";
        header("location:Course Registration(Student).php");
    } else {
    }

    if (isset($_POST['save'])) {
        $Course_Title = $_POST['Course_Title'];
        $Course_Code = $_POST['Course_Code'];
        $Status = $_POST['Status'];
        $Credit = $_POST['Credit'];
        $Year = $_POST['Year'];
        $Semester = $_POST['Semester'];
        $Department = $_POST['Department'];

        $mysqli->query("INSERT INTO reg_course (Course_Title,Course_Code,Status,Credit,Year,Semester,Department) VALUES('$Course_Title','$Course_Code','$Status','$Credit','$Year','$Semester','$Department')") or die($mysqli->error);

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: Student Dashboard.php");
    }*/
    ?>