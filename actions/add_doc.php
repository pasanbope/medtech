<?php

// Include the Doctor class file
include '../class/doctor.php';

// Create an instance of the Doctor class
$doctor = new Doctor();


$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$designation = $_POST['designation'];
$nic = $_POST['nic'];
$gender = $_POST['gender'];

if (($title == '') or ($firstname == '') or ($lastname == '') or ($tel == '') or ($address == '') or ($designation == '') or ($nic == '') or ($gender == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    $doctor->add_doctor($title, $firstname, $lastname, $tel, $address, $designation, $nic, $gender);
    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Doctor Added!
</div>";
}

?>