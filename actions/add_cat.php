<?php
// Include the Drug class file
include '../class/drug.php';

// Create an instance of the Drug class
$drug = new Drug();

$category = $_POST['category'];

if (($category == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
}else{
    $drug->add_drugcat($category);
    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Drug Category Added!
</div>";
}
?>