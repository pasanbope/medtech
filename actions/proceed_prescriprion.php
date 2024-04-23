<?php

$Pres_ID = $_POST['pres_id'];
$Pat_ID = $_POST['pat_id'];
$doc_id = $_POST['doc_id'];
$Date = $_POST['date'];
$S_Note = $_POST['s_note'];
$Ill = $_POST['ill'];
$Test = $_POST['test'];
$time = date('h:i:s');
$App_id=$_POST['app_id'];
// Include the Prescription class file
include '../class/prescription.php';

// Create an instance of the Prescription class
$prescription = new Prescription();

if ($prescription->check_pres_items($Pres_ID) <= 0) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> A simple warning alert—check it out!
</div>";
} else {
    $prescription->update_Pres_Details($Pres_ID, $Date,$App_id, $Pat_ID, $doc_id, $time, $S_Note, $Ill, $Test);
    $prescription->genarate_new_serial('Prescription No', $Pres_ID);
}


?>
<div class="tab-pane show active" id="buttons-table-preview">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>Drug Name</th>
                <th>Batch No</th>
                <th>Expire Date</th>
                <th>Quantity</th>
                <th>Frequency</th>
                <th>Remarks</th>
                <th>Adviced</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $prescription->list_pres_detail(); ?>
    </table>
</div>
<script>
    $(document).ready(function () {
        $(".btn_delPRES").click(function () {
            $.post(
                "actions/del_prescription_detail.php",
                {
                    pres_id: this.id,
                },
                function (data) {
                    $('#viewPRES').html(data);
                });

        });
    });
</script>