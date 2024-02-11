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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medtech</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                        <li class="breadcrumb-item active">Add Drug Category</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Drug Category</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="card">
        <div class="card-body">
            <div class="row">
                <form>
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="firstname4" class="form-label">Drug Category</label>
                            <input type="text" class="form-control" id="Category"
                                placeholder="New Category">
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <div id="result"></div>
                    </div>
            </div><br>

            <button type="button" id="addcat_btn" class="btn btn-primary">Add</button>
            <button type="submit" class="btn btn-primary">Reset</button>
            </form>
            <!-- end add new doctor form -->
        </div> <!-- end row-->
    </div>
</div> <!-- container -->

<script>
        $(document).ready(function () {
            $("#addcat_btn").click(function () {
                $.post(
                    "actions/add_cat.php",
                    {
                        category: $('#Category').val(),
                    },
                    function (data) {
                        $('#result').html(data);
                    });

            });
        });

    </script>

</div><!-- content -->