<?php

$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];

// Include the Doctor class file
include '../class/doctor.php';

// Create an instance of the Doctor class
$doctor = new Doctor();
echo $doctor->check_appoinment($Date, $InputDoc);

?>