<?php
$batch_id = $_POST['batch_id'];
$drug_id = $_POST['drug_id'];

// Include the Drug class file
include '../class/drug.php';

// Create an instance of the Drug class
$drug = new Drug();
echo $drug->get_batch_stock_details($drug_id, $batch_id);

?>