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
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table id="datatable-buttons"
                                                        class="table table-striped dt-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>GRN ID</th>
                                                                <th>Order Id</th>
                                                                <th>Drug</th>
                                                                <th>Batch No</th>
                                                                <th>Manufacture Date</th>
                                                                <th>Expire Date</th>
                                                                <th>Rate</th>
                                                                <th>Purchased Price</th>
                                                                <th>Quantity</th>
                                                                <th>Total Price(Rs)</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <?php

                                                        include 'class/drug.php';


                                                        $drug = new Drug();
                                                        $drug->list_grn();
                                                        ?>
                                                    </table>
                                                </div>
                                            </div> <!-- end preview-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div class="tab-content">
                                            <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table id="datatable-buttons"
                                                        class="table table-striped dt-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>GRN ID</th>
                                                                <th>Order Id</th>
                                                                <th>Drug</th>
                                                                <th>Batch No</th>
                                                                <th>Manufacture Date</th>
                                                                <th>Expire Date</th>
                                                                <th>Rate</th>
                                                                <th>Purchased Price</th>
                                                                <th>Quantity</th>
                                                                <th>Total Price(Rs)</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $drug->list_grn();
                                                        ?>
                                                    </table>
                                                </div>
                                            </div> <!-- end preview-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These
                                        classes control the overall
                                        appearance, as well as the showing and hiding via CSS transitions. You can
                                        modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go
                                        within the <code>.accordion-body</code>, though the transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
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