<?php
require_once('db.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $yrs = $_POST['year'];
    $sem = $_POST['sem'];
    $contact = $_POST['contact'];
    $adress = $_POST['adress'];
    $roll = $_POST['roll'];

    $sql = "Insert into `tbl_student` set `std_name`='$name',
    `std_year`='$yrs',
    `std_sem`='$sem',
    `std_roll`='$roll',
    `std_contact`='$contact',
    `std_adress`='$adress'
    
    ";

    $result = mysqli_query($conn, $sql);
    echo mysqli_error($conn);

    header("location:dashboard.php");
} else {
    header("loaction:dataupload.php");
}
