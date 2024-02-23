<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['passwort'];
$hash_pw = sha1($password);
$role = $_POST['role'];


if ($username == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required  User Name—check it out!
</div>";
}
if ($email == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Email—check it out!
</div>";
}
if ($password == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required password—check it out!
</div>";
}

if ($role == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required User Role—check it out!
</div>";
} else {
    include('../dbconn.php');
    $sql_adduser = "INSERT INTO user(UserName, Password, Email, Role_Id, Enable)
    VALUES ('$username','$hash_pw','$email',$role,1)";
    if (mysqli_query($conn, $sql_adduser)) {
        $last_id = mysqli_insert_id($conn);
        if ($role == 2) {
            $sql_adddoc = "INSERT INTO doctor (Login_Id) VALUES ($last_id)";
            mysqli_query($conn, $sql_adddoc);
        }
        echo $role;
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New User Added!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}



?>