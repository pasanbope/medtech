<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                                    <label class="" for="inlineFormInput">Drug Charge</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">Rs</div>
                                        <input type="text" value="<?php
                                        $drug_chargex = $prescription->get_total_drug_charge($pres_id);
                                        echo $drug_chargex;
                                        ?>" class="form-control" id="drug_charge">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup">Doctor Charge</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">Rs</div>
                                        <input type="text" value="<?php
                                        $doc_id = $prescription->getPres_Master_by_PresId($pres_id, 'Doctor_Id');
                                        $doc_charge = $doctor->getdet_by_docID($doc_id, 'Doc_charge');
                                        echo $doc_charge;
                                        ?>" class="form-control" id="doc_charge">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup">Total Charge</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">Rs</div>
                                        <input type="text" value="<?php echo $drug_chargex + $doc_charge; ?>"
                                            class="form-control" id="total">
                                    </div>
                                </div>


                                <input type="hidden" value="<?php echo $pres_id; ?>" class="form-control" id="pres_id">

                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup">&nbsp; </label>
                                    <div class="input-group mb-2">
                                        <button type="button" id="btn_bill" class="btn btn-primary mb-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mb-3 col-md-12">
                            <div id="result"></div>
                        </div>
                    </div> <!-- end card body-->



                </div>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->


</div> <!-- container -->

</div> <!-- content -->
<script>
    $(document).ready(function () {
        $("#btn_bill").click(function () {
            $.post(
                "actions/drug_bill.php",
                {
                    pres_id: $('#pres_id').val(),
                    drug_charge: $('#drug_charge').val(),
                    doc_charge: $('#doc_charge').val(),
                    total: $('#total').val(),
                },
                function (data) {
                    $('#result').html(data);
                });

        });
    });

</script>

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