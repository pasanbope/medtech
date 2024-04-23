<?php
// Include the Prescription class file
include 'class/prescription.php';

// Create an instance of the Prescription class
$prescription = new Prescription();
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pharmacy</a></li>
                            <li class="breadcrumb-item active">Prescription Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Prescription Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="bordered-color-table-preview">
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered border-primary table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Patient</th>
                                                <th>Doctor</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                $patient_id = $prescription->getPres_Master_by_PresId($pres_id, 'Patient_Id');
                                                echo $prescription->get_pat_pres($patient_id);
                                                ?>
                                                </td>
                                                <td><?php
                                                $doc_id = $prescription->getPres_Master_by_PresId($pres_id, 'Doctor_Id');
                                                echo $prescription->get_doc_pres($doc_id);
                                                ?></td>
                                                <td><?php echo $prescription->getPres_Master_by_PresId($pres_id, 'P_Date'); ?>
                                                </td>
                                                <td><?php echo $prescription->getPres_Master_by_PresId($pres_id, 'P_Time'); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="bordered-color-table-preview">
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered border-primary table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Illness</th>
                                                <th>Test</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td><?php echo $prescription->getPres_Master_by_PresId($pres_id, 'Illness'); ?>
                                                </td>
                                                <td><?php echo $prescription->getPres_Master_by_PresId($pres_id, 'Test'); ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th colspan="3">
                                                    Description
                                                </th>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <?php echo $prescription->getPres_Master_by_PresId($pres_id, 'P_Description'); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="hoverable-rows-preview">
                                <div class="table-responsive-sm">
                                    <table class="table table-hover table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Drug</th>
                                                <th>Batch</th>
                                                <th>Quantity</th>
                                                <th>Frequency</th>
                                                <th>Remark</th>
                                                <th>Advice</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $prescription->list_pres_detail_pharmacy($pres_id);
                                        ?>
                                    </table>
                                </div>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                        <h6 class="font-13 mt-3">Billing Info</h6>
                        <form>
                            <div class="row gy-2 gx-2 align-items-center">
                                <div class="col-auto">
                                    <label class="" for="inlineFormInput">Name</label>
                                    <input type="text" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Jane Doe">
                                </div>
                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup">Username</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup">Username</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup">&nbsp; </label>
                                    <div class="input-group mb-2">
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card body-->



                </div>
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