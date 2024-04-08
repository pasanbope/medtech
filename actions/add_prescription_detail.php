<?php

// Include the Prescription class file
include '../class/prescription.php';

// Create an instance of the Prescription class
$prescription = new Prescription();

$Pres_Num = $_POST['pres_no'];
$Batch_Num = $_POST['batch_num'];
$Stock = $_POST['stock'];
$Exp_Date = $_POST['exp_date'];
$Drug_Id = $_POST['drug_id'];
$Quantity = $_POST['Qty'];
$Frequency = $_POST['frequency'];
$Remark = $_POST['remark'];
$Advice = $_POST['advice'];

if (($Batch_Num == '') or ($Drug_Id == '') or ($Quantity == '') or ($Frequency == '') or ($Remark == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    if ($prescription->add_pres_detail($Pres_Num, $Batch_Num, $Exp_Date, $Drug_Id, $Quantity, $Frequency, $Remark, $Advice) == True) {
        ?>
        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
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
        <?php
    } else {
        echo "Error";
    }

}


?>
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