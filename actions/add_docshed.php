<?php
$Doctor = $_POST['Doctor'];
$Date = $_POST['Date'];
$Time = $_POST['Time1'];
$Patient = $_POST['Patient'];

if ($Date == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Name—check it out!
</div>";
}
if ($Time == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Doctor—check it out!
</div>";
}
if ($Patient == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Doctor—check it out!
</div>";

} else {

    // Include the Patient class file
    include '../class/doctor.php';
    // Create an instance of the Patient class
    $doctor = new Doctor();
    if ($doctor->check_doc_shedule($Doctor, $Date) == 0) {
        $doctor->add_doc_shedule($Date, $Doctor, $Time, $Patient);
        $doctor->add_appoinment_forShed($Date, $Doctor);

    } else {
        $doctor->update_shedule($Time, $Patient, $Doctor, $Date);
    }

}

?>