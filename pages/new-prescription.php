<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$day = date("Y/m/d");
?>

<?php
// Include the Prescription class file
include 'class/prescription.php';

// Create an instance of the Prescription class
$prescription = new Prescription();
$prescription_num = $prescription->get_SerialNo_Pres('Prescription No');
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Prescription</a></li>
                            <li class="breadcrumb-item active">New Prescription</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Prescription</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Add new doctor form -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="firstname4" class="form-label">Prescription Number</label>
                                <input type="number" class="form-control" id="pnum"
                                    value="<?php echo $prescription_num; ?>">
                            </div>

                            <div class="mb-3 col-md-1"></div>

                            <div class="mb-3 col-md-3">
                                <label for="firstname4" class="form-label">Appoinment Search</label>
                                <input type="number" class="form-control" id="search"
                                    placeholder="Enter Appoint Number">
                            </div>


                            <div class="mb-3 col-md-3"></div>

                            <div class="mb-3 col-md-2 position-relative" id="datepicker2">
                                <label class="form-label">Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" id="PRES_date" value="<?php echo $day; ?>">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputPat" class="form-label">Select Patient</label>
                                <div id="view_patient">
                                    <select class="form-control select2" data-toggle="select2" id="patient">
                                        <option>Select</option>
                                        <optgroup>
                                            <?php
                                            // Include the Patient class file
                                            include 'class/patient.php';

                                            // Create an instance of the Patient class
                                            $patient = new Patient();
                                            $patient->select_patient();
                                            ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 col-md-2">
                                <label for="lastname4" class="form-label">Age</label>
                                <div id="view_age">
                                    <input type="number" class="form-control" id="age">
                                </div>
                            </div>

                            <div class="mb-3 col-md-3 ">
                                <label for="lastname4" class="form-label">Illness</label>
                                <input type="text" class="form-control" id="ill">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Special Note</label>
                                <textarea class="form-control" id="S_Note" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-3">
                                <label for="selectdr" class="form-label">Select Drug</label>
                                <select class="form-control select2" data-toggle="select2" id="drug">
                                    <option>Select </option>
                                    <?php
                                    // Include the Patient class file
                                    include 'class/drug.php';

                                    // Create an instance of the Patient class
                                    $drug = new Drug();
                                    $drug->select_drug();
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputGender" class="form-label">Batch</label>
                                <div id="get_batch">
                                    <select class="form-control select2" id="batch" class="form-select">
                                        <option>Select Batch</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="lastname4" class="form-label">Available Stock</label>
                                <input type="number" class="form-control" id="stock">
                            </div>
                            <div class="mb-3 col-md-3 position-relative" id="datepicker2">
                                <label class="form-label">Expire Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" id="exp_date">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-3 ">
                                <label for="lastname4" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="qty">
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="selectdr" class="form-label">Frequency</label>
                                <select class="form-control select2" data-toggle="select2" id="fre">
                                    <option>Select </option>
                                    <option>Once a day (OD)</option>
                                    <option>Twice a day (BID or BD)</option>
                                    <option>Three times a day (TID or TDS)</option>
                                    <option>Four times a day (QID or QD)</option>
                                    <option>Every 6 hours</option>
                                    <option>Every 8 hours</option>
                                    <option>Every 12 hours</option>
                                    <option>Every 24 hours (QD)</option>
                                    <option>As needed (PRN)</option>
                                    <option>Every other day (QOD or EOD)</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="selectdr" class="form-label">Remarks</label>
                                <select class="form-control select2" data-toggle="select2" id="remark">
                                    <option>Select </option>
                                    <option>After Taking Foods</option>
                                    <option>Befor Taking Foods</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="example-textarea" class="form-label">Adviced</label>
                                <textarea class="form-control" id="advice" rows="2"></textarea>
                            </div>

                            <div class="mb-3 col-md-3 ">
                                <label for="lastname4" class="form-label">Test</label>
                                <input type="text" class="form-control" id="test">
                            </div>

                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div>

                </div>
                <br>
                <button type="button" id="addPres_btn" class="btn btn-primary">Add</button>
                </form>
                <!-- end add new doctor form -->
            </div> <!-- end row-->
        </div>
    </div> <!-- container -->
</div> <!-- content -->

<div class="card">
    <div class="card-body">
        <div id="viewPRES">
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
                    <?php
                    $prescription->list_pres_detail();
                    ?>
                </table>
            </div>
        </div>

        <br>
        <div class="mb-2 row">
            <div class="mb-3 col-md-3">
                <button type="button" id="pres_save" class="btn btn-primary">Send Pharmacy</button>
            </div>
            <div class="mb-3 col-md-9">
                <div id="viewPRES1"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#addPres_btn").click(function () {
            $.post(
                "actions/add_prescription_detail.php",
                {
                    pres_no: $('#pnum').val(),
                    batch_num: $('#batch').val(),
                    stock: $('#stock').val(),
                    exp_date: $('#exp_date').val(),
                    drug_id: $('#drug').val(),
                    Qty: $('#qty').val(),
                    frequency: $('#fre').val(),
                    remark: $('#remark').val(),
                    advice: $('#advice').val(),
                },
                function (data) {
                    $('#viewPRES').html(data);
                });

        });

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

        $("#pres_save").click(function () {
            $.post(
                "actions/proceed_prescriprion.php",
                {
                    pres_id: $('#pnum').val(),
                    app_id: $('#search').val(),
                    pat_id: $('#patient').val(),
                    doc_id: <?php echo $doc_id; ?>,
                    date: $('#PRES_date').val(),
                    s_note: $('#S_Note').val(),
                    ill: $('#ill').val(),
                    test: $('#test').val(),
                },
                function (data) {
                    $('#viewPRES').html(data);
                });

        });



        $("#patient").change(function () {
            $.post(
                "actions/get_age.php",
                {
                    patient_id: $('#patient').val(),
                },
                function (data) {
                    $('#age').val(data);
                });
        });

        $("#search").on('input', function () {

            $.post(
                "actions/get_patient_for_appoinment.php",
                {
                    App_no: $(this).val(),
                    App_date: $('#PRES_date').val(),
                    Doc_ID: <?php echo $doc_id; ?>,
                },
                function (data) {
                    $('#view_patient').html(data);
                })
            $.post(
                "actions/get_patientAge_for_appoinment.php",
                {
                    App_no: $(this).val(),
                    App_date: $('#PRES_date').val(),
                    Doc_ID: <?php echo $doc_id; ?>,
                },
                function (datax) {
                    $('#view_age').html(datax);
                })
        });

        $("#drug").change(function () {
            $.post(
                "actions/get_batch.php",
                {
                    drug_id: $('#drug').val(),
                },
                function (data) {
                    $('#get_batch').html(data);
                });
        });

        $("#batch").change(function () {
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: "actions/get_batch_stock_data.php",
                data: {
                    batch_id: $('#batch').val(),
                    drug_id: $('#drug').val()
                },
                success: function (data) {
                    $('#stock').val(data['Quantity']);
                    $('#exp_date').val(data['ExpireDate']);

                }

            });

        });

    });

</script>