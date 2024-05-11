<!-- Vendor js -->
<!-- <script src="assets/js/vendor.min.js"></script> -->
<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                                            <th>Re-Order Level</th>
                                            <th>Mesurement type</th>
                                            <th>Catagory</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    // Include the Patient class file
                                    include 'class/drug.php';

                                    // Create an instance of the Patient class
                                    $drug = new Drug();
                                    $drug->list_drug();
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