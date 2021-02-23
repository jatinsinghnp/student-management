<?php
include_once("db.php");
if (isset($_POST['submit'])) {


	$name = $_POST['name'];
	$yrs = $_POST['year'];
	$sem = $_POST['sem'];
	$contact = $_POST['contact'];
	$adress = $_POST['adress'];
	$roll = $_POST['roll'];
	$id = $_POST['id'];

	$sql = "UPDATE `tbl_student` SET `std_name`='$name',`std_year`='$yrs',  `std_contact`='$contact',`std_adress`='$adress' WHERE `std_id`='$id'";

	$res = mysqli_query($conn, $sql);
	header("location:dashboard.php");
} else {
	header("location:dashboard.php");
}
