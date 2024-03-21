<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$day = date("Y/m/d");
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
                    <h4 class="page-title">Add New Drugs</h4>
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
                                <label for="example-number" class="form-label">Batch Number</label>
                                <input class="form-control" id="batchNo" type="number" name="number"
                                    placeholder="Batch Number">
                            </div>

                            <div class="mb-3 col-md-6 position-relative" id="datepicker2">
                                <label class="form-label">Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" placeholder="Expire Date" id="edate"
                                    value="<?php echo $day; ?>">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="selectdr" class="form-label">Select Supplier</label>
                                <select class="form-control select2" data-toggle="select2">
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
                                <select class="form-control select2" data-toggle="select2">
                                    <option>Select </option>
                                    <?php
                                    // Include the drug class file
                                    include 'class/drug.php';

                                    // Create an instance of the drug class
                                    $drug = new Drug();
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

                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                    </tbody>
                </table>


                <br>
                <button type="submit" class="btn btn-primary">Save</button>
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
                            grn_id: $('#Title').val(),
                            order_id: $('#firstname').val(),
                            drug_id: $('#lastname').val(),
                            batch_no: $('#Tel').val(),
                            made_date: $('#Address').val(),
                            expire_date: $('#Bday').val(),
                            selling_price: $('#Gender').val(),
                            purchased_price: $('#Gender').val(),
                            quantity: $('#Gender').val(),
                            total: $('#Gender').val(),
                        },
                        function (data) {
                            $('#result').html(data);
                        });

                });
            });
        </script>