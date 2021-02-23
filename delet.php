<?php
include_once("db.php");
$id = $_GET['id'];
$sql = "DELETE FROM `tbl_student` WHERE `tbl_student`.`std_id` ='$id'
";
$result = mysqli_query($conn, $sql);


header("location:dashboard.php");
