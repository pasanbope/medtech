<?php

$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];


// Include the Patient class file
include '../class/doctor.php';

// Create an instance of the Patient class
$doctor = new Doctor();
echo $doctor->get_appoinment($Date, $InputDoc);
?>