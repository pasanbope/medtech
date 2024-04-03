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
<table id="basic-datatable" class="table dt-responsive nowrap w-100">
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
    <?php $grn->list_grn_detail(); ?>
</table>
<div class="mb-2 row">
    <div class="col-sm-7">
    </div>
    <label for="colFormLabel" class="col-sm-2 col-form-label">Total Amount</label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="colFormLabel" value="<?php echo $grn->get_grn_sum($order_id); ?>">
    </div>
</div>
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