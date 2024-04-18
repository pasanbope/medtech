<?php

// Include the Patient class file
include '../class/drug.php';

// Create an instance of the Patient class
$drug = new Drug();

// Call the add_patient method with appropriate parameters
$grn_id = $_POST['grn_id'];

$drug->del_grn_detail($grn_id);

?>
<div class="tab-pane show active" id="buttons-table-preview">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>Drug Name</th>
                <th>Batch No</th>
                <th>Selling Price</th>
                <th>Purchased Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
</div>
<?php $drug->list_grn_detail(); ?>
</table>
<div class="mb-2 row">
    <div class="col-sm-7">
    </div>
    <label for="colFormLabel" class="col-sm-2 col-form-label">Total Amount</label>
    <div class="col-sm-3">
        <?php $order_num = $drug->get_SerialNo('Order No'); ?>
        <input type="text" class="form-control" id="colFormLabel" value="<?php echo $drug->get_grn_sum($order_num); ?>">
    </div>
</div>
<?php
?>
<script>
    $(document).ready(function () {

        $(".btn_delGRN").click(function () {
            $.post(
                "actions/del_grn_detail.php",
                {
                    grn_id: this.id,
                },
                function (data) {
                    $('#viewGRN').html(data);
                });

        });
    });
</script>