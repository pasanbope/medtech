<?php
session_start();
// Include the Patient class file
include '../class/patient.php';

// Create an instance of the Patient class
$patient = new Patient();

// Include the User class file
include '../class/user.php';
// Create an instance of the Userclass
$user = new User();
$user_email = $_SESSION["username"];
$uid = $user->get_userdet_byemail($user_email, 'User_Id');
$today = date('Y-m-d');
$time = date("h:i:s");
$ip = getenv('REMOTE_ADDR');

// Call the add_patient method with appropriate parameters
$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];



if (($title == '') or ($firstname == '') or ($lastname == '') or ($tel == '') or ($address == '') or ($birthday == '') or ($gender == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    $patient->add_patient($title, $firstname, $lastname, $tel, $address, $birthday, $gender);
    $user->add_user_log($today, $time, $uid, $ip, 'insert', 'add new patient ' . $firstname . ' ' . $lastname . '');
    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Patient Added!
</div>";
}

?>