<?php
// Include the Prescription class file
include '../class/prescription.php';

// Create an instance of the Prescription class
$prescription = new Prescription();

// Call the add_patient method with appropriate parameters
$pres_id = $_POST['pres_id'];

$prescription->del_pres_detail($pres_id);

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
<?php
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