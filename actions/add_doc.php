<?php
$title = $_POST['$title'];
$firstname = $_POST['$firstname'];
$lastname = $_POST['$lastname'];
$tel = $_POST['$tel'];
$address = $_POST['$address'];
$designation = $_POST['$designation'];
$nic = $_POST['$nic'];
$gender = $_POST['$gender'];

if ($firstname == "") {
    echo "<div class='alert alert-warning' role='alert'>
    <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - Required! Name.
    </div>";
}
if ($lastname == "") {
    echo "<div class='alert alert-warning' role='alert'>
    <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - Required! Name.
    </div>";
}
if ($tel == "") {
    echo "<div class='alert alert-warning' role='alert'>
    <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - Required! Telephone Number.
    </div>";
}
if ($address == "") {
    echo "<div class='alert alert-warning' role='alert'>
    <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - Required! Address.
    </div>";
}
if ($designation == "") {
    echo "<div class='alert alert-warning' role='alert'>
    <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - Required! Designation.
    </div>";
}
if ($nic == "") {
    echo "<div class='alert alert-warning' role='alert'>
    <i class='ri-alert-line me-1 align-middle font-16'></i> This is a <strong>warning</strong> alert - Required! NIC.
    </div>";
}
else{
    include('../dbconn.php');
    $sql_adddoc="INSERT INTO `doctor`(`Doctor_Id`, `Title`, `FirstName`, `LastName`, `Telphone`, `Address`, `Designation`, `Gender`)
    VALUES ()";
}



?>