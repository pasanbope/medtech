<?php
$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];
$Patient = $_POST['Patient'];
$Ptime = $_POST['Intime'];
$PatAppNum = $_POST['PatientApp'];

if ($Date == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Name—check it out!
</div>";
}
if ($InputDoc == "") {
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


    if ($doctor->add_appoinment($Date, $InputDoc, $Patient, $Ptime, $PatAppNum) == True) {
        $doctor->update_appoinment_forShed($Date, $InputDoc, $PatAppNum);
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New Appoinment Added!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}

//Add Appoinment SMS code here...............

?>