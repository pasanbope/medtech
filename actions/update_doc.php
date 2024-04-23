<?php
$doc_id = $_POST['doc_id'];
$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$designation = $_POST['designation'];
$nic = $_POST['nic'];
$gender = $_POST['gender'];
$doc_charge = $_POST['doc_charge'];

if ($firstname == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Name—check it out!
</div>";
}
if ($lastname == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Name—check it out!
</div>";
}
if ($designation == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Designation—check it out!
</div>";
} else {
    include('../dbconn.php');
    $sql_adddoc = "UPDATE doctor SET Title = '$title', FirstName = '$firstname', LastName = '$lastname', Telphone = '$tel', Address = '$address', Designation = '$designation', NIC = '$nic', Gender = '$gender', Doc_charge='$doc_charge' WHERE Doctor_Id = $doc_id";
    if (mysqli_query($conn, $sql_adddoc)) {
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> Update Doctor!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}



?>