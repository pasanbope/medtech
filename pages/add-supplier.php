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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Supplire</a></li>
                            <li class="breadcrumb-item active">New Supplier</li>
                        </ol>
                    </div>
                    <h4 class="page-title">New Supplier</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Company Name">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label">Contact Person Name</label>
                                <input type="text" class="form-control" id="inputConName"
                                    placeholder="Contact Person Name" placeholder="Contact Person Name">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000" id="ConNum" placeholder="Contact Number">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="example-email" class="form-label">Email</label>
                                <input type="email" id="email" name="example-email" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div>

                        <br>

                        <button type="button" id="addsup_btn" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
            <script>
                $(document).ready(function () {
                    $("#addsup_btn").click(function () {
                        $.post(
                            "actions/add_sup.php",
                            {
                                CompanyName: $('#inputName').val(),
                                ContactPersonName: $('#inputConName').val(),
                                Contactnumber: $('#ConNum').val(),
                                Email: $('#email').val(),
                            },
                            function (data) {
                                $('#result').html(data);
                            });

                    });
                });

            </script>
        </div> <!-- content -->