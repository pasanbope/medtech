<?php
$app_no = $_POST['App_no'];
$app_date = $_POST['App_date'];
$doc_id = $_POST['Doc_ID'];

// Include the Doctor class file
include '../class/doctor.php';
// Create an instance of the Doctor class
$doctor = new Doctor();

// Include the Patient class file
include '../class/patient.php';

// Create an instance of the Patient class
$patient = new Patient();

$P_id = $doctor->get_patient_from_appoinment($app_no, $app_date, $doc_id);
$bday = $patient->get_details_By_Id($P_id, 'Birthday');
$age = $patient->get_birthday($bday);
if (is_numeric($age)) { ?>
    <input type="number" value="<?php echo $age; ?>" class="form-control" id="age">
    <?php
} else { ?>
    <input type="number" value="" class="form-control" id="age">
<?php } ?>