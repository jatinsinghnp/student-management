<?php
require_once('db.php');
session_start();
if (isset($_POST['submit'])) {



    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    if (!preg_match("/^[A-Z]+[a-z]{5,}/$", $uname) && !preg_match("/^[A-Z]+[a-zA-Z0-9@]{7,}$/", $pwd) && !preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}(\.a-zA-Z]{2})?$/", $email)) {

        $_SESSION['msg'] = "Invalid Password/Username";
        header("location:form.php");
    }
    $sql = "Select * from `tbl_login` where `username`='$uname' and `password`='$pwd'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if ($row <> 0) {
        $_SESSION['uname'] = $uname;
        header("location:dashboard.php");
    } else {
        header("location:home.php");
    }
} else
    header("location:home.php");
