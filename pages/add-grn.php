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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">GRN</a></li>
                        <li class="breadcrumb-item active">Add GRN</li>
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
                            <label for="selectdr" class="form-label">Select Supplier</label>
                            <select class="form-control select2" data-toggle="select2">
                                <option>Select </option>
                                    <option value="CA">Mr.Sajith Premadasa</option>
                                    <option value="NV">Mr.Namal Rajapaksha</option>
                                    <option value="OR">Mr.Mahinda Rajapaksha</option>
                                    <option value="WA">Mr.Anura Kumara</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="selectdr" class="form-label">Select Product</label>
                            <select class="form-control select2" data-toggle="select2">
                                <option>Select </option>
                                    <option value="CA">Adderall</option>
                                    <option value="NV">Brilinta</option>
                                    <option value="OR">Clindamycin</option>
                                    <option value="WA">Prednisone</option>
                            </select>
                        </div>                                                 

                        <div class="mb-3 col-md-4">
                            <label for="example-number" class="form-label">Batch Number</label>
                            <input class="form-control" id="example-number" type="number" name="number">
                        </div>

                    </div>
                                
                    <div class="row g-2">
                        <div class="mb-3 col-md-6 position-relative" id="datepicker1">
                            <label class="form-label">Manufacture Date</label>
                            <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1">
                        </div>

                        <div class="mb-3 col-md-6 position-relative" id="datepicker2">
                            <label class="form-label">Expire Date</label>
                            <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker2">
                        </div>
                    </div>

                    <div class="row g-2">

                        <div class="mb-3 col-md-6">
                            <label for="example-number" class="form-label">Quantity</label>
                            <input class="form-control" id="example-number" type="number" name="number">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="example-number" class="form-label">Purchase Price</label>
                            <div class="input-group flex-nowrap"> 
                                <span class="input-group-text" id="basic-addon1">Rs</span>
                                <input class="form-control" id="example-number" type="number" name="number">    
                        </div>
                        </div>
                    </div>
                                
                    <br>

                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="submit" class="btn btn-primary">Reset</button>
                </form>
                <!-- end add new doctor form -->
            </div> <!-- end row-->
        </div>
</div> <!-- content -->

<div class="card">
<div class="card-body">
    <table class="table table-hover table-centered mb-0">
        <thead class="table-dark">
            <tr>
                <th>Supplier Name</th>
                <th>Product</th>
                <th>Batch Number</th>
                <th>Manufacture Date</th>
                <th>Expire Date</th>
                <th>Quantity</th>
                <th>Purchase Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mr.Sajith Premadasa</td>
                <td>Brilinta</td>
                <td>12</td>
                <td>12/05/2023</td>
                <td>12/05/2027</td>
                <td><span class="badge bg-primary">82 Pcs</span></td>
                <td>Rs.5500</td>
            </tr>
            <tr>
                <td>Mr.Sajith Premadasa</td>
                <td>Brilinta</td>
                <td>12</td>
                <td>12/05/2023</td>
                <td>12/05/2027</td>
                <td><span class="badge bg-primary">82 Pcs</span></td>
                <td>Rs.5500</td>
            </tr>
            <tr>
                <td>Mr.Sajith Premadasa</td>
                <td>Brilinta</td>
                <td>12</td>
                <td>12/05/2023</td>
                <td>12/05/2027</td>
                <td><span class="badge bg-primary">82 Pcs</span></td>
                <td>Rs.5500</td>
            </tr>
            <tr>
                <td>Mr.Sajith Premadasa</td>
                <td>Brilinta</td>
                <td>12</td>
                <td>12/05/2023</td>
                <td>12/05/2027</td>
                <td><span class="badge bg-primary">82 Pcs</span></td>
                <td>Rs.5500</td>
            </tr>
        </tbody>
    </table>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>
</div>
</div>