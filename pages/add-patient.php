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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">MedTech</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                            <li class="breadcrumb-item active">Add Patient</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add New Patient</h4>
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
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="firstname4" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="lastname4" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last name">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000" id="Tel" placeholder="Telephone Number">
                                <span class="font-13 text-muted">e.g "771234567"</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Birth Day</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="Bday"
                                        placeholder="Birth Day">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
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

                        <button type="button" id="addpat_btn" class="btn btn-primary">Register</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->



        <script>
            $(document).ready(function () {
                $("#addpat_btn").click(function () {
                    $.post(
                        "actions/add_pat.php",
                        {
                            title: $('#Title').val(),
                            firstname: $('#firstname').val(),
                            lastname: $('#lastname').val(),
                            tel: $('#Tel').val(),
                            address: $('#Address').val(),
                            birthday: $('#Bday').val(),
                            gender: $('#Gender').val(),
                        },
                        function (data) {
                            $('#result').html(data);
                        });

                });
            });

        </script>

    </div> <!-- content -->