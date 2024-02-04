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
                                <option>Tablet</option>
                                <option>Cream</option>
                                <option>Syrup</option>
                                <option>Powder</option>
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
                                <option>ML</option>
                                <option>tablets</option>
                                <option>G</option>
                                <option>MG</option>
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

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

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