<?php

$Date = $_POST['date'];
$Time = $_POST['time'];
$Patient = $_POST['pat_count'];

if ($date == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Name—check it out!
</div>";
}
if ($time == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Doctor—check it out!
</div>";
}
if ($pat_count == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Doctor—check it out!
</div>";

}else {
    include('../dbconn.php');
    $sql_check = "SELECT * FROM doctor_schedule WHERE Doctor_Id = $Doctor AND Date = '$Date'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) == 0) {
        $sql_addshed = "INSERT INTO doctor_schedule (Date, Doctor_Id, Sched_Time, Patient_Count, Is_Enable)
        VALUES ('$Date',$Doctor,'$Time',$Patient,1)";
        if (mysqli_query($conn, $sql_addshed)) {
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
    } else {
        $sql_update = "UPDATE doctor_schedule SET Sched_Time = '$Time' , Patient_Count = $Patient WHERE Doctor_Id = $Doctor AND Date = '$Date'";
        if (mysqli_query($conn, $sql_update)) {
            echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
            <strong>Success - </strong> Schedule Updated!
        </div>";
        }
    }

}

?>