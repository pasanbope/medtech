<?php
$Doc_Id = $_POST['Doc_id'];
$Shed_Date = $_POST['Shed_Date'];

// Include the Patient class file
include '../class/doctor.php';
// Create an instance of the Patient class
$doctor = new Doctor();
echo $doctor->view_appoinment_forShed($Shed_Date, $Doc_Id);
?>