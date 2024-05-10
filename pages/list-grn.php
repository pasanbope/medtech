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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">GRN</a></li>
                            <li class="breadcrumb-item active">GRN List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">GRN List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <?php
                            include 'class/drug.php';
                            $drug = new Drug();
                            include "dbconn.php";
                            $grnpg = 1;
                            $sql_grn = "SELECT * from grn_master";
                            $res_grn = mysqli_query($conn, $sql_grn);
                            while ($row_grn = mysqli_fetch_array($res_grn)) {
                                $orderId = $row_grn['Order_Id'];
                                $date = $row_grn['Date'];
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $grnpg; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $grnpg; ?>" aria-expanded="false"
                                            aria-controls="collapse<?php echo $grnpg; ?>">
                                            <?php echo "Order Id :" . $orderId . " - " . $date; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $grnpg; ?>" class="accordion-collapse collapse"
                                        aria-labelledby="heading<?php echo $grnpg; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="hoverable-rows-preview">
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-centered mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>GRN ID</th>
                                                                    <th>Drug</th>
                                                                    <th>Batch No</th>
                                                                    <th>Expire Date</th>
                                                                    <th>Rate</th>
                                                                    <th>Purchased Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total Price(Rs)</th>
                                                                </tr>
                                                            </thead>
                                                            <?php


                                                            $drug->list_grn_by_order($orderId);
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div> <!-- end preview-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $grnpg = $grnpg + 1;
                            } ?>
                        </div>

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