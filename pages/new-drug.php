 <!-- Vendor js -->
 <script src="assets/js/vendor.min.js"></script>
    
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
                            <li class="breadcrumb-item active">Add New Drugs</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add New Drugs</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Catogary</label>
                                <select id="inputCat" class="form-select">
                                    <option valuue="0">Select Category</option>
                                    <?php
                                    include('dbconn.php');
                                    $sql_cat = "select * from drug_category";
                                    $res_cat = mysqli_query($conn, $sql_cat);
                                    while ($row_cat = mysqli_fetch_array($res_cat)) {
                                        echo '<option value="' . $row_cat['Category_Id'] . '">' . $row_cat['Category'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="inptMedName" class="form-label">Medicinal name</label>
                                <input type="text" class="form-control" id="Medname" placeholder="Medicinal name">
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="inptBrandName" class="form-label">Brand name</label>
                                <input type="text" class="form-control" id="Brandname" placeholder="Brand name">
                            </div>

                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Re Order Level</label>
                                <input class="form-control" id="ReOrLevel" type="number" name="number">
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Measurement Type</label>
                                <select id="inputMeas" class="form-select">
                                    <option valuue="0">Select Measurement type</option>
                                    <?php
                                    $sql_mes = "select * from measurement_type";
                                    $res_mes = mysqli_query($conn, $sql_mes);
                                    while ($row_mes = mysqli_fetch_array($res_mes)) {
                                        echo '<option value="' . $row_mes['Measure_Id'] . '">' . $row_mes['Name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="example-number" class="form-label">Selling Price(Rs)</label>
                                <input class="form-control" id="SellPrice" type="number" name="number">
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result"></div>
                            </div>
                        </div>

                        <br>

                        <button type="button" id="adddrug_btn" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#adddrug_btn").click(function () {
                $.post(
                    "actions/add_drug.php",
                    {
                        Catogary: $('#inputCat').val(),
                        MedicinalName: $('#Medname').val(),
                        BrandName: $('#Brandname').val(),
                        ReOrderLevel: $('#ReOrLevel').val(),
                        MeasurementType: $('#inputMeas').val(),
                        SellingPrice: $('#SellPrice').val(),
                    },
                    function (data) {
                        $('#result').html(data);
                    });

            });
        });

    </script>
</div> <!-- content -->