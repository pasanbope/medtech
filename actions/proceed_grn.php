<?php

$o_id = $_POST['order_id'];
$grn_date = $_POST['grn_date'];
$sup_id = $_POST['sup_id'];

// Include the Drug class file
include '../class/drug.php';

// Create an instance of the Drug class
$grn = new Drug();

if ($grn->check_grn_items($o_id) <= 0) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> A simple warning alert—check it out!
</div>";
} else {
    $grn->update_GRNDetails($o_id, $sup_id, $grn_date);




    $grn->genarate_new_serial('Order No', $o_id);
}



?>