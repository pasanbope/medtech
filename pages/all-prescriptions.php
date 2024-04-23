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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                            <li class="breadcrumb-item active">View Prescription</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Today Prescription - <?php echo date('Y-m-d'); ?></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="hoverable-rows-preview">
                                <div class="table-responsive-sm">
                                    <table class="table table-hover table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Prescription ID</th>
                                                <th>Appoinment ID</th>
                                                <th>Patient</th>
                                                <th>Doctor</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Description</th>
                                                <th>Illness</th>
                                                <th>Test</th>
                                                <th>Is Issued</th>
                                            </tr>
                                        </thead>
                                        <a href="#">
                                            <?php
                                            // Include the Prescription class file
                                            include 'class/prescription.php';

                                            // Create an instance of the Prescription class
                                            $prescription = new Prescription();
                                            $prescription->list_pres_master();
                                            ?>
                                        </a>
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
                            <label for="inputGender" class="form-label">Catogary</label>
                            <select id="inputGender" class="form-select">
                                <option>Tablet</option>
                                <option>Cream</option>
                                <option>Syrup</option>
                                <option>Powder</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="inptMedName" class="form-label">Medicinal name</label>
                            <input type="text" class="form-control" id="inptMedName" placeholder="Medicinal name">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="inptBrandName" class="form-label">Brand name</label>
                            <input type="text" class="form-control" id="inptBrandName" placeholder="Brand name">
                        </div>

                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-4">
                            <label for="example-number" class="form-label">Re Order Level</label>
                            <input class="form-control" id="example-number" type="number" name="number">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="inputGender" class="form-label">Measurement Type</label>
                            <select id="inputGender" class="form-select">
                                <option>ML</option>
                                <option>tablets</option>
                                <option>G</option>
                                <option>MG</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="example-number" class="form-label">Selling Price(Rs)</label>
                            <input class="form-control" id="example-number" type="number" name="number">
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