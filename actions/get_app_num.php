<?php
$Doc_Id = $_POST['Doc_id'];
$Shed_Date = $_POST['Shed_Date'];

// Include the Doctor class file
include '../class/doctor.php';
// Create an instance of the Doctor class
$doctor = new Doctor();
echo $doctor->view_appoinment_forShed($Shed_Date, $Doc_Id);
?>