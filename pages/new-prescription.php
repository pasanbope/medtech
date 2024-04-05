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
$prescription_num = $drug->get_SerialNo('Prescription No');
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
                            <div class="mb-3 col-md-8"></div>
                            <div class="mb-3 col-md-2 position-relative" id="datepicker2">
                                <label class="form-label">Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" id="GRN_date" value="<?php echo $day; ?>">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputPat" class="form-label">Select Patient</label>
                                <select class="form-control select2" data-toggle="select2" id="patient">
                                    <option>Select</option>
                                    <optgroup>
                                        <?php
                                        // Include the Patient class file
                                        include 'class/Patient.php';

                                        // Create an instance of the Patient class
                                        $patient = new Patient();
                                        $patient->select_patient();
                                        ?>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="mb-3 col-md-2">
                                <label for="lastname4" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Special Note</label>
                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-3">
                                <label for="selectdr" class="form-label">Select Drug</label>
                                <select class="form-control select2" data-toggle="select2" id="drug">
                                    <option>Select </option>
                                    <?php
                                    $drug->select_drug();
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputGender" class="form-label">Batch</label>
                                <select id="Gender" class="form-select">
                                    <option>123</option>
                                    <option>123</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3 position-relative" id="datepicker2">
                                <label class="form-label">Manufacture Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" id="GRN_date" value="<?php echo $day; ?>">
                            </div>
                            <div class="mb-3 col-md-3 position-relative" id="datepicker2">
                                <label class="form-label">Expire Date</label>
                                <input type="text" class="form-control" data-provide="datepicker"
                                    data-date-container="#datepicker2" id="GRN_date" value="<?php echo $day; ?>">
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
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
                                    <option value="CA">Once a day (OD)</option>
                                    <option value="NV">Twice a day (BID or BD)</option>
                                    <option value="OR">Three times a day (TID or TDS)</option>
                                    <option value="WA">Four times a day (QID or QD)</option>
                                    <option value="WA">Every 6 hours</option>
                                    <option value="WA">Every 8 hours</option>
                                    <option value="WA">Every 12 hours</option>
                                    <option value="WA">Every 24 hours (QD)</option>
                                    <option value="WA">As needed (PRN)</option>
                                    <option value="WA">Every other day (QOD or EOD)</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="selectdr" class="form-label">Remarks</label>
                                <select class="form-control select2" data-toggle="select2" id="re">
                                    <option>Select </option>
                                    <option value="CA">After Taking Foods</option>
                                    <option value="NV">Befor Taking Foods</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="example-textarea" class="form-label">Adviced</label>
                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                            </div>
                        </div>

                        </div>
                        <br>
                        <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div id="viewGRN">
                    <table class="table table-striped table-centered mb-0">
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
                $("#adddoc_btn").click(function () {
                    $.post(
                        "actions/add_doc.php",
                        {
                            title: $('#Title').val(),
                            firstname: $('#Firstname').val(),
                            lastname: $('#Lastname').val(),
                            tel: $('#Tel').val(),
                            address: $('#Address').val(),
                            designation: $('#Designation').val(),
                            nic: $('#NIC').val(),
                            gender: $('#Gender').val(),
                        },
                        function (data) {
                            $('#result').html(data);
                        });

                });
            });

        </script>

    </div> <!-- content -->