

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Appoinment</a></li>
                            <li class="breadcrumb-item active">New Appoinment</li>
                        </ol>
                    </div>
                    <h4 class="page-title">New Appoinment</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="md-3 col-md-4">
                                <label for="inputGender" class="form-label">Select Doctor</label>
                                <select class="form-control select2" data-toggle="select2">
                                    <option>Select</option>
                                    <optgroup>
                                        <option value="AK">Dr.Suranjaya</option>
                                        <option value="HI">Dr.Narada</option>
                                    </optgroup>
                                </select> 
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-today-highlight="true" data-date-container="#datepicker1">
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Select Time</label>
                                <select id="inputGender" class="form-select">
                                    <option>Morning</option>
                                    <option>Evening</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
</div> <!-- content -->

