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
                                            <th>Action</th>
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


<!-- Full width modal content -->
<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fullWidthModalLabel">Edit data</h4>
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
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-4">
                            <label for="example-number" class="form-label">Age</label>
                            <input class="form-control" id="example-number" type="number" name="number">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputNIC" class="form-label">NIC</label>
                            <input type="number" class="form-control" id="inputNIC" placeholder="NIC">
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
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--End Full width modal content -->