<!-- Vendor js -->
<!-- <script src="assets/js/vendor.min.js"></script> -->
<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Appoinment</a></li>
                            <li class="breadcrumb-item active">New Appoinment</li>
                        </ol>
                    </div>
                    <h4 class="page-title">New Appoinment</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="md-3 col-md-6">
                                <label for="inputDoc" class="form-label">Select Doctor</label>
                                <select class="form-control select2" data-toggle="select2" id="doc">
                                    <option>Select</option>
                                    <optgroup>
                                        <?php
                                        include('dbconn.php');
                                        $sql_doc = "select * from doctor";
                                        $res_doc = mysqli_query($conn, $sql_doc);
                                        while ($row_doc = mysqli_fetch_array($res_doc)) {
                                            echo '<option value="' . $row_doc['Doctor_Id'] . '">' . $row_doc['Title'] . ' ' . $row_doc['FirstName'] . ' ' . $row_doc['LastName'] . '</option>';
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee">
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputGender" class="form-label">Select Time</label>
                                <select id="inputTime" class="form-select">
                                    <option>Morning</option>
                                    <option>Evening</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputPat" class="form-label">Select Patient</label>
                                <select class="form-control select2" data-toggle="select2" id="patient">
                                    <option>Select</option>
                                    <optgroup>
                                        <?php
                                        include('dbconn.php');
                                        $sql_pat = "select * from patient";
                                        $res_pat = mysqli_query($conn, $sql_pat);
                                        while ($row_pat = mysqli_fetch_array($res_pat)) {
                                            echo '<option value="' . $row_pat['Patient_Id'] . '">' . $row_pat['Title'] . ' ' . $row_pat['FirstName'] . ' ' . $row_pat['LastName'] . '</option>';
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div>

                        <br>
                        <div class="row mb-2">
                            <div class="col-sm-5">
                                <button type="button" id="addapp_btn" class="btn btn-primary">Save</button>
                                <button type="submit" class="btn btn-primary">Reset</button>
                            </div>
                            <div class="col-sm-7">
                                <div class="text-sm-end">
                                    <a href="javascript:void(0);" class="btn btn-danger mb-2"
                                        data-bs-target="#full-width-modal" data-bs-toggle="modal"><i
                                            class="mdi mdi-plus-circle me-2"></i> Add New Patient</a>
                                </div>
                            </div><!-- end col-->
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#addapp_btn").click(function () {
                $.post(
                    "actions/add_app.php",
                    {
                        InputDoc: $('#doc').val(),
                        Date: $('#datee').val(),
                        Intime: $('#inputTime').val(),
                        Patient: $('#patient').val(),
                    },
                    function (data) {
                        $('#result').html(data);
                    });

            });
        });

    </script>

    <!-- Full width modal content -->
    <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-full-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="fullWidthModalLabel">Add New Patient</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputTitlee" class="form-label">Select title</label>
                                <select id="inputTitle" class="form-select">
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="firstname4" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname4" placeholder="First Name">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="lastname4" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname4" placeholder="Last name">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Age</label>
                                <input class="form-control" id="example-number" type="number" name="number">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Gender</label>
                                <select id="inputGender" class="form-select">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div> <!-- content -->