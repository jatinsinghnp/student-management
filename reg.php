<?php
require_once('db.php');

if (isset($_POST['submit'])) {

    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "Insert into `tbl_login` set 
			`username`='$uname',
			`password`='$pwd',
			`email`='$email'";

    $result = mysqli_query($conn, $sql);
    header("location:home.php");
} else {
    header("location:home.php");
}
