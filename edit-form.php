<?php


include_once("db.php");
$id = $_GET['id'];
$sql = "SELECT * FROM `tbl_student` where  `std_id`='$id' ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($result);


?>



<form action="edit.php" method="POST">
    <table>
        <tr>
            <td>Nameofstudent:- </td>
            <td><input type="text" name="name" value="<?php echo $row->std_name; ?>"></td>

        </tr>
        <tr>
            <td>year:-</td>
            <td> <input type="text" name="year" value="<?php echo $row->std_year; ?>"></td>

        </tr>
        <tr>
            <td>sem:- </td>
            <td>

                <select name="sem">
                    <option value="<?php echo $row->std_sem; ?>">1stsem</option>
                    <option value="<?php echo $row->std_sem; ?>">2ndsem</option>
                    <option value="<?php echo $row->std_sem; ?>">3rdsem</option>
                    <option value="<?php echo $row->std_sem; ?>">4thsem</option>
                    <option value="<?php echo $row->std_sem; ?>">5thsem</option>
                    <option value="<?php echo $row->std_sem; ?>">6thsem</option>


                </select>
            </td>
        </tr>
        <tr>
            <td>Rollno:-</td>
            <td> <input type="text" name="roll" value="<?php echo $row->std_roll; ?>"></td>

        </tr>
        <tr>
            <td>contact:-</td>
            <td> <input type="text" name="contact" value="<?php echo $row->std_contact; ?>"></td>

        </tr>
        <tr>
            <td>adress:-</td>
            <td> <input type="text" name="adress" value="<?php echo $row->std_adress; ?>"></td>

        </tr>

        <tr>
            <td>submit:-</td>
            <td> <input type="submit" name="submit"></td>

            <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
        </tr>
    </table>



</form>