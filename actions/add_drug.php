<?php
$Catogary = $_POST['Catogary'];
$MedicinalName = $_POST['MedicinalName'];
$BrandName = $_POST['BrandName'];
$ReOrderLevel = $_POST['ReOrderLevel'];
$MeasurementType = $_POST['MeasurementType'];
$SellingPrice = $_POST['SellingPrice'];

if ($Catogary == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Catogary—check it out!
</div>";
}
if ($MedicinalName == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Medicinal Name—check it out!
</div>";
}
if ($BrandName == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Telephone Brand Name—check it out!
</div>";
}
if ($ReOrderLevel == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Re Order Level—check it out!
</div>";
}
if ($MeasurementType == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Measurement Type—check it out!
</div>";
}
if ($SellingPrice == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Selling Price—check it out!
</div>";

} else {
    include('../dbconn.php');
    $sql_adddrug = "INSERT INTO drug(Category_Id, MedicalName, BrandName, Rol, Measurement_Id, SellPrice)
    VALUES ('$Catogary','$MedicinalName','$BrandName','$ReOrderLevel','$MeasurementType','$SellingPrice')";
    if (mysqli_query($conn, $sql_adddrug)) {
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New Patient Added!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}

?>