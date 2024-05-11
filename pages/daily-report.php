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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">MedTech</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Reports</a></li>
                            <li class="breadcrumb-item active">Daily Report</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Daily Report</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <button type="button" id="getrep_btn" class="btn btn-primary">Get</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="result">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Total Doctor Charge</td>
                                        <td>Rs. 0</td>
                                    </tr>
                                    <tr>
                                        <td>Total Drug Charge</td>
                                        <td>Rs. 0</td>
                                    </tr>
                                    <tr>
                                        <td>Total Drug Cost</td>
                                        <td>Rs. 0</td>
                                    </tr>
                                    <tr>
                                        <td>Total Drug Profit</td>
                                        <td>Rs. 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <tbody>
                                    <tr>
                                        <td>Number of Patients</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Doctors</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

<script>
    $(document).ready(function () {
        $("#getrep_btn").click(function () {

            $.post(
                "actions/get_day_report.php",
                {
                    date: $('#datee').val(),

                },
                function (data) {
                    $('#result').html(data);
                });

        });
    });
</script>