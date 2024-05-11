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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Doctors</a></li>
                            <li class="breadcrumb-item active">Doctors List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Doctors List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Doctor ID</th>
                                            <th>Name</th>
                                            <th>Telephone</th>
                                            <th>Designation</th>
                                            <th>NIC</th>
                                        </tr>
                                    </thead>
                                    <?php

                                    $doctor->list_doctor();
                                    ?>
                                </table>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->