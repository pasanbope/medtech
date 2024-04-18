<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$day = date("Y/m/d");
?>

<?php
// Include the Patient class file
include 'class/drug.php';

// Create an instance of the Patient class
$drug = new Drug();
$order_num = $drug->get_SerialNo('Order No');
?>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">MedTech</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">GRN</a></li>
                            <li class="breadcrumb-item active">Add GRN</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add GRN</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6 position-relative" id="datepicker1">
                                <label for="example-number" class="form-label">Order Number</label>
                                <input class="form-control" id="ONo" type="number" name="number"
                                    placeholder="Batch Number" value="<?php echo $order_num; ?>">
                            </div>

                            <div class="mb-3 col-md-6 position-relative" id="datepicker2">
                                <label class="form-label">Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" id="GRN_date" value="<?php echo $day; ?>">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="selectdr" class="form-label">Select Supplier</label>
                                <select class="form-control select2" data-toggle="select2" id="sup">
                                    <option>Select </option>
                                    <?php
                                    // Include the drug class file
                                    include 'class/supplier.php';

                                    // Create an instance of the drug class
                                    $supplier = new Supplier();
                                    $supplier->select_supplier();
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="selectdr" class="form-label">Select Product</label>
                                <select class="form-control select2" data-toggle="select2" id="drug">
                                    <option>Select </option>
                                    <?php
                                    $drug->select_drug();
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Batch Number</label>
                                <input class="form-control" id="batchNo" type="number" name="number"
                                    placeholder="Batch Number">
                            </div>

                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6 position-relative" id="datepicker1">
                                <label class="form-label">Manufacture Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker1" placeholder="Manufacture Date" id="mdate">
                            </div>

                            <div class="mb-3 col-md-6 position-relative" id="datepicker2">
                                <label class="form-label">Expire Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" placeholder="Expire Date" id="edate">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Quantity</label>
                                <input class="form-control" id="qty" type="number" name="number" placeholder="Quantity">
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Purchase Price</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">Rs</span>
                                    <input class="form-control" id="pprice" type="number" name="number">
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Selling Price</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">Rs</span>
                                    <input class="form-control" id="sprice" type="number" name="number">
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Total</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="basic-addon1">Rs</span>
                                    <input class="form-control" id="totalp" type="number" name="number">
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div>

                        <br>

                        <button type="button" id="addgrn_btn" class="btn btn-primary">Add</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- content -->


        <div class="card">
            <div class="card-body">
                <div id="viewGRN">
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
                            <?php
                            $drug->list_grn_detail();
                            ?>
                        </table><br />
                        <div class="mb-2 row">
                            <div class="col-sm-7">
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Total Amount</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="colFormLabel"
                                    value="<?php echo $drug->get_grn_sum($order_num); ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="mb-2 row">
                    <div class="mb-3 col-md-3">
                        <button type="button" id="grn_save" class="btn btn-primary">Proceed GRN</button>
                    </div>
                    <div class="mb-3 col-md-9">
                        <div id="viewGRNS"></div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#pprice').on('input', function () {
                    var pprice = $('#pprice').val();
                    var qty = $('#qty').val();
                    var lasttotal = (pprice * qty);
                    $('#totalp').val(lasttotal);
                });

                $("#addgrn_btn").click(function () {
                    $.post(
                        "actions/add_grn_detail.php",
                        {
                            order_id: $('#ONo').val(),
                            drug_id: $('#drug').val(),
                            batch_no: $('#batchNo').val(),
                            made_date: $('#mdate').val(),
                            expire_date: $('#edate').val(),
                            selling_price: $('#sprice').val(),
                            purchased_price: $('#pprice').val(),
                            quantity: $('#qty').val(),
                            total: $('#totalp').val(),
                        },
                        function (data) {
                            $('#viewGRN').html(data);
                        });

                });

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

                //Procued button
                $("#grn_save").click(function () {
                    $.post(
                        "actions/proceed_grn.php",
                        {
                            order_id: $('#ONo').val(),
                            grn_date: $('#GRN_date').val(),
                            sup_id: $('#sup').val(),
                        },
                        function (data) {
                            $('#viewGRN').html(data);
                        });

                });
            });
        </script>