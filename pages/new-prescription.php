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
                                <div id="get_batch">
                                    <select id="batch" class="form-select">
                                        <option>123</option>
                                        <option>123</option>
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

    <div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0">
            <thead class="table-light">
                <tr>
                    <th style="width: 20px;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1">
                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                        </div>
                    </th>
                    <th>Drug Name</th>
                    <th>Expire Date</th>
                    <th>Quantity</th>
                    <th>Frequency</th>
                    <th>Quantity</th>
                    <th>Remarks</th>
                    <th>Adviced</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>
                        01
                    </td>
                    <td>
                        Mr.Tineth Vihanga
                    </td>
                    <td>
                        077-4572345
                    </td>
                    <td>
                        Dr.Suranjata
                    </td>
                    <td>
                        4:30 PM
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>
                        02
                    </td>
                    <td>
                        Mr.Imesh Naveen
                    </td>
                    <td>
                        077-4572345
                    </td>
                    <td>
                        Dr.Wasantha
                    </td>
                    <td>
                        4:49 PM
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>
                        03
                    </td>
                    <td>
                        Mr.Tharuka Pathirage
                    </td>
                    <td>
                        077-4572345
                    </td>
                    <td>
                        Dr.Suranjaya
                    </td>
                    <td>
                        5:30 PM
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>
                        04
                    </td>
                    <td>
                        Mr.Pasindu Hansaka
                    </td>
                    <td>
                        077-4572345
                    </td>
                    <td>
                        Dr.Suranjaya
                    </td>
                    <td>
                        4:50 PM
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                        </div>
                    </td>
                    <td>
                        05
                    </td>
                    <td>
                        Mr. Jeewantha Jayamal
                    </td>
                    <td>
                        077-4572345
                    </td>
                    <td>
                        Dr.Suranjaya
                    </td>
                    <td>
                        4:35 PM
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>
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

</div> <!-- content -->