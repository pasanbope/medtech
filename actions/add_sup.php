<?php

// Include the Patient class file
include '../class/supplier.php';

// Create an instance of the Patient class
$supplier = new Supplier();

// Call the add_patient method with appropriate parameters
$CompanyName = $_POST['CompanyName'];
$ContactPersonName = $_POST['ContactPersonName'];
$Contactnumber = $_POST['Contactnumber'];
$Email = $_POST['Email'];

if (($CompanyName == '') or ($ContactPersonName == '') or ($Contactnumber == '') or ($Email == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    $supplier->add_supplier($CompanyName, $ContactPersonName, $Contactnumber, $Email);
    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Supplier Added!
</div>";
}

?>