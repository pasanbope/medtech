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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Supplier</a></li>
                            <li class="breadcrumb-item active">Supplier List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Supplier List</h4>
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
                                            <th>Supplier ID</th>
                                            <th>Company Name</th>
                                            <th>Contact Person Name</th>
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    // Include the Patient class file
                                    include 'class/supplier.php';

                                    // Create an instance of the Patient class
                                    $supplier = new Supplier();
                                    $supplier->list_supplier();
                                    ?>
                                </table>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div> <!-- container -->


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
                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Company Name">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label">Contact Person Name</label>
                                <input type="text" class="form-control" id="inputName"
                                    placeholder="Contact Person Name">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="example-email" class="form-label">Email</label>
                                <input type="email" id="example-email" name="example-email" class="form-control"
                                    placeholder="Email">
                            </div>
                        </div>

                        <br>

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