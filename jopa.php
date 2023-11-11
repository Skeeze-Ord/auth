<?php
global $conn;

require_once "db.php";

if(isset($_SESSION['user_id']) != "") {
    header("Location: dashboard.php");
}

if(isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if(!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $name_error = "Name must contain only alphabets and space";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }

    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }

    if(strlen($mobile) < 10) {
        $mobile_error = "Mobile number must be minimum of 10 characters";
    }

    if($password != $cpassword) {
        $cpassword_error = "Password and Confirm Password doesn't match";
    }

    if(mysqli_query($conn, "INSERT INTO users (name, email, mobile, password) VALUES ('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}