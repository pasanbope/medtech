<?php
$patient_id = $_POST['patient_id'];

// Include the Patient class file
include '../class/patient.php';

$patient = new Patient();
$p_bday = $patient->get_details_By_Id($patient_id, 'Birthday');

// Include the Prescription class file
include '../class/prescription.php';

$prescription = new Prescription();

echo $prescription->get_birthday($p_bday);
?>