<?php
require_once "conection.php";
session_start();
$Reg_Number = $_POST['Reg_Number'];
$Password = $_POST['Password'];
$reg_number = "";
$reg_pass = "";

$error =  array();

if (empty($Reg_Number)) {
    $reg_number = 'Please enter Registration Number';
}
/*else if(strlen($Reg_Number) != 17) {
    $reg_error = 'Your Registration Number is invalid';
}*/
if (empty($Password)) {
    $reg_pass = 'Please enter Password';
} /*else if(strlen($Password) < 8) {
    $pass_error = 'Your password need to have a minimum length of 8';
}*/
if ($reg_number === "" && $reg_pass === "") {
    $hashed_password = sha1($Password);
    $result = $connect->query("SELECT * FROM student_registration WHERE Reg_Number = '$Reg_Number' and Password = '$hashed_password'");
    $row = $result->fetch_array();
    if ($row['Reg_Number'] == $Reg_Number && $row['Password'] == $hashed_password) {

        $_SESSION["user"]["id"] = $row["Reg_Number"];
        $_SESSION["user"]["first_name"] = $row["First_Name"];
        $_SESSION["user"]["last_name"] = $row["Last_Name"];
        $_SESSION["user"]["email"] = $row["Email"];
        header("location: Student Dashboard.php");
    } else {
        header("location: Login.php?comerr=     Registration Number or Password Invalied");
    }
} else {
    header("location: Login.php?number=" . $reg_number . "&pass=" . $reg_pass);
}

// include('Student-Dashboard.php');
