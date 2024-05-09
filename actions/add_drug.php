<?php

// Include the Drug class file
include '../class/drug.php';

// Create an instance of the Drug class
$drug = new Drug();



$MedicinalName = $_POST['MedicinalName'];
$BrandName = $_POST['BrandName'];
$ReOrderLevel = $_POST['ReOrderLevel'];
$MeasurementType = $_POST['MeasurementType'];
$Catogary = $_POST['Catogary'];

if (($MedicinalName == '') or ($BrandName == '') or ($ReOrderLevel == '') or ($MeasurementType == '') or ($Catogary == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    if ($drug->add_drug($MedicinalName, $BrandName, $ReOrderLevel, $MeasurementType, $Catogary) == True) {
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New Drug Added!
    </div>";
    } else {
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> Error!
</div>";
    }

}


?>