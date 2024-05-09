<!-- Datatables css -->
<link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
    type="text/css" />


<?php


// Include the Drug class file
include '../class/drug.php';

// Create an instance of the Drug class
$drug = new Drug();


$order_id = $_POST['order_id'];
$drug_id = $_POST['drug_id'];
$batch_no = $_POST['batch_no'];
$made_date = $_POST['made_date'];
$expire_date = $_POST['expire_date'];
$selling_price = $_POST['selling_price'];
$purchased_price = $_POST['purchased_price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

if (($order_id == '') or ($drug_id == '') or ($batch_no == '') or ($made_date == '') or ($expire_date == '') or ($selling_price == '') or ($purchased_price == '') or ($quantity == '') or ($total == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    if ($drug->add_grn_detail($order_id, $drug_id, $batch_no, $made_date, $expire_date, $selling_price, $purchased_price, $quantity, $total) == True) {
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
                <?php $drug->list_grn_detail(); ?>
            </table>

            <div class="mb-2 row">
                <div class="col-sm-7">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label">Total Amount</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="colFormLabel"
                        value="<?php echo $drug->get_grn_sum($order_id); ?>">
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "Error";
    }

}


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

<!-- Datatables js -->
<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

<!-- Datatable Init js -->
<script src="assets/js/pages/demo.datatable-init.js"></script>