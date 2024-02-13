<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Drugs</a></li>
                            <li class="breadcrumb-item active">Drugs List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Drugs List</h4>
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
                                            <th>Drug ID</th>
                                            <th>Medicinal name</th>
                                            <th>Brand name</th>
                                            <th>Batch no</th>
                                            <th>Qty</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        include('dbconn.php');
                                        $sql_getsup = "SELECT * FROM supplier";
                                        $res_getsup = mysqli_query($conn, $sql_getsup);
                                        while ($row_sup = mysqli_fetch_array($res_getsup)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row_sup['Supplier_Id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row_sup['CompanyName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row_sup['Contact_Person_Name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row_sup['ContactNumber']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row_sup['Email']; ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="action-icon btn_edit"
                                                        data-bs-target="#full-width-modal" data-bs-toggle="modal"> <i
                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
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