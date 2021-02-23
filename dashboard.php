<h1><a href="dataupload.php">data Upload</a></h1>




<?php

session_start();

require_once('db.php');

if (isset($_SESSION['uname'])) {

  $sql = "SELECT * FROM `tbl_student` ";
  $result = mysqli_query($conn, $sql);

  if ($_SESSION['uname'] == "Admin") {
?>




    <table border="1">
      <th>Student id</th>
      <th>Student name</th>
      <th>batch</th>
      <th>Semester</th>
      <th>Student roll_no</th>
      <th>contact</th>
      <th>Adress</th>
      <th>Action</th>



      <?php
      while ($row = mysqli_fetch_object($result)) {
      ?>
        <tr>
          <td><?php echo $row->std_id; ?></td>
          <td><?php echo $row->std_name; ?></td>
          <td><?php echo $row->std_year; ?></td>
          <td><?php echo $row->std_sem; ?></td>
          <td><?php echo $row->std_roll; ?></td>
          <td><?php echo $row->std_contact; ?></td>
          <td><?php echo $row->std_adress; ?></td>
          <td>
            <a href="edit-form.php?id=<?php echo $row->std_id; ?>">Edit</a>
            /<a href="delet.php?id=<?php echo $row->std_id; ?>" onClick="return confirm('Are you Sure?');">Delete</a>
          </td>

        </tr>



      <?php }
    } else {
      ?>

      <table border="1">
        <th>Student id</th>
        <th>Student name</th>
        <th>batch</th>
        <th>Semester</th>
        <th>Student roll_no</th>
        <th>contact</th>
        <th>Adress</th>




        <?php
        while ($row = mysqli_fetch_object($result)) {
        ?>
          <tr>
            <td><?php echo $row->std_id; ?></td>
            <td><?php echo $row->std_name; ?></td>
            <td><?php echo $row->std_year; ?></td>
            <td><?php echo $row->std_sem; ?></td>
            <td><?php echo $row->std_roll; ?></td>
            <td><?php echo $row->std_contact; ?></td>
            <td><?php echo $row->std_adress; ?></td>


          </tr>


    <?php
        }
      }
    }

    ?>
      </table>

      <br>
      <strong><a href="logout.php">Logout</a></strong>