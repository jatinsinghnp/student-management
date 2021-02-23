<h1> Student management system </h1>

<div class="msg">

    <?php
    session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    session_destroy();
    ?>



</div>
<form action="log_check.php" method="POST">
    <table>
        <tr>
            <td>Uername:-</td>
            <td>
                <input type="text" name="username">

            </td>
        </tr>
        <tr>
            <td>password:-</td>
            <td> <input type="password" name="password"></td>


        </tr>
        <tr>

            <td><input type="submit" name="submit"></td>
        </tr>
        <tr>
            <td><a href="register_form.php">Register here</a></td>

        </tr>
    </table>


</form>