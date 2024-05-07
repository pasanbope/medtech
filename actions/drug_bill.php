<?php
// Include the Prescription class file
include '../class/prescription.php';

// Create an instance of the Prescription class
$pres = new Prescription();


$pres_id = $_POST['pres_id'];
$drug_charge = $_POST['drug_charge'];
$doc_charge = $_POST['doc_charge'];
$tot = $_POST['total'];

if (($pres_id == '') or ($drug_charge == '') or ($doc_charge == '') or ($tot == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    $drug_cost = $pres->get_total_drug_cost($pres_id);
    $pres->add_bill($pres_id, $doc_charge, $drug_charge, $drug_cost, $tot);
    $pres->update_prescription_issue($pres_id);
    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Bill Genarated!
</div>";
    ?>
    <script>
        window.location.replace("home.php?page=print-reciept&Pres=<?php echo $pres_id; ?>");
    </script>
    <?php
}
?>