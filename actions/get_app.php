<?php

$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];


// Include the Doctor class file
include '../class/doctor.php';

// Create an instance of the Doctor class
$doctor = new Doctor();
if ($doctor->get_appoinment_docshed($Date, $InputDoc) != 0) {
    echo $doctor->get_appoinment($Date, $InputDoc);
} else {
    echo " ";
}

?>