 <!-- App favicon -->
 <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Theme Config Js -->
<script src="assets/js/hyper-config.js"></script>

<!-- App css -->
<link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Doctors</a></li>
                        <li class="breadcrumb-item active">Add Doctor</li>
                    </ol>
                </div>
                <h4 class="page-title">Add New Doctor</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Add new doctor form -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form>
                    <div class="row g-2">
                        <div class="mb-3 col-md-4">
                            <label for="inputTitlee" class="form-label">Select title</label>
                            <select id="Title" class="form-select">
                                <option>Dr.</option>
                                <option>Prof.</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="firstname4" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="Firstname" placeholder="First Name">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="lastname4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="Lastname" placeholder="Last name">
                        </div>
                    </div>
                                
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Telephone</label>
                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000-0000000" id="Tel">
                            <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                    </div>
                                
                    <div class="row g-2">
                        <div class="mb-3 col-md-4">
                            <label for="inputDesignation" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="Designation" placeholder="Designation">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputNIC" class="form-label">NIC</label>
                            <input type="text" class="form-control" id="NIC" placeholder="NIC">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputGender" class="form-label">Gender</label>
                            <select id="Gender" class="form-select">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <div id="result"></div>
                        </div>
                    </div><br>
                    <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                    <button type="submit" class="btn btn-primary">Reset</button>
                </form>
                <!-- end add new doctor form -->
            </div> <!-- end row-->
        </div>
</div> <!-- container -->

 <!-- Vendor js -->
 <script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<script>
    $(document).ready(function(){
        $("#adddoc_btn").click(function(){
            $.post(
                "actions/add_doc.php",
                {
                    title:$('#Title').val(),
                    firstname:$('#Firstname').val(),
                    lastname:$('#Lastname').val(),
                    tel:$('#Tel').val(),
                    address:$('#Address').val(),
                    designation:$('#Designation').val(),
                    nic:$('#NIC').val(),
                    gender:$('#Gender').val(),
                },
                function(data){
                    $('#result').html(data);
                });

                });
        });

</script>

</div> <!-- content -->