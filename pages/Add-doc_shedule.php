<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>


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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Doctors Shedule</a></li>
                            <li class="breadcrumb-item active">Add Doctor Shedule</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Doctor Shedule</h4>
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
                            <div class="md-3 col-md-4">
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
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000" id="Tel">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputDesignation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="Designation" placeholder="Designation">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputNIC" class="form-label">NIC</label>
                                <input type="text" class="form-control" id="NIC" placeholder="NIC">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Gender</label>
                                <select id="Gender" class="form-select">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div><br>
                        <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

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