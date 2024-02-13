<?php
$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];
$Intime = $_POST['Intime'];
$Patient = $_POST['Patient'];

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
}
if ($Intime == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Time—check it out!
</div>";

} else {
    include('../dbconn.php');
    $sql_addap = "INSERT INTO appointment(Date, Doctor_Id, Patient_Id, Time)
    VALUES ('$Date',$InputDoc,$Patient,'$Intime')";
    if (mysqli_query($conn, $sql_addap)) {
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



?>