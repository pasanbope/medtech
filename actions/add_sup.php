<?php
$CompanyName = $_POST['CompanyName'];
$ContactPersonName = $_POST['ContactPersonName'];
$Contactnumber = $_POST['Contactnumber'];
$Email = $_POST['Email'];

if ($CompanyName == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Catogary—check it out!
</div>";
}
if ($ContactPersonName == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Medicinal Name—check it out!
</div>";
}
if ($Contactnumber == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Telephone Brand Name—check it out!
</div>";
}
if ($Email == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Re Order Level—check it out!
</div>";

}else {
    include('../dbconn.php');
    $sql_addsup = "INSERT INTO supplier(CompanyName, Contact_Person_Name, ContactNumber, Email)
    VALUES ('$CompanyName','$ContactPersonName','$Contactnumber','$Email')";
    if (mysqli_query($conn, $sql_addsup)) {
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New Supplier Added!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}

?>