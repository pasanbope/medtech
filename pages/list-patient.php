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
                            <li class="breadcrumb-item active">Patients List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Patients</h4>
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
                                            <th>Patient ID</th>
                                            <th>Name</th>
                                            <th>Telephone</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    // Include the Patient class file
                                    include 'class/patient.php';

                                    // Create an instance of the Patient class
                                    $patient = new Patient();
                                    $patient->list_patient();
                                    ?>
                                </table>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->