<?php
session_start();
include('../dbconn.php');
$email = $_POST['email'];
$pwd = $_POST['password'];
$sql_getuser = "SELECT * FROM user WHERE Email='$email' AND Password='$pwd'";
$result_getuser = mysqli_query($conn, $sql_getuser);
$row_data = mysqli_fetch_array($result_getuser);
$row_count = mysqli_num_rows($result_getuser);

if ($row_count >= 1) {
    //login Success
    if ($row_data['Enable'] == 1) {
        $role = $row_data['Role_Id'];
        $_SESSION["username"] = $email;
        $_SESSION["role"] = $role;

        ?>
        <script>window.location.replace("home.php");</script>
        <?php
    } else {
        echo "<div class='alert alert-warning' role='alert'>
        <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - User Inactive!
        </div>";
    }
} else {
    //Login Failed
    echo "<div class='alert alert-danger' role='alert'>
          <i class='ri-close-circle-line me-1 align-middle font-16'></i> This is a <strong>danger</strong> alert - Login Failed!
          </div>";
}

?>