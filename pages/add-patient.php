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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                        <li class="breadcrumb-item active">Add Patient</li>
                    </ol>
                </div>
                <h4 class="page-title">Add New Patient</h4>
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
                            <select id="inputTitle" class="form-select">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="firstname4" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname4" placeholder="First Name">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="lastname4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname4" placeholder="Last name">
                        </div>
                    </div>
                                
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Telephone</label>
                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000-0000000">
                            <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                        </div>
                    </div>
                                
                    <div class="row g-2">
                        <div class="mb-3 col-md-4">
                            <label for="example-number" class="form-label">Age</label>
                            <input class="form-control" id="example-number" type="number" name="number">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputNIC" class="form-label">NIC</label>
                            <input type="number" class="form-control" id="inputNIC" placeholder="NIC">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputGender" class="form-label">Gender</label>
                            <select id="inputGender" class="form-select">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div><br>

                    <button type="submit" class="btn btn-primary">Register</button>
                    <button type="submit" class="btn btn-primary">Reset</button>
                </form>
                <!-- end add new doctor form -->
            </div> <!-- end row-->
        </div>
</div> <!-- container -->

</div> <!-- content -->