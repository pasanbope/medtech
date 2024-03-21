<?php

// Include the Patient class file
include '../class/drug.php';

// Create an instance of the Patient class
$drug = new Drug();

// Call the add_patient method with appropriate parameters
$grn_id = $_POST['grn_id'];
$order_id = $_POST['order_id'];
$drug_id = $_POST['drug_id'];
$batch_no = $_POST['batch_no'];
$made_date = $_POST['made_date'];
$expire_date = $_POST['expire_date'];
$selling_price = $_POST['selling_price'];
$purchased_price = $_POST['purchased_price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

if (($grn_id == '') or ($order_id == '') or ($drug_id == '') or ($batch_no == '') or ($made_date == '') or ($expire_date == '') or ($selling_price == '') or ($purchased_price == '') or ($quantity == '') or ($total == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    $drug->add_grn_detail($grn_id, $order_id, $drug_id, $batch_no, $made_date, $expire_date, $selling_price, $purchased_price, $quantity, $total);
    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Doctor Added!
</div>";
}

?>