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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Doctor Schedule</a></li>
                            <li class="breadcrumb-item active">Schedule List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Schedule List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="md-3 col-md-2">
                                <label for="inputDoc" class="form-label">Select Doctor</label>
                                <select class="form-control select2" data-toggle="select2" id="doc">
                                    <option>Select</option>
                                    <optgroup>
                                        <?php
                                        $doctor->select_doctor();
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="tab-content">
                            <div class="tab-pane show active" id="hoverable-rows-preview">
                                <div class="table-responsive-sm" id="result">
                                    <table class="table table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Schedule ID</th>
                                                <th>Date</th>
                                                <th>Doctor</th>
                                                <th>Sched Time</th>
                                                <th>Patient Count</th>
                                                <th>Is Enable</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->


    </div> <!-- container -->

</div> <!-- content -->

<script>
    $(document).ready(function () {
        $("#doc").change(function () {

            $.post(
                "actions/view_doc_shed_action.php",
                {
                    InputDoc: $('#doc').val(),

                },
                function (data) {
                    $('#result').html(data);
                });

        });
    });
</script>