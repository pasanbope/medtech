<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$title = $doctor->getdet_by_docID($doc_id, 'Title');
$gendar = $doctor->getdet_by_docID($doc_id, 'Gender');
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
                            <li class="breadcrumb-item active">Doctor Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Doctor Profile</h4>
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
                            <div class="mb-3 col-md-4">
                                <label for="inputTitlee" class="form-label">Select title</label>
                                <select id="Title" class="form-select">
                                    <option <?php if ($title == "Dr.") {
                                        echo "selected";
                                    } ?>>Dr.</option>
                                    <option <?php if ($title == "Prof.") {
                                        echo "selected";
                                    } ?>>Prof.</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="firstname4" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="Firstname" placeholder="First Name"
                                    value="<?php echo $doctor->getdet_by_docID($doc_id, 'FirstName'); ?>">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="lastname4" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="Lastname" placeholder="Last name"
                                    value="<?php echo $doctor->getdet_by_docID($doc_id, 'LastName'); ?>">
                            </div>
                        </div>

                        <div class=" row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000" id="Tel"
                                    value="<?php echo $doctor->getdet_by_docID($doc_id, 'Telphone'); ?>">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address"
                                    value="<?php echo $doctor->getdet_by_docID($doc_id, 'Address'); ?>">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputDesignation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="Designation" placeholder="Designation"
                                    value="<?php echo $doctor->getdet_by_docID($doc_id, 'Designation'); ?>">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputNIC" class="form-label">NIC</label>
                                <input type="text" class="form-control" id="NIC" placeholder="NIC"
                                    value="<?php echo $doctor->getdet_by_docID($doc_id, 'NIC'); ?>">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Gender</label>
                                <select id="Gender" class="form-select">
                                    <option <?php if ($gendar == "Male") {
                                        echo "selected";
                                    } ?>>Male</option>
                                    <option <?php if ($gendar == "Female") {
                                        echo "selected";
                                    } ?>>Female</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div><br>
                        <button type="button" id="updoc_btn" class="btn btn-primary">Update</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <script>
            $(document).ready(function () {
                $("#updoc_btn").click(function () {
                    $.post(
                        "actions/update_doc.php",
                        {
                            doc_id: <?php echo $doc_id; ?>,
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